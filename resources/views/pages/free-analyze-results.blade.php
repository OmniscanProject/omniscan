@php
    $score = $_GET['score'];
    $url = $_GET['url'];
@endphp

<x-app-layout>
    <div id="free-analyze-result-page" class="pt-10 md:pt-18 pb-24 md:pb-40 flex justify-center items-center bg-primary">
        <div class="px-5 mx-auto container min-h-screen">
            <x-header-page title="{!! __('Analysis Result') !!}" />

            <div class="content flex flex-col md:flex-row justify-between gap-10">
                <div class="text-center bg-secondary rounded-md p-10 flex justify-center items-center">
                    <p class="">{{ __('Your site has been evaluated and received the following cyberscore :') }}</p>
                </div>
                <div class="bg-secondary p-10 text-6xl font-bold rounded-md flex justify-center items-center">
                    <span class="text-green-500 h-max">{{ $score }}</span>
                </div>
                <div class="text-center bg-secondary rounded-md p-10 flex-col justify-center items-center">
                    <p class="mb-8">{{ __('Votre note reflète une analyse complète basée sur divers critères, incluant l\'analyse des ports réseau, l\'accès à des fichiers sensibles, ou encore la présence de certifications de sécurité.') }}</p>
                    <p class="">{{ __('Pour explorer les détails des vulnérabilités de votre site web et recevoir des recommandations personnalisées pour les corriger, nous vous invitons à souscrire à l\'une de nos offres. Cela vous permettra d\'accéder à des rapports détaillés et de renforcer la sécurité de votre site de manière proactive.') }}</p>
                    <a href="{{ route('homepage') }}/#products-section" class="block pt-4" title="{{ __('See the offers') }}">{{ __('See the offers') }}</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

