<footer id="footer" class="bg-secondary px-5 container mx-auto py-8">
    <div class="contact-container mb-10 border-b-2 border-black">
        <ul class="flex flex-col md:flex-row items-center justify-center gap-5 md:gap-5 mb-5">
            <li class="text-md font-bold flex align-center items-center mb-3 md:mb-0">
                <img class="h-5 md:h-7" src="{{ asset('assets/svg/mail.svg') }}">
                <p class="ml-2">mail@omniscan.com</p>
            </li>
            <li class="text-md font-bold flex align-center items-center">
                <img class="h-6 md:h-8" src="{{ asset('assets/svg/phone.svg') }}">
                <a href="tel:{{ config('app.phone') }}" class="ml-2">{{ config('app.phone') }}</a>
            </li>
            <li class="text-md font-bold flex align-center items-center">
                <img class="h-6 md:h-8" src="{{ asset('assets/svg/chat.svg') }}">
                <a href="mailto:{{ config('app.mail') }}" class="ml-2">{{ config('app.mail') }}</a>
            </li>
        </ul>
    </div>
    <div class="links-container mb-5">
        <ul class="flex flex-col md:flex-row items-center justify-center gap-1 md:gap-10">
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
</footer>

