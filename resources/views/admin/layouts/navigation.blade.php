<nav class="text-gray-200 bg-gray-900">
    <div class="flex gap-4 justify-between items-center px-4 mx-auto h-16 sm:px-6 lg:px-8 max-w-screen">
        <div class="flex items-center">
            <!-- Sidebar Toggle -->
            <button class="p-2 bg-gray-200 rounded-md hover:bg-gray-300" onclick="toggleSidebar()">
                <svg class="w-6 h-6 text-sm text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>

        <div class="flex flex-1 justify-end items-center md:justify-between">
            <p class="text-xl font-semibold">Dashboard</p>
            <div class="flex gap-4 items-center">
                <div class="sm:flex sm:gap-4">
                    <a class="block py-2.5 px-5 text-sm font-medium text-gray-900 bg-gray-200 rounded-md transition hover:bg-gray-300"
                        href="#">
                        Profile
                    </a>

                    <a class="hidden py-2.5 px-5 text-sm font-medium text-gray-100 bg-red-500 rounded-md transition sm:block dark:bg-red-700 hover:bg-red-500/75 hover:dark:bg-red-700/75"
                        href="#">
                        Logout
                    </a>
                </div>

            </div>
        </div>
    </div>
</nav>
