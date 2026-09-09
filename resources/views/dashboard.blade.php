<x-app-layout>

    <div class="py-8">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

            {{-- Page Header --}}
            <x-page-header
                title="Welcome back, {{ Auth::user()->name }}"
                description="Your personal knowledge workspace."
            >
                <x-slot:action>
                    <x-button
                        href="{{ route('knowledge.create') }}"
                    >
                        + Add Knowledge
                    </x-button>
                </x-slot:action>
            </x-page-header>


            {{-- Page Content --}}
            @if ($knowledgeEntries->isEmpty())

                {{-- Empty State --}}
                <div class="mt-8 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-8 text-center">

                        <h2 class="text-2xl font-semibold text-gray-900">
                            Your Knowledge Hub is Empty
                        </h2>

                        <p class="mt-3 text-gray-600">
                            Start saving information you want to remember
                            and easily find again later.
                        </p>

                        <a
                            href="{{ route('knowledge.create') }}"
                            class="inline-block mt-6 px-5 py-3 bg-gray-900 text-white rounded-lg hover:bg-gray-700"
                        >
                            + Add Your First Knowledge
                        </a>

                    </div>
                </div>

            @else

                {{-- Recent Knowledge --}}
                <div class="mt-8">
                    <x-card class="p-8">

                        <div class="flex items-center justify-between mb-6">

                            <h2 class="text-lg font-semibold text-[#191923]">
                                Recent Knowledge
                            </h2>

                            <a
                                href="{{ route('knowledge.index') }}"
                                class="inline-flex items-center gap-1 text-sm font-medium text-[#0E79B2] hover:underline"
                            >
                                View all
                                <span aria-hidden="true">→</span>
                            </a>

                        </div>

                        <div class="space-y-4">

                            @foreach ($knowledgeEntries as $knowledgeEntry)

                                <div class="border border-[#D5D6E2] rounded-lg p-5">

                                    <a
                                        href="{{ route('knowledge.show', $knowledgeEntry) }}"
                                        class="text-lg font-semibold text-[#191923] hover:underline"
                                    >
                                        {{ $knowledgeEntry->title }}
                                    </a>

                                    @if ($knowledgeEntry->source_url)

                                        <a
                                            href="{{ $knowledgeEntry->source_url }}"
                                            target="_blank"
                                            class="block mt-2 text-sm text-[#0E79B2] hover:underline"
                                        >
                                            {{ $knowledgeEntry->source_url }}
                                        </a>

                                    @endif

                                    @if ($knowledgeEntry->notes)

                                        <p class="mt-3 text-[#505279]">
                                            {{ $knowledgeEntry->notes }}
                                        </p>

                                    @endif

                                </div>

                            @endforeach

                        </div>

                    </x-card>
                </div>

            @endif

        </div>
    </div>

</x-app-layout>