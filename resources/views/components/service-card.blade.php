@props([
    'class' => '',
    'text' => '',
    'image' => ''
])


<div class="text-center rounded-xl px-4 lg:px-8 xl:px-14 py-16 lg:py-18 xl:py-24 {{ $class }}">
    <div class="flex flex-col items-center justify-center w-full">
        <img src="{{ asset($image) }}" alt="OmniScan - Service image" class="h-2/3 w-2/3">
        <p class="text-md text-white mt-8 md:mt-16 h-1/3 w-2/3">{{ $text }}</p>
    </div>
</div>
