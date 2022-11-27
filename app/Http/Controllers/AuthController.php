<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\AuthLoginRequest;
use App\Http\Requests\Admin\AuthRegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AuthController extends Controller
{
    /**
     * Show form login
     *
     * @return View
     */
    public function showFormLogin(): View
    {
        return view('admin.elements.auth.login');
    }

    /**
     * Handle login
     *
     * @param AuthLoginRequest $request
     * @return RedirectResponse
     */
    public function login(AuthLoginRequest $request): RedirectResponse
    {
        $credentials = $request->only([
            'email',
            'password'
        ]);
        $remember = $request->input('remember_me');
        if (Auth::guard('web')->attempt($credentials, $remember)) {
            return redirect()->route('admin.dashboard.index')->with('flash_success', 'Thành công');
        }

        return redirect()->back()->withErrors([__('auth.failed')]);
    }

    /**
     * Logout
     *
     * @return RedirectResponse
     */
    public function logout(): RedirectResponse
    {
        Auth::guard('web')->logout();

        return redirect()->route('admin.auth.show-form-login')->with('flash_success', 'Thành công');
    }
}
