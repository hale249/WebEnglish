@extends('admin.layouts.app')

@section('title', 'Danh sách học qua kỹ năng')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title mb-0">
                        Danh sách học qua kỹ năng
                    </h4>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('admin.skill.create') }}" class="btn btn-primary btn-sm"><i
                            class="fas fa-plus"></i> Tạo mới</a>
                </div>
            </div>

            <div class="mt-4">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <td><strong>Tên</strong></td>
                            <td><strong>Hình ảnh</strong></td>
                            <td><strong>Danh mục</strong></td>
                            <td><strong>Người tạo</strong></td>
                            <td><strong>Trạng thái</strong></td>
                            <td><strong>Tạo lúc</strong></td>
                            <td><strong>Hành động</strong></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($skills as $skill)
                            <tr>
                                <td>{{ $skill->name }}</td>
                                <td>
                                    <img src="{{ $skill->image }}" width="50">
                                </td>
                                <td>{{ $skill->category->name }}</td>
                                <td>{{ $skill->user->name }}</td>
                                <td>{!! $skill->status_label !!}</td>
                                <td>{{ $skill->created_at }}</td>
                                <td>{!! $skill->action_buttons !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    {{ $skills->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
