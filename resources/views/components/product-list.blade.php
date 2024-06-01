@php
    $pricing = [];
@endphp

@props([
    'class' => 'pt-28 md:pt-38 pb-10'
])

<div class="md:container mx-auto {{ $class }}">
    <div class="interval-container relative flex max-w-[200px] mx-auto p-1 bg-secondary rounded-full mb-12">
        <span class="background-focus absolute inset-0 m-1 pointer-events-none" aria-hidden="true">
            <span class="absolute inset-0 w-1/2 bg-tertiary rounded-full shadow-sm shadow-black translate-x-0"></span>
        </span>
        <button
            class="interval-btn relative flex-1 text-sm font-medium h-8 rounded-full text-black text-slate-500 align-sub"
            data-interval="month"
            aria-pressed="true"
        >
            {{ __('Monthly') }}
        </button>
        <button
            class="interval-btn relative flex-1 text-sm font-medium h-8 rounded-full text-black text-slate-500 align-sub"
            data-interval="year"
            aria-pressed="false"
            >
            {{ __('Annual') }}
        </button>
    </div>
    <ol class="product-list flex justify-center items-stretch gap-10">
        @foreach ($products as $product)
            @php
                $subscriptions = ($product->prices()->where(['active' => 1])->get());

                foreach ($subscriptions as $subscription) {
                    $pricing[$product->id][$subscription->recurring_interval]['price'] = $subscription->price;
                    $pricing[$product->id][$subscription->recurring_interval]['name'] = " € / " . __($subscription->recurring_interval);
                    
                    $pricing[$product->id][$subscription->recurring_interval]['id'] = $subscription->stripe_price;
                }
            @endphp

            <li class="product px-2 md:flex-1 md:max-w-80 h-full md:h-inherit">
                <x-product-card :product="$product"/>
            </li>
        @endforeach
    </ol>
</div>

<script>
    const pricing = {!! json_encode($pricing) !!}
    const intervalBtns = document.querySelectorAll('.interval-btn');
    const backgroundFocus = document.querySelector('.background-focus');

    let products = document.querySelectorAll('.product');

    if(Object.keys(pricing).length){
        const initValues = (products, interval = 'month') => {
            if(products.length > 0){        
                products.forEach(product => {

                    let productCard = product.querySelector('.product-card');
                    let productId = productCard.dataset.product;

                    // console.log(pricing[productId].hasOwnProperty(interval));
                    if(!pricing[productId].hasOwnProperty(interval)){
                        product.classList.add('disabled');
                        return;
                    } else {
                        product.classList.remove('disabled');
                    }

                    let priceSpan = productCard.querySelector("span[data-price]");
                    let intervalSpan = productCard.querySelector("span[data-interval]");
                    let priceIdInput = productCard.querySelector("input[name='price_id']");
                    priceSpan.innerText = pricing[productCard.dataset.product][interval]['price'];
                    intervalSpan.innerText = pricing[productCard.dataset.product][interval]['name'];
                    priceIdInput.value = pricing[productCard.dataset.product][interval]['id'];

                });
            }
        }
        initValues(products);
        intervalBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                intervalBtns.forEach(btn => {
                    btn.classList.remove('active');
                });
                backgroundFocus.classList.toggle('active');

                let interval = btn.dataset.interval;
                initValues(products, interval);
            });
        });
    }
</script>
