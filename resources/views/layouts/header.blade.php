<header id="header" class="bg-white shadow z-20 relative">
    <div class="laptop hidden md:flex px-5 container mx-auto items-center justify-between h-full">
        @if (request()->is('/') || request()->routeIs('homepage'))
            <h1>
        @endif
            <x-application-logo/>
        @if (request()->is('/') || request()->routeIs('homepage'))
            </h1>
        @endif
        <nav id="menu" class="hidden md:flex container mx-auto px-6 py-3 justify-center items-center">
            <div class="hidden md:flex space-x-10">
                <a href="{{ url('/') }}" class="text-gray-950 py-2 font-semibold">{{ __('Home') }}</a>
                <a href="#about" class="text-gray-950 py-2 font-semibold">{{ __('About Us') }}</a>
                <a href="#services" class="text-gray-950  py-2 font-semibold">{{ __('Services') }}</a>
            </div>
            {{-- <div class="hidden md:flex space-x-4">
                @if (!Auth::guard('customer')->user())
                <a href="{{ url('/register') }}" class="text-gray-950 py-2 font-semibold">Inscription</a>
                @endif
                @if (!Auth::guard('customer')->user())
                    <a href="{{ url('/login') }}" class="text-gray-950 py-2 font-semibold">Connexion</a>
            @endif
            @if (Auth::guard('customer')->user())
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="text-gray-950  py-2 font-semibold"
                    :href="route('logout')"
                    onclick="event.preventDefault();
                            this.closest('form').submit();">
                    {{ __('Log Out') }}
                </a>
            </form> --}}

            {{-- @endif --}}
        </nav>
        @include('layouts.header.navigation')
   </div>

    <div class="mobile flex md:hidden py-5 px-5 container mx-auto items-center justify-between h-full">
        @if (request()->is('/') || request()->routeIs('homepage'))
            <h1>
        @endif
            <x-application-logo />
        @if (request()->is('/') || request()->routeIs('homepage'))
            </h1>
        @endif
        <button data-trigger="menu-mobile" aria-label="button" class="md:hidden pt-1">
            <img src="{{ asset('assets/svg/burger.svg') }}" alt="burger" class="fill-current pointer-events-none">
        </button>
    </div>
    <nav data-target="menu-mobile" id="menu-mobile" class="absolute w-full shadow rounded-b-xl z-10 bg-white">
        <div class="px-6 py-3 flex flex-col justify-center items-start">
            <a href="{{ url('/') }}" class="text-gray-950 py-3 font-semibold">{{ __('Home') }}</a>
            <a href="#about" class="text-gray-950 py-3 font-semibold">{{ __('About Us') }}</a>
            <a href="#services" class="text-gray-950  py-3 font-semibold">{{ __('Services') }}</a>
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
