@php
    $products = \App\Models\Product::where('active', 1)->get();
@endphp


<section id='subscriptions' class=" mt-10">
    <h2>{{__('Subscriptions')}}</h2>
    <div>
        <x-product-list :products="$products->toArray()"/>
    </div>
</section>