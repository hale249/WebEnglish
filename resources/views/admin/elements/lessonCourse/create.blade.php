@extends('admin.layouts.app')

@section('title', 'Tạo bài học')

@section('content')
    <div class="card">
        <form action="{{ route('admin.book.lesson.course.store', ['id'=> $lesson->book_id, 'lessonId' => $lesson->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-0">
                    Bài học: {{ $lesson->name }}
                    <small class="text-muted">Tạo mới</small>
                </h4>
                <hr>
                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="title">Tên bài học</label>

                    <div class="col-md-10">
                        <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}"
                               placeholder="Nhập tên..." maxlength="191" required="" autofocus="">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="sub_title">Mô tả ngắn</label>

                    <div class="col-md-10">
                        <input class="form-control" type="text" name="sub_title" id="sub_title" value="{{ old('sub_title') }}"
                               placeholder="Nhập mô tả ngắn..." >
                    </div><!--col-->
                </div>


                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="link_video">Video bài học</label>

                    <div class="col-md-10">
                        <input class="form-control" type="text" name="link_video" id="link_video" value="{{ old('link_video') }}"
                               placeholder="Nhập video bài học..." >
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="image">Hình ảnh</label>

                    <div class="col-md-10">
                        <input type="file" name="image" id="image">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="description">Nội dung tiếng anh</label>

                    <div class="col-md-10">
                        <textarea class="form-control" name="description" id="content-text"
                                  placeholder="Nhập nội dung bài học" rows="10">{{ old('description') }}</textarea>
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="is_active">Trạng thái</label>

                    <div class="col-md-10">
                        <input type="checkbox" data-on="On" value="1" data-off="Off"
                               name="is_active" id="is_active" checked data-toggle="toggle" data-onstyle="primary">
                    </div><!--col-->
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('admin.book.lesson.index', ['id'=> $lesson->book_id, 'lessonId' => $lesson->id]) }}" class="btn btn-danger btn-sm">Hủy</a>
                    </div>

                    <div class="col text-right">
                        <button type="submit" class="btn btn-success btn-sm">Tạo</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
