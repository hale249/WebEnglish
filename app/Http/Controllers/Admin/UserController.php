<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Helpers\PermissionConstant;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserChangePasswordRequest;
use App\Http\Requests\Admin\UserStoreRequest;
use App\Http\Requests\Admin\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::user()->role != PermissionConstant::ROLE_ADMIN) {
            return redirect()->route('admin.dashboard.index');
        }
        $data = $request->all();
        $users = User::query();
        if (!empty($data['role'])) {
            $users = $users->role($data['role']);
        }

        if (!empty($data['name'])) {
            $users = $users->where('name','like', '%' . $data['name'] . '%');
        }

        if (!empty($data['email'])) {
            $users = $users->where('email','like', '%' . $data['email'] . '%');
        }
        $users = $users->paginate(Constant::DEFAULT_PER_PAGE);

        return view('admin.elements.user.index', compact('users'));
    }

    public function create()
    {
        if (Auth::user()->role != PermissionConstant::ROLE_ADMIN) {
            return redirect()->route('admin.dashboard.index');
        }

        return view('admin.elements.user.create');
    }

    public function store(UserStoreRequest $request)
    {
        $data = $request->only([
            'name',
            'email',
            'password',
            'role'
        ]);
        $user = User::query()
            ->create($data);
        if (empty($user)) {
            return redirect()->back()->with('flash_danger', 'Tạo thất bại');
        }

        return redirect()->route('admin.users.index')->with('flash_success', 'Thêm mới người dùng thành công');
    }

    public function edit(int $id)
    {
        if (Auth::user()->role != PermissionConstant::ROLE_ADMIN) {
            return redirect()->route('admin.dashboard.index');
        }
        $user = User::query()->findOrFail($id);

        return view('admin.elements.user.edit', compact('user'));
    }

    public function update(UserUpdateRequest $request, int $id)
    {
        $data = $request->only([
            'name',
            'role'
        ]);


        $user = User::query()->findOrFail($id);
        $user->update($data);

        return redirect()->route('admin.users.index')->with('flash_success', 'Cập nhật người dùng thành công');
    }

    public function destroy(int $id)
    {
        $user = User::query()->findOrFail($id);
        if ($user->id === 1) {
            return redirect()->back()->withErrors(['Xóa người dùng tất bạn']);
        }

        $user->delete();

        return redirect()->back()->with('flash_success', 'Xóa nguời dùng thành công');
    }

    public function showFormChangePassword(int $id)
    {
        if (Auth::user()->role != PermissionConstant::ROLE_ADMIN) {
            return redirect()->route('admin.dashboard.index');
        }

        $user = User::query()->findOrFail($id);

        return view('admin.elements.user.change_password', compact('user'));
    }

    public function changePassword(UserChangePasswordRequest $request, int $id)
    {
        $password = $request->input('password');
        $user = User::query()->findOrFail($id);
        $password = Hash::make($password);
        $user->update(['password' => $password]);

        return redirect()->back()->with('flash_success', 'Thanh đổi mật khẩu thành công');
    }
}
