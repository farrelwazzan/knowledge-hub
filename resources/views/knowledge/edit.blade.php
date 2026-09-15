<x-app-layout>
@php
    $cancelRoute = match (request('from')) {
        'library' => route('knowledge.index'),
        'detail' => route('knowledge.show', $knowledgeEntry),
        default => route('dashboard'),
    };
@endphp
    <div class="min-h-screen bg-[#ececf2] px-4 py-6 sm:px-6 sm:py-8 lg:px-8">
        <div class="mx-auto w-full max-w-2xl">

            {{-- Page Header --}}
            <x-page-header
                title="Edit Knowledge"
                description="Update your saved knowledge."
            />

            {{-- Form --}}
            <div class="mt-8">
                <x-card class="p-6 sm:p-8">

                    <form
                        method="POST"
                        action="{{ route('knowledge.update', $knowledgeEntry) }}"
                        x-data="{ submitting: false }"
                        @submit="submitting = true"
                    >
                        @csrf
                        @method('PATCH')

                        <input
                            type="hidden"
                            name="from"
                            value="{{ request('from', 'dashboard') }}"
                        >

                        {{-- Title --}}
                        <div>
                            <label
                                for="title"
                                class="block text-sm font-medium text-[#191923]"
                            >
                                Title
                            </label>

                            <input
                                id="title"
                                name="title"
                                type="text"
                                value="{{ old('title', $knowledgeEntry->title) }}"
                                placeholder="Enter a title..."
                                class="mt-2 block w-full rounded-lg border bg-white px-3 py-2.5 text-sm text-[#191923] placeholder-[#8488AC] outline-none transition-colors
                                    {{ $errors->has('title')
                                        ? 'border-red-500 focus:border-red-500 focus:ring-red-500/20'
                                        : 'border-[#D5D6E2] focus:border-[#0E79B2] focus:ring-[#0E79B2]/20'
                                    }}"
                            >

                            @error('title')
                                <p class="mt-1.5 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Source URL --}}
                        <div class="mt-5">
                            <label
                                for="source_url"
                                class="block text-sm font-medium text-[#191923]"
                            >
                                Source URL
                            </label>

                            <input
                                id="source_url"
                                name="source_url"
                                type="url"
                                value="{{ old('source_url', $knowledgeEntry->source_url) }}"
                                placeholder="Paste the source URL..."
                                class="mt-2 block w-full rounded-lg border bg-white px-3 py-2.5 text-sm text-[#191923] placeholder-[#8488AC] outline-none transition-colors
                                    {{ $errors->has('source_url')
                                        ? 'border-red-500 focus:border-red-500 focus:ring-red-500/20'
                                        : 'border-[#D5D6E2] focus:border-[#0E79B2] focus:ring-[#0E79B2]/20'
                                    }}"
                            >

                            @error('source_url')
                                <p class="mt-1.5 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Notes --}}
                        <div class="mt-5">
                            <label
                                for="notes"
                                class="block text-sm font-medium text-[#191923]"
                            >
                                Notes
                            </label>

                            <textarea
                                id="notes"
                                name="notes"
                                rows="6"
                                placeholder="Add your personal notes or context..."
                                class="mt-2 block w-full resize-y rounded-lg border bg-white px-3 py-2.5 text-sm leading-6 text-[#191923] placeholder-[#8488AC] outline-none transition-colors
                                    {{ $errors->has('notes')
                                        ? 'border-red-500 focus:border-red-500 focus:ring-red-500/20'
                                        : 'border-[#D5D6E2] focus:border-[#0E79B2] focus:ring-[#0E79B2]/20'
                                    }}"
                            >{{ old('notes', $knowledgeEntry->notes) }}</textarea>

                            @error('notes')
                                <p class="mt-1.5 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Actions --}}
                        <div class="mt-6 flex items-center justify-end gap-3">

                            <x-button
                                variant="secondary"
                                href="{{ $cancelRoute }}"
                            >
                                Cancel
                            </x-button>

                            <x-button
                                type="submit"
                                x-bind:disabled="submitting"
                            >
                                <span x-show="!submitting">
                                    Update Knowledge
                                </span>

                                <span x-show="submitting">
                                    Updating...
                                </span>
                            </x-button>

                        </div>

                    </form>

                </x-card>
            </div>

        </div>
    </div>

</x-app-layout>
