@extends('admin.layouts.app')

@section('title', __('labels.pages.admin.product_item.title.create'))

@section('content')
    <div class="card">
        <form action="{{ route('admin.product_item.store', $product->id) }}" method="POST">
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-0">
                    @lang('labels.pages.admin.product_item.title.management')
                    <small class="text-muted">@lang('labels.pages.admin.product_item.title.create')</small>
                </h4>
                <hr>
                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="token">@lang('labels.pages.admin.product_item.form.token')</label>

                    <div class="col-md-10">
                        <input class="form-control" type="text" name="token" id="token" value="{{ old('token') }}" placeholder="{{ __('labels.pages.admin.product_item.form.placeholder.token') }}" maxlength="191" required="" autofocus="">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="status">@lang('labels.pages.admin.product_item.form.status')</label>

                    <div class="col-md-10">
                        <input type="checkbox" data-on="Show" value="1" data-off="Hidden" name="status" id="status" checked data-toggle="toggle" data-onstyle="primary">
                    </div><!--col-->
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('admin.product_item.index', $product->id) }}" class="btn btn-danger btn-sm">@lang('labels.general.cancel')</a>
                    </div>

                    <div class="col text-right">
                        <button type="submit" class="btn btn-success btn-sm">@lang('labels.pages.admin.product_item.form.create_submit')</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('script')
@endsection
