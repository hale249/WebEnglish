<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Helpers\Traits\FileHelperTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SkillStoreRequest;
use App\Http\Requests\Admin\SkillUpdateRequest;
use App\Models\Skill;
use App\Models\SkillCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SkillController extends Controller
{
    use FileHelperTrait;

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $data = $request->all();
        $skills = Skill::query();
        if (!empty($data['name'])) {
            $skills = $skills->where('name', 'like', '%' . $data['name'] . '%')
                ->orWhere('description', 'like', '%' . $data['name'] . '%');
        }

        $userId = !empty($data['user_id']) ? $data['user_id'] : null;
        if (!empty($userId)) {
            $skills = $skills->where('user_id', $userId);
        }

        $skills = $skills->orderBy('created_at', 'desc')
            ->paginate(Constant::DEFAULT_PER_PAGE);

        return view('admin.elements.skill.index', compact('skills'));
    }

    public function create()
    {
        $categories = SkillCategory::query()->get();

        return view('admin.elements.skill.create', compact('categories'));
    }

    public function store(SkillStoreRequest $request)
    {
        $data = $request->only([
            'name',
            'description',
            'category_id',
            'is_active',
            'is_login'
        ]);
        $data['is_active'] = !empty($data['is_active']);
        $data['is_login'] = !empty($data['is_login']);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'skill');
        }

        $data['user_id'] = auth()->id();
        $skill = Skill::query()
            ->create($data);
        if (empty($video)) {
            return redirect()->back()->with('flash_danger', 'Tạo thất bại');
        }

        return redirect()->route('admin.skill.index')->with('flash_success', 'Tạo thành công');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit($id): View
    {
        $skill = Skill::query()->findOrFail($id);
        $categories = SkillCategory::query()->get();

        return view('admin.elements.skill.edit', compact('skill', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SkillUpdateRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(SkillUpdateRequest $request, $id): RedirectResponse
    {
        $data = $request->only([
            'name',
            'description',
            'category_id',
            'is_active',
            'is_login'
        ]);
        $data['is_active'] = !empty($data['is_active']);

        $skill = Skill::query()->findOrFail($id);
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'skill');
        }

        $skill = $skill->update($data);

        if (!$skill) {
            return redirect()->back()->with('flash_danger', 'Cập nhật thất bại');
        }

        return redirect()->route('admin.skill.index')->with('flash_success', 'Cập nhật thành công');
    }

    /**
     * @param $id
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy($id): RedirectResponse
    {
        $skill = Skill::query()->findOrFail($id);
        $isDelete = $skill->delete();
        if (!$isDelete) {
            return redirect()->route('admin.skill.index')->with('flash_danger', 'Xóa thất bại');
        }

        return redirect()->route('admin.skill.index')->with('flash_success', 'Xóa thành công');
    }
}
