<div
    {{ $attributes->merge([
        'class' => '
            relative
            bg-white
            border border-[#D5D6E2]
            rounded-xl
            p-5
            transition-colors
            hover:bg-[#ececf2]
            hover:border-[#AFB1CA]
            flex
            flex-col
            h-full
        '
    ]) }}
>

<a
    href="{{ route('knowledge.show', [
        'knowledgeEntry' => $knowledge,
        'from' => request()->routeIs('dashboard') ? 'dashboard' : 'library',
    ]) }}"
    class="absolute inset-0 z-10 rounded-xl"
    aria-label="View {{ $knowledge->title }}"
></a>

    {{-- Source --}}
    <div class="flex items-center justify-between">

        @php
            $source = 'Personal Note';
            if ($knowledge->source_url) {
                $host = parse_url($knowledge->source_url, PHP_URL_HOST);
                if ($host && str_contains($host, 'youtube.com')) {
                    $source = 'YouTube';
                } elseif ($host && str_contains($host, 'youtu.be')) {
                    $source = 'YouTube';
                } elseif ($host && str_contains($host, 'github.com')) {
                    $source = 'GitHub';
                } else {
                    $source = 'Website';
                }
            }
        @endphp

        <span class="inline-flex items-center gap-1.5 rounded-md bg-[#F6F6F9] px-2 py-0.5 text-xs font-medium text-[#656992]">
            @if ($source === 'YouTube')
                {{-- YouTube icon --}}
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-3.5 w-3.5"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                >
                    <path d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 0 0 .5 6.2 31 31 0 0 0 0 12a31 31 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.1c1.9.6 9.4.6 9.4.6s7.5 0 9.4-.6a3 3 0 0 0 2.1-2.1A31 31 0 0 0 24 12a31 31 0 0 0-.5-5.8ZM9.6 15.9V8.1l6.8 3.9-6.8 3.9Z"/>
                </svg>

            @elseif ($source === 'GitHub')
                {{-- GitHub icon --}}
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-3.5 w-3.5"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                >
                    <path d="M12 .5a12 12 0 0 0-3.8 23.4c.6.1.8-.3.8-.6v-2.2c-3.3.7-4-1.6-4-1.6-.5-1.3-1.3-1.6-1.3-1.6-1.1-.8.1-.8.1-.8 1.2.1 1.8 1.2 1.8 1.2 1.1 1.8 2.9 1.3 3.6 1 .1-.8.4-1.3.8-1.6-2.7-.3-5.5-1.4-5.5-6a4.7 4.7 0 0 1 1.2-3.3 4.4 4.4 0 0 1 .1-3.2s1-.3 3.3 1.2a11.3 11.3 0 0 1 6 0C15.5 3.8 16.5 4 16.5 4a4.4 4.4 0 0 1 .1 3.2 4.7 4.7 0 0 1 1.2 3.3c0 4.6-2.8 5.7-5.5 6 .4.4.8 1.1.8 2.2v3.3c0 .3.2.7.8.6A12 12 0 0 0 12 .5Z"/>
                </svg>

            @else
                {{-- Generic source icon --}}
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-3.5 w-3.5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="1.8"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.5 6.5 17 3a4.24 4.24 0 0 1 6 6l-3.5 3.5"
                    />
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m10.5 17.5-3.5 3.5a4.24 4.24 0 0 1-6-6l3.5-3.5"
                    />
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m8 16 8-8"
                    />
                </svg>
            @endif
            {{ $source }}
        </span>
        <div
            x-data="{ open: false }"
            class="relative z-20"
        >
            {{-- Menu Button --}}
            <button
                type="button"
                @click="open = !open"
                @click.outside="open = false"
                class="flex h-8 w-8 items-center justify-center rounded-lg border border-[#D5D6E2]/0 bg-white text-[#656992] transition-colors hover:border-[#AFB1CA] hover:bg-[#F6F6F9] hover:text-[#191923] focus:outline-none focus:ring-1 focus:ring-[#D5D6E2]"
                aria-label="Knowledge actions"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                >
                    <circle cx="12" cy="5" r="1.5" />
                    <circle cx="12" cy="12" r="1.5" />
                    <circle cx="12" cy="19" r="1.5" />
                </svg>
            </button>

            {{-- Dropdown --}}
            <div
                x-show="open"
                x-cloak
                class="absolute right-0 z-10 mt-2 w-32 rounded-lg border border-[#D5D6E2] bg-white py-1 shadow-sm"
            >
                {{-- Edit --}}
                <a
                    href="{{ route('knowledge.edit', [
                        'knowledgeEntry' => $knowledge,
                        'from' => request()->routeIs('dashboard') ? 'dashboard' : 'library',
                    ]) }}"
                    class="block px-3 py-2 text-sm text-[#191923] hover:bg-[#F6F6F9]"
                >
                    Edit
                </a>

                {{-- Delete --}}
                <form
                    method="POST"
                    action="{{ route('knowledge.destroy', $knowledge) }}"
                >
                    @csrf
                    @method('DELETE')

                    <input
                        type="hidden"
                        name="from"
                        value="{{ request()->routeIs('dashboard') ? 'dashboard' : 'library' }}"
                    >

                    <button
                        type="submit"
                        onclick="return confirm('Are you sure you want to delete this knowledge?')"
                        class="block w-full px-3 py-2 text-left text-sm text-red-600 hover:bg-red-50"
                    >
                        Delete
                    </button>
                </form>
            </div>
        </div>

    </div>

    {{-- Title --}}
    <h3 class="mt-4 line-clamp-2 text-lg font-semibold leading-6 text-[#191923]">
        {{ $knowledge->title }}
    </h3>

    {{-- Notes --}}
    @if ($knowledge->notes)
        <p class="mt-2 line-clamp-3 text-sm leading-6 text-gray-500">
            {{ $knowledge->notes }}
        </p>
    @endif

    {{-- Footer --}}
    <div class="mt-auto pt-5 flex items-center justify-between">
        <span class="text-xs text-[#8488AC]">
            {{ $knowledge->created_at->format('M d, Y') }}
        </span>
    </div>
</div>