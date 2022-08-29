<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class MusicController extends Controller
{
    public function index()
    {
        return view('client.elements.music.index');
    }

    public function detail()
    {
        return view('client.elements.music.detail');
    }
}
