@props([
    'class' => '',
    'title' => '',
    'texts' => '',
    'image' => ''
])


<div class="service-card text-center rounded-xl px-4 lg:px-8 xl:px-10 py-14 lg:py-16 xl:py-20 h-full {{ $class }}">
    <div class="flex flex-col items-center justify-center w-full">
        <div class="rounded-full h-1/3 w-2/3 rounded-full bg-white p-4 md:p-6">
            <img src="{{ asset($image) }}" alt="OmniScan - Service image" class="h-full w-full aspect-square">
        </div>
        <div class="xl:h-20 mt-8 md:mt-12 flex items-start justify-center w-full">
            <h2 class="font-title text-white text-lg text-center w-2/3">{{ $title }}</h2>
        </div>
        <div class="text-md text-white mt-6 w-2/3 text-left">
            @if(is_array($texts) && !empty($texts))
                @foreach($texts as $title => $text)
                    <div class="mt-4"> 
                        <p>{{ $title }}</p> 
                        <p class="pl-2 mt-2">{{ $text }}</p>
                    </div>
                @endforeach

            @else
                {!! $texts !!}
            @endif
        </div>
    </div>
</div>
