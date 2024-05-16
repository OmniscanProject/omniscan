<x-app-layout>
    <div id="services-page" class="pt-10 md:pt-18 pb-24 md:pb-40 flex justify-center items-center bg-primary">
        <div class="w-full">
            <x-header-page title="{{ __('Services') }}" class="mx-auto px-5 container"/>


            @php

            $services = [
                [
                    'class' => 'bg-gradient-primary', 
                    'text' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 
                    'image' => 'assets/svg/rounded-img.svg'
                ],
                [
                    'class' => 'bg-gradient-secondary', 
                    'text' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 
                    'image' => 'assets/svg/rounded-img.svg'
                ],
                [
                    'class' => 'bg-gradient-tertiary', 
                    'text' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 
                    'image' => 'assets/svg/rounded-img.svg'
                ]
            ];
                

            @endphp
            <ul class="service-list flex justify-between gap-12 md:mx-auto md:px-5 md:container">
                @foreach ($services as $service)
                <li class="px-2 flex-1 h-full">
                    <x-service-card :class="$service['class']" :text="$service['text']" :image="$service['image']" />
                </li>
                @endforeach
            </ul>

            <div class="content mx-auto px-5 container mt-20 md:mt-28">
                <p class="text-center text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
            </div>
        </div>
    </div>
</x-app-layout>

