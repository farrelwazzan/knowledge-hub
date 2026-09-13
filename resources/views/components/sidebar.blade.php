<aside class="w-16 lg:w-60 min-h-screen bg-[#191923] text-white flex flex-col">

    <!-- Brand -->
    <div class="px-4 py-6 lg:px-6">
        <h1 class="hidden text-lg font-semibold lg:block">
            Knowledge Hub
        </h1>

        <h1 class="text-lg font-semibold lg:hidden text-center">
            KH
        </h1>
    </div>
    
    <!-- Navigation -->
    <nav class="px-4 mt-4">

        <p class="hidden px-3 mb-4 text-xs font-medium text-gray-400 uppercase tracking-wider lg:block">
            Workspace
        </p>

        <div class="space-y-1">

            <!-- Dashboard -->
            <a
                href="{{ route('dashboard') }}"
                class="flex items-center justify-center lg:justify-start
                    h-8 w-8 mx-auto mb-4 lg:mb-1
                    lg:h-auto lg:w-auto lg:mx-0
                    lg:gap-3 lg:px-3 lg:py-2.5
                    rounded-lg text-sm font-medium
                    {{ request()->routeIs('dashboard') ? 'bg-white/10' : '' }}
                    {{ request()->routeIs('dashboard') ? 'text-white' : 'text-gray-400' }}
                    hover:bg-white/5 hover:text-white
                    transition-colors duration-150"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6 lg:h-[18px] lg:w-[18px]"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                >
                    <path d="M9 3a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 12a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2zm10 -4a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 -8a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2z" />
                </svg>

                <span class="hidden lg:inline">
                    Dashboard
                </span>
            </a>

            <!-- Library -->
            <a
                href="{{ route('knowledge.index') }}"
                class="flex items-center justify-center lg:justify-start
                    h-8 w-8 mx-auto mb-4 lg:mb-1
                    lg:h-auto lg:w-auto lg:mx-0
                    lg:gap-3 lg:px-3 lg:py-2.5
                    rounded-lg text-sm font-medium
                    {{ request()->routeIs('knowledge.index') ? 'bg-white/10' : '' }}
                    {{ request()->routeIs('knowledge.index') ? 'text-white' : 'text-gray-400' }}
                    hover:bg-white/5 hover:text-white
                    transition-colors duration-150"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-[20px] w-[20px] lg:h-[18px] lg:w-[18px]"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                >
                    <path d="M5 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />
                    <path d="M9 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />
                    <path d="M5 8h4" />
                    <path d="M9 16h4" />
                    <path d="M13.803 4.56l2.184 -.53c.562 -.135 1.133 .19 1.282 .732l3.695 13.418a1.02 1.02 0 0 1 -.634 1.219l-.133 .041l-2.184 .53c-.562 .135 -1.133 -.19 -1.282 -.732l-3.695 -13.418a1.02 1.02 0 0 1 .634 -1.219l.133 -.041z" />
                    <path d="M14 9l4 -1" />
                    <path d="M16 16l3.923 -.98" />
                </svg>

                <span class="hidden lg:inline">
                    Library
                </span>
            </a>

        </div>

        <!-- Account -->
        <div class="mt-8">

            <p class="hidden px-3 mb-2 text-xs font-medium text-gray-400 uppercase tracking-wider lg:block">
                Account
            </p>

            <div class="space-y-1">

                <!-- Settings -->
                <a
                    href="#"
                    class="flex items-center justify-center lg:justify-start
                        h-8 w-8 mx-auto
                        lg:h-auto lg:w-auto lg:mx-0
                        lg:gap-3 lg:px-3 lg:py-2.5
                        rounded-lg text-sm font-medium
                        text-gray-400
                        hover:bg-white/5 hover:text-white
                        transition-colors duration-150"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-[18px] w-[18px]"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <path d="M19.875 6.27a2.225 2.225 0 0 1 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z" />
                        <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                    </svg>

                    <span class="hidden lg:inline">
                        Settings
                    </span>
                </a>

            </div>
        </div>

    </nav>

    <!-- Logout -->
    <form
        method="POST"
        action="{{ route('logout') }}"
        class="mt-auto px-4 pb-6"
    >
        @csrf

        <button
        class="w-full flex items-center justify-center lg:justify-start
            h-8 w-8 mx-auto
            lg:h-auto lg:w-full lg:mx-0
            lg:gap-3 lg:px-3 lg:py-2.5
            rounded-lg text-sm font-medium
            text-gray-400
            hover:bg-white/5 hover:text-white
            transition-colors duration-150"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="18"
                height="18"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1"
                stroke-linecap="round"
                stroke-linejoin="round"
            >
                <path d="M10 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" />
                <path d="M15 12h-12l3 -3" />
                <path d="M6 15l-3 -3" />
            </svg>

            <span class="hidden lg:inline">
                Logout
            </span>
        </button>
    </form>

</aside>