<?php

namespace App\Providers;

use App\Models\Book;
use App\Models\Category;
use App\Models\SkillCategory;
use App\Models\Slider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $sliders = Slider::query()->get();
        $books = Book::query()->where('is_active', true)->get();
        $videoCategories = Category::query()->where('is_active', true)->get();;
        $skillCategories = SkillCategory::query()->where('is_active', true)->get();;
        View::share('sliders', $sliders);
        View::share('books', $books);
        View::share('videoCategories', $videoCategories);
        View::share('skillCategories', $skillCategories);
    }
}
