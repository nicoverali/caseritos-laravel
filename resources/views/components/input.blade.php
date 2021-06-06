@props(['disabled' => false, 'error'])

@php
$stateClasses = isset($error)
    ? 'rounded-md shadow-sm border-red-500 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'
    : 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'

@endphp
<div>
<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => $stateClasses]) !!}>
@isset($error)
<p class="text-red-500">{{$error}}</p>
@endisset

</div>
