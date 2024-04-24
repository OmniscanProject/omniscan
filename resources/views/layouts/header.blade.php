<header class="bg-white">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex mr-8">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                    alt="" />
            </a>
        </div>
        <div class="flex lg:hidden">
            <button onclick="toggleMobileMenu()" type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <!-- Icône de menu hamburger -->
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            {{-- Iterate over navigation items --}}
            <a href="/accueil" class="text-sm font-semibold leading-6 text-gray-900">Accueil</a>
            <a href="/a-propos" class="text-sm font-semibold leading-6 text-gray-900">À propos</a>
            <a href="/services" class="text-sm font-semibold leading-6 text-gray-900">Services</a>
            <a href="/contact" class="text-sm font-semibold leading-6 text-gray-900">Contact</a>
        </div>
        @if (!Auth::guard('customer')->user())
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="login"
                    class="text-sm font-semibold leading-6 text-white border border-indigo-600 bg-indigo-600 px-4 py-2 rounded-md">
                    Connexion
                </a>
            </div>
        @endif
        @if (Auth::guard('customer')->user())
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="bg-indigo-600 text-white leading-6 shadow-sm hover:bg-indigo-500' : 'text-indigo-600 ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300' }}  rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                    :href="route('logout')"
                    onclick="event.preventDefault();
                            this.closest('form').submit();">
                    {{ __('Log Out') }}
                </a>
            </form>
        @endif
        @if (!Auth::guard('customer')->user())
            <div class="hidden lg:flex pl-1">
                <a href="register"
                    class="text-sm font-semibold leading-6 text-indigo-600 border border-indigo-600 bg-white px-4 py-2 rounded-md hover:bg-indigo-600 hover:text-white">
                    Inscription <span aria-hidden="true">&rarr;</span>
                </a>
            </div>
        @endif
        {{-- @include('components.language-switcher') --}}

    </nav>
    <div class="lg:hidden" id="mobile-menu" hidden>
        <div class="px-2 pt-2 pb-3 space-y-1">
            <!-- Liens de navigation mobile -->
            <a href="/accueil"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">Accueil</a>
            <a href="/a-propos"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">À propos</a>
            <a href="/services"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">Services</a>
            <a href="/contact"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">Contact</a>
        </div>
        <!-- Liens de connexion/déconnexion pour mobile -->
        @if (!Auth::guard('customer')->user())
            <a href="#"
                class="block ml-2 px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">
                Log in
            </a>
        @endif
        @if (Auth::guard('customer')->user())
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="bg-indigo-600 text-white shadow-sm hover:bg-indigo-500' : 'text-indigo-600 ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300' }}  rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                    :href="route('logout')"
                    onclick="event.preventDefault();
                            this.closest('form').submit();">
                    {{ __('Log Out') }}
                </a>
            </form>
        @endif
        @if (!Auth::guard('customer')->user())
            <a href="#"
                class="block px-3 py-2 ml-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">
                Inscription <span aria-hidden="true">&rarr;</span>
            </a>
        @endif
    </div>
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
