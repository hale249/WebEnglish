<?php

namespace App\Http\Controllers\Client;

use App\Helpers\Constant;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\ClientQuiz;
use App\Models\ClientQuizFinish;
use App\Models\Quiz;
use App\Models\QuizQuestions;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        if (empty(Auth::guard('client')->user())) {
            return redirect()->route('client.auth.form.login');
        }

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

        $clientQuiz = DB::transaction(function () use ($data, $quiz, $questions) {
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
                    'question_id' => $question->id,
                    'client_answer' => $qClient,
                    'correct_answer' => $qRight,
                ];
            }

            $dataClientQuiz = [
                'client_id' => Auth::guard('client')->user()->id,
                'quiz_id' => $quiz->id,
                'success' => $questionSuccess,
                'fail' => count($questions) - $questionSuccess,
            ];

            $clientQuiz = ClientQuiz::query()->create($dataClientQuiz);
            $dataQuestions = [];
            foreach ($dataInsertQuiz as $quizItem) {
                $dataQuestions[] = [
                    'question_id' => $quizItem['question_id'],
                    'client_answer' => $quizItem['client_answer'],
                    'correct_answer' => $quizItem['correct_answer'],
                    'client_quiz_id' => $clientQuiz->id,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];
            }

            ClientQuizFinish::query()->insert($dataQuestions);

            return $clientQuiz;
        });

        if (empty($clientQuiz)) {
            return redirect()->route('client.quiz.index');
        }

        return redirect()->route('client.quiz.question.finish', $clientQuiz->id);
    }

    public function questionTestFinish($id)
    {
        if (empty(Auth::guard('client')->user())) {
            return redirect()->route('client.auth.form.login');
        }

        $clientQuiz = ClientQuiz::query()
            ->with(['quiz'])
            ->where('id', $id)
            ->where('client_id', Auth::guard('client')->user()->id)
            ->first();
        if (empty($clientQuiz) || empty($clientQuiz->quiz)) {
            return redirect()->route('client.quiz.index');
        }

        $quiz = $clientQuiz->quiz;

        $questionList = QuizQuestions::query()
            ->with(['options'])
            ->where('quiz_id', $clientQuiz->quiz_id)
            ->where('is_active', true)
            ->get();

        $clientQuestionList = ClientQuizFinish::query()->where('client_quiz_id', $id)->get();

        $questions = [];
        if ($questionList->isNotEmpty()) {
            foreach ($questionList as $question) {
                $clientQuizElement = $clientQuestionList
                    ->where('question_id', $question->id)
                    ->first();


                $questions[] = [
                    'id' => $question->id,
                    'question' => $question->question,
                    'options' => $question->options ?? [],
                    'created_at' => $question->created_at,
                    'updated_at' => $question->updated_at,
                    'client_answer' => $clientQuizElement->client_answer ?? '',
                    'correct_answer' => $clientQuizElement->correct_answer ?? '',
                ];
            }
        }

        return view('client.elements.quiz.question_finish', compact('quiz' , 'clientQuiz', 'questions'));
    }
}
