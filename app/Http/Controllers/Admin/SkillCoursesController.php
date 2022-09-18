<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Helpers\Traits\FileHelperTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SkillCourseStoreRequest;
use App\Models\Skill;
use App\Models\SkillCourses;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SkillCoursesController extends Controller
{
    use FileHelperTrait;

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request, int $skillId): View
    {
        $data = $request->all();
        $skill = Skill::query()->findOrFail($skillId);
        $skills = SkillCourses::query()->where('skill_id', $skillId);
        if (!empty($data['name'])) {
            $skills = $skills->where('name', 'like', '%' . $data['name'] . '%')
                ->orWhere('description', 'like', '%' . $data['name'] . '%');
        }

        $skills = $skills->orderBy('created_at', 'desc')
            ->paginate(Constant::DEFAULT_PER_PAGE);

        return view('admin.elements.skillCourse.index', compact('skills', 'skill'));
    }

    public function create(int $skillId)
    {
        $skill = Skill::query()->findOrFail($skillId);

        return view('admin.elements.skillCourse.create', compact('skill'));
    }

    public function store(SkillCourseStoreRequest $request, $skillId)
    {
        $data = $request->only([
            'name',
            'is_active',
            'description',
            'link_video'
        ]);
        $data['is_active'] = !empty($data['is_active']);
        $data['skill_id'] = $skillId;
        $skill = SkillCourses::query()
            ->create($data);

        if (empty($skill)) {
            return redirect()->back()->with('flash_danger', 'Tạo thất bại');
        }

        return redirect()->route('admin.skill.course.index', $skillId)->with('flash_success', 'Tạo thành công');
    }

    public function edit($skillId, $id): View
    {
        $skill = Skill::query()->findOrFail($skillId);
        $course = SkillCourses::query()->where('skill_id', $skillId)->findOrFail($id);

        return view('admin.elements.skillCourse.edit', compact('skill', 'course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SkillCourseStoreRequest $request
     * @param int $skillId
     * @param int $id
     * @return RedirectResponse
     */
    public function update(SkillCourseStoreRequest $request, $skillId, $id): RedirectResponse
    {
        $data = $request->only([
            'name',
            'is_active',
            'description',
            'link_video'
        ]);
        $data['is_active'] = !empty($data['is_active']);
        $data['skill_id'] = $skillId;

        $skill = SkillCourses::query()->where('skill_id', $skillId)->findOrFail($id);
        if (empty($skill)) {
            return redirect()->back()->with('flash_danger', 'Cập nhật thất bại');
        }

        $skill = $skill->update($data);

        if (!$skill) {
            return redirect()->back()->with('flash_danger', 'Cập nhật thất bại');
        }

        return redirect()->route('admin.skill.course.index', $skillId)->with('flash_success', 'Cập nhật thành công');
    }

    /**
     * @param $skillId
     * @param $id
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy($skillId, $id): RedirectResponse
    {
        $skill = SkillCourses::query()->where('skill_id', $skillId)->findOrFail($id);
        $isDelete = $skill->delete();
        if (!$isDelete) {
            return redirect()->route('admin.skill.course.index', $skillId)->with('flash_danger', 'Xóa thất bại');
        }

        return redirect()->route('admin.skill.course.index', $skillId)->with('flash_success', 'Xóa thành công');
    }
}
