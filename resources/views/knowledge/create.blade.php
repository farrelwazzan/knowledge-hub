<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Knowledge
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <form method="POST" action="{{ route('knowledge.store') }}">
                    @csrf

                    <div>
                        <label for="title">Title</label>

                        <input
                            id="title"
                            name="title"
                            type="text"
                            value="{{ old('title') }}"
                        >

                        @error('title')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label for="source_url">Source URL</label>

                        <input
                            id="source_url"
                            name="source_url"
                            type="url"
                            value="{{ old('source_url') }}"
                        >

                        @error('source_url')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label for="notes">Notes</label>

                        <textarea
                            id="notes"
                            name="notes"
                        >{{ old('notes') }}</textarea>

                        @error('notes')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <button type="submit">
                            Save Knowledge
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>