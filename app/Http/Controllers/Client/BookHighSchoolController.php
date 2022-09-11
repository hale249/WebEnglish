<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookLessons;
use Illuminate\Support\Facades\DB;

class BookHighSchoolController extends Controller
{
    public function index()
    {
        $books = Book::query()
            ->where('is_active', true)->get()->groupBy('class_number');

        return view('client.elements.book.index', compact('books'));
    }

    public function lesson($bookId)
    {
        $book = Book::query()->findOrFail($bookId);
        $lessons = BookLessons::query()->where('book_id', $bookId)
            ->where('is_active', true)->get();

        return view('client.elements.book.lesson', compact('lessons', 'book'));
    }

    public function lessonIndex()
    {
        return view('client.elements.lesson.index');
    }
}
