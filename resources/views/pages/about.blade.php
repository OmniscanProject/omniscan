<x-app-layout>
    <div id="about-page" class="pt-10 md:pt-18 pb-24 md:pb-40 flex justify-center items-center bg-primary">
        <div class="mx-auto px-5 container">
            <x-header-page title="{{ __('About Us') }}" />


            <div class="flex flex-col md:flex-row justify-center gap-8 md:gap-12">
                <div class="left-side w-full md:w-1/2 bg-white rounded-3xl flex items-center justify-center">
                    <img src="{{ asset('assets/svg/about.svg') }}" alt="OmniScan - logo" class="w-3/4 h-max m-auto">
                </div>
                <div class="right-side px-4 md:px-0 w-full md:w-1/2">
                    <h2 class="text-lg md:text-2xl font-title text-white text-center">"{{ __('Making cybersecurity accessible to everyone') }}"</h2>
                    <div class="content">
                        <div class="flex flex-col md:flex-row gap-6 md:gap-12 items-center justify-center mt-6 md:mt-10">
                            <p class="text-white text-left">"{{ __('OmniScan, a start-up founded to democratize cybersecurity, facilitates access to professional online protection tools.') }}"</p>
                            <p class="text-white text-left">{{ __('In 2024, digital threats intensify. OmniScan responds to this growing challenge with innovative and effective solutions.') }}</p>
                        </div>
                        <div class="mt-6 md:mt-10">
                            <p class="text-white mt-4 text-left">{{ __('Born to simplify business security, OmniScan has developed an intuitive and effective web vulnerability scanner, making digital protection accessible to everyone. Our flexible subscriptions allow each user to choose the level of security suited to their needs.') }}</p>
                            <p class="text-white mt-4 text-left">{{ __('We stay at the forefront of technology, adapting our services to emerging threats and educating our customers on the importance of cybersecurity. At OmniScan, we believe that online security is an essential right. Join us to secure your digital space with efficiency and simplicity.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

