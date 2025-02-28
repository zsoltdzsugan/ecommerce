<aside id="sidebar" x-show="sidebarState" x-transition class="flex flex-col justify-between h-screen text-gray-200 bg-gray-800 sm:w-64">
    <div class="p-4">
        <span class="grid overflow-hidden place-content-center w-56 h-10 text-lg text-gray-900 rounded-md">
            <img src="{{ asset('assets/img/brand-name.png') }}" alt="" class="object-cover w-full">
        </span>

        <ul class="mt-6 space-y-1 text-gray-100">
            <li>
                <a href="{{ route('admin.dashboard') }}" class="block py-2 px-4 font-medium rounded-md hover:bg-gray-700">
                    Dashboard
                </a>
            </li>

            <li>
                <details class="group [&_summary::-webkit-details-marker]:hidden">
                    <summary
                        class="flex justify-between items-center py-2 px-4 rounded-md cursor-pointer hover:bg-gray-700">
                        <span class="font-medium"> Teams </span>

                        <span class="transition duration-300 shrink-0 group-open:-rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </summary>

                    <ul class="px-4 mt-2 space-y-1 text-gray-200">
                        <li>
                            <a href="#" class="block py-2 px-4 font-medium rounded-md hover:bg-gray-700">
                                Banned Users
                            </a>
                        </li>

                        <li>
                            <a href="#" class="block py-2 px-4 font-medium rounded-md hover:bg-gray-700">
                                Calendar
                            </a>
                        </li>
                    </ul>
                </details>
            </li>

            <li>
                <a href="#" class="block py-2 px-4 font-medium rounded-md hover:bg-gray-700">
                    Billing
                </a>
            </li>

            <li>
                <a href="#" class="block py-2 px-4 font-medium rounded-md hover:bg-gray-700">
                    Invoices
                </a>
            </li>

            <li>
                <details class="group [&_summary::-webkit-details-marker]:hidden">
                    <summary
                        class="flex justify-between items-center py-2 px-4 rounded-md cursor-pointer hover:bg-gray-700">
                        <span class="font-medium"> Account </span>

                        <span class="transition duration-300 shrink-0 group-open:-rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </summary>

                    <ul class="px-4 mt-2 space-y-1 text-gray-200">
                        <li>
                            <a href="#" class="block py-2 px-4 font-medium rounded-md hover:bg-gray-700">
                                Details
                            </a>
                        </li>

                        <li>
                            <a href="#" class="block py-2 px-4 font-medium rounded-md hover:bg-gray-700">
                                Security
                            </a>
                        </li>

                        <li>
                            <a href="#" class="block py-2 px-4 font-medium rounded-md hover:bg-gray-700">
                                Logout
                            </a>
                        </li>
                    </ul>
                </details>
            </li>
        </ul>
    </div>

</aside>
