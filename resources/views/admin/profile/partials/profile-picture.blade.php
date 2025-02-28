<section>
    <div class="flex flex-col mt-20 space-y-6">
        <div class="flex space-y-6 mt-6">
            <div class="max-h-40 border border-gray-500 rounded-md">
                <img src="{{ $user->image ? asset('storage/profile_pictures/' . $user->image) : "https://placehold.co/100x150" }}" alt="Profile picture" class="h-full w-full rounded-md">
            </div>
        </div>
    </div>
</section>
