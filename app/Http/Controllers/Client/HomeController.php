<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Music;
use App\Models\Quiz;
use App\Models\Skill;
use App\Models\SkillCategory;

class HomeController extends Controller
{
    public function index()
    {
        $musics =  Music::query()
            ->where('is_active', true)
            ->take(4)
            ->get();
        $books = Book::query()
            ->where('is_active', true)
            ->where('is_new', false)
            ->get();

        $categoryPron = SkillCategory::query()
            ->where('slug', 'PRONUNCIATION')
            ->first();
        $skills = [];
        if (!empty($categoryPron)) {
            $skills = Skill::query()
                ->where('category_id', $categoryPron->id)
                ->where('is_active', true)
                ->take(6)->get();
        }

        $quizList = Quiz::query()->where('is_active', true)->limit(5)->get();

        return view('client.elements.home.index', compact('musics', 'books', 'skills', 'categoryPron', 'quizList'));
    }
}
