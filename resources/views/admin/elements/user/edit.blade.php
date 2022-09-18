@extends('admin.layouts.app')

@section('title', 'Chỉnh sửa người dùng')

@section('content')
    <div class="card">
        <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
            @method('put')
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-0">
                    Người dùng
                    <small class="text-muted">Chỉnh sửa</small>
                </h4>
                <hr>
                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="name">Tên</label>

                    <div class="col-md-10">
                        <input class="form-control" type="text" name="name" id="name" value="{{ $user->name }}" placeholder="Nhập tên..." maxlength="191" required="" autofocus="">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="email">Email</label>

                    <div class="col-md-10">
                        <input class="form-control" type="email" name="email" id="email" disabled value="{{ $user->email }}" placeholder="Nhập email..." maxlength="191" required="" autofocus="">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="role">Vai trò</label>

                    <div class="col-md-10">
                        <select name="role" id="role" class="form-control">
                            <option value="">Chọn vai trò</option>
                            @foreach(\App\Helpers\PermissionConstant::ROLES as $role)
                                <option @if($user->hasRole($role)) selected @endif value="{{ $role }}">{{ $role }}</option>
                            @endforeach
                        </select>
                    </div><!--col-->
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('admin.users.index') }}" class="btn btn-danger btn-sm">@lang('labels.general.cancel')</a>
                    </div>

                    <div class="col text-right">
                        <button type="submit" class="btn btn-success btn-sm">Cập nhật</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
