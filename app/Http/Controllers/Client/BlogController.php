<?php

namespace App\Http\Controllers\Client;

use App\Helpers\Constant;
use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::query()->where('is_active', true)->paginate(Constant::DEFAULT_PER_PAGE);

        return view('client.elements.blog.index', compact('blogs'));
    }

    public function detail($id)
    {
        $blog = Blog::query()->where('id', $id)
            ->where('is_active', true)->first();

        return view('client.elements.blog.detail', compact('blog'));
    }
}
