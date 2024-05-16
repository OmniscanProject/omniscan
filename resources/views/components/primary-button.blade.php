@props([
    'type' => 'submit',
    'class' => ''
])

<button {{ $attributes->merge(['type' => $type, 'class' => "$class primary-button text-center w-full p-4 bg-white rounded-lg text-md text-black shadow-button"]) }}>
    {{ $slot }}
</button>


<style>

</style>

