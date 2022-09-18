@extends('admin.layouts.app')

@section('title', 'Tạo video bài học')

@section('content')
    <div class="card">
        <form action="{{ route('admin.video.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-0">
                    Danh sách bài học qua video
                    <small class="text-muted">Tạo mới</small>
                </h4>
                <hr>
                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="title">Tên bài viết</label>

                    <div class="col-md-10">
                        <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}"
                               placeholder="Nhập tên..." maxlength="191" required="" autofocus="">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="description">Mô tả ngắn</label>

                    <div class="col-md-10">
                        <textarea class="form-control" name="sub_title" id="description"
                                  placeholder="Nhập mô tả ngắn..."> {{ old('sub_title') }}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="link_video">Link bài học</label>

                    <div class="col-md-10">
                        <input class="form-control" type="text" name="link_video" id="link_video" value="{{ old('link_video') }}"
                               placeholder="Nhập link video bài học..." required="">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="image">Hình ảnh</label>

                    <div class="col-md-10">
                        <input type="file" name="image" id="image">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="category_id">Danh mục</label>

                    <div class="col-md-10">
                        <select class="form-control" name="category_id" id="category_id">
                            <option value="">--Chọn danh mục--</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="content">Nội dung tiếng anh</label>

                    <div class="col-md-10">
                        <textarea class="form-control" name="content" id="content-text"
                                  placeholder="Nhập nội dung video bài học" rows="10">{{ old('content') }}</textarea>
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="content">Nội dung dịch</label>

                    <div class="col-md-10">
                        <textarea class="form-control" name="content_translate" id="description-text"
                                  placeholder="Nhập nội dung video bài học" rows="10">{{ old('content_translate') }}</textarea>
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="is_active">Trạng thái</label>

                    <div class="col-md-10">
                        <input type="checkbox" data-on="Hiện" value="1" data-off="Ẩn"
                               name="is_active" id="is_active" checked data-toggle="toggle" data-onstyle="primary">
                    </div><!--col-->
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('admin.video.index') }}" class="btn btn-danger btn-sm">Hủy</a>
                    </div>

                    <div class="col text-right">
                        <button type="submit" class="btn btn-success btn-sm">Tạo</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
