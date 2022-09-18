<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Helpers\Traits\FileHelperTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BookLessonStoreRequest;
use App\Http\Requests\Admin\BookLessonUpdateRequest;
use App\Models\Book;
use App\Models\BookLessons;

class BookLessonController extends Controller
{
    use FileHelperTrait;

    public function index($bookId)
    {
        $book = Book::query()->findOrFail($bookId);
        $lessons = BookLessons::query()
            ->where('book_id', $bookId);
        if (!empty($data['name'])) {
            $lessons = $lessons->where('name', 'like', '%' . $data['name'] . '%');
        }

        $userId = !empty($data['user_id']) ? $data['user_id'] : null;

        if (!empty($userId)) {
            $lessons = $lessons->where('user_id', $userId);
        }

        $lessons = $lessons->orderBy('created_at', 'desc')
            ->paginate(Constant::DEFAULT_PER_PAGE);

        return view('admin.elements.booklessons.index', compact('lessons', 'book'));
    }

    public function create($bookId)
    {
        $book = Book::query()->findOrFail($bookId);

        return view('admin.elements.booklessons.create', compact('book'));
    }

    public function store($bookId, BookLessonStoreRequest $request)
    {
        $data = $request->only([
            'name',
            'is_active'
        ]);

        $data['book_id'] = $bookId;

        $data['is_active'] = !empty($data['is_active']);
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'lessons');
        }

        $data['user_id'] = auth()->id();
        $blog = BookLessons::query()
            ->create($data);
        if (empty($blog)) {
            return redirect()->back()->with('flash_danger', 'Tạo thất bại');
        }

        return redirect()->route('admin.book.lesson.index', $bookId)->with('flash_success', 'Tạo bài học thành công');
    }

    public function edit($bookId, $lessonId)
    {
        $lesson = BookLessons::query()
            ->where('book_id', $bookId)
            ->where('id', $lessonId)
            ->first();
        $book = Book::query()->findOrFail($bookId);

        return view('admin.elements.booklessons.edit', compact('book', 'lesson'));
    }

    public function update($bookId, $lessonId, BookLessonUpdateRequest $request)
    {
        $data = $request->only([
            'name',
            'is_active',
        ]);
        $data['is_active'] = !empty($data['is_active']);

        $lesson = BookLessons::query()->where('book_id', $bookId)
            ->where('id', $lessonId)->first();
        if (empty($lesson)) {
            return redirect()->back()->with('flash_danger', 'Cập nhật thất bại');
        }
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'lesson');
        }

        $lesson = $lesson->update($data);

        if (!$lesson) {
            return redirect()->back()->with('flash_danger', 'Cập nhật thất bại');
        }

        return redirect()->route('admin.book.lesson.index', $bookId)->with('flash_success', 'Cập nhật bài học thành công');
    }

    public function destroy($bookId, $lessonId)
    {
        $lesson = BookLessons::query()
            ->where('book_id', $bookId)
            ->where('id', $lessonId)
            ->first();
        if (empty($lesson)) {
            return redirect()->back()->with('flash_danger', 'Xóa thất bại');
        }

        $isDelete = $lesson->delete();
        if (empty($isDelete)) {
            return redirect()->back()->with('flash_danger', 'Xóa thất bại');
        }

        return redirect()->route('admin.book.lesson.index', $bookId)->with('flash_success', 'Xóa bài học thành công');
    }
}
