@extends('admin.layouts.app')

@section('title', 'Danh sách bài hát')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title mb-0">
                        Danh sách bài kiểm tra
                    </h4>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('admin.quiz.create') }}" class="btn btn-primary btn-sm"><i
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
                            <td><strong>Mô tả</strong></td>
                            <td><strong>Tạo lúc</strong></td>
                            <td><strong>Hành động</strong></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($quizList as $quiz)
                            <tr>
                                <td>{{ $quiz->name }}</td>
                                <td>{!! $quiz->status_label !!}</td>
                                <td>{{ $quiz->description }}</td>
                                <td>{{ $quiz->created_at }}</td>
                                <td>{!! $quiz->action_buttons !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    {{ $quizList->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
