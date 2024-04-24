@props(['css'])

@php 
    $css = $css ?? "border px-6 py-4"
@endphp

<td class="{{ $css }}">
    {{$slot}}
</td>