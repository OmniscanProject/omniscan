<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Omniscan') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/dashboard_admin.css') }}">
        @livewireStyles 

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body
        class="font-inter antialiased bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400"
        :class="{ 'sidebar-expanded': sidebarExpanded }"
        x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }"
        x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))"    
    >

        <script>
            if (localStorage.getItem('sidebar-expanded') == 'true') {
                document.querySelector('body').classList.add('sidebar-expanded');
            } else {
                document.querySelector('body').classList.remove('sidebar-expanded');
            }
        </script>

        <div class="flex h-[100dvh] overflow-hidden">
                @include('dashboards.admin.layouts.sidebar')

                <!-- Page Content -->
                <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden x-ref="contentarea">

                    @include('dashboards.admin.layouts.header')
                    {{-- <x-admin.header /> --}}

                    <main class="grow">
                        {{ $slot }}
                    </main>

                </div>
            </div>
        </div>

        @livewireScripts
    </body>
</html>





{{-- <h1>ADMIN DASHBOARD</h1>

@dump(Auth::guard('admin')->user()) --}}