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
        if (Auth::guard('client')->attempt($credentials, $remember)) {
            return redirect()->route('client.home.index')->with('flash_success', 'Thành công');
        }

        return redirect()->back()->withErrors([__('auth.failed')]);
    }

    /**
     * Handle register
     *
     * @param AuthRegisterRequest $request
     * @return RedirectResponse
     */
    public function register(AuthRegisterRequest $request): RedirectResponse
    {
        $data = $request->only([
            'email',
            'name',
            'password'
        ]);
        $data['password'] = Hash::make($data['password']);

        $client = Client::query()->create($data);
        if (empty($client)) {
            return redirect()->back()->withErrors([__('auth.failed')]);
        }

        return redirect()->route('client.home.index')->with('flash_success', 'Tạo tài khoản thành công');
    }
}
