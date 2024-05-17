<header id="header" class="bg-white shadow z-20 relative">
    <div class="laptop hidden md:flex px-5 container mx-auto items-center justify-between h-full">
        <a href="/">
            @if (request()->is('/') || request()->routeIs('homepage'))
                <h1>
            @endif
                <x-application-logo class="fill-current"/>
            @if (request()->is('/') || request()->routeIs('homepage'))
                </h1>
            @endif
        </a>
        <nav id="menu" class="hidden md:flex justify-center items-center">
            <div class="hidden md:flex md:space-x-10 lg:space-x-20">
                <a href="{{ url('/') }}" class="text-black py-2">{{ __('Home') }}</a>
                <a href="{{ route('about') }}" class="text-black py-2">{{ __('About Us') }}</a>
                <a href="{{ route('services') }}" class="text-black  py-2">{{ __('Services') }}</a>
            </div>
        </nav>
        @include('layouts.header.navigation')
   </div>

    <div class="mobile flex md:hidden py-5 px-5 container mx-auto items-center justify-between h-full">
        <a href="/">
            @if (request()->is('/') || request()->routeIs('homepage'))
                <h1>
            @endif
                <x-application-logo />
            @if (request()->is('/') || request()->routeIs('homepage'))
                </h1>
            @endif
        </a>
        <button data-trigger="menu-mobile" aria-label="button" class="md:hidden pt-1">
            <img src="{{ asset('assets/svg/burger.svg') }}" alt="burger" class="fill-current pointer-events-none">
        </button>
    </div>
    <nav data-target="menu-mobile" id="menu-mobile" class="absolute w-full shadow rounded-b-xl z-10 bg-white">
        <div class="px-6 pt-2 pb-4 flex flex-col justify-center items-start">
            <a href="{{ url('/') }}" class="text-black py-2">{{ __('Home') }}</a>
            <a href="{{ route('about') }}" class="text-black py-2">{{ __('About Us') }}</a>
            <a href="{{ route('services') }}" class="text-black  py-2">{{ __('Services') }}</a>
            @include('layouts.header.navigation')
        </div>
    </nav>
</header>



<script>
    function toggleMobileMenu() {
        var menu = document.getElementById('mobile-menu');
        if (menu.hidden) {
            menu.hidden = false;
        } else {
            menu.hidden = true;
        }
    }
</script>
