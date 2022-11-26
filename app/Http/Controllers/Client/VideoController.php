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
            return redirect()->route('client.home.index');
        }

        $videos = Video::query()->where('is_active', true)->where('category_id', $category->id)->paginate(Constant::DEFAULT_PER_PAGE);

        return view('client.elements.video.index', compact('videos', 'category'));
    }

    public function detail($slug, $id)
    {
        $category = Category::query()->where('slug', $slug)->first();
        if (empty($category)) {
            return redirect()->route('client.home.index');
        }

        $video = Video::query()->where('is_active', true)->where('id', $id)->first();
        if (empty($video)){
            return redirect()->route('client.video.index', $slug);
        }

        return view('client.elements.video.detail', compact('category', 'video'));
    }
}
