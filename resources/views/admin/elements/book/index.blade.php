@extends('admin.layouts.app')

@section('title', 'Tiếng anh THCS')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title mb-0">
                        Danh mục
                    </h4>
                </div>
                <div class="col-4 text-right">
{{--                    <a href="{{ route('admin.book.create') }}" class="btn btn-primary btn-sm"><i--}}
{{--                            class="fas fa-plus"></i> Tạo mới</a>--}}
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
                        @foreach($books as $book)
                            <tr>
                                <td>{{ $book->name }}</td>
                                <td>
                                    <img src="{{ $book->image }}" width="100">
                                </td>
                                <td>{{ $book->user->name }}</td>
                                <td>{!! $book->status_label !!}</td>
                                <td>{{ $book->created_at }}</td>
                                <td>{!! $book->action_buttons !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    {{ $books->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
