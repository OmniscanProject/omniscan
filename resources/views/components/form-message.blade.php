@props(['messages', 'type' => 'error'])

<div class="absolute right-0 left-0">
    @if ($messages && count($messages) > 0)
        <div class="<?= $type == "error" ? "text-red-900 bg-red-300" : "text-green-900 bg-green-500" ?> transform transition duration-300 ease-in-out -translate-y-96 p-2 flex items-center justify-center gap-2 w-max mx-auto rounded-md border text-sm space-y-1">
            @for($i = 0; $i < 1; $i++)
                @if($type == "error")
                    <x-coolicon-circle-warning class="w-6 h-6" />
                @else
                    <x-coolicon-circle-check class="w-6 h-6" />
                @endif
                <p>{{ $messages[$i] }}</p>
            @endfor
        </div>
    @endif
</div>
