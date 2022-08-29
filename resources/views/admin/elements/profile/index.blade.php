@extends('admin.layouts.app')

@section('title', 'Hồ sơ cá nhân')

@section('content')
    <div class="card">
        <form action="{{ route('admin.profile.update') }}" method="POST">
            @method('put')
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <h4 class="card-title mb-0">
                            Thông tin tài khoản
                            <small class="text-muted">{{ $user->name }}</small>
                        </h4>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('admin.profile.show_form_change_password') }}" class="btn btn-primary btn-sm">Thay đổi mật khẩu</a>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="email">Email</label>

                    <div class="col-md-10">
                        <input class="form-control" type="email" name="email" id="email" value="{{ $user->email }}" disabled>
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="name">Tên</label>

                    <div class="col-md-10">
                        <input class="form-control" type="text" name="name" id="name" value="{{ $user->name }}" placeholder="Nhập tên..." maxlength="191" required="" autofocus="">
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
