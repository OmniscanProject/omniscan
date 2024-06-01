<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

         <!-- Styles -->
         <link rel="stylesheet" href="{{ mix('css/app.css') }}">
         @stack('header.styles')
 
         <!-- Scripts -->
         <script src="{{ mix('js/app.js') }}"></script>
         @stack('header.scripts')
    </head>
    <body class="text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <div>
                <a href="/">
                    <x-application-logo class="fill-current" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 pt-4 pb-6 bg-tertiary dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
