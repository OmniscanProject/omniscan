<div data-product="{{ $product->id }}" class="product-card w-full p-4 shadow-md border-2 rounded-2xl h-full {{ $product->most_popular ? 'border-tertiary' : 'border-tertiary' }}">
    <form id="checkout-product-{{ $product->id }}" action="{{ route('checkout.session') }}" method="POST">
        @csrf
        <h3 id="{{ $product->id }}" class="{{ $product->most_popular  ? 'text-primary' : 'text-black' }} text-lg font-semibold leading-8">
            {{ $product->name }}
        </h3>
        <p class="mt-4 text-sm leading-6 text-secondary00">{{ $product->description }}</p>
        <p class="mt-6 flex items-baseline gap-x-1">
            <span class="text-4xl font-bold tracking-tight text-black" data-price=""></span>
            <span class="text-sm font-semibold leading-6 text-secondary00" data-interval=""></span>
        </p>
        <input type="hidden" name="price_id" value="">
        <a onclick="document.getElementById(`checkout-product-{{ $product->id }}`).submit()" href="#" aria-describedby="{{ $product->id }}" class="relative mt-4 h-12 block overflow-hidden border border-tertiary bg-tertiary text-white shadow-sm transition-all before:absolute before:right-0 before:top-0 before:h-12 before:w-6 before:translate-x-12 text-center before:rotate-6 before:bg-white before:opacity-10 before:duration-700 hover:shadow-tertiary hover:before:-translate-x-40 w-full p-4">
            <span class="relative z-10">{{ __('Purchase the offer') }}</span>
        </a>
        <button class="hidden" type="submit"></button>
        @if (!empty($product->features))
            <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-secondary00">
                @foreach (json_decode($product->features, true) as $feature)
                    <li class="flex gap-x-3">
                        <svg class="h-6 w-5 flex-none text-tertiary" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>{{ $feature }}</span>
                    </li>
                @endforeach
            </ul>
        @endif
    </form>
</div>
