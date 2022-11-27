<?php

namespace App\Http\Controllers\Client;

use App\Helpers\Constant;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Quiz;
use App\Models\QuizQuestions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    public function index()
    {
        $quizList = Quiz::query()
            ->where('is_active', true)
            ->paginate( Constant::DEFAULT_PER_PAGE);

        return view('client.elements.quiz.index', compact('quizList'));
    }

    public function question($id)
    {
        $quiz = Quiz::query()
            ->where('is_active', true)
            ->where('id', $id)
            ->first();
        if (empty($quiz)) {
            return redirect()->route('client.quiz.index');
        }

        $questions = QuizQuestions::query()
            ->with(['options'])
            ->where('quiz_id', $quiz->id)
            ->where('is_active', true)
            ->get();

        return view('client.elements.quiz.question', compact('quiz', 'questions'));
    }

    public function questionTest(Request $request, $quizId)
    {
        $data = $request->all();
        $quiz = Quiz::query()
            ->where('is_active', true)
            ->where('id', $quizId)
            ->first();
        if (empty($quiz)) {
            return redirect()->route('client.quiz.index');
        }

        $questions = QuizQuestions::query()
            ->with(['options'])
            ->where('quiz_id', $quiz->id)
            ->where('is_active', true)
            ->get();

        DB::transaction(function () use ($data, $quiz, $questions) {
            $dataClientQuiz = [];
            $dataInsertQuiz = [];
            $questionSuccess = 0;
            foreach ($questions as $question) {
                $qClient = '';
                $qRight = Helper::handleCheckIsRightOption($question->options);
                if (in_array($question->id, array_keys($data))) {
                    $qClient = $data[$question->id] ?? '';
                    if($qClient == $qRight) {
                        $questionSuccess  += 1;
                    }
                }

                $dataInsertQuiz[] = [
                    'question_id' => $quiz->id,
                    'client_answer' => $qClient,
                    'correct_answer' => $qRight,
                ];
            }

            $dataClientQuiz = [
//                'client_id' =>,
                'quiz_id' => $quiz->id,
                'success' => $questionSuccess,
                'fail' => count($questions) - $questionSuccess,
            ];
        });
    }

    public function questionTestFinish($id)
    {
        $quiz = Quiz::query()
            ->where('is_active', true)
            ->where('id', $id)
            ->first();
        if (empty($quiz)) {
            return redirect()->route('client.quiz.index');
        }

        $questionList = QuizQuestions::query()
            ->with(['options'])
            ->where('quiz_id', $quiz->id)
            ->where('is_active', true)
            ->get();

        $questions = [];


        return view('client.elements.quiz.question_finish', compact('quiz', 'questions'));
    }
}
