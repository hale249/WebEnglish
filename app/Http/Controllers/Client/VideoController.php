<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    public function index()
    {
        return view('client.elements.video.index');
    }

    public function detail()
    {
        return view('client.elements.video.detail');
    }
}
