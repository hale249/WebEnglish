<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\QuizQuestionRequest;
use App\Models\QuestionOptions;
use App\Models\Quiz;
use App\Models\QuizQuestions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizQuestionController extends Controller
{
    public function index(Request $request, $slug)
    {
        $quiz = Quiz::query()->where('slug', $slug)->first();
        if (empty($quiz)) {
            return redirect()->route('admin.quiz.index')->with('flash_danger', 'Không tìm thấy bài kiểm tra');
        }
        $data = $request->all();
        $questions = QuizQuestions::query()->where('quiz_id', $quiz->id);
        if (!empty($data['name'])) {
            $questions = $questions->where('question', 'like', '%' . $data['name'] . '%');
        }

        $questions = $questions->orderBy('created_at', 'desc')
            ->paginate(Constant::DEFAULT_PER_PAGE);

        return view('admin.elements.quizQuestion.index', compact('questions', 'quiz'));
    }

    public function create($slug)
    {
        $quiz = Quiz::query()->where('slug', $slug)->first();
        if (empty($quiz)) {
            return redirect()->route('admin.quiz.index')->with('flash_danger', 'Không tìm thấy bài kiểm tra');
        }

        return view('admin.elements.quizQuestion.create', compact('quiz'));
    }

    public function store($slug, QuizQuestionRequest $request)
    {
        $data = $request->only(['question', 'options', 'answer', 'is_active']);
        $data['is_active'] = !empty($data['is_active']);
        $data['answer'] = !empty($data['answer']) ? $data['answer'] : 0;
        $quiz = Quiz::query()->where('slug', $slug)->first();
        if (empty($quiz)) {
            return redirect()->route('admin.quiz.index')->with('flash_danger', 'Không tìm thấy bài kiểm tra');
        }

        $question = DB::transaction(function () use ($data, $quiz) {
            $question = QuizQuestions::query()->create([
                'question' => $data['question'],
                'quiz_id' => $quiz->id,
                'is_active' => $data['is_active']
            ]);

            $dataOptions = [];
            foreach($data['options'] as $key=>$option) {
                $isRight = $key == $data['answer'] ? 1 : 0;
                $dataOptions[] = [
                    'question_id' => $question->id,
                    'option' => $option,
                    'is_right_option' => $isRight
                ];
            }

            QuestionOptions::query()->insert($dataOptions);

            return $question;
        });

        if (empty($question)) {
            return redirect()->back()->with('flash_danger', 'Tạo thất bại');
        }

        return redirect()->route('admin.quiz.question.index', ['slug' => $slug])->with('flash_success', 'Tạo thành công');
    }

    public function edit($slug, $id)
    {
        $quiz = Quiz::query()->where('slug', $slug)->first();
        if (empty($quiz)) {
            return redirect()->route('admin.quiz.index')->with('flash_danger', 'Không tìm thấy bài kiểm tra');
        }

        $question = QuizQuestions::query()->with(['options'])->where('id', $id)->first();
        if (empty($question)) {
            return redirect()->route('admin.quiz.question.index', ['slug' => $slug])->with('flash_danger', 'Không tìm thấy bài kiểm tra');
        }

        return view('admin.elements.quizQuestion.edit', compact('question', 'quiz'));
    }

    public function update(QuizQuestionRequest $request, $slug, $id)
    {
        $quiz = Quiz::query()->where('slug', $slug)->first();
        if (empty($quiz)) {
            return redirect()->route('admin.quiz.index')->with('flash_danger', 'Không tìm thấy bài kiểm tra');
        }

        $quizQuestion = QuizQuestions::query()->with(['options'])->where('id', $id)->first();
        if (empty($quizQuestion)) {
            return redirect()->route('admin.quiz.question.index', ['slug' => $slug])->with('flash_danger', 'Không tìm thấy bài kiểm tra');
        }

        $data = $request->only(['question', 'options', 'answer', 'is_active']);
        $data['is_active'] = !empty($data['is_active']);
        $data['answer'] = !empty($data['answer']) ? $data['answer'] : 0;
        $question = DB::transaction(function () use ($data, $quizQuestion) {
            $question = tap($quizQuestion)->update([
                'question' => $data['question'],
                'is_active' => $data['is_active']
            ]);

            $dataOptions = [];
            foreach($data['options'] as $key=>$option) {
                $isRight = $key == $data['answer'] ? 1 : 0;
                $dataOptions[] = [
                    'question_id' => $question->id,
                    'option' => $option,
                    'is_right_option' => $isRight
                ];
            }

            QuestionOptions::query()->where('question_id', $question->id)->delete();

            QuestionOptions::query()->insert($dataOptions);

            return $question;
        });

        if (empty($question)) {
            return redirect()->back()->with('flash_danger', 'Tạo thất bại');
        }

        return redirect()->route('admin.quiz.question.index', ['slug' => $slug])->with('flash_success', 'Tạo thành công');
    }
}
