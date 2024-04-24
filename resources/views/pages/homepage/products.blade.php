@php
    $products = \App\Models\Product::where('active', 1)->get();
@endphp

{{-- <section id='subscriptions' class="mt-10">
    <h2>{{__('Subscriptions')}}</h2>
    <div>
        @foreach ($products as $product)
            <form action="{{ route('checkout.session') }}" method="POST">
                @csrf
                <label>{{$product->name}}</label>
                <script>
                    console.log(@json($product));
                </script>
                <input type="hidden" name="priceId" value="price_1OtnorRtcPirl6CF7cGpimKu">
                <button type="submit">Acheter</button>
            </form>
        @endforeach
    </div>
</section> --}}

@php
    $products = \App\Models\Product::where('active', 1)->get();
@endphp


<section id='subscriptions'>
    <div>
        <x-product-list :products="$products->toArray()"/>
    </div>
</section>
