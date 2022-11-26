<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\QuizStoreRequest;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();
        $quizList = Quiz::query();
        if (!empty($data['name'])) {
            $quizList = $quizList->where('name', 'like', '%' . $data['name'] . '%')
                ->orWhere('description', 'like', '%' . $data['name'] . '%');
        }

        $quizList = $quizList->orderBy('created_at', 'desc')
            ->paginate(Constant::DEFAULT_PER_PAGE);

        return view('admin.elements.quiz.index', compact('quizList'));
    }

    public function create()
    {
        return view('admin.elements.quiz.create');
    }

    public function store(QuizStoreRequest $request)
    {
        $data = $request->only(['name', 'description', 'is_active']);
        $data['is_active'] = !empty($data['is_active']);

        $quiz = Quiz::query()->create($data);
        if (empty($quiz)) {
            return redirect()->back()->with('flash_danger', 'Tạo thất bại');
        }

        return redirect()->route('admin.quiz.index')->with('flash_success', 'Tạo bài hát thành công');
    }

    public function edit($id)
    {
        $quiz = Quiz::query()->find($id);
        if (empty($quiz)) {
            return redirect()->route('admin.quiz.index')->with('flash_danger', 'Không tìm thấy bài kiểm tra');
        }

        return view('admin.elements.quiz.edit', compact('quiz'));
    }

    public function update(QuizStoreRequest $request, $id)
    {
        $data = $request->only(['name', 'description', 'is_active']);
        $quiz = Quiz::query()->find($id);
        if (empty($quiz)) {
            return redirect()->route('admin.quiz.index')->with('flash_danger', 'Không tìm thấy bài kiểm tra');
        }

        $quiz = tap($quiz)->update($data);
        if (empty($quiz)) {
            return redirect()->route('admin.quiz.index')->with('flash_danger', 'Cập nhật thất bại');
        }

        return redirect()->route('admin.quiz.index')->with('flash_success', 'Cập nhật thành công');
    }
}
