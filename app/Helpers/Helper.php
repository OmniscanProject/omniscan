<?php
namespace App\Helpers;
  
class Helper
{

    public static function transformToSlug(string $text): string
    {
        // Check if it is empty
        if(!$text) {
            return null;
        }

        // Strip html tags
        $text = strip_tags($text);
        // Replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        // Transliterate
        setlocale(LC_ALL, 'en_US.utf8');
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        // Remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
        // Trim
        $text = trim($text, '-');
        // Remove duplicate -
        $text = preg_replace('~-+~', '-', $text);
        // Lowercase
        $text = strtolower($text);
        // Return result

        return $text;
    }

    public static function ping($url): string {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        $validCodes = [200, 301, 302, 303, 304, 307, 308, 401, 403, 405];
        if (in_array($httpcode, $validCodes)) {
            return "available";
        } elseif ($httpcode === 500) {
            return "unavailable";
        } elseif($httpcode === 404) {
            return "unknown";
        } else {
            return "unavailable";
        }
    }
}