import requests
from bs4 import BeautifulSoup
from urllib.parse import urljoin
import socket
from concurrent.futures import ThreadPoolExecutor, as_completed
import argparse

# Configuration des en-têtes HTTP pour la requête
headers = {
    "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3"
}

common_ports = [21, 22, 23, 25, 53, 80, 123, 179, 443, 500, 587, 3306, 3389, 8080]

def fetch_url(url):
    try:
        return requests.get(url, headers=headers, timeout=5)
    except requests.RequestException as e:
        return None

def check_security_headers(url):
    default_headers = {
        'Content-Security-Policy': False,
        'X-Frame-Options': False,
        'X-XSS-Protection': False
    }
    try:
        response = fetch_url(url)
        if response:
            return {
                'Content-Security-Policy': 'Content-Security-Policy' in response.headers,
                'X-Frame-Options': 'X-Frame-Options' in response.headers,
                'X-XSS-Protection': 'X-XSS-Protection' in response.headers
            }
    except requests.RequestException as e:
        print(f"Error fetching security headers: {e}")

    return default_headers

def check_mixed_content(url):
    response = fetch_url(url)
    if response:
        soup = BeautifulSoup(response.text, 'html.parser')
        return any('http:' in tag['src'] for tag in soup.find_all(src=True) if tag['src'].startswith('http'))
    return False

def find_sensitive_files(url, files):
    found_files = []
    with ThreadPoolExecutor(max_workers=10) as executor:
        future_to_file = {executor.submit(fetch_url, urljoin(url, file)): file for file in files}
        for future in as_completed(future_to_file):
            file = future_to_file[future]
            response = future.result()
            if response and response.status_code == 200:
                found_files.append(file)
    return found_files

def scan_ports(url):
    ip = socket.gethostbyname(url.replace("http://", "").replace("https://", "").split('/')[0])
    open_ports = []
    with ThreadPoolExecutor(max_workers=10) as executor:
        futures = [executor.submit(scan_port, ip, port) for port in common_ports]
        for future in futures:
            port, is_open = future.result()
            if is_open:
                open_ports.append(port)
    return open_ports

def scan_port(ip, port):
    sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    sock.settimeout(1)
    result = sock.connect_ex((ip, port))
    sock.close()
    return port, result == 0

def check_sql_injection(url):
    vulnerabilities = []
    response = fetch_url(url)
    if response:
        soup = BeautifulSoup(response.text, 'html.parser')
        for form in soup.find_all('form'):
            action = form.get('action', '')
            inputs = {input.get('name'): '1\' OR \'1\'=\'1' for input in form.find_all('input') if input.get('name')}
            response = requests.post(urljoin(url, action), data=inputs, headers=headers, timeout=5)
            if response and "error in your SQL syntax" in response.text:
                vulnerabilities.append(action)
    return vulnerabilities

def check_xss_vulnerability(url):
    vulnerabilities = []
    response = fetch_url(url)
    if response:
        soup = BeautifulSoup(response.text, 'html.parser')
        for form in soup.find_all('form'):
            action = form.get('action', '')
            inputs = {input.get('name'): '<script>alert(1)</script>' for input in form.find_all('input') if input.get('name')}
            response = requests.post(urljoin(url, action), data=inputs, headers=headers, timeout=5)
            if response and "<script>alert(1)</script>" in response.text:
                vulnerabilities.append(action)
    return vulnerabilities

def calculate_score(results):
    score = 100
    security_headers = results.get('security_headers', {})
    
    if not security_headers.get('Content-Security-Policy', False):
        score -= 10
    if not security_headers.get('X-Frame-Options', False):
        score -= 10
    if not security_headers.get('X-XSS-Protection', False):
        score -= 10

    if results.get('mixed_content', False):
        score -= 20

    sensitive_files = results.get('sensitive_files', [])
    score -= 2.5 * len(sensitive_files)

    open_ports = results.get('open_ports', [])
    non_standard_ports = set(open_ports) - {80, 443}
    score -= 5 * len(non_standard_ports)

    if results.get('sql_injections', []):
        score -= 10
    if results.get('xss_vulnerabilities', []):
        score -= 10

    return 'A' if score > 90 else 'B' if score > 75 else 'C' if score > 60 else 'D' if score > 45 else 'E' if score > 30 else 'F'

def main_scan(url):
    print("Scanning:", url)
    with ThreadPoolExecutor() as executor:
        futures = {
            'security_headers': executor.submit(check_security_headers, url),
            'mixed_content': executor.submit(check_mixed_content, url),
            'sensitive_files': executor.submit(find_sensitive_files, url, [
                'robots.txt', '.git/', 'sitemap.xml', 'admin/', 'login/', 
                'wpadmin/', 'wp-config.php', '.htaccess', '.env', 'wp-admin.php'
            ]),
            'open_ports': executor.submit(scan_ports, url),
            'sql_injections': executor.submit(check_sql_injection, url),
            'xss_vulnerabilities': executor.submit(check_xss_vulnerability, url)
        }
        results = {key: future.result() for key, future in futures.items()}

    score = calculate_score(results)
    print("Security score:", score)

if __name__ == "__main__":
    parser = argparse.ArgumentParser(description="Scan a website for vulnerabilities.")
    parser.add_argument('--url', required=True, help="URL of the website to scan")
    args = parser.parse_args()
    main_scan(args.url)
