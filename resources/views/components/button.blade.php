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
        disabled:cursor-not-allowed
        disabled:opacity-60
    ';

    $variants = [
        'primary' => '
            bg-[#0E79B2]
            text-white
            hover:bg-[#124868]
            focus:ring-[#0E79B2]
        ',

        'secondary' => '
            bg-white
            text-[#0E79B2]
            border border-[#0E79B2]
            hover:bg-[#0E79B2]/15
            hover:border-[#0E79B2]
            focus:ring-[#0E79B2]
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