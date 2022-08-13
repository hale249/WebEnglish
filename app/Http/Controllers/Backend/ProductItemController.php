<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\Constant;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductItemEditTokenRequest;
use App\Http\Requests\ProductItemStoreRequest;
use App\Models\Product;
use App\Models\ProductItem;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @param int $productId
     * @return View
     * @throws AuthorizationException
     */
    public function index(Request $request, int $productId): View
    {
        $paymentStatus = $request->get('payment_status');
        $product = Product::query()->findOrFail($productId);
        $this->authorize('view', $product);
        $items = ProductItem::query()
            ->with('user', 'product')
            ->where('product_id', $productId);
        if ($paymentStatus === '0' || $paymentStatus === 0) {
            $items = $items->whereNull('sold_at');
        } elseif ($paymentStatus === '1' || $paymentStatus === 1) {
            $items = $items->whereNotNull('sold_at');
        }

        $items = $items->orderBy('created_at', 'desc')
            ->paginate(Constant::DEFAULT_PER_PAGE);

        return view('admin.elements.product_item.index', compact('items', 'product'));
    }

    /**
     * Show the form for creating a new resource.
     * @param int $productId
     * @return View
     * @throws AuthorizationException
     */
    public function create(int $productId): View
    {
        $product = Product::query()->findOrFail($productId);
        $this->authorize('update', $product);

        return view('admin.elements.product_item.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductItemStoreRequest $request
     * @param int $productId
     * @return RedirectResponse
     * @throws AuthorizationException
     */
    public function store(ProductItemStoreRequest $request, int $productId): RedirectResponse
    {
        $product = Product::query()->findOrFail($productId);
        $this->authorize('update', $product);

        $data = $request->only(['token']);
        $data['user_id'] = auth()->id();
        $data['product_id'] = $product->id;
        $data['is_disabled'] = (!empty($request->input('status'))) ? false : true;

        ProductItem::query()->create($data);

        return redirect()->route('admin.product_item.index', $product->id)->with('flash_success', __('labels.pages.admin.product_item.messages.create_success'));
    }

    /**
     * Change status item
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     * @throws AuthorizationException
     */
    public function changeStatus(Request $request, int $id): RedirectResponse
    {
        $item = ProductItem::query()->findOrFail($id);
        $product = Product::query()->findOrFail($item->product_id);
        $this->authorize('update', $product);
        $data['is_disabled'] = (!empty($request->input('status'))) ? false : true;
        $item->update($data);

        return redirect()->route('admin.product_item.index', $product->id)->with('flash_success', __('labels.pages.admin.product_item.messages.change_status_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     * @throws AuthorizationException
     * @throws \Exception
     */
    public function destroy($id): RedirectResponse
    {
        $item = ProductItem::query()->findOrFail($id);
        $product = Product::query()->findOrFail($item->product_id);
        $this->authorize('delete', $item);
        $item->delete();

        return redirect()->route('admin.product_item.index', $product->id)->with('flash_success', __('labels.pages.admin.product_item.messages.delete_success'));
    }

    /**
     * Show form update token of product item
     *
     * @param int $id
     * @return View
     * @throws AuthorizationException
     */
    public function showFormEditToken(int $id): View
    {
        $item = ProductItem::query()->findOrFail($id);
        $product = Product::query()->findOrFail($item->product_id);
        $this->authorize('updateTokenItem', $product);

        return view('admin.elements.product_item.edit_token', compact('item', 'product'));
    }

    /**
     * Handle update token
     *
     * @param ProductItemEditTokenRequest $request
     * @param int $id
     * @return RedirectResponse
     * @throws AuthorizationException
     */
    public function updateToken(ProductItemEditTokenRequest $request, int $id): RedirectResponse
    {
        $item = ProductItem::query()->findOrFail($id);
        $product = Product::query()->findOrFail($item->product_id);
        $this->authorize('updateTokenItem', $product);
        $data = $request->only(['token']);
        $item->update($data);

        return redirect()->route('admin.product_item.index', $product->id)->with('flash_success', __('labels.pages.admin.product_item.messages.update_token_success'));
    }
}
