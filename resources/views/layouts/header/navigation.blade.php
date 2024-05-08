<div x-data="{ open: false }" class="block space-x-10">
    <!-- Primary Navigation Menu -->
    <div class="flex flex-col md:flex-row justify-between items-center md:space-x-10">

        @if(!Auth::guard('customer')->user())
            <a class="text-gray-950 py-3 md:py-2 font-semibold md:m-l-1" href="{{ route('login') }}">
                {{ __('Login') }}
            </a>
            <a class="text-gray-950 py-3 md:py-2 font-semibold" href="{{ route('register') }}">
                {{ __('Register') }}
            </a>
        @endif

        @if(Auth::guard('customer')->user())
            <a class="text-gray-950 py-2 font-semibold" href="{{ route('customer.dashboard.index') }}">
                {{ __('Dashboard') }}
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="text-gray-950 py-2 font-semibold" href="route('logout')"
                    onclick="event.preventDefault();
                        this.closest('form').submit();">
                    {{ __('Log Out') }}
                </a>
            </form>
        @endauth
    </div>
</div>
