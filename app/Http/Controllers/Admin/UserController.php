<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserChangePasswordRequest;
use App\Http\Requests\Admin\UserStoreRequest;
use App\Http\Requests\Admin\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Show list users
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
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

    /**
     * Show form create user
     *
     * @return View
     */
    public function create(): View
    {
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

        return redirect()->back()->with('flash_success', 'Thêm mới người dùng thành công');
    }

    /**
     * Show form edit user
     *
     * @param int $id
     * @return View
     */
    public function edit(int $id): View
    {
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

        return redirect()->back()->with('flash_success', 'Cập nhật người dùng thành công');
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

    public function showFormChangePassword(int $id): View
    {
        $user = User::query()->findOrFail($id);

        return view('admin.elements.user.change_password', compact('user'));
    }

    public function changePassword(UserChangePasswordRequest $request, int $id)
    {
        $password = $request->input('password');
        $user = User::query()->findOrFail($id);
        $user->update(['password' => $password]);

        return redirect()->back()->with('flash_success', 'Thanh đổi mật khẩu thành công');
    }
}
