<?php

namespace App\Http\Controllers\Client;

use App\Helpers\Constant;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookLessons;
use App\Models\LessonCourse;
use Illuminate\Support\Facades\DB;

class BookHighSchoolController extends Controller
{
    public function index()
    {
        $books = Book::query()
            ->where('is_active', true)->get()->groupBy('class_number');

        return view('client.elements.book.index', compact('books'));
    }

    public function lesson($slug)
    {
        $book = Book::query()->where('slug', $slug)->first();
        if (empty($book)) {
            return redirect()->route('client.home.index');
        }
        $lessons = BookLessons::query()->where('book_id', $book->id)
            ->where('is_active', true)->get();

        return view('client.elements.book.lesson', compact('lessons', 'book'));
    }

    public function unitLesson($bookSlug, $lessonSlug)
    {
        $book = Book::query()->where('slug', $bookSlug)->first();
        if (empty($book)) {
            return redirect()->route('client.home.index');
        }

        $bookLesson = BookLessons::query()
            ->where('book_id', $book->id)
            ->where('slug', $lessonSlug)
            ->first();
        if (empty($bookLesson)) {
            return redirect()->route('client.book.lesson', $bookSlug);
        }

        $lessons = LessonCourse::query()
            ->where('lesson_id', $bookLesson->id)
            ->where('is_active', true)
            ->paginate(Constant::DEFAULT_PER_PAGE);

        return view('client.elements.book.lessonUnit', compact('book', 'bookLesson', 'lessons'));
    }

    public function unitDetail($bookSlug, $lessonSlug, $unitId)
    {
        $book = Book::query()->where('slug', $bookSlug)->first();
        if (empty($book)) {
            return redirect()->route('client.home.index');
        }

        $bookLesson = BookLessons::query()
            ->where('book_id', $book->id)
            ->where('slug', $lessonSlug)
            ->first();
        if (empty($bookLesson)) {
            return redirect()->route('client.book.lesson', $bookSlug);
        }

        $lesson = LessonCourse::query()
            ->where('lesson_id', $bookLesson->id)
            ->where('is_active', true)
            ->where('id', $unitId)
            ->first();

        if (empty($lesson)) {
            return redirect()->route('client.book.unit', ['slug' => $bookSlug, 'lessonSlug' => $lessonSlug]);
        }

        return view('client.elements.book.unitDetail', compact('book', 'bookLesson', 'lesson'));
    }

    public function lessonIndex()
    {
        return view('client.elements.lesson.index');
    }
}
