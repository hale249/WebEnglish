@extends('admin.layouts.app')

@section('title', 'Bài học')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title mb-0">
                        Bài học: {{ $book->name }}
                    </h4>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('admin.book.lesson.create', $book->id) }}" class="btn btn-primary btn-sm"><i
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
                            <td><strong>Trạng thái</strong></td>
                            <td><strong>Tạo lúc</strong></td>
                            <td><strong>Hành động</strong></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($lessons as $lesson)
                            <tr>
                                <td>{{ $lesson->name }}</td>
                                <td>
                                    <img src="{{ $lesson->image }}" width="50">
                                </td>
                                <td>{!! $lesson->status_label !!}</td>
                                <td>{{ $lesson->created_at }}</td>
                                <td>{!! $lesson->action_buttons !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    {{ $lessons->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
