<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DictionaryController extends Controller
{
    public function index(Request $request)
    {
        $dictionaries = [];
        $search = $request->input('search');
        $url = 'https://api.dictionaryapi.dev/api/v2/entries/en/';
        if (!empty($search)) {
            $dictionaries = Http::get($url . $search);
            $dictionaries = json_decode($dictionaries, true);
        }

        return view('client.elements.dictionary.index', compact('dictionaries'));
    }

    public function detail()
    {
        return view('client.elements.dictionary.detail');
    }
}
