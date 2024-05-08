@php
    $products = \App\Models\Product::where('active', 1)->get();
@endphp

<section id='products-section' class="relative bg-white py-10 md:py-20 h-full">
    <h2 class="px-5 container mx-auto text-center text-xl md:text-3xl font-title mb-10 md:mb-16">{{ __('Our subscriptions') }}</h2>
    <x-product-list :products="$products"/>
</section>
