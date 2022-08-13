@extends('admin.layouts.app')

@section('title', __('labels.pages.admin.product_item.title.management'))

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title mb-0">
                        @lang('labels.pages.admin.product_item.title.management')
                        <small class="text-muted">@lang('labels.pages.admin.product.title.name'): {{ $product->name }}</small>
                    </h4>
                </div>
                <div class="col-4 text-right">
                    @can(\App\Helpers\PermissionConstant::PERMISSION_ADD_PRODUCT)
                        <a href="{{ route('admin.product_item.create', $product->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> @lang('labels.pages.admin.product_item.create_new_item')</a>
                    @endcan
                </div>
            </div>
            <form action="" method="GET" class="form-inline mt-2">
                <div class="form-group">
                    <select name="payment_status" id="payment-status" class="form-control">
                        <option value="">@lang('labels.pages.admin.product_item.filter.payment_status.all')</option>
                        <option @if(request()->get('payment_status') === '0') selected @endif value="0">@lang('labels.pages.admin.product_item.filter.payment_status.selling')</option>
                        <option @if(request()->get('payment_status') === '1') selected @endif value="1">@lang('labels.pages.admin.product_item.filter.payment_status.sold')</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-same-select ml-2">Filter</button>
            </form>
            <div class="mt-4">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <td><strong>@lang('labels.pages.admin.product_item.table.token')</strong></td>
                            <td><strong>@lang('labels.pages.admin.product_item.table.payment_status')</strong></td>
                            <td><strong>@lang('labels.general.status')</strong></td>
                            <td><strong>@lang('labels.pages.admin.product_item.table.user')</strong></td>
                            <td><strong>@lang('labels.general.created_at')</strong></td>
                            <td><strong>@lang('labels.general.action')</strong></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td>{{ $item->token }}</td>
                                <td>{!! $item->payment_status_label !!}</td>
                                <td>{!! $item->status_label !!}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{!! $item->action_buttons !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    {{ $items->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
