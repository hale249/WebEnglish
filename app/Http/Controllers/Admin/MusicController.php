<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Helpers\Traits\FileHelperTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogStoreRequest;
use App\Http\Requests\Admin\BlogUpdateRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Music;
use App\Models\Video;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MusicController extends Controller
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
        $musics = Music::query();
        if (!empty($data['name'])) {
            $musics = $musics->where('title', 'like', '%' . $data['name'] . '%')
                ->orWhere('sub_title', 'like', '%' . $data['name'] . '%');
        }

        $userId = !empty($data['user_id']) ? $data['user_id'] : null;
//        if (!auth()->user()->hasPermissionTo(PermissionConstant::PERMISSION_VIEW_LIST_ALL_CATEGORY)) {
//            $userId = auth()->id();
//        }

        if (!empty($userId)) {
            $musics = $musics->where('user_id', $userId);
        }

        $musics = $musics->orderBy('created_at', 'desc')
            ->paginate(Constant::DEFAULT_PER_PAGE);

        return view('admin.elements.music.index', compact('musics'));
    }

    public function create()
    {
        return view('admin.elements.music.create');
    }

    public function store(BlogStoreRequest $request)
    {
        $data = $request->only([
            'title',
            'sub_title',
            'content',
            'content_translate',
            'is_active',
            'link_video',
        ]);
        $data['is_active'] = !empty($data['is_active']);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'video');
        }

        $data['user_id'] = auth()->id();
        $music = Music::query()
            ->create($data);
        if (empty($music)) {
            return redirect()->back()->with('flash_danger', 'Tạo thất bại');
        }

        return redirect()->route('admin.music.index')->with('flash_success', 'Tạo bài hát thành công');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit($id): View
    {
        $music = Music::query()->findOrFail($id);

        return view('admin.elements.music.edit', compact('music'));
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
            'is_active',
            'link_video',
        ]);
        $data['is_active'] = !empty($data['is_active']);

        $music = Music::query()->findOrFail($id);
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'blog');
        }

        $music = $music->update($data);

        if (!$music) {
            return redirect()->back()->with('flash_danger', 'Cập nhật thất bại');
        }

        return redirect()->route('admin.music.index')->with('flash_success', 'Cập nhật bài hát thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $music = Music::query()->findOrFail($id);
        $isDelete = $music->delete();
        if (!$isDelete) {
            return redirect()->route('admin.music.index')->with('flash_danger', 'Xóa bài hát thất bại');
        }

        return redirect()->route('admin.music.index')->with('flash_success', 'Xóa bài hát thành công');
    }
}
