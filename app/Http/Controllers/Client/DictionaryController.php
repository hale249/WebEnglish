<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class DictionaryController extends Controller
{
    public function index()
    {
        return view('client.elements.dictionary.index');
    }

    public function detail()
    {
        return view('client.elements.dictionary.detail');
    }
}
