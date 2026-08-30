<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Knowledge Hub
        </h2>
    </x-slot>

```
<div class="py-12">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

        @if ($knowledgeEntries->isEmpty())

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
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

            <div class="flex items-center justify-between mb-6">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-900">
                        Welcome back
                    </h2>

                    <p class="mt-1 text-gray-600">
                        Here are your recently saved knowledge entries.
                    </p>
                </div>

                <a
                    href="{{ route('knowledge.create') }}"
                    class="px-4 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-700"
                >
                    + Add Knowledge
                </a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <h3 class="text-lg font-semibold text-gray-900 mb-4">
                        Recent Knowledge
                    </h3>

                    <div class="space-y-4">

                        @foreach ($knowledgeEntries as $knowledgeEntry)

                            <div class="border rounded-lg p-4">

                                <h4 class="text-lg font-semibold text-gray-900">
                                    {{ $knowledgeEntry->title }}
                                </h4>

                                @if ($knowledgeEntry->source_url)

                                    <a
                                        href="{{ $knowledgeEntry->source_url }}"
                                        target="_blank"
                                        class="block mt-2 text-sm text-blue-600 hover:underline"
                                    >
                                        {{ $knowledgeEntry->source_url }}
                                    </a>

                                @endif

                                @if ($knowledgeEntry->notes)

                                    <p class="mt-3 text-gray-600">
                                        {{ $knowledgeEntry->notes }}
                                    </p>

                                @endif

                            </div>

                        @endforeach

                    </div>

                </div>
            </div>

        @endif

    </div>
</div>
```

</x-app-layout>
