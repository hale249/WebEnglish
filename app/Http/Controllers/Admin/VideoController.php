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
        if (!empty($userId)) {
            $videos = $videos->where('user_id', $userId);
        }

        $videos = $videos->orderBy('created_at', 'desc')
            ->paginate(Constant::DEFAULT_PER_PAGE);

        return view('admin.elements.video.index', compact('videos'));
    }

    public function create()
    {
        $categories = Category::query()->get();

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
            'link_video',
        ]);
        $data['is_active'] = !empty($data['is_active']);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'video');
        }

        $data['user_id'] = auth()->id();
        $video = Video::query()
            ->create($data);
        if (empty($video)) {
            return redirect()->back()->with('flash_danger', 'T???o th???t b???i');
        }

        return redirect()->route('admin.video.index')->with('flash_success', 'T???o b??i vi???t th??nh c??ng');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit($id): View
    {
        $video = Video::query()->findOrFail($id);
        $categories = Category::query()->get();

        return view('admin.elements.video.edit', compact('video', 'categories'));
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
            'content_translate',
            'category_id',
            'is_active',
            'link_video',
        ]);
        $data['is_active'] = !empty($data['is_active']);

        $video = Video::query()->findOrFail($id);
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'blog');
        }

        $video = $video->update($data);

        if (!$video) {
            return redirect()->back()->with('flash_danger', 'C???p nh???t th???t b???i');
        }

        return redirect()->route('admin.video.index')->with('flash_success', 'C???p nh???t b??i vi???t th??nh c??ng');
    }

    /**
     * @param $id
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy($id): RedirectResponse
    {
        $video = Video::query()->findOrFail($id);
        $isDelete = $video->delete();
        if (!$isDelete) {
            return redirect()->route('admin.video.index')->with('flash_danger', 'X??a b??i vi???t th???t b???i');
        }

        return redirect()->route('admin.video.index')->with('flash_success', 'X??a b??i vi???t th??nh c??ng');
    }
}
