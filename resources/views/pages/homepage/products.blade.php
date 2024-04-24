@php
    $products = \App\Models\Product::where('active', 1)->get();
@endphp

<section id='subscriptions' class="mt-10">
    <div>
        <x-product-list :products="$products"/>
    </div>
</section>
