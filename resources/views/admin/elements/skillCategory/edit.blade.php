@extends('admin.layouts.app')

@section('title', 'Chỉnh sửa danh mục')

@section('content')
    <div class="card">
        <form action="{{ route('admin.skill.category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
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
                        <input class="form-control" type="text" name="name" id="name" value="{{ $category->name }}" placeholder="Nhập tên" maxlength="191" required="" autofocus="">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="description">Nội dung</label>

                    <div class="col-md-10">
                        <textarea class="form-control" name="description" id="description" placeholder="Nhập nội dung" rows="5">{{ $category->description }}</textarea>
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="is_active">Trạng thái</label>

                    <div class="col-md-10">
                        <input type="checkbox" data-on="Hiện" value="1"
                               @if($category->is_active) checked @endif data-off="Ẩn" name="is_active" id="is_active"
                               data-toggle="toggle" data-onstyle="primary">
                    </div><!--col-->
                </div>

            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('admin.skill.category.index') }}" class="btn btn-danger btn-sm">Hủy</a>
                    </div>

                    <div class="col text-right">
                        <button type="submit" class="btn btn-success btn-sm">Cập nhật</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
