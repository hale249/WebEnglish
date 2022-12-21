<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Helpers\Traits\FileHelperTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LessonCourseStoreRequest;
use App\Http\Requests\Admin\LessonCourseUpdateRequest;
use App\Models\BookLessons;
use App\Models\LessonCourse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookLessonCourseController extends Controller
{
    use FileHelperTrait;

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View
     */
    public function index(int $bookId, int $lessonId, Request $request): View
    {
        $data = $request->all();
        $lesson = BookLessons::query()->where('book_id', $bookId)->findOrFail($lessonId);
        $courses = LessonCourse::query()->where('lesson_id', $lessonId);
        if (!empty($data['name'])) {
            $courses = $courses->where('title', 'like', '%' . $data['name'] . '%')
                ->orWhere('sub_title', 'like', '%' . $data['name'] . '%');
        }

        $userId = !empty($data['user_id']) ? $data['user_id'] : null;
        if (!empty($userId)) {
            $courses = $courses->where('user_id', $userId);
        }

        $courses = $courses->orderBy('created_at', 'desc')
            ->paginate(Constant::DEFAULT_PER_PAGE);

        return view('admin.elements.lessonCourse.index', compact('courses', 'lesson'));
    }

    public function create($bookId, $lessonId)
    {
        $lesson = BookLessons::query()->where('book_id', $bookId)->findOrFail($lessonId);

        return view('admin.elements.lessonCourse.create', compact('lesson'));
    }

    public function store(int $bookId, int $lessonId, LessonCourseStoreRequest $request)
    {
        $lesson = BookLessons::query()->where('book_id', $bookId)->findOrFail($lessonId);
        if (empty($lesson)) {
            return redirect()->back()->with('flash_danger', 'Tạo thất bại');
        }

        $data = $request->only([
            'title',
            'sub_title',
            'description',
            'is_active',
            'link_video'
        ]);
        $data['lesson_id'] = $lessonId;
        $data['is_active'] = !empty($data['is_active']);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'lessonCourse');
        }

        $course = LessonCourse::query()
            ->create($data);
        if (empty($course)) {
            return redirect()->back()->with('flash_danger', 'Tạo thất bại');#lỗi khi tạo thất bại
        }

        return redirect()->route('admin.book.lesson.course.index', ['id' => $bookId, 'lessonId' => $lessonId])
            ->with('flash_success', 'Tạo bài học thành công');
    }


    public function edit(int $bookId, int $lessonId, $courseId)
    {
        $lesson = BookLessons::query()->where('book_id', $bookId)->findOrFail($lessonId);
        if (empty($lesson)) {
            return redirect()->back()->with('flash_danger', 'Tạo thất bại');
        }

        $course = LessonCourse::query()->where('lesson_id', $lessonId)->findOrFail($courseId);

        return view('admin.elements.lessonCourse.edit', compact('course', 'lesson'));
    }

    /**
     * @param LessonCourseUpdateRequest $request
     * @param int $bookId
     * @param int $lessonId
     * @param $courseId
     * @return RedirectResponse
     */
    public function update(LessonCourseUpdateRequest $request, int $bookId, int $lessonId, $courseId): RedirectResponse
    {
        $data = $request->only([
            'title',
            'sub_title',
            'description',
            'is_active',
            'link_video'
        ]);
        $data['is_active'] = !empty($data['is_active']);

        $lesson = BookLessons::query()->where('book_id', $bookId)->findOrFail($lessonId);
        if (empty($lesson)) {
            return redirect()->back()->with('flash_danger', 'Tạo thất bại');
        }

        $course = LessonCourse::query()->where('lesson_id', $lessonId)->findOrFail($courseId);
        if (empty($course)) {
            return redirect()->back()->with('flash_danger', 'Tạo thất bại');
        }
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'lessonCourse');
        }

        $course = $course->update($data);

        if (!$course) {
            return redirect()->back()->with('flash_danger', 'Cập nhật thất bại');
        }

        return redirect()->route('admin.book.lesson.course.index', ['id' => $bookId, 'lessonId' => $lessonId])->with('flash_success', 'Cập nhật thành công');
    }

    /**
     * @param int $bookId
     * @param int $lessonId
     * @param $courseId
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(int $bookId, int $lessonId, $courseId): RedirectResponse
    {
        $course = LessonCourse::query()->where('lesson_id', $lessonId)->where('id', $courseId)->first();
        if (empty($course)) {
            return redirect()->back()->with('flash_danger', 'Cập nhật thất bại');
        }

        $isDelete = $course->delete();
        if (!$isDelete) {
            return redirect()->route('admin.book.lesson.course.index', ['id' => $bookId, 'lessonId' => $lessonId])->with('flash_danger', 'Xóa bài viết thất bại');
        }

        return redirect()->route('admin.book.lesson.course.index', ['id' => $bookId, 'lessonId' => $lessonId])->with('flash_success', 'Xóa bài viết thành công');
    }
}
