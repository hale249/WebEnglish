@extends('admin.layouts.app')

@section('title', 'Chi tiết - ' . $category->name)

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-0">
                Danh mục
                <small class="text-muted">Chi tiết - {{ $category->name }}</small>
            </h4>
            <hr>
            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="name">Tên</label>

                <div class="col-md-10">
                    {{ $category->name }}
                </div><!--col-->
            </div>

            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="description">Hình ảnh</label>

                <div class="col-md-10">
                    <img src="{{ $category->image }}" width="100" alt="">
                </div><!--col-->
            </div>

            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="description">Nội dung</label>

                <div class="col-md-10">
                    @if($category->description)
                        {{ $category->description }}
                    @else
                        (Trống)
                    @endif
                </div><!--col-->
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <a href="{{ route('admin.category.index') }}" class="btn btn-success btn-sm">Trở lại</a>
                </div>

                <div class="col text-right">
                    <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-primary btn-sm">Chỉnh sửa</a>
                </div>
            </div>
        </div>
    </div>
@endsection
