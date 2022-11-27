<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AuthLoginRequest;
use App\Http\Requests\Admin\AuthRegisterRequest;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthClientController extends Controller
{
    public function showFormLogin()
    {
        if (!empty(Auth::guard('client')->user())) {
            return redirect()->route('client.home.index');
        }

        return view('client.elements.auth.login');
    }

    /**
     * Handle login
     *
     * @param AuthLoginRequest $request
     * @return RedirectResponse
     */
    public function login(AuthLoginRequest $request): RedirectResponse
    {
        if (!empty(Auth::guard('client')->user())) {
            return redirect()->route('client.home.index');
        }

        $credentials = $request->only([
            'email',
            'password'
        ]);
        $remember = $request->input('remember_me');
        if (Auth::guard('client')->attempt($credentials, $remember)) {
            return redirect()->route('client.home.index')->with('flash_success', 'Thành công');
        }

        return redirect()->back()->withErrors([__('Đăng nhập thất bại. Vui lòng xem lại tài khoản/ mật khẩu')]);
    }

    public function showFormRegister()
    {
        if (!empty(Auth::guard('client')->user())) {
            return redirect()->route('client.home.index');
        }

        return view('client.elements.auth.register');
    }

    public function register(AuthRegisterRequest $request)
    {
        if (!empty(Auth::guard('client')->user())) {
            return redirect()->route('client.home.index');
        }

        $data = $request->only([
            'email',
            'name',
            'password'
        ]);
        $data['password'] = Hash::make($data['password']);

        $client = Client::query()->create($data);
        if (empty($client)) {
            return redirect()->back()->with('flash_danger', 'Tạo tài khoản thất bại');
        }

        return redirect()->route('client.auth.form.login')->with('flash_success', 'Tạo tài khoản thành công');
    }

    /**
     * Logout
     *
     * @return RedirectResponse
     */
    public function logout(): RedirectResponse
    {
        if (empty(Auth::guard('client')->user())) {
            return redirect()->route('client.home.index');
        }

        Auth::guard('client')->logout();

        return redirect()->route('client.home.index')->with('flash_success', 'Thành công');
    }
}
