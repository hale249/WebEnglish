<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Helpers\PermissionConstant;
use App\Helpers\Traits\FileHelperTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryStoreRequest;
use App\Models\Category;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
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
        $data = $request->all(); // Lấy dữ liệu từ user gửi lên

        $categories = Category::query(); // select *  from category where (......) ->order by ()->limit(10)
        if (!empty($data['name'])) {
            $categories = $categories->where('name', 'like', '%' . $data['name'] . '%'); // tìm kiếm theo câu điều kiện like
        }

        $userId = !empty($data['user_id']) ? $data['user_id'] : null; // tìm  xem có tồn tại userId không. nếu có sẽ where theo user_id
        if (!empty($userId)) {
            $categories = $categories->where('user_id', $userId);
        }

        $categories = $categories->orderBy('created_at', 'desc') // sort by theo column
            ->paginate(Constant::DEFAULT_PER_PAGE); // phân trang theo perpage = ? ( hiện tain perpage đang để là 10)

        return view('admin.elements.category.index', compact('categories')); // đổ dữ liệu ra view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.elements.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryStoreRequest $request
     * @return RedirectResponse
     */
    public function store(CategoryStoreRequest $request): RedirectResponse
    {
        $data = $request->only([
            'name',
            'description',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'categories');
        }

        $data['user_id'] = auth()->id();
        Category::query()
            ->create($data);

        return redirect()->route('admin.category.index')->with('flash_success','Tạo danh mục thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function show($id): View
    {
        $category = Category::query()->findOrFail($id);

        return view('admin.elements.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit($id): View
    {
        $category = Category::query()->findOrFail($id);

        return view('admin.elements.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryStoreRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(CategoryStoreRequest $request, $id): RedirectResponse
    {
        $data = $request->only([
            'name',
            'description',
        ]);
        $category = Category::query()->findOrFail($id);
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'categories');
        }

        $category->update($data);

        return redirect()->route('admin.category.index')->with('flash_success', 'Cập nhật danh mục thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy($id): RedirectResponse
    {
        $category = Category::query()->findOrFail($id);
        $category->delete();

        return redirect()->route('admin.category.index')->with('flash_success', 'Xóa danh mục thành công');
    }
}
