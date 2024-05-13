<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Omniscan') }}</title>
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/singular/dashboard_admin.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body
        class="antialiased bg-slate-100 text-slate-600"
        :class="{ 'sidebar-expanded': sidebarExpanded }"
        x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }"
        x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))"    
    >

        <div class="">
            @include('components.flash-message')
        </div>

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

                    <main class="grow p-6">
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