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
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        @livewireScripts
    </head>
    <body class="font-sans antialiased">
        <div class="">
            @include('layouts.header')

            <div class="flash-messages">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            
            
            <div class="flex justify-center space-x-4 my-4">
                <a href="{{ route('customer.dashboard.profile.index') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition duration-300">
                    {{ __('Profile') }}
                </a>
                <a href="{{ route('customer.dashboard.reports.index') }}" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition duration-300">
                    {{ __('Reports') }}
                </a>
            </div>

            
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
