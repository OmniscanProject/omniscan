@php
    $products = \App\Models\Product::where('active', 1)->get();
@endphp

<section id='subscriptions'>
    <div>
        <x-product-list :products="$products"/>
    </div>
</section>
