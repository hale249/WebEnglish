<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProfileChangePasswordRequest;
use App\Http\Requests\Admin\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Show form update profile
     *
     * @return View
     */
    public function index(): View
    {
        $user = auth()->user();

        return view('admin.elements.profile.index', compact('user'));
    }

    /**
     * Update user profile
     *
     * @param ProfileUpdateRequest $request
     * @return RedirectResponse
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $data = $request->only(['name']);
        $user = User::query()->findOrFail(auth()->id());
        $user->update($data);

        return redirect()->back()->with('flash_success', 'Cập nhật thông tin thành công');
    }

    /**
     * Show form change password
     *
     * @return View
     */
    public function showFormChangePassword(): View
    {
        $user = auth()->user();

        return view('admin.elements.profile.change_password', compact('user'));
    }

    /**
     * Change password
     *
     * @param ProfileChangePasswordRequest $request
     * @return RedirectResponse
     */
    public function changePassword(ProfileChangePasswordRequest $request): RedirectResponse
    {
        $oldPassword = $request->input('old_password');
        $user = User::query()->findOrFail(auth()->id());
        if (!Hash::check($oldPassword, $user->password)) {
            return redirect()->back()->withErrors(['Mật khẩu cũ sai']);
        }

        $data = $request->only(['password']);
        $user->update($data);

        return redirect()->back()->with('flash_success', 'Cập nhật mật khẩu thành công');
    }
}
