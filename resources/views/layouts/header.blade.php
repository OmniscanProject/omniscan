<header>
    <!-- Navigation Links -->
    @auth
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            {{-- <Avatar :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </Avatar> --}}
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

        </div>
    @endauth
</header>