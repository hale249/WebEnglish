@extends('admin.layouts.app')

@section('title', 'Chỉnh sửa học viên')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-3">
                Danh sách học viên
                <small class="text-muted">Chi tiết bài kiểm học viên</small>
            </h4>

            <div class="">Tên học viên: {{ $client->name }}</div>
            <div>Email học viên: {{ $client->email }}</div>
            <div class="mt-4">
                <div class="mb-2"><h5>Danh sách học viên làm bài kiểm tra</h5></div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <td><strong>Tên bài kiểm tra</strong></td>
                            <td><strong>Tổng số câu đúng</strong></td>
                            <td><strong>Tổng số câu sai</strong></td>
                            <td><strong>Kiểm tra lúc</strong></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($questionList as $question)
                            <tr>
                                <td>{{ $question->quiz->name ?? '' }}</td>
                                <td>{{ $question->success }}</td>
                                <td>{{ $question->fail }}</td>
                                <td>{{ $question->created_at->format('d-m-Y h:i:s') }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    {{ $questionList->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
