@extends('admin.layouts.app')

@section('title', 'Tạo mới người dùng')

@section('content')
    <div class="card">
        <form action="{{ route('admin.users.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-0">
                    Người dùng
                    <small class="text-muted">Tạo mới</small>
                </h4>
                <hr>
                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="name">Tên</label>

                    <div class="col-md-10">
                        <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Nhập tên..." maxlength="191" required="" autofocus="">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="email">Email</label>

                    <div class="col-md-10">
                        <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Nhập email..." maxlength="191" required="" autofocus="">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="password">Mật khẩu</label>

                    <div class="col-md-10">
                        <input class="form-control" type="password" name="password" id="password" placeholder="Nhập mật khẩu..." maxlength="191" required="" autofocus="">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="password-confirmation">Xác nhận mật khẩu</label>

                    <div class="col-md-10">
                        <input class="form-control" type="password" name="password_confirmation" id="password-confirmation" placeholder="Xác nhập mật khẩu..." maxlength="191" required="" autofocus="">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="role">Vai trò</label>

                    <div class="col-md-10">
                        <select name="role" id="role" class="form-control">
                            <option value="">Chọn vai trò</option>
                            @foreach(\App\Helpers\PermissionConstant::ROLES as $role)
                                <option value="{{ $role }}">{{ $role }}</option>
                            @endforeach
                        </select>
                    </div><!--col-->
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('admin.users.index') }}" class="btn btn-danger btn-sm">Hủy</a>
                    </div>

                    <div class="col text-right">
                        <button type="submit" class="btn btn-success btn-sm">Tạo mới</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
