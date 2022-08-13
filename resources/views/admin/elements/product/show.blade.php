@extends('admin.layouts.app')

@section('title', __('labels.pages.admin.product.title.show') . ' - ' . $product->name)

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title mb-0">
                        @lang('labels.pages.admin.product.title.management')
                        <small class="text-muted">@lang('labels.pages.admin.product.title.show') - {{ $product->name }}</small>
                    </h4>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('admin.product_item.index', $product->id) }}" class="btn btn-info btn-sm"><i class="fas fa-info-circle"></i> @lang('labels.pages.admin.product.table.view_item')</a>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="name">@lang('labels.pages.admin.product.form.category')</label>

                <div class="col-md-10">
                    @if($product->category)
                    <a href="{{ route('admin.category.show', $product->category_id) }}" target="_blank">{{ $product->category->name }}</a>
                    @endif
                </div><!--col-->
            </div>
            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="name">@lang('labels.pages.admin.product.form.name')</label>

                <div class="col-md-10">
                    {{ $product->name }}
                </div><!--col-->
            </div>

            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="name">@lang('labels.pages.admin.product.form.price')</label>

                <div class="col-md-10">
                    {{ $product->price_label }}
                </div><!--col-->
            </div>

            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="name">@lang('labels.pages.admin.product.table.quantity')</label>

                <div class="col-md-10">
                    {{ $product->quantity }}
                </div><!--col-->
            </div>

            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="description">@lang('labels.pages.admin.product.form.image')</label>

                <div class="col-md-10">
                    <img src="{{ $product->image }}" width="100" alt="">
                </div><!--col-->
            </div>

            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="description">@lang('labels.pages.admin.product.form.description')</label>

                <div class="col-md-10">
                    @if($product->description)
                        {{ $product->description }}
                    @else
                        @lang('labels.general.empty')
                    @endif
                </div><!--col-->
            </div>

            <div class="form-group row">
                <label class="col-md-2 form-control-label">@lang('labels.pages.admin.product.form.content')</label>
                <div class="col-md-10">
                    @if($product->content)
                        {!! $product->content !!}
                    @else
                        @lang('labels.general.empty')
                    @endif
                </div><!--col-->
            </div>
            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="description">@lang('labels.general.status')</label>

                <div class="col-md-10">
                    {!! $product->status_label !!}
                </div><!--col-->
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <a href="{{ route('admin.product.index') }}" class="btn btn-success btn-sm">@lang('labels.general.back')</a>
                </div>

                <div class="col text-right">
                    <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-primary btn-sm">@lang('labels.general.edit')</a>
                </div>
            </div>
        </div>
    </div>
@endsection
