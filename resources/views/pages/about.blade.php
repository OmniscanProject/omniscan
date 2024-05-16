<x-app-layout>
    <div id="about-page" class="pt-10 md:pt-18 pb-24 md:pb-40 flex justify-center items-center bg-primary">
        <div class="mx-auto px-5 container">
            <x-header-page title="{{ __('About Us') }}" />


            <div class="flex flex-col md:flex-row items-start justify-center gap-8 md:gap-12">
                <div class="left-side w-full md:w-1/2">
                    <img src="{{ asset('assets/svg/squared-img.svg') }}" alt="OmniScan - logo" class="w-full">
                </div>
                <div class="right-side w-full md:w-1/2">
                    <h2 class="text-lg md:text-2xl font-title text-white text-center">"{{ __('About us') }}"</h2>
                    <div class="content mt-4 md:mt-8">
                        <p class="text-md text-white">{{ __('We are a team of passionate and experienced professionals who are dedicated to helping you to find the best products for your needs.') }}</p>
                        <p class="text-md text-white mt-4">{{ __('We are a team of passionate and experienced professionals who are dedicated to helping you to find the best products for your needs.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

