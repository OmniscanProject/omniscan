<header class="relative top-0 bg-white dark:bg-[#182235] border-b border-slate-600 dark:border-slate-700 z-10">
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 -mb-px">

            <!-- Header: Left side -->
            <div class="flex">     
                <!-- Hamburger button -->
                <button
                    class="text-slate-500 hover:text-slate-600 lg:hidden"
                    @click.stop="sidebarOpen = !sidebarOpen"
                    aria-controls="sidebar"
                    :aria-expanded="sidebarOpen"
                >
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <rect x="4" y="5" width="16" height="2" />
                        <rect x="4" y="11" width="16" height="2" />
                        <rect x="4" y="17" width="16" height="2" />
                    </svg>
                </button>

            </div>

            <!-- Header: Right side -->
            @if(Auth::guard('admin')->user())
                @php
                    $user = Auth::guard('admin')->user();
                @endphp
                <div class="flex items-center space-x-3">
                    <x-dropdown-sub-menu>
                        <x-slot name="trigger">{{$user->username}}</x-slot>
                        <x-slot name="content">
                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            <a 
                                href="{{ route('admin.logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            >{{ __('Logout') }}</a>
                        </x-slot>
                    </x-dropdown-sub-menu>
                </div>
            @endif

        </div>
    </div>
</header>