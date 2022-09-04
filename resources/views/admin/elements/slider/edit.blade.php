@extends('admin.layouts.app')

@section('title', 'Chỉnh sửa slider')

@section('content')
    <div class="card">
        <form action="{{ route('admin.slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-0">
                    Danh mục sliders
                    <small class="text-muted">Chỉnh sứa</small>
                </h4>
                <hr>
                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="name">Tên</label>

                    <div class="col-md-10">
                        <input class="form-control" type="text" name="name" id="name" value="{{ $slider->name }}" placeholder="Nhập tên..." maxlength="191" required="" autofocus="">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="description">Mô tả</label>

                    <div class="col-md-10">
                        <textarea class="form-control" name="description" id="description" placeholder="Nhập mô tả..." rows="5">{{ $slider->description }}</textarea>
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="image">Hình ảnh</label>

                    <div class="col-md-10">
                        <input type="file" name="image" id="image">
                        <p class="mt-3"><img src="{{ $slider->image }}" width="100" alt=""></p>
                    </div><!--col-->
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('admin.slider.index') }}" class="btn btn-danger btn-sm">@lang('labels.general.cancel')</a>
                    </div>

                    <div class="col text-right">
                        <button type="submit" class="btn btn-success btn-sm">Lưu</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
