<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Helpers\Traits\FileHelperTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SkillCategoryStoreRequest;
use App\Models\SkillCategory;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SkillCategoryController extends Controller
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
        $categories = SkillCategory::query();
        if (!empty($data['name'])) {
            $categories = $categories->where('name', 'like', '%' . $data['name'] . '%');
        }

        $categories = $categories->orderBy('created_at', 'desc')
            ->paginate(Constant::DEFAULT_PER_PAGE);

        return view('admin.elements.skillCategory.index', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit($id): View
    {
        $category = SkillCategory::query()->findOrFail($id);

        return view('admin.elements.skillCategory.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SkillCategoryStoreRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(SkillCategoryStoreRequest $request, $id): RedirectResponse
    {
        $data = $request->only([
            'name',
            'description',
            'is_active'
        ]);
        $data['is_active'] = !empty($data['is_active']);
        $category = SkillCategory::query()->findOrFail($id);
        if (empty($category)) {
            return redirect()->back()->with('flash_danger', 'Cập nhật thất bại');
        }

        $category->update($data);

        return redirect()->route('admin.skill.category.index')->with('flash_success', 'Cập nhật danh mục thành công');
    }
}
