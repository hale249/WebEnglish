<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\PasswordReset;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function showForgetPasswordForm()
    {
        return view('client.elements.auth.forget_password');
    }

    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:clients',
        ]);

        $token = Str::random(64);

        PasswordReset::query()->create([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('email.forget_password', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Đặt lại mật khẩu');
        });

        return back()->with('message', 'Chúng tôi đã gửi email liên kết đặt lại mật khẩu của bạn!');
    }

    public function showResetPasswordForm($token) {
        $passwordReset = PasswordReset::query()->where('token', $token)->first();
        if (empty($passwordReset)) {
            return redirect()->route('client.auth.form.login')->with('flash_danger', 'Mã không hợp lệ!');
        }

        return view('client.elements.auth.forget_password_link', ['token' => $token, 'passwordReset' => $passwordReset]);
    }

    public function submitResetPasswordForm(Request $request, $token)
    {
        $request->validate([
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);
        $passwordReset = PasswordReset::query()->where('token', $token)->first();
        if (empty($passwordReset)) {
            return redirect()->route('client.auth.form.login')->with('flash_danger', 'Mã không hợp lệ!');
        }

        $updatePassword = PasswordReset::query()
            ->where([
                'email' => $passwordReset->email,
                'token' => $request->token
            ])
            ->first();

        if(!$updatePassword){
            return back()->withInput()->with('error', 'Mã không hợp lệ!');
        }

        $user = Client::where('email', $passwordReset->email)
            ->update(['password' => Hash::make($request->password)]);
        if (empty($user)) {
            return redirect()->route('client.auth.form.login')->with('flash_danger', 'Cập nhật mật khẩu không thành công!');
        }

        PasswordReset::query()->where(['email'=> $passwordReset->email])->delete();

        return redirect()->route('client.auth.form.login')->with('flash_success', 'Mật khẩu của bạn đã được thay đổi!');
    }
}
