@extends('admin.layouts.app')

@section('title','Cập nhật mật khẩu')

@section('content')
    <div class="card">
        <form action="{{ route('admin.profile.change_password') }}" method="POST">
            @method('put')
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-0">
                    Cập nhật mật khẩu
                    <small class="text-muted">{{ $user->name }}</small>
                </h4>
                <hr>
                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="old_password">Email</label>

                    <div class="col-md-10">
                        <input class="form-control" type="password" name="old_password" id="old_password" value="" placeholder="Nhập email..." maxlength="191" required="" autofocus="">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="password">Mật khẩu</label>

                    <div class="col-md-10">
                        <input class="form-control" type="password" name="password" id="password" placeholder="Nhập mật khẩu..." maxlength="191" required="" autofocus="">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="password-confirmation">Xác thực mật khẩu</label>

                    <div class="col-md-10">
                        <input class="form-control" type="password" name="password_confirmation" id="password-confirmation" placeholder="Nhập xác thực mật khẩu..." maxlength="191" required="" autofocus="">
                    </div><!--col-->
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('admin.dashboard.index') }}" class="btn btn-danger btn-sm">Hủy</a>
                    </div>

                    <div class="col text-right">
                        <button type="submit" class="btn btn-success btn-sm">Cập nhật</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
