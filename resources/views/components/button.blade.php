@props([
    'variant' => 'primary',
    'href' => null,
])

@php
    $baseClasses = '
        inline-flex items-center justify-center
        px-4 py-2
        rounded-lg
        text-sm font-medium
        transition-colors
        duration-150
        focus:outline-none
        focus:ring-2
        focus:ring-offset-2
    ';

    $variants = [
        'primary' => '
            bg-[#0E79B2]
            text-white
            hover:bg-[#0b6899]
            focus:ring-[#0E79B2]
        ',

        'secondary' => '
            bg-[#FBFEF9]
            text-[#191923]
            border border-[#AFB1CA]
            hover:bg-[#F6F6F9]
            hover:border-[#AFB1CA]
            focus:ring-[#656992]
        ',

        'danger' => '
            bg-red-600
            text-white
            hover:bg-red-700
            focus:ring-red-500
        ',
    ];

    $classes = $baseClasses . ' ' . ($variants[$variant] ?? $variants['primary']);
@endphp

@if ($href)
    <a
        href="{{ $href }}"
        {{ $attributes->merge(['class' => $classes]) }}
    >
        {{ $slot }}
    </a>
@else
    <button
        {{ $attributes->merge(['class' => $classes]) }}
    >
        {{ $slot }}
    </button>
@endif