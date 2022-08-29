<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class BookHighSchoolController extends Controller
{
    public function index()
    {
        return view('client.elements.book.index');
    }

    public function lesson()
    {
        return view('client.elements.book.lesson');
    }

    public function lessonIndex()
    {
        return view('client.elements.lesson.index');
    }
}
