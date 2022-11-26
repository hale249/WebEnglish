@extends('admin.layouts.app')

@section('title', 'Danh sách bài hát')

@section('content')
    <div class="card">
        <div class="card-body">
                <h4 class="card-title mb-3">
                    Danh sách bài kiểm tra
                    <small class="text-muted">Chi tiết</small>
                </h4>

            <div>Tên: {{ $quiz->name }}</div>
            <div>Mô tả: {{ $quiz->description }}</div>
            <div>Trạng thái: {!! $quiz->status_label !!}</div>

            <div class="row mt-4">
                <div class="col-8">
                    <h5 class="card-title mb-0">
                        Danh sách câu hỏi
                    </h5>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('admin.quiz.question.create', $quiz->slug) }}" class="btn btn-primary btn-sm"><i
                            class="fas fa-plus"></i> Tạo mới</a>
                </div>
            </div>
            <div class="mt-4">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <td><strong>Tên</strong></td>
                            <td><strong>Trạng thái</strong></td>
                            <td><strong>Tạo lúc</strong></td>
                            <td><strong>Hành động</strong></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($questions as $question)
                            <tr>
                                <td>{{ $question->question }}</td>
                                <td>{!! $question->status_label !!}</td>
                                <td>{{ $quiz->created_at }}</td>
                                <td>
                                    <a href="{{ route('admin.quiz.question.edit', ['slug' => $quiz->slug, 'id' => $question->id]) }}" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    {{ $questions->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
