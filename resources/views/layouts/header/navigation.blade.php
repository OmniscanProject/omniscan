<div class="functionalities max-w-max flex flex-col md:flex-row justify-between items-center md:space-x-10">

    @if(!Auth::guard('customer')->user())
        <a class="text-gray-950 py-3 md:py-2 font-semibold md:m-l-1" href="{{ route('login') }}">
            {{ __('Login') }}
        </a>
        <a class="text-gray-950 py-3 md:py-2 font-semibold" href="{{ route('register') }}">
            {{ __('Register') }}
        </a>
    @else
        <a class="text-gray-950 py-2 text-sm" href="{{ route('customer.dashboard.index') }}">
            {{ __('Dashboard') }}
        </a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a class="text-gray-950 py-2 text-sm" href="route('logout')"
                onclick="event.preventDefault();
                    this.closest('form').submit();">
                {{ __('Log Out') }}
            </a>
        </form>
    @endif

    @if(Auth::guard('customer')->user())
        <div class="relative mobile hidden md:block">
            <div data-trigger="menu-user" class="trigger-sub-menu md:cursor-pointer flex p-1 items-center space-x-2">
                <p class="text-gray-950 text-sm">{{ __('Welcome') }} {{ Auth::guard('customer')->user()->firstname }}</p>
                <x-coolicon-arrow-down-md class="h-5 arrow" />
                <x-coolicon-close-md class="h-5 cross hidden" />
            </div>

            <div data-target="menu-user" class="target-sub-menu mt-2 absolute w-full p-3 shadow text-center rounded-md z-10 bg-white">
                <a class="text-gray-950 py-2 text-sm" href="{{ route('customer.dashboard.index') }}">
                    {{ __('Dashboard') }}
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="text-gray-950 py-2 text-sm" href="route('logout')"
                        onclick="event.preventDefault();
                            this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </div>
        </div>
    @endauth
</div>
