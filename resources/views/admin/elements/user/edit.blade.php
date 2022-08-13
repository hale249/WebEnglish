@extends('admin.layouts.app')

@section('title', __('labels.pages.admin.users.title.edit'))

@section('content')
    <div class="card">
        <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
            @method('put')
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-0">
                    @lang('labels.pages.admin.users.title.management')
                    <small class="text-muted">@lang('labels.pages.admin.users.title.edit')</small>
                </h4>
                <hr>
                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="name">@lang('labels.pages.admin.users.form.name')</label>

                    <div class="col-md-10">
                        <input class="form-control" type="text" name="name" id="name" value="{{ $user->name }}" placeholder="{{ __('labels.pages.admin.users.form.placeholder.name') }}" maxlength="191" required="" autofocus="">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="email">@lang('labels.pages.admin.users.form.email')</label>

                    <div class="col-md-10">
                        <input class="form-control" type="email" name="email" id="email" disabled value="{{ $user->email }}" placeholder="{{ __('labels.pages.admin.users.form.placeholder.email') }}" maxlength="191" required="" autofocus="">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="role">@lang('labels.pages.admin.users.form.role')</label>

                    <div class="col-md-10">
                        <select name="role" id="role" class="form-control">
                            <option value="">@lang('labels.pages.admin.users.form.placeholder.role')</option>
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
                        <button type="submit" class="btn btn-success btn-sm">@lang('labels.pages.admin.users.form.update_submit')</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
