<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Helpers\Traits\FileHelperTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SliderRequest;
use App\Http\Requests\Admin\SliderStoreRequest;
use App\Http\Requests\Admin\SliderUpdateRequest;
use App\Models\Slider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SliderController extends Controller
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
        $sliders = Slider::query();
        if (!empty($data['name'])) {
            $sliders = $sliders->where('name', 'like', '%' . $data['name'] . '%');
        }

        $userId = !empty($data['user_id']) ? $data['user_id'] : null;
//        if (!auth()->user()->hasPermissionTo(PermissionConstant::PERMISSION_VIEW_LIST_ALL_CATEGORY)) {
//            $userId = auth()->id();
//        }

        if (!empty($userId)) {
            $sliders = $sliders->where('user_id', $userId);
        }

        $sliders = $sliders->orderBy('created_at', 'desc')
            ->paginate(Constant::DEFAULT_PER_PAGE);

        return view('admin.elements.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.elements.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SliderStoreRequest $request
     * @return RedirectResponse
     */
    public function store(SliderStoreRequest $request): RedirectResponse
    {
        $data = $request->only([
            'name',
            'description',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'sliders');
        }

        $data['user_id'] = auth()->id();
        Slider::query()
            ->create($data);

        return redirect()->route('admin.slider.index')->with('flash_success','Tạo slider thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function show($id): View
    {
        $slider = Slider::query()->findOrFail($id);
//        $this->authorize('view', $category);

        return view('admin.elements.slider.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit($id): View
    {
        $slider = Slider::query()->findOrFail($id);
//        $this->authorize('update', $category);

        return view('admin.elements.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SliderUpdateRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(SliderUpdateRequest $request, $id): RedirectResponse
    {
        $data = $request->only([
            'name',
            'description',
        ]);
        $slider = Slider::query()->findOrFail($id);
//        $this->authorize('update', $slider);
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'sliders');
        }

        $slider->update($data);

        return redirect()->route('admin.slider.index')->with('flash_success', 'Cập nhật slider thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy($id): RedirectResponse
    {
        $category = Slider::query()->findOrFail($id);
//        $this->authorize('delete', $category);
        $category->delete();

        return redirect()->route('admin.slider.index')->with('flash_success', 'Xóa slider thành công');
    }
}
