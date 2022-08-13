@extends('admin.layouts.app')

@section('title', __('labels.pages.admin.product.title.management'))

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title mb-0">
                        @lang('labels.pages.admin.product.title.management')
                    </h4>
                </div>
                <div class="col-4 text-right">
                    @can(\App\Helpers\PermissionConstant::PERMISSION_ADD_PRODUCT)
                        <a href="{{ route('admin.product.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> @lang('labels.pages.admin.product.create_new_product')</a>
                    @endcan
                </div>
            </div>

            <form action="" method="GET" class="form-inline mt-2">
                <div class="form-group">
                    <input type="text" name="name" value="{{ request()->get('name') }}" class="form-control" placeholder="@lang('labels.pages.admin.product.filter.name.placeholder')">
                </div>

                <div class="form-group">
                    <select name="category_id" class="form-control ml-2">
                        <option value="">@lang('labels.pages.admin.product.filter.category.placeholder')</option>
                        @foreach($categories as $category)
                            <option @if(request()->get('category_id') == $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-same-select ml-2">Filter</button>
            </form>

            <div class="mt-4">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <td><strong>@lang('labels.pages.admin.product.table.name')</strong></td>
                            <td><strong>@lang('labels.pages.admin.product.table.image')</strong></td>
                            <td><strong>@lang('labels.pages.admin.product.table.category')</strong></td>
                            <td><strong>@lang('labels.pages.admin.product.table.price')</strong></td>
                            <td><strong>@lang('labels.pages.admin.product.table.quantity')</strong></td>
                            <td><strong>@lang('labels.general.status')</strong></td>
                            @can(\App\Helpers\PermissionConstant::PERMISSION_VIEW_LIST_ALL_PRODUCT)
                                <td><strong>@lang('labels.pages.admin.product.table.user')</strong></td>
                            @endcan
                            <td><strong>@lang('labels.general.created_at')</strong></td>
                            <td style="width: 210px;"><strong>@lang('labels.general.action')</strong></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>
                                    <img src="{{ $product->image }}" width="100">
                                </td>
                                <td>
                                    @if(!empty($product->category))
                                        <a href="{{ route('admin.category.show', $product->category_id) }}" target="_blank">{{ $product->category->name }}</a>
                                    @endif
                                </td>
                                <td>{{ $product->price_label }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{!! $product->status_label !!}</td>
                                @can(\App\Helpers\PermissionConstant::PERMISSION_VIEW_LIST_ALL_PRODUCT)
                                    <td>{{ $product->user->name }}</td>
                                @endcan
                                <td>{{ $product->created_at }}</td>
                                <td>{!! $product->action_buttons !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
