@props(['disabled' => false])

{{-- <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm']) !!}> --}}

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200']) !!}>
