@extends('admin.layouts.app')

@section('title', 'Danh sách bài viết')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title mb-0">
                        Danh sách bài viết
                    </h4>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('admin.blog.create') }}" class="btn btn-primary btn-sm"><i
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
                            <td><strong>Người tạo</strong></td>
                            <td><strong>Trạng thái</strong></td>
                            <td><strong>Tạo lúc</strong></td>
                            <td><strong>Hành động</strong></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $blog->title }}</td>
                                <td>
                                    <img src="{{ $blog->image }}" width="100">
                                </td>
                                <td>{{ $blog->user->name }}</td>
                                <td>{!! $blog->status_label !!}</td>
                                <td>{{ $blog->created_at }}</td>
                                <td>{!! $blog->action_buttons !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    {{ $blogs->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
