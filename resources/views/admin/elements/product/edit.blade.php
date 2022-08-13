@extends('admin.layouts.app')

@section('title', __('labels.pages.admin.product.title.edit'))

@section('content')
    <div class="card">
        <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-0">
                    @lang('labels.pages.admin.product.title.management')
                    <small class="text-muted">@lang('labels.pages.admin.product.title.edit')</small>
                </h4>
                <hr>
                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="category_id">@lang('labels.pages.admin.product.form.category')</label>

                    <div class="col-md-10">
                        <select name="category_id" class="form-control" id="category_id" required>
                            <option value="">@lang('labels.pages.admin.product.form.placeholder.category')</option>
                            @foreach($categories as $category)
                                <option @if($product->category_id === $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="name">@lang('labels.pages.admin.product.form.name')</label>

                    <div class="col-md-10">
                        <input class="form-control" type="text" name="name" id="name" value="{{ $product->name }}" placeholder="{{ __('labels.pages.admin.product.form.placeholder.name') }}" maxlength="191" required="" autofocus="">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="price">@lang('labels.pages.admin.product.form.price')</label>

                    <div class="col-md-10">
                        <input class="form-control" type="number" name="price" id="price" value="{{ $product->price }}" step="0.01" placeholder="{{ __('labels.pages.admin.product.form.placeholder.price') }}" maxlength="191" required="" autofocus="">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="image">@lang('labels.pages.admin.product.form.image')</label>

                    <div class="col-md-10">
                        <input type="file" name="image" id="image">
                        <p class="mt-3"><img src="{{ $product->image }}" width="100" alt=""></p>
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="description">@lang('labels.pages.admin.product.form.description')</label>

                    <div class="col-md-10">
                        <textarea class="form-control" name="description" id="description" placeholder="{{ __('labels.pages.admin.product.form.placeholder.description') }}" rows="5">{{ $product->description }}</textarea>
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="content-text">@lang('labels.pages.admin.product.form.content')</label>

                    <div class="col-md-10">
                        <textarea class="form-control" name="content" id="content-text" placeholder="{{ __('labels.pages.admin.product.form.placeholder.content') }}" rows="5">{!! $product->content !!}</textarea>
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="status">@lang('labels.pages.admin.product.form.status')</label>

                    <div class="col-md-10">
                        <input type="checkbox" data-on="Show" value="1" data-off="Hidden" name="status" id="status" @if(!$product->is_disabled) checked @endif data-toggle="toggle" data-onstyle="primary">
                    </div><!--col-->
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('admin.product.index') }}" class="btn btn-danger btn-sm">@lang('labels.general.cancel')</a>
                    </div>

                    <div class="col text-right">
                        <button type="submit" class="btn btn-success btn-sm">@lang('labels.pages.admin.product.form.edit_submit')</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
