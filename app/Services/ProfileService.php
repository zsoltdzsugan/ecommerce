<?php

namespace App\Services;

use App\Http\Requests\ProfileUpdateRequest;

class ProfileService
{
    public function __construct(private ImageService $imageService) {}

    public function update(ProfileUpdateRequest $request): void
    {
        $user = $request->user();
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $this->imageService->delete($user->image);
            $path = $this->imageService->store($request->file('image'), 'profile_pictures');
            $validated['image'] = $path;
        }

        $user->fill($validated);
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();
    }
}
