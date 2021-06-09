@props(['secondary'=>false])

@php

$appearance = $secondary
    ? 'border-gray-800 hover:bg-gray-50 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25'
    : 'text-white bg-gray-800 hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25'

@endphp

<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 '.$appearance]) }}>
    {{ $slot }}
</button>
