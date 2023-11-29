@props(['disabled' => false])

<select {{ $disabled ? 'disabled' : 'active' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:none focus:ring-1 focus:ring-gray-300 focus:border-gray-200 focus:ring-offset rounded-md shadow-sm']) !!}>
