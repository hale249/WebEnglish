@extends('admin.layouts.app')

@section('title', 'Danh sách slider')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title mb-0">
                        Quản lý slider
                    </h4>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('admin.slider.create') }}" class="btn btn-primary btn-sm"><i
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
                            <td><strong>Ngày tạo</strong></td>
                            <td><strong>Hành động</strong></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sliders as $slider)
                            <tr>
                                <td>{{ $slider->name }}</td>
                                <td>
                                    <img src="{{ $slider->image }}" width="100">
                                </td>
                                <td>{{ $slider->user->name }}</td>
                                <td>{{ $slider->created_at }}</td>
                                <td>{!! $slider->action_buttons !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    {{ $sliders->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
