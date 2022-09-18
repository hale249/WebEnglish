@extends('admin.layouts.app')

@section('title', 'Chỉnh sửa bài viết')

@section('content')
    <div class="card">
        <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-0">
                    Danh mục
                    <small class="text-muted">Chỉnh sửa</small>
                </h4>
                <hr>
                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="name">Tên</label>

                    <div class="col-md-10">
                        <input class="form-control" type="text" name="title" id="title" value="{{ $blog->title }}"
                               placeholder="Nhập tên bài viết" maxlength="191" required="" autofocus="">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="sub_title">Nội dung</label>

                    <div class="col-md-10">
                        <textarea class="form-control" name="sub_title" id="sub_title" placeholder="Nhập mô tả ngắn"
                                  rows="5">{{ $blog->sub_title }}</textarea>
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="image">Hình ảnh</label>

                    <div class="col-md-10">
                        <input type="file" name="image" id="image">
                        <p class="mt-3"><img src="{{ $blog->image }}" width="100" alt=""></p>
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="content">Nội dung</label>

                    <div class="col-md-10">
                        <textarea class="form-control" name="content" id="content-text"
                                  placeholder="Nhập nội dung bài viết" rows="10">{{ $blog->content }}</textarea>
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="is_active">Trạng thái</label>

                    <div class="col-md-10">
                        <input type="checkbox" data-on="Hiện" value="1"
                               @if($blog->is_active) checked @endif data-off="Ârn" name="is_active" id="is_active"
                               data-toggle="toggle" data-onstyle="primary">
                    </div><!--col-->
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('admin.blog.index') }}" class="btn btn-danger btn-sm">Hủy</a>
                    </div>

                    <div class="col text-right">
                        <button type="submit" class="btn btn-success btn-sm">Cập nhật</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
