<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Helpers\Traits\FileHelperTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BookUpdateRequest;
use App\Models\Book;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookController extends Controller
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
        $books = Book::query();
        if (!empty($data['name'])) {
            $books = $books->where('name', 'like', '%' . $data['name'] . '%');
        }

        $userId = !empty($data['user_id']) ? $data['user_id'] : null;
//        if (!auth()->user()->hasPermissionTo(PermissionConstant::PERMISSION_VIEW_LIST_ALL_CATEGORY)) {
//            $userId = auth()->id();
//        }

        if (!empty($userId)) {
            $books = $books->where('user_id', $userId);
        }

        $books = $books->orderBy('created_at', 'desc')
            ->paginate(Constant::DEFAULT_PER_PAGE);

        return view('admin.elements.book.index', compact('books'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function show($id): View
    {
        $book = Book::query()->findOrFail($id);

        return view('admin.elements.book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit($id): View
    {
        $category = Book::query()->findOrFail($id);

        return view('admin.elements.book.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BookUpdateRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(BookUpdateRequest $request, $id): RedirectResponse
    {
        $data = $request->only([
            'is_active',
            'is_new',
            'description',
        ]);
        $book = Book::query()->findOrFail($id);
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'books');
        }

        $book->update($data);

        return redirect()->route('admin.book.index')->with('flash_success', 'Cập nhật sách thành công');
    }
}
