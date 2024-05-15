<div data-product="{{ $product->id }}" class="product-card w-full border-2 border-primary p-4 rounded-md h-full">
    <form id="checkout-product-{{ $product->id }}" action="{{ route('checkout.session') }}" method="POST">
        @csrf
        <div {{ $product->most_popular ? 'ring-2 ring-indigo-600' : 'ring-1 ring-gray-200' }} rounded-3xl p-8">
            <h3 id="{{ $product->id }}" class="{{ $product->most_popular  ? 'text-indigo-600' : 'text-gray-900' }} text-lg font-semibold leading-8">
                {{ $product->name }}
            </h3>
            <p class="mt-4 text-sm leading-6 text-gray-600">{{ $product->description }}</p>
            <p class="mt-6 flex items-baseline gap-x-1">
                <span class="text-4xl font-bold tracking-tight text-gray-900" data-price=""></span>
                <span class="text-sm font-semibold leading-6 text-gray-600" data-interval=""></span>
            </p>
            <input type="hidden" name="price_id" value="">
            <a onclick="document.getElementById(`checkout-product-{{ $product->id }}`).submit()" href="#" aria-describedby="{{ $product->id }}" class="{{ $product->most_popular ? 'bg-indigo-600 text-white shadow-sm hover:bg-indigo-500' : 'text-indigo-600 ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300' }} mt-6 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                {{ __('Purchase the offer') }}
            </a>
            <button class="hidden" type="submit"></button>
            @if (!empty($product->features))
                <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-600">
                    @foreach (json_decode($product->features, true) as $feature)
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>{{ $feature }}</span>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </form>
</div>
