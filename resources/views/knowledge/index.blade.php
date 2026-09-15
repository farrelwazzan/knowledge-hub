<x-app-layout>

    <div class="min-h-screen bg-[#ececf2] px-4 py-6 sm:px-6 sm:py-8 lg:px-8">
        <div class="mx-auto w-full max-w-5xl">

            {{-- Page Header --}}
            <x-page-header
                title="Library"
                description="All your saved knowledge in one place."
            >
                <x-slot:action>
                    <x-button href="{{ route('knowledge.create', ['from' => 'library']) }}">
                        + Add Knowledge
                    </x-button>
                </x-slot:action>
            </x-page-header>

            {{-- Success Message --}}
            @if (session('success'))
                <div class="mt-6 rounded-lg border border-[#D5D6E2] bg-white px-4 py-3 text-sm text-[#191923]">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Knowledge List --}}
            @if ($knowledgeEntries->isEmpty())

                <div class="mt-8">
                    <x-card class="p-8">
                        <div class="py-12 text-center">
                            <h2 class="text-lg font-semibold text-[#191923]">
                                Your Library is Empty
                            </h2>

                            <p class="mt-2 text-sm text-gray-500">
                                Start saving knowledge that you want to remember.
                            </p>

                            <div class="mt-5">
                                <x-button href="{{ route('knowledge.create', ['from' => 'library']) }}">
                                    + Add Knowledge
                                </x-button>
                            </div>
                        </div>
                    </x-card>
                </div>

            @else

                <div class="mt-8 grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($knowledgeEntries as $knowledge)
                        <x-knowledge-card :knowledge="$knowledge" />
                    @endforeach
                </div>

            @endif

        </div>
    </div>

</x-app-layout>