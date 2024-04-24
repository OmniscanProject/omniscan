<div class="bg-white flex flex-col items-center">
    <label for="company-website" class="text-3xl font-semibold leading-7 text-indigo-600">
        Testez & obtenez les vulnérabilités de votre site web
    </label>
    <div class="mt-5">
        <div
            class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
            <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">https://</span>
            <input type="text" name="company-website" id="company-website"
                class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                placeholder="www.example.com" />
            <button id="btnScan" onclick="startProgress()" class="ml-2 px-4 py-2 bg-indigo-600 text-white rounded-md">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </button>
        </div>
    </div>
    @include('components.progress-bar')
</div>

<script>
    function startProgress() {
        let btnScan = document.getElementById('btnScan');
        let progressBar = document.getElementById('progressBar');
        let progressElem = document.getElementById('progressElem');
        let score = document.getElementById('analyseScore');
        let width = 0;
        progressElem.style.display = "";
        score.style.display = "none";
        btnScan.disabled = true;
        btnScan.classList.add('animate-pulse');
        let interval = setInterval(function() {
            width += 1;
            progressBar.style.width = width + '%';
            progressBar.innerText = width + '%';
            if (width >= 100) {
                clearInterval(interval);
                progressElem.style.display = "none";
                score.style.display = "";
                progressBar.style.width = "0px";
                btnScan.disabled = false;
                btnScan.classList.remove('animate-pulse');
            }
        }, 100);
    }
</script>

<style>
    @keyframes pulse {
        0%,100% {
            transform: scale(1);
            opacity: 1;
        }

        50% {
            transform: scale(1.05);
            opacity: 0.8;
        }
    }

    .animate-pulse {
        animation: pulse 1s infinite;
    }
</style>
