<div
    {{ $attributes->merge([
        'class' => '
            bg-white
            border border-[#D5D6E2]
            rounded-xl
            shadow-sm
        '
    ]) }}
>
    {{ $slot }}
</div>