@extends('admin.layouts.app')

@section('title', __('labels.pages.admin.users.title.management'))

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title mb-0">
                        @lang('labels.pages.admin.users.title.management')
                    </h4>
                </div>
                <div class="col-4 text-right">
                    @can(\App\Helpers\PermissionConstant::PERMISSION_ADD_MANAGER_USER)
                        <a href="{{ route('admin.users.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> @lang('labels.pages.admin.users.create_new_user')</a>
                    @endcan
                </div>
            </div>

            <div class="mt-4">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <td><strong>@lang('labels.pages.admin.users.table.name')</strong></td>
                                <td><strong>@lang('labels.pages.admin.users.table.email')</strong></td>
                                <td><strong>@lang('labels.general.created_at')</strong></td>
                                <td><strong>@lang('labels.general.action')</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>{!! $user->action_buttons !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
