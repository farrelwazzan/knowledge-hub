<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Knowledge Detail
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                <h1 class="text-2xl font-semibold text-gray-900">
                    {{ $knowledgeEntry->title }}
                </h1>

                @if ($knowledgeEntry->source_url)

                    <div class="mt-6">
                        <h2 class="font-semibold text-gray-900">
                            Source
                        </h2>

                        <a
                            href="{{ $knowledgeEntry->source_url }}"
                            target="_blank"
                            class="inline-block mt-2 text-blue-600 hover:underline"
                        >
                            {{ $knowledgeEntry->source_url }}
                        </a>
                    </div>

                @endif

                @if ($knowledgeEntry->notes)

                    <div class="mt-6">
                        <h2 class="font-semibold text-gray-900">
                            Personal Notes
                        </h2>

                        <p class="mt-2 text-gray-700 whitespace-pre-line">
                            {{ $knowledgeEntry->notes }}
                        </p>
                    </div>

                @endif

                <div class="mt-8">
                    <a
                        href="{{ route('knowledge.index') }}"
                        class="text-gray-600 hover:underline"
                    >
                        ← Back to My Knowledge
                    </a>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>