<head>
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
</head>

<div class="h-screen flex justify-center items-center">
    <div class="content px-5 mx-auto container">
        <img src="{{ asset('assets/svg/logo.svg') }}" alt="404" class=" mx-auto">
        <h1 class="flex items-center gap-2 text-center w-max mx-auto"><span class="text-tertiary text-4xl font-semibold">404</span><span class="text-primary text-xl font-semibold">{{ __('Page not found') }}</span></h1>
    </div>
</div>

