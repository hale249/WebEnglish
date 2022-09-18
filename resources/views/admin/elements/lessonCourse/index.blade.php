@extends('admin.layouts.app')

@section('title', 'Bài học')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title mb-0">
                        Bài học: {{ $lesson->name }}
                    </h4>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('admin.book.lesson.course.create', ['id' => $lesson->book_id, 'lessonId' => $lesson->id]) }}" class="btn btn-primary btn-sm"><i
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
                        @foreach($courses as $course)
                            <tr>
                                <td>{{ $course->title }}</td>
                                <td>
                                    <img src="{{ $course->image }}" width="100">
                                </td>
                                <td>{!! $course->status_label !!}</td>
                                <td>{{ $course->created_at }}</td>
                                <td>{!! $course->action_buttons !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    {{ $courses->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
