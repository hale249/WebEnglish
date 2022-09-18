<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Music;

class HomeController extends Controller
{
    public function index()
    {
        $musics =  Music::query()
            ->where('is_active', true)->take(4)->get();

        return view('client.elements.home.index', compact('musics'));
    }
}
