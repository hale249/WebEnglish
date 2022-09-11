<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Helpers\Traits\FileHelperTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogStoreRequest;
use App\Http\Requests\Admin\BlogUpdateRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VideoController extends Controller
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
        $videos = Video::query();
        if (!empty($data['name'])) {
            $videos = $videos->where('title', 'like', '%' . $data['name'] . '%')
                ->orWhere('sub_title', 'like', '%' . $data['name'] . '%');
        }

        $userId = !empty($data['user_id']) ? $data['user_id'] : null;
//        if (!auth()->user()->hasPermissionTo(PermissionConstant::PERMISSION_VIEW_LIST_ALL_CATEGORY)) {
//            $userId = auth()->id();
//        }

        if (!empty($userId)) {
            $videos = $videos->where('user_id', $userId);
        }

        $videos = $videos->orderBy('created_at', 'desc')
            ->paginate(Constant::DEFAULT_PER_PAGE);

        return view('admin.elements.video.index', compact('videos'));
    }

    public function create()
    {
        $categories = Category::query()->where('type', Category::VIDEO)->get();

        return view('admin.elements.video.create', compact('categories'));
    }

    public function store(BlogStoreRequest $request)
    {
        $data = $request->only([
            'title',
            'sub_title',
            'content',
            'content_translate',
            'category_id',
            'is_active',
        ]);
        if (empty($data->is_active)) {
            $data['is_active'] = false;
        }

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'video');
        }

        $data['user_id'] = auth()->id();
        $blog = Blog::query()
            ->create($data);
        if (empty($blog)) {
            return redirect()->back()->with('flash_danger', 'Tạo thất bại');
        }

        return redirect()->route('admin.video.index')->with('flash_success', 'Tạo bài viết thành công');
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

        return view('admin.elements.video.edit', compact('blog'));
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
        if (empty($data->is_active)) {
            $data['is_active'] = false;
        }

        $blog = Blog::query()->findOrFail($id);
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'blog');
        }

        $blog = $blog->update($data);

        if (!$blog) {
            return redirect()->back()->with('flash_danger', 'Cập nhật thất bại');
        }

        return redirect()->route('admin.video.index')->with('flash_success', 'Cập nhật bài viết thành công');
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
            return redirect()->route('admin.video.index')->with('flash_danger', 'Xóa bài viết thất bại');
        }

        return redirect()->route('admin.video.index')->with('flash_success', 'Xóa bài viết thành công');
    }
}
