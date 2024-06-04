@php
    $lang = App::getLocale();
@endphp

<x-app-layout>
    <div id="services-page" class="pt-10 md:pt-18 pb-24 md:pb-40 flex justify-center items-center bg-primary">
        <div class="w-full">
            <x-header-page title="{{ __('Services') }}" class="mx-auto px-5 container"/>

            @php                    
                $services = [
                    [
                        'class' => 'bg-gradient-primary', 
                        'title' => __('Web vulnerability scanner cyber expertise'), 
                        'texts' => [
                            __('Instant Detection :') => __('Identify vulnerabilities with precision and speed.'),
                            __('Expert Analysis :') => __('Concrete, expert advice on cybersecurity.'),
                            __('Clear Reports :') => __('Concrete, tangible results.'),
                        ],
                        'image' => 'assets/svg/glass.svg'
                    ],
                    [
                        'class' => 'bg-gradient-secondary', 
                        'title' => __('Automation with the help of generative AI'), 
                        'texts' => [
                            __('Intelligent Automation :') => __('The AI that strengthens and accelerates your security.'),
                            __('Simple Integration :') => __('Fits seamlessly into your existing systems.'),
                            __('Permanent Evolution :') => __('Learns and adapts for optimal protection.'),
                        ], 
                        'image' => 'assets/svg/automatisation.svg'
                    ],
                    [
                        'class' => 'bg-gradient-tertiary', 
                        'title' => __('Accessible, Intuitive Solution'), 
                        'texts' => [
                            __('Easy to Use :') => __('Simple Interface, Smooth Experience'),
                            __('Accessibility for All :') => __('Democratized Security for Every Business'),
                            __('Constant Support :') => __('Guides and Assistance for All Your Needs'),
                        ], 
                        'image' => 'assets/svg/hand.svg'
                    ]
                ];
            @endphp
            <ul class="service-list flex justify-between gap-6 xl:gap-12 md:mx-auto md:px-5 md:container">
                @foreach ($services as $service)
                <li class="px-2 flex-1 h-full">
                    <x-service-card :class="$service['class']" :title="isset($service['title']) ? $service['title'] : ''" :texts="isset($service['texts']) ? $service['texts'] : ''" :image="isset($service['image']) ? $service['image'] : ''" />
                </li>
                @endforeach
            </ul>

            <div class="content mx-auto px-5 w-full md:w-max mt-20 md:mt-28 text-center">
                {{-- <p class="text-center text-white leading-8">
                    {{ __('At OmniScan, we believe that online security is an essential right. Join us to secure your digital space with efficiency and simplicity.') }}
                </p> --}}
                <p class="text-center text-white leading-8">
                    @if($lang === 'en')
                    {!! __("OmniScan gives you advanced protection with simplicity and efficiency.<br> Discover tools designed to maximize your security without complicating your work.<br> Because every click counts, choose OmniScan for :intelligent and :accessible cyber defense.", ['intelligent' => "<span class='text-tertiary'>intelligent</span>", 'accessible' => "<span class='text-tertiary'>accessible</span>"]) !!}
                    @else
                    {!! __("OmniScan gives you advanced protection with simplicity and efficiency.<br> Discover tools designed to maximize your security without complicating your work.<br> Because every click counts, choose OmniScan for :intelligent and :accessible cyber defense.", ['intelligent' => "<span class='text-tertiary'>intelligente</span>", 'accessible' => "<span class='text-tertiary'>accessible</span>"]) !!}
                    @endif
            </div>
        </div>
    </div>
</x-app-layout>

