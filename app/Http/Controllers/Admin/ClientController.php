<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ClientUpdateRequest;
use App\Http\Requests\Admin\UserChangePasswordRequest;
use App\Models\Client;
use App\Models\ClientQuiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();
        $users = Client::query();
        if (!empty($data['name'])) {
            $users = $users->where('name','like', '%' . $data['name'] . '%');
        }

        if (!empty($data['email'])) {
            $users = $users->where('email','like', '%' . $data['email'] . '%');
        }
        $users = $users->paginate(Constant::DEFAULT_PER_PAGE);

        return view('admin.elements.client.index', compact('users'));
    }

    public function edit(int $id)
    {
        $user = Client::query()->findOrFail($id);

        return view('admin.elements.client.edit', compact('user'));
    }

    public function update(ClientUpdateRequest $request, int $id)
    {
        $data = $request->only([
            'name',
        ]);

        $user = Client::query()->findOrFail($id);
        $user->update($data);

        return redirect()->back()->with('flash_success', 'Cập nhật người dùng thành công');
    }

    public function showFormChangePassword(int $id)
    {
        $user = Client::query()->findOrFail($id);

        return view('admin.elements.client.change_password', compact('user'));
    }

    public function changePassword(UserChangePasswordRequest $request, int $id)
    {
        $password = $request->input('password');
        $user = Client::query()->findOrFail($id);
        $password = Hash::make($password);
        $user->update(['password' => $password]);

        return redirect()->route('admin.clients.index')->with('flash_success', 'Thanh đổi mật khẩu thành công');
    }

    public function show($clientId)
    {
        $client = Client::query()->where('id', $clientId)->first();
        if (empty($client)) {
            return redirect()->route('admin.clients.index')->with('flash_danger', 'Không tìm thấy thông tin học viên');
        }

        $questionList = ClientQuiz::query()
            ->with(['quiz'])
            ->where('client_id', $clientId)
            ->paginate(Constant::DEFAULT_PER_PAGE);

        return view('admin.elements.client.show', compact('client', 'questionList'));
    }
}
