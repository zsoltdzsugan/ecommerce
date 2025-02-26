@extends('admin.layouts.index')
@section('title', 'dashboard')

@section('content')
    <h1 class="text-2xl font-semibold text-gray-900 dark:text-gray-300">Welcome to the Admin Dashboard</h1>
    <!-- Add your dashboard content here -->
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3">
        <div class="p-4 bg-white rounded-lg shadow-md dark:bg-gray-900/50">
            <h2 class="text-xl font-semibold">Total Users</h2>
            <p class="text-2xl">1,245</p>
        </div>

        <div class="p-4 bg-white rounded-lg shadow-md dark:bg-gray-900/50">
            <h2 class="text-xl font-semibold">Sales</h2>
            <p class="text-2xl">$25,480</p>
        </div>

        <div class="p-4 bg-white rounded-lg shadow-md dark:bg-gray-900/50">
            <h2 class="text-xl font-semibold">Active Orders</h2>
            <p class="text-2xl">340</p>
        </div>
    </div>
@endsection
