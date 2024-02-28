@php

$frequencies = [
    ['value' => 'monthly', 'label' => 'Monthly', 'priceSuffix' => '/month'],
    ['value' => 'annually', 'label' => 'Annually', 'priceSuffix' => '/year'],
];

$tiers = [
    [
        'name' => 'Hobby',
        'id' => 'tier-hobby',
        'href' => '#',
        'price' => ['monthly' => '$15', 'annually' => '$144'],
        'description' => 'The essentials to provide your best work for clients.',
        'features' => ['5 products', 'Up to 1,000 subscribers', 'Basic analytics'],
        'mostPopular' => false,
    ],
    [
        'name' => 'Freelancer',
        'id' => 'tier-freelancer',
        'href' => '#',
        'price' => ['monthly' => '$30', 'annually' => '$288'],
        'description' => 'The essentials to provide your best work for clients.',
        'features' => ['5 products', 'Up to 1,000 subscribers', 'Basic analytics', '48-hour support response time'],
        'mostPopular' => false,
    ],
    [
        'name' => 'Startup',
        'id' => 'tier-startup',
        'href' => '#',
        'price' => ['monthly' => '$60', 'annually' => '$576'],
        'description' => 'A plan that scales with your rapidly growing business.',
        'features' => [
            '25 products',
            'Up to 10,000 subscribers',
            'Advanced analytics',
            '24-hour support response time',
            'Marketing automations',
        ],
        'mostPopular' => true,
    ],
   
];

@endphp

<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-4xl text-center">
            <h2 class="text-base font-semibold leading-7 text-indigo-600">Nos offres</h2>
            
        </div>
        <p class="mx-auto mt-6 max-w-2xl text-center text-lg leading-8 text-gray-600">
            Toutes nos offres de cyber sécurité ici
        </p>
        <div class="mt-16 flex justify-center">
            <div class="grid grid-cols-2 gap-x-1 rounded-full p-1 text-center text-xs font-semibold leading-5 ring-1 ring-inset ring-gray-200">
                <input type="radio" name="payment_frequency" id="monthly" value="monthly" class="hidden">
                <input type="radio" name="payment_frequency" id="annually" value="annually" class="hidden">
                <label for="monthly" class="cursor-pointer rounded-full px-2.5 py-1 bg-indigo-600 text-white">Monthly</label>
                <label for="annually" class="cursor-pointer rounded-full px-2.5 py-1 text-gray-500">Annually</label>
            </div>
        </div>
        <div class="isolate mx-auto mt-10 grid max-w-md grid-cols-1 gap-8 md:max-w-2xl md:grid-cols-2 lg:max-w-4xl xl:mx-0 xl:max-w-none xl:grid-cols-3">
            @foreach($tiers as $tier)
                <div class="{{ $tier['mostPopular'] ? 'ring-2 ring-indigo-600' : 'ring-1 ring-gray-200' }} rounded-3xl p-8">
                    <h3 id="{{ $tier['id'] }}" class="{{ $tier['mostPopular'] ? 'text-indigo-600' : 'text-gray-900' }} text-lg font-semibold leading-8">
                        {{ $tier['name'] }}
                    </h3>
                    <p class="mt-4 text-sm leading-6 text-gray-600">{{ $tier['description'] }}</p>
                    <p class="mt-6 flex items-baseline gap-x-1">
                        <span class="text-4xl font-bold tracking-tight text-gray-900">{{ $tier['price']['monthly'] }}</span>
                        <span class="text-sm font-semibold leading-6 text-gray-600">/month</span>
                    </p>
                    <a href="{{ $tier['href'] }}" aria-describedby="{{ $tier['id'] }}" class="{{ $tier['mostPopular'] ? 'bg-indigo-600 text-white shadow-sm hover:bg-indigo-500' : 'text-indigo-600 ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300' }} mt-6 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Buy plan
                    </a>
                    <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-600">
                        @foreach($tier['features'] as $feature)
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>{{ $feature }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</div>

<script>
   
        const monthlyInput = document.getElementById('monthly');
        const annuallyInput = document.getElementById('annually');
        const monthlyLabel = document.querySelector('label[for="monthly"]');
        const annuallyLabel = document.querySelector('label[for="annually"]');


        monthlyInput.addEventListener('change', function () {
            monthlyLabel.classList.add('bg-indigo-600', 'text-white');
            annuallyLabel.classList.remove('bg-indigo-600', 'text-white');
        });

        annuallyInput.addEventListener('change', function () {
            annuallyLabel.classList.add('bg-indigo-600', 'text-white');
            monthlyLabel.classList.remove('bg-indigo-600', 'text-white');
        });
   
</script>
     