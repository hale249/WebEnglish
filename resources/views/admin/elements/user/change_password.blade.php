@extends('admin.layouts.app')

@section('title', 'Thay đổi mật khẩu')

@section('content')
    <div class="card">
        <form action="{{ route('admin.users.change_password', $user->id) }}" method="POST">
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-0">
                    Người dùng
                    <small class="text-muted">Thay đổi mật khẩu</small>
                </h4>
                <hr>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="password">Mật khẩu</label>

                    <div class="col-md-10">
                        <input class="form-control" type="password" name="password" id="password" placeholder="Nhập mật khẩu..." maxlength="191" required="" autofocus="">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="password-confirmation">Xác nhận mật khẩu</label>

                    <div class="col-md-10">
                        <input class="form-control" type="password" name="password_confirmation" id="password-confirmation" placeholder="Nhập xác nhận mật khẩu..." maxlength="191" required="" autofocus="">
                    </div><!--col-->
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('admin.users.index') }}" class="btn btn-danger btn-sm">Hủy</a>
                    </div>

                    <div class="col text-right">
                        <button type="submit" class="btn btn-success btn-sm">Cập nhật</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
