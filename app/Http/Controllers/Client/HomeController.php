<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Music;

class HomeController extends Controller
{
    public function index()
    {
        $musics =  Music::query()
            ->where('is_active', true)->take(4)->get();
        $books = Book::query()->where('is_active', true)->where('is_new', false)->get();

        return view('client.elements.home.index', compact('musics', 'books'));
    }
}
