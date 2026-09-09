@props([
    'title',
    'description' => null,
])

<div class="flex items-start justify-between gap-6">
    <div class="min-w-0">
        <h1 class="text-[28px] leading-9 font-semibold text-[#191923]">
            {{ $title }}
        </h1>

        @if ($description)
            <p class="mt-1 text-sm leading-5 text-gray-500">
                {{ $description }}
            </p>
        @endif
    </div>

    @if (isset($action))
        <div class="shrink-0">
            {{ $action }}
        </div>
    @endif
</div>