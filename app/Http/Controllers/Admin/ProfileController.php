<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use App\Services\ProfileService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function __construct(protected ProfileService $profileService) {}

    public function edit(Request $request): View
    {
        return view('admin.profile.edit', [
            'user' => $request->user(),
        ]);
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $this->profileService->update($request);

        return Redirect::route('admin.profile.edit')->with('status', 'admin-profile-updated');
    }
}
