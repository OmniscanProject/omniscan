@php
    $products = \App\Models\Product::where('active', 1)->get();
@endphp
<div id='products-section' class="bg-white pt-16 md:pt-32 pb-12 h-full">
    <div class="relative">
        <img src="{{ asset('assets/svg/mono-color-logo-left.svg') }}" class="absolute w-32 lg:w-max -top-28 lg:-top-[65%]" alt="{{ __('OmniScan - mono color logo image left') }}">
        <div class="content px-5 mx-auto container">
            <img src="{{ asset('assets/svg/cyberscore.svg') }}" class="w-1/2 md:w-max mx-auto" alt="{{ __('OmniScan - cyberscore image') }}">
            <div class="text mt-16 px-5 container mx-auto max-w-3xl text-left md:text-center">
                <p class="text-xl md:text-4xl text-center font-semibold font-title text-black">
                    {!! __("Take a complete test and get tailor-made recommendations") !!}
                </p>
                <h2 class="text-xl md:text-4xl text-center font-semibold font-title text-primary">
                    {!! __("Discover our packages now !") !!}
                </h2>
            </div>

        </div>
        <img src="{{ asset('assets/svg/mono-color-search-logo-bottom-right.svg') }}" class="absolute w-24 lg:w-max -bottom-[50%] lg:-bottom-[65%] right-0" alt="{{ __('OmniScan - mono color search logo image bottom right') }}">
    </div>
    <x-product-list :products="$products"/>
</div>   


