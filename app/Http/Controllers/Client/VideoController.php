<?php

namespace App\Http\Controllers\Client;

use App\Helpers\Constant;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Video;

class VideoController extends Controller
{
    public function index($slug)
    {
        $category = Category::query()->where('slug', $slug)->first();
        if (empty($category)){
            return redirect()->back();
        }

        $videos = Video::query()->where('is_active', true)->paginate(Constant::DEFAULT_PER_PAGE);

        return view('client.elements.video.index', compact('videos', 'category'));
    }

    public function detail($slug)
    {
        $category = Category::query()->where('slug', $slug)->first();

        return view('client.elements.video.detail', compact('category'));
    }
}
