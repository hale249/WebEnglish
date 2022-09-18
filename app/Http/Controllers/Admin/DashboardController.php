<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Client;
use App\Models\LessonCourse;
use App\Models\Music;
use App\Models\SkillCourses;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $blogs = Blog::query()->count();
        $videos = Video::query()->count();
        $skillCourse = SkillCourses::query()->count();
        $music = Music::query()->count();
        $bookLessonCourse = LessonCourse::query()->count();
        $client = Client::query()->count();
        $boxOverviews = [
            'blog' => $blogs,
            'video' => $videos,
            'skill' => $skillCourse,
            'music' => $music,
            'book' => $bookLessonCourse,
            'client' => $client
        ];

        $users = Client::select(DB::raw("COUNT(*) as total"), DB::raw("MONTHNAME(created_at) as month_name"))
            ->whereYear('created_at', date('Y'))
            ->groupBy('month_name')
            ->pluck('total', 'month_name');
        $labels = $users->keys();
        $data = $users->values();

        $chartUser = [
            'labels' => $labels,
            'data' => $data
        ];

        return view('admin.elements.dashboard.index', compact('boxOverviews', 'chartUser'));
    }
}
