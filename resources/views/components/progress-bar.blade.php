<div id="progressElem" style="display: none; width: 100%; text-align: center">
    <h2>Analyse de votre site en cours...</h2>
    <div class="w-2/5 bg-gray-200 rounded-full dark:bg-gray-700">
        <div id="progressBar"
            class="bg-indigo-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
            style="width: 0%"></div>
    </div>
</div>
<div id="analyseScore" style="display: none;">
    <h2>Analyse terminé</h2>
    <h2>Score du site : A</h2>
</div>


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
