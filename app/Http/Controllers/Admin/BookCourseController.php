<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Helpers\Traits\FileHelperTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LessonCourseStoreRequest;
use App\Http\Requests\Admin\LessonCourseUpdateRequest;
use App\Models\LessonCourse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookCourseController extends Controller
{
    use FileHelperTrait;

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View
     */
    public function index(int $lessonId, Request $request): View
    {
        $data = $request->all();
        $courses = LessonCourse::query()->where('lesson_id', $lessonId);
        if (!empty($data['name'])) {
            $courses = $courses->where('title', 'like', '%' . $data['name'] . '%')
                ->orWhere('sub_title', 'like', '%' . $data['name'] . '%');
        }

        $userId = !empty($data['user_id']) ? $data['user_id'] : null;
//        if (!auth()->user()->hasPermissionTo(PermissionConstant::PERMISSION_VIEW_LIST_ALL_CATEGORY)) {
//            $userId = auth()->id();
//        }

        if (!empty($userId)) {
            $courses = $courses->where('user_id', $userId);
        }

        $courses = $courses->orderBy('created_at', 'desc')
            ->paginate(Constant::DEFAULT_PER_PAGE);

        return view('admin.elements.lessonCourse.index', compact('courses'));
    }

    public function create($lessonId)
    {
        $lesson = LessonCourse::query()->where('lesson_id', $lessonId)->first();

        return view('admin.elements.video.create', compact('lesson'));
    }

    public function store(int $lessonId, LessonCourseStoreRequest $request)
    {
        $data = $request->only([
            'title',
            'sub_title',
            'content',
            'content_translate',
            'is_active',
        ]);
        $data['lesson_id'] = $lessonId;
        if (empty($data->is_active)) {
            $data['is_active'] = false;
        }

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'video');
        }

        $data['user_id'] = auth()->id();
        $course = LessonCourse::query()
            ->create($data);
        if (empty($course)) {
            return redirect()->back()->with('flash_danger', 'Tạo thất bại');
        }

        return redirect()->route('admin.video.index')->with('flash_success', 'Tạo bài học thành công');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit($id, $lessonId): View
    {
        $course = LessonCourse::query()->where('lesson_id', $lessonId)->where('id', $id)->first();

        return view('admin.elements.video.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param LessonCourseUpdateRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(LessonCourseUpdateRequest $request, $id, $lessonId): RedirectResponse
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

        $course = LessonCourse::query()->findOrFail($id);
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'blog');
        }

        $course = $course->update($data);

        if (!$course) {
            return redirect()->back()->with('flash_danger', 'Cập nhật thất bại');
        }

        return redirect()->route('admin.video.index')->with('flash_success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id, $lessonId): RedirectResponse
    {
        $course = LessonCourse::query()->where('lesson_id', $lessonId)->where('id', $id)->first();
        $isDelete = $course->delete();
        if (!$isDelete) {
            return redirect()->route('admin.video.index')->with('flash_danger', 'Xóa bài viết thất bại');
        }

        return redirect()->route('admin.video.index')->with('flash_success', 'Xóa bài viết thành công');
    }
}
