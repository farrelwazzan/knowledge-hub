<header class="h-16 border-b border-gray-200 px-6">
    <div class="relative h-full flex items-center">

        {{-- Page Context --}}
        <div class="flex items-center gap-2">
            <span class="text-sm text-gray-400">
                Workspace
            </span>
            <span class="text-sm text-gray-300">
                /
            </span>
            <span class="text-sm font-medium text-gray-700">
                Library
            </span>
        </div>

        {{-- Search --}}
        <div class="absolute left-1/2 -translate-x-1/2 w-[440px]">
            <div class="h-10 flex items-center rounded-lg border border-gray-300 bg-white px-3 transition-colors focus-within:border-[#191923] focus-within:ring-2 focus-within:ring-[#191923]/10">

                {{-- Search Icon --}}
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-[18px] w-[18px] shrink-0 text-gray-500"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m21 21-4.35-4.35m1.35-5.4a6.75 6.75 0 1 1-13.5 0 6.75 6.75 0 0 1 13.5 0Z"
                    />
                </svg>

                {{-- Search Input --}}
                <input
                    type="search"
                    name="search"
                    placeholder="Search your knowledge..."
                    class="ml-2 w-full border-0 bg-transparent p-0 text-sm text-gray-700 placeholder:text-gray-400 focus:outline-none focus:ring-0"
                >

            </div>
        </div>

        {{-- Profile --}}
        <div 
            class="relative ml-auto"
            x-data="{ open: false }"
            @click.outside="open = false"
            @keydown.escape="open = false"
        >
            <button
                type="button"
                @click="open = !open"
                :aria-expanded="open"
                class="ml-auto flex items-center gap-3 rounded-lg px-2 py-1.5 transition-colors hover:bg-gray-100"
            >
                {{-- Avatar --}}
                <div class="flex h-9 w-9 items-center justify-center rounded-full bg-[#0E79B2]">
                    <span class="text-sm font-semibold text-white">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </span>
                </div>

                {{-- Username --}}
                <span class="text-sm font-medium text-gray-700">
                    {{ Auth::user()->name }}
                </span>

                {{-- Chevron --}}
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4 text-gray-400"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m6 9 6 6 6-6"
                    />
                </svg>
            </button>

            {{-- Account Dropdown --}}
            <div 
                x-show="open"
                class="absolute right-0 top-full z-50 mt-2 w-64 rounded-xl border border-gray-200 bg-white p-2 shadow-lg"
            >
                
                {{-- Account Information --}}
                <div class="flex items-center gap-3 px-3 py-2">
                    
                    {{-- Avatar --}}
                    <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-[#0E79B2]">
                        <span class="text-xs font-semibold text-white">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </span>
                    </div>

                    {{-- Account Details --}}
                    <div class="min-w-0">
                        <p class="truncate text-sm font-medium text-gray-800">
                            {{ Auth::user()->name }}
                        </p>

                        <p class="truncate text-xs text-gray-500">
                            {{ Auth::user()->email }}
                        </p>
                    </div>

                </div>
                <div class="my-1 border-t border-gray-300"></div>

                {{-- Menu --}}
                <a
                    href="#"
                    class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm text-gray-700 hover:bg-gray-100"
                >
                    {{-- Profile Icon --}}
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 shrink-0 text-gray-500"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15.75 6.75a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 20.25a7.5 7.5 0 0 1 15 0"
                        />
                    </svg>

                    <span>Profile</span>
                </a>

                <a
                    href="#"
                    class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm text-gray-700 hover:bg-gray-100"
                >
                    {{-- Settings Icon --}}
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 shrink-0 text-gray-500"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066-2.573c-.94-1.543.826-3.31 2.37-2.37a1.724 1.724 0 0 0 2.572-1.065Z"
                        />
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                        />
                    </svg>

                    <span>Settings</span>
                </a>

                <div class="my-1 border-t border-gray-300"></div>

                {{-- Logout --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button
                        type="submit"
                        class="flex w-full items-center gap-3 rounded-lg px-3 py-2 text-left text-sm text-gray-700 hover:bg-gray-100"
                    >
                        {{-- Logout Icon --}}
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 shrink-0 text-gray-500"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6A2.25 2.25 0 0 0 5.25 5.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15"
                            />
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m18 15 3-3m0 0-3-3m3 3H9"
                            />
                        </svg>

                        <span>Log out</span>
                    </button>
                </form>

            </div>
        </div>
    </div>
</header>