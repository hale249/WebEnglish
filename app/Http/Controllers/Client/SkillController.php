<?php

namespace App\Http\Controllers\Client;

use App\Helpers\Constant;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(Request $request)
    {
        $categoryId = $request->get('category_id');
        $skills = Skill::query()->where('is_active', true);
        if (!empty($categoryId)) {
            $skills = $skills->where('category_id', $categoryId);
        }

        $cloneCopy = clone $skills;
        $count = count($cloneCopy->get());

        $skills = $skills->paginate(Constant::DEFAULT_PER_PAGE);
        $category = [];
        if (!empty($categoryId)) {
            $category = Category::query()->where('id', $categoryId)->first();
        }

        return view('client.elements.skill.index', compact('skills', 'category', 'count'));
    }

    public function detail($skillId)
    {
        $skill = Skill::query()->with('courses')->findOrFail($skillId);
        $lastSkills = Skill::query()->where('id', '>', $skillId)->limit(2)->get();

        return view('client.elements.skill.detail', compact('skill', 'lastSkills'));
    }
}
