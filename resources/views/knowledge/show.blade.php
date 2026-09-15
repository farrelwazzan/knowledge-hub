@php
    $backRoute = request('from') === 'dashboard'
        ? route('dashboard')
        : route('knowledge.index');
@endphp

<x-app-layout>

    <div class="min-h-screen bg-[#ececf2] px-4 py-6 sm:px-6 sm:py-8 lg:px-8">
        <div class="mx-auto w-full max-w-2xl">

            {{-- Page Header --}}
            <x-page-header
                title="Knowledge Detail"
                description="Review your saved knowledge."
            />

            {{-- Success Message --}}
            @if (session('success'))
                <div class="mt-6 rounded-lg border border-[#D5D6E2] bg-white px-4 py-3 text-sm text-[#191923]">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Knowledge --}}
            <div class="mt-6">
                <x-card class="p-6 sm:p-8">

                    {{-- Title --}}
                    <h1 class="text-2xl font-semibold leading-7 text-[#191923]">
                        {{ $knowledgeEntry->title }}
                    </h1>

                    {{-- Source --}}
                    @if ($knowledgeEntry->source_url)
                        <div class="mt-6">
                            <h2 class="text-sm font-medium text-[#191923]">
                                Source
                            </h2>

                            <a
                                href="{{ $knowledgeEntry->source_url }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="mt-2 block break-all text-sm text-[#0E79B2] hover:underline"
                            >
                                {{ $knowledgeEntry->source_url }}
                            </a>
                        </div>
                    @endif

                    {{-- Notes --}}
                    @if ($knowledgeEntry->notes)
                        <div class="mt-6">
                            <h2 class="text-sm font-medium text-[#191923]">
                                Personal Notes
                            </h2>

                            <p class="mt-2 whitespace-pre-line text-sm leading-6 text-gray-500">
                                {{ $knowledgeEntry->notes }}
                            </p>
                        </div>
                    @endif

                    {{-- Actions --}}
                    <div class="mt-8 flex flex-wrap items-center gap-3">

                        <x-button
                            href="{{ route('knowledge.edit', [
                                'knowledgeEntry' => $knowledgeEntry,
                                'from' => 'detail',
                            ]) }}"
                        >
                            Edit Knowledge
                        </x-button>

                        <form
                            method="POST"
                            action="{{ route('knowledge.destroy', $knowledgeEntry) }}"
                            onsubmit="return confirm('Are you sure you want to delete this knowledge?')"
                        >
                            @csrf
                            @method('DELETE')

                            <input
                                type="hidden"
                                name="from"
                                value="{{ request('from', 'dashboard') }}"
                            >

                            <x-button
                                type="submit"
                                variant="danger"
                            >
                                Delete Knowledge
                            </x-button>
                        </form>

                        <x-button
                            variant="secondary"
                            href="{{ $backRoute }}"
                        >
                            ← Back
                        </x-button>

                    </div>

                </x-card>
            </div>
        </div>
    </div>
</x-app-layout>