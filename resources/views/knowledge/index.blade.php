<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            My Knowledge
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                <h2 class="text-xl font-semibold mb-6">
                    All Knowledge
                </h2>

                @forelse ($knowledgeEntries as $knowledgeEntry)
                    <div class="border-b py-4 flex items-center justify-between">
                        <h3 class="font-semibold">
                            {{ $knowledgeEntry->title }}
                        </h3>
                        <a href="{{ route('knowledge.show', $knowledgeEntry) }}"
                            class="text-blue-600 hover:underline" >
                            View Knowledge →
                        </a>
                    </div>

                @empty

                    <p class="text-gray-600">
                        You have not saved any knowledge yet.
                    </p>

                @endforelse

            </div>
        </div>
    </div>
</x-app-layout>