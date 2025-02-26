<nav class="flex justify-between items-center p-4 text-gray-200 bg-gray-900 shadow-md">
    <div class="flex gap-4 items-center">
        <!-- Sidebar Toggle -->
        <button class="p-2 bg-gray-800 rounded-md hover:bg-gray-700" onclick="toggleSidebar()">
            <svg class="w-6 h-6 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
        <span class="text-xl font-semibold">Dashboard</span>
    </div>

    <div>
        <!-- User Profile / Logout -->
        <button
            class="p-2 text-gray-100 bg-red-500 rounded-md dark:bg-red-700 dark:hover:bg-red-700/75 hover:bg-red-500/75">Logout</button>
    </div>
</nav>
