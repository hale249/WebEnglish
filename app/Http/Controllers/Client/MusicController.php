<?php

namespace App\Http\Controllers\Client;

use App\Helpers\Constant;
use App\Http\Controllers\Controller;
use App\Models\Music;

class MusicController extends Controller
{
    public function index()
    {
        $musics = Music::query()
            ->paginate(Constant::DEFAULT_PER_PAGE);

        return view('client.elements.music.index', compact('musics'));
    }

    public function detail($id)
    {
        $music = Music::query()
            ->where('id', $id)
            ->where('is_active', true)
            ->first();
        if (empty($music)) {
            return route('client.music.index');
        }

        return view('client.elements.music.detail', compact('music'));
    }
}
