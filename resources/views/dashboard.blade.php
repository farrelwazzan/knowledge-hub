<x-app-layout>

    <div class="min-h-screen bg-[#ececf2] px-4 py-6 sm:px-6 sm:py-8 lg:px-8">
        <div class="mx-auto w-full max-w-5xl">

            {{-- Page Header --}}
            <x-page-header
                title="Welcome back, {{ Auth::user()->name }}"
                description="Your personal knowledge workspace."
            >
                <x-slot:action>
                    <x-button href="{{ route('knowledge.create') }}">
                        + Add Knowledge
                    </x-button>
                </x-slot:action>
            </x-page-header>

            {{-- Page Content --}}
            @if ($totalKnowledge === 0)

                {{-- Empty State --}}
                <div class="mt-8">
                    <x-card class="p-8">
                        <div class="py-12 text-center">

                            <h2 class="text-lg font-semibold text-[#191923]">
                                Your Knowledge Hub is Empty
                            </h2>

                            <p class="mt-2 text-sm text-gray-500">
                                Start saving information you want to remember
                                and easily find again later.
                            </p>

                            <div class="mt-5">
                                <x-button href="{{ route('knowledge.create') }}">
                                    + Add Your First Knowledge
                                </x-button>
                            </div>

                        </div>
                    </x-card>
                </div>

            @else

                {{-- Total Knowledge --}}
                <div class="mt-8 w-full md:w-[42%]">
                    <x-card class="p-5">

                        <div class="flex items-start justify-between">

                            <div>
                                <p class="text-xs font-medium uppercase tracking-wide text-[#656992]">
                                    Total Knowledge
                                </p>

                                <p class="mt-2 text-4xl font-semibold text-[#191923]">
                                    {{ $totalKnowledge }}
                                </p>

                                <p class="mt-1 text-sm text-[#656992]">
                                    +{{ $addedThisWeek }} this week
                                </p>
                            </div>

                            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-[#0E79B2]/10 text-[#0E79B2]">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"
                                    />
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z"
                                    />
                                </svg>
                            </div>

                        </div>

                    </x-card>
                </div>


                {{-- Recent Knowledge --}}
                <div class="mt-8">

                    <div class="mb-5 flex items-center justify-between">

                        <div>
                            <h2 class="text-lg font-semibold text-[#191923]">
                                Recent Knowledge
                            </h2>

                            <p class="mt-1 text-sm text-gray-500">
                                Your latest saved knowledge.
                            </p>
                        </div>

                        <a
                            href="{{ route('knowledge.index') }}"
                            class="inline-flex items-center gap-1 text-sm font-medium text-[#0E79B2] hover:underline"
                        >
                            View all
                            <span aria-hidden="true">→</span>
                        </a>

                    </div>


                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">

                        @foreach ($recentKnowledge as $knowledge)
                            <x-knowledge-card :knowledge="$knowledge" />
                        @endforeach

                    </div>

                </div>

            @endif

        </div>
    </div>

</x-app-layout>