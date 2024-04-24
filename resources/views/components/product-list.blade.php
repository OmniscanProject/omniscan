@php
    $pricing = [];
@endphp
<div class="bg-white sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="interval-container">
            <button
                class="interval-btn ml-1 py-2 px-2 md:px-1.5 sm:px-3.5 border-[#94a3b8] drop-shadow-md hover:bg-white text-[#667085]  hover:text-black rounded-md"
                data-interval="year"
                >
                {{ __('Annual billing') }}
            </button>
            <button
                class="interval-btn ml-1 py-2 px-2 md:px-1.5 sm:px-3.5 border-[#94a3b8] drop-shadow-md hover:bg-white text-[#667085]  hover:text-black rounded-md"
                data-interval="month"
            >
                {{ __('Monthly billing') }}
            </button>
        </div>
        <div class="mt-6 flex flex-wrap justify-center gap-6">
            @foreach ($products as $product)
                @php
                    $subscriptions = ($product->prices()->where(['active' => 1])->get());

                    foreach ($subscriptions as $subscription) {
                        $pricing[$product->id][$subscription->recurring_interval]['price'] = $subscription->price;
                        $pricing[$product->id][$subscription->recurring_interval]['name'] = " € / " . __($subscription->recurring_interval);
                        
                        $pricing[$product->id][$subscription->recurring_interval]['id'] = $subscription->stripe_price;
                    }
                @endphp

                <div class="flex-none w-full sm:w-1/2 lg:w-1/3">
                    <x-product-card :product="$product" />
                </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    
    const pricing = {!! json_encode($pricing) !!}
    const intervalBtns = document.querySelectorAll('.interval-btn');

    let products = document.querySelectorAll('.product-card');

    if(pricing.length > 0){
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

