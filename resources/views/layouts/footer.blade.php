<footer id="footer" class="bg-secondary">
    <div class="contact-container border-b-2 border-black py-8">
        <div class="contact-container px-5 container mx-auto">
            <ul class="flex flex-col md:flex-row items-center justify-center gap-3 md:gap-10">
                <li class="text-md font-semibold flex align-center items-center mb-3 md:mb-0 ml-1 md:ml-3">
                    <img class="h-5 md:h-7" src="{{ asset('assets/svg/chat.svg') }}">
                    <p class="ml-3">{{ __('Contact Us') }} : </p>
                </li>
                <li class="text-md flex align-center items-center mb-3 md:mb-0">
                    <img class="h-3 md:h-5" src="{{ asset('assets/svg/mail.svg') }}">
                    <a href="mailto:{{ config('app.mail') }}" class="ml-3">{{ config('app.mail') }}</a>
                </li>
                <li class="text-md flex align-center items-center">
                    <img class="h-4 md:h-6" src="{{ asset('assets/svg/phone.svg') }}">
                    <a href="tel:{{ config('app.phone') }}" class="ml-3">{{ config('app.phone') }}</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="informations-container px-5 container mx-auto pt-10 pb-4 md:pb-6">
        <div class="links-container mb-5">
            <ul class="flex flex-col md:flex-row items-center justify-center gap-3 md:gap-10">
                <li class="text-sm flex align-center items-center">
                    <a href="{{ route('about') }}">{{ __('About Us') }}</a>
                </li>
                <li class="text-sm flex align-center items-center">
                    <a href="{{ route('cgv') }}">{{ __('CGV') }}</a>
                </li>
                <li class="text-sm flex align-center items-center">
                    <a href="{{ route('legal-notices') }}">{{ __('Legal notices') }}</a>
                </li>
                <li class="text-sm flex align-center items-center">
                    <a href="{{ route('privacy') }}">{{ __('Privacy Policy') }}</a>
                </li>
                <li class="text-sm flex align-center items-center">
                    <a href="{{ route('rgpd') }}">{{ __('RGPD') }}</a>
                </li>
            </ul>
        </div>

        @include('layouts.footer.copyright')
    </div>
</footer>

