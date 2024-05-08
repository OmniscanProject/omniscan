<footer id="footer" class="bg-white px-5 container mx-auto py-10">
    <div class="contact-container mb-10">
        <ul class="flex flex-col md:flex-row items-center justify-center gap-2 md:gap-10">
            <li class="text-md font-bold flex align-center items-center mb-3 md:mb-0">
                <x-coolicon-chat class="h-6 md:h-8" />
                <p class="ml-2">{{ __('Contact Us') }} : </p>
            </li>
            <li class="text-md font-bold flex align-center items-center">
                <x-coolicon-phone class="h-6 md:h-8" />
                <a href="tel:{{ config('app.phone') }}" class="ml-2">{{ config('app.phone') }}</a>
            </li>
            <li class="text-md font-bold flex align-center items-center">
                <x-coolicon-mail class="h-6 md:h-8" />
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
        </ul>

    </div>

    @include('layouts.footer.copyright')
</footer>

