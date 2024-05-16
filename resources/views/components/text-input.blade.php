@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-black h-12 focus:border-black focus:ring-black rounded-md shadow-sm']) !!}>
