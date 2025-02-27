<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans bg-gray-100 dark:bg-gray-900">

    <div class="flex w-screen h-screen" x-data="{ sidebarState: $persist(true) }" x-cloak>
        <!-- Sidebar -->
        @include('admin.layouts.sidebar')

        <div class="overflow-auto flex-1 text-gray-900 bg-gray-100 dark:text-gray-300 dark:bg-gray-900">
            <!-- Navbar -->
            @include('admin.layouts.navigation')

            <!-- Page Content -->
            <div class="p-6 mt-6">

                @yield('content')

            </div>
        </div>
    </div>

</body>

</html>
