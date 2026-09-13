<div
    {{ $attributes->merge([
        'class' => '
            bg-white
            border border-[#D5D6E2]
            rounded-xl
        '
    ]) }}
>
    {{ $slot }}
</div>