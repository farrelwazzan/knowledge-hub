<x-app-layout>

    <div class="mx-auto max-w-6xl px-6 py-8">

        {{-- Page Header --}}
        <x-page-header
            title="Library"
            description="All your saved knowledge in one place."
        >
            <x-slot:action>
                <x-button href="{{ route('knowledge.create') }}">
                    + Add Knowledge
                </x-button>
            </x-slot:action>
        </x-page-header>

        {{-- Knowledge List --}}
        @if ($knowledgeEntries->isEmpty())

            <x-card class="p-8">
                <div class="py-12 text-center">
                    <h2 class="text-lg font-semibold text-gray-800">
                        Your Library is Empty
                    </h2>

                    <p class="mt-2 text-sm text-gray-500">
                        Start saving knowledge that you want to remember.
                    </p>

                    <div class="mt-5">
                        <x-button href="{{ route('knowledge.create') }}">
                            + Add Knowledge
                        </x-button>
                    </div>
                </div>
            </x-card>

        @else

            <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($knowledgeEntries as $knowledge)
                    <x-knowledge-card :knowledge="$knowledge" />
                @endforeach
            </div>

        @endif

    </div>

</x-app-layout>