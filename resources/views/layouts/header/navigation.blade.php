<div class="functionalities max-w-max flex flex-col md:flex-row justify-between items-start md:items-center md:space-x-10">

    {{-- <div class="flex flex-col md:flex-row"> --}}
        @if(!Auth::guard('customer')->user())
            <a class="text-black py-2" href="{{ route('register') }}">
                {{ __('Register') }}
            </a>
            <span class="divider hidden md:block">|</span>
            <a class="text-black py-2 md:m-l-1" href="{{ route('login') }}">
                {{ __('Login') }}
            </a>
        @else
            <a class="text-black py-2 md:py-0 block md:hidden" href="{{ route('customer.dashboard.index') }}">
                {{ __('Dashboard') }}
            </a>
            <form method="POST" action="{{ route('logout') }}" class="py-1 md:py-0 md:pt-2 block md:hidden">
                @csrf
                <a class="text-black" href="route('logout')"
                    onclick="event.preventDefault();
                        this.closest('form').submit();">
                    {{ __('Log Out') }}
                </a>
            </form>
            {{-- <div class="block py-1 md:hidden">
            </div> --}}
        @endif
    {{-- </div> --}}

    @if(Auth::guard('customer')->user())
        <div class="relative mobile hidden md:block">
            <div data-trigger="menu-user" class="trigger-sub-menu md:cursor-pointer flex p-1 items-end space-x-2">
                <p class="text-black">{{ __('Hi') }} {{ Auth::guard('customer')->user()->firstname }}</p>
                <x-coolicon-arrow-down-md class="h-5 arrow" />
                <x-coolicon-close-md class="h-5 cross hidden" />
            </div>

            <div data-target="menu-user" class="target-sub-menu mt-2 absolute w-full p-3 shadow text-center rounded-md z-10 bg-white">
                <a class="text-black text-sm" href="{{ route('customer.dashboard.index') }}">
                    {{ __('Dashboard') }}
                </a>
                <form method="POST" action="{{ route('logout') }}" class="pt-2">
                    @csrf
                    <a class="text-black text-sm" href="route('logout')"
                        onclick="event.preventDefault();
                            this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </div>
        </div>
    @endauth
</div>
