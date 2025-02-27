<nav class="text-gray-200 bg-gray-800">
    <div class="flex gap-4 justify-between items-center px-4 mx-auto h-16 sm:px-6 lg:px-8 max-w-screen">
        <div class="flex items-center">
            <!-- Sidebar Toggle -->
            <button class="p-2 bg-gray-200 rounded-md hover:bg-gray-300"
                @click="sidebarState = ! sidebarState">
                <svg class="w-6 h-6 text-sm text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>

        <div class="flex flex-1 justify-end items-center md:justify-between">
            <p class="text-xl font-semibold">{{ __(ucwords(explode('.', Route::currentRouteName())[1] ?? 'Dashboard')) }}</p>
            <div class="flex gap-4 items-center">
                <div class="text-sm font-medium text-gray-200">{{ Auth::user()->email }}</div>
                <div class="sm:flex sm:gap-4">
                    <a class="block py-2.5 px-5 text-sm font-medium text-gray-900 bg-gray-200 rounded-md transition hover:bg-gray-300"
                        href="{{ route('admin.profile.edit') }}">
                        Profile
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="hidden py-2.5 px-5 text-sm font-medium text-gray-100 bg-red-500 rounded-md transition sm:block dark:bg-red-700 hover:bg-red-500/75 hover:dark:bg-red-700/75"
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault();this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </div>

            </div>
        </div>
    </div>
</nav>
