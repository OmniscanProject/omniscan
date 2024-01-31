<nav x-data="{ open: false }" class="">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            @if(!Auth::guard('customer')->user())
                <a href="{{ route('login') }}">
                    {{ __('Login') }}
                </a>
                <a href="{{ route('register') }}">
                    {{ __('Register') }}
                </a>
            @endif

            @if(Auth::guard('customer')->user())
                <a href="{{ route('profile.edit') }}">
                    {{ __('Profile') }}
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </nav-link>
                </form>
            @endauth
        </div>
    </div>
</nav>
