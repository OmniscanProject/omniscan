@props([
    'title' => '',
    'class' => ''
])

<div class="pt-6 md:pt-12 pb-10 md:pb-18 flex justify-center items-center w-full {{ $class }}">
    <div class="flex items-center justify-between border-b-2 border-white pb-5 w-full">
        <h1 class="text-md md:text-3xl font-semibold font-title text-white" title="{{ $title }}">{{ $title }}</h1>
        <img src="{{ asset('assets/svg/logo-eyes-right.svg') }}" alt="OmniScan - logo" class="w-10 md:w-max">
    </div>
</div>

