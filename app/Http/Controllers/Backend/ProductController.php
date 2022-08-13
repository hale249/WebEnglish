<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\Constant;
use App\Helpers\PermissionConstant;
use App\Helpers\Traits\FileHelperTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Category;
use App\Models\Product;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    use FileHelperTrait;

    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $data = $request->all();
        $products = Product::query()
            ->with('user', 'category');
        $userId = !empty($data['user_id']) ? $data['user_id'] : null;
        if (!empty($data['name'])) {
            $products = $products->where('name', 'like', '%' . $data['name'] . '%');
        }

        if (!empty($data['category_id'])) {
            $products = $products->where('category_id', $data['category_id']);
        }

        if (!auth()->user()->hasPermissionTo(PermissionConstant::PERMISSION_VIEW_LIST_ALL_PRODUCT)) {
            $userId = auth()->id();
        }

        if (!empty($userId)) {
            $products = $products->where('user_id', $userId);
        }

        $products = $products->orderBy('created_at', 'desc')
            ->paginate(Constant::DEFAULT_PER_PAGE);
        $categories = Category::query()->get();

        return view('admin.elements.product.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $categories = Category::query()->get();

        return view('admin.elements.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     * @param ProductStoreRequest $request
     * @return RedirectResponse
     */
    public function store(ProductStoreRequest $request): RedirectResponse
    {
        $data = $request->only([
            'name',
            'price',
            'description',
            'content',
            'category_id'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'products');
        }

        $data['user_id'] = auth()->id();
        $data['is_disabled'] = (!empty($request->input('status'))) ? false : true;
        Product::query()
            ->create($data);

        return redirect()->route('admin.product.index')->with('flash_success', __('labels.pages.admin.product.messages.create_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return View
     * @throws AuthorizationException
     */
    public function show($id): View
    {
        $product = Product::query()->findOrFail($id);
        $this->authorize('view', $product);
        return view('admin.elements.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     * @throws AuthorizationException
     */
    public function edit($id): View
    {
        $product = Product::query()->findOrFail($id);
        $this->authorize('update', $product);
        $categories = Category::query()->get();

        return view('admin.elements.product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     * @param ProductUpdateRequest $request
     * @param $id
     * @return RedirectResponse
     * @throws AuthorizationException
     */
    public function update(ProductUpdateRequest $request, $id): RedirectResponse
    {
        $data = $request->only([
            'name',
            'price',
            'description',
            'content',
            'category_id'
        ]);

        $product = Product::query()->findOrFail($id);
        $this->authorize('update', $product);
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'products');
        }

        $data['is_disabled'] = (!empty($request->input('status'))) ? false : true;
        $product->update($data);

        return redirect()->route('admin.product.index')->with('flash_success', __('labels.pages.admin.product.messages.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     * @throws AuthorizationException
     * @throws Exception
     */
    public function destroy($id): RedirectResponse
    {
        $product = Product::query()->findOrFail($id);
        $this->authorize('delete', $product);
        $product->delete();

        return redirect()->route('admin.product.index')->with('flash_success', __('labels.pages.admin.product.messages.delete_success'));
    }
}
