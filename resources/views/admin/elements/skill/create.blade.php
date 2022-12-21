@extends('admin.layouts.app')

@section('title', 'Tạo bài học qua kỹ năng')

@section('content')
    <div class="card">
        <form action="{{ route('admin.skill.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-0">
                    Danh sách bài học qua kỹ năng
                    <small class="text-muted">Tạo mới</small>
                </h4>
                <hr>
                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="name">Tên bài học</label>

                    <div class="col-md-10">
                        <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}"
                               placeholder="Nhập tên..." maxlength="191" required="" autofocus="">
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
                        <textarea class="form-control" name="description" id="content-text"
                                  placeholder="Nhập nội dung kỹ năng" rows="10">{{ old('description') }}</textarea>
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="is_active">Trạng thái</label>

                    <div class="col-md-10">
                        <input type="checkbox" data-on="On" value="1" data-off="Off"
                               name="is_active" id="is_active" checked data-toggle="toggle" data-onstyle="primary">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="is_active">Xem phải login</label>

                    <div class="col-md-10">
                        <input type="checkbox" data-on="On" value="1" data-off="Off"
                               name="is_active" id="is_login" checked data-toggle="toggle" data-onstyle="primary">
                    </div><!--col-->
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('admin.skill.index') }}" class="btn btn-danger btn-sm">Hủy</a>
                    </div>

                    <div class="col text-right">
                        <button type="submit" class="btn btn-success btn-sm">Tạo</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
