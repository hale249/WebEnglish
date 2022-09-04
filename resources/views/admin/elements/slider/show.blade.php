@extends('admin.layouts.app')

@section('title', 'Hiển thị - ' . $slider->name)

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-0">
                Slider
                <small class="text-muted">Hiển thị - {{ $slider->name }}</small>
            </h4>
            <hr>
            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="name">Tên</label>

                <div class="col-md-10">
                    {{ $slider->name }}
                </div><!--col-->
            </div>

            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="description">Hình ảnh</label>

                <div class="col-md-10">
                    <img src="{{ $slider->image }}" width="100" alt="">
                </div><!--col-->
            </div>

            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="description">Mô tả</label>

                <div class="col-md-10">
                    @if($slider->description)
                        {{ $slider->description }}
                    @else
                        @lang('labels.general.empty')
                    @endif
                </div><!--col-->
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <a href="{{ route('admin.slider.index') }}" class="btn btn-success btn-sm">@lang('labels.general.back')</a>
                </div>

                <div class="col text-right">
                    <a href="{{ route('admin.slider.edit', $slider->id) }}" class="btn btn-primary btn-sm">Chỉnh sửa</a>
                </div>
            </div>
        </div>
    </div>
@endsection
