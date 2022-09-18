@extends('admin.layouts.app')

@section('title', 'Sửa thông tin bài học')

@section('content')
    <div class="card">
        <form action="{{ route('admin.book.lesson.course.update', ['id' => $lesson->book_id, 'lessonId' => $lesson->id, 'courseId' => $course->id]) }}" method="POST"
              enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-0">
                    Danh mục
                    <small class="text-muted">Chỉnh sửa</small>
                </h4>
                <hr>
                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="title">Tên</label>

                    <div class="col-md-10">
                        <input class="form-control" type="text" name="title" id="title" value="{{ $course->title }}"
                               placeholder="Nhập tên" maxlength="191" required="" autofocus="">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="sub_title">Mô tả ngắn</label>

                    <div class="col-md-10">
                        <input class="form-control" type="text" name="sub_title" id="sub_title" value="{{ $course->sub_title }}"
                               placeholder="Nhập mô tả ngắn..." >
                    </div><!--col-->
                </div>


                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="link_video">Video bài học</label>

                    <div class="col-md-10">
                        <input class="form-control" type="text" name="link_video" id="link_video" value="{{ $course->link_video }}"
                               placeholder="Nhập video bài học..." >
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="image">Hình ảnh</label>

                    <div class="col-md-10">
                        <input type="file" name="image" id="image">
                        <p class="mt-3"><img src="{{ $course->image }}" width="100" alt=""></p>
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="description">Nội dung tiếng anh</label>

                    <div class="col-md-10">
                        <textarea class="form-control" name="description" id="content-text"
                                  placeholder="Nhập nội dung bài học" rows="10">{!! $course->link_video !!}</textarea>
                    </div><!--col-->
                </div>


                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="is_active">Trạng thái</label>

                    <div class="col-md-10">
                        <input type="checkbox" data-on="Hiện" value="1"
                               @if($course->is_active) checked @endif data-off="Ẩn" name="is_active" id="is_active"
                               data-toggle="toggle" data-onstyle="primary">
                    </div><!--col-->
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('admin.book.lesson.course.index', ['id' =>$lesson->book_id, 'lessonId' => $lesson->id]) }}" class="btn btn-danger btn-sm">Hủy</a>
                    </div>

                    <div class="col text-right">
                        <button type="submit" class="btn btn-success btn-sm">Cập nhật</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
