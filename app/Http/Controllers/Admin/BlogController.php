<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Helpers\Traits\FileHelperTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogStoreRequest;
use App\Http\Requests\Admin\BlogUpdateRequest;
use App\Models\Blog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
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
        $blogs = Blog::query();
        if (!empty($data['title'])) {
            $blogs = $blogs->where('title', 'like', '%' . $data['name'] . '%')
                ->orWhere('sub_title', 'like', '%' . $data['name'] . '%');
        }

        $userId = !empty($data['user_id']) ? $data['user_id'] : null;
//        if (!auth()->user()->hasPermissionTo(PermissionConstant::PERMISSION_VIEW_LIST_ALL_CATEGORY)) {
//            $userId = auth()->id();
//        }

        if (!empty($userId)) {
            $blogs = $blogs->where('user_id', $userId);
        }

        $blogs = $blogs->orderBy('created_at', 'desc')
            ->paginate(Constant::DEFAULT_PER_PAGE);

        return view('admin.elements.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.elements.blog.create');
    }

    public function store(BlogStoreRequest $request)
    {
        $data = $request->only([
            'title',
            'sub_title',
            'content',
            'status',
        ]);
        $data['is_active'] = !empty($data['is_active']);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'blog');
        }

        $data['user_id'] = auth()->id();
        $blog = Blog::query()
            ->create($data);
        if (empty($blog)) {
            return redirect()->back()->with('flash_danger', 'Tạo thất bại');
        }

        return redirect()->route('admin.blog.index')->with('flash_success', 'Tạo bài viết thành công');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit($id): View
    {
        $blog = Blog::query()->findOrFail($id);

        return view('admin.elements.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BlogUpdateRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(BlogUpdateRequest $request, $id): RedirectResponse
    {
        $data = $request->only([
            'title',
            'sub_title',
            'content',
            'is_active',
        ]);
        $data['is_active'] = !empty($data['is_active']);

        $blog = Blog::query()->findOrFail($id);
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'blog');
        }

        $blog = $blog->update($data);

        if(!$blog) {
            return redirect()->back()->with('flash_danger', 'Cập nhật thất bại');
        }

        return redirect()->route('admin.blog.index')->with('flash_success', 'Cập nhật bài viết thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $category = Blog::query()->findOrFail($id);
        $isDelete = $category->delete();
        if (!$isDelete) {
            return redirect()->route('admin.category.index')->with('flash_danger', 'Xóa bài viết thất bại');
        }

        return redirect()->route('admin.category.index')->with('flash_success', 'Xóa bài viết thành công');
    }
}
