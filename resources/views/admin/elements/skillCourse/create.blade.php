@extends('admin.layouts.app')

@section('title', 'Tạo video bài học')

@section('content')
    <div class="card">
        <form action="{{ route('admin.skill.course.store', ['skillId' => $skill->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-0">
                    Chi tiết bài học cho: {{ $skill->name }}
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
                    <label class="col-md-2 form-control-label" for="link_video">Link bài học</label>

                    <div class="col-md-10">
                        <input class="form-control" type="text" name="link_video" id="link_video" value="{{ old('link_video') }}"
                               placeholder="Nhập link video bài học..." required="">
                    </div><!--col-->
                </div>


                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="content">Nội dung</label>

                    <div class="col-md-10">
                        <textarea class="form-control" name="description" id="content-text"
                                  placeholder="Nhập nội dung..." rows="10">{{ old('description') }}</textarea>
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
                        <a href="{{ route('admin.skill.course.index', ['skillId' => $skill->id]) }}" class="btn btn-danger btn-sm">Hủy</a>
                    </div>

                    <div class="col text-right">
                        <button type="submit" class="btn btn-success btn-sm">Tạo</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
