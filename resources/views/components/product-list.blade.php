@php
    $pricing = [];
@endphp
<div class="md:container mx-auto">
    <div class="interval-container w-max mx-auto mb-10">
        <button
            class="interval-btn ml-1 py-2 px-2 md:px-1.5 sm:px-3.5 border-2 border-blue-500 drop-shadow-md hover:bg-white text-primary rounded-md"
            data-interval="year"
            >
            {{ __('Annual billing') }}
        </button>
        <button
            class="interval-btn ml-1 py-2 px-2 md:px-1.5 sm:px-3.5 border-primary drop-shadow-md hover:bg-white text-primary rounded-md"
            data-interval="month"
        >
            {{ __('Monthly billing') }}
        </button>
    </div>
    <ol class="product-list mt-6 flex justify-center items-stretch md:gap-5 gap-20">
        @foreach ($products as $product)
            @php
                $subscriptions = ($product->prices()->where(['active' => 1])->get());

                foreach ($subscriptions as $subscription) {
                    $pricing[$product->id][$subscription->recurring_interval]['price'] = $subscription->price;
                    $pricing[$product->id][$subscription->recurring_interval]['name'] = " € / " . __($subscription->recurring_interval);
                    
                    $pricing[$product->id][$subscription->recurring_interval]['id'] = $subscription->stripe_price;
                }
            @endphp

            <li class="px-3 md:flex-1 md:max-w-80 h-full md:h-inherit">
                <x-product-card :product="$product"/>
            </li>
        @endforeach
    </ol>
</div>

<script>
    
    const pricing = {!! json_encode($pricing) !!}
    const intervalBtns = document.querySelectorAll('.interval-btn');

    let products = document.querySelectorAll('.product-card');

    if(Object.keys(pricing).length){
        const initValues = (products, interval = 'month') => {
            if(products.length > 0){        
                products.forEach(product => {
                    let priceSpan = product.querySelector("span[data-price]");
                    let intervalSpan = product.querySelector("span[data-interval]");
                    let priceIdInput = product.querySelector("input[name='price_id']");
                
                    priceSpan.innerText = pricing[product.dataset.product][interval]['price'];
                    intervalSpan.innerText = pricing[product.dataset.product][interval]['name'];
                    priceIdInput.value = pricing[product.dataset.product][interval]['id'];

                });
            }
        }
        initValues(products);
        intervalBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                intervalBtns.forEach(btn => {
                    btn.classList.remove('active');
                });
                btn.classList.add('active');

                let interval = btn.dataset.interval;
                initValues(products, interval);
            });
        });
    }
</script>

