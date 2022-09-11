@extends('admin.layouts.app')

@section('title', 'Danh sách bài viết')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title mb-0">
                        Danh sách video
                    </h4>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('admin.video.create') }}" class="btn btn-primary btn-sm"><i
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
                        @foreach($videos as $video)
                            <tr>
                                <td>{{ $video->title }}</td>
                                <td>
                                    <img src="{{ $video->image }}" width="100">
                                </td>
                                <td>{{ $video->category->name }}</td>
                                <td>{{ $video->user->name }}</td>
                                <td>{!! $video->status_label !!}</td>
                                <td>{{ $video->created_at }}</td>
                                <td>{!! $video->action_buttons !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    {{ $videos->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
