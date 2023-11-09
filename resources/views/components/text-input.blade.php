@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : 'active' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-teal-600 focus:ring-teal-600 rounded-md shadow-sm']) !!}>
