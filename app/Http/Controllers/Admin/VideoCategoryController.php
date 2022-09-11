<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Helpers\PermissionConstant;
use App\Helpers\Traits\FileHelperTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogStoreRequest;
use App\Http\Requests\Admin\BlogUpdateRequest;
use App\Http\Requests\Admin\CategoryStoreRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VideoCategoryController extends Controller
{
    use FileHelperTrait;

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $data = $request->all();
        $categories = Category::query()
            ->where('type', Category::VIDEO);
        if (!empty($data['name'])) {
            $categories = $categories->where('name', 'like', '%' . $data['name'] . '%');
        }

        $userId = !empty($data['user_id']) ? $data['user_id'] : null;
        if (!auth()->user()->hasPermissionTo(PermissionConstant::PERMISSION_VIEW_LIST_ALL_CATEGORY)) {
            $userId = auth()->id();
        }

        if (!empty($userId)) {
            $categories = $categories->where('user_id', $userId);
        }

        $categories = $categories->orderBy('created_at', 'desc')
            ->paginate(Constant::DEFAULT_PER_PAGE);

        return view('admin.elements.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.elements.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryStoreRequest $request
     * @return RedirectResponse
     */
    public function store(CategoryStoreRequest $request): RedirectResponse
    {
        $data = $request->only([
            'name',
            'description',
            'is_active',
        ]);

        if (empty($data['is_active'])) {
            $data['is_active'] = false;
        }

        $data['type'] = Category::VIDEO;

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'categories');
        }

        $data['user_id'] = auth()->id();
        $category = Category::query()
            ->create($data);
        if(empty($category)) {
            return redirect()->back()->with('flash_danger', 'Cập nhật thất bại');
        }

        return redirect()->route('admin.category.index')->with('flash_success','Tạo danh mục thành công');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit($id)
    {
        $category = Category::query()
            ->where('type', Category::VIDEO)->findOrFail($id);

        return view('admin.elements.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryStoreRequest $request
     * @param int $id
     * @return RedirectResponse
     * @throws AuthorizationException
     */
    public function update(CategoryStoreRequest $request, $id): RedirectResponse
    {
        $data = $request->only([
            'name',
            'description',
            'is_active',
        ]);
        $category = Category::query()
            ->where('type', Category::VIDEO)
            ->findOrFail($id);
        if (empty($data['is_active'])) {
            $data['is_active'] = false;
        }

        $this->authorize('update', $category);
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'categories');
        }

        $category->update($data);

        return redirect()->route('admin.category.index')->with('flash_success', 'Cập nhật danh mục thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $category = Category::query()->findOrFail($id);
        $isDelete = $category->delete();
        if (!$isDelete) {
            return redirect()->route('admin.category.index')->with('flash_danger', 'Xóa bài viết thất bại');
        }

        return redirect()->route('admin.category.index')->with('flash_success', 'Xóa danh mục thành công');
    }
}
