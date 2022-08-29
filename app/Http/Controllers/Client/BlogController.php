<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        return view('client.elements.blog.index');
    }

    public function detail()
    {
        return view('client.elements.blog.detail');
    }
}
