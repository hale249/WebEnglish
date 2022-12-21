@extends('client.layouts.app')

@section('title', 'Bài học')

@section('content')
    <div class="container container__background">
        <h3 class="heading__h">Kết quả bài thực hành: {{ $quiz->name }}</h3>
        <div class="bg-light text-center">
            <p class="fs-5 text text-primary mb-0">Số câu trả lời đúng: {{ $clientQuiz->success ?? 0 }}.</p>
            <p class="fs-5 text text-danger fst-italic mb-0">Số câu trả lời sai: {{ $clientQuiz->fail ?? 0 }}</p>
            <small>Kiểm tra lúc: {{ $clientQuiz->created_at->format('d-m-Y h:i:s') }}</small>
        </div>

        @foreach($questions as $key=>$question)
            <div class="">
                <div class="answer">
                    <div class="@if($question['client_answer'] != $question['correct_answer']) text-danger @endif">
                        <i>Câu {{ $key+1 }}: {{ $question['question'] }}  <i class="mr-2">{{ empty($question['client_answer']) ? '(Chưa chọn đáp án)' : '' }}</i></i>
                    </div>
                    <div class="row">
                        @foreach($question['options'] as $key=>$option)
                            <div class=" form-check col-6 mb-3">
                                <input type="radio" @if($option->id == $question['client_answer']) checked @endif value="{{ $option->id }}" name="{{$question['id']}}" id="questionForm{{$question['id']}}{{\App\Helpers\Helper::convertKeyNumberToAlphabet($key)}}" disabled>
                                <label class="form-check-label
                                @if($question['client_answer'] != $question['correct_answer'] && $option->is_right_option) text-bg-primary @endif
                                @if($question['client_answer'] != $question['correct_answer'] && $option->id == $question['client_answer']) text-bg-danger @endif"

                                       for="questionForm{{$question['id']}}{{\App\Helpers\Helper::convertKeyNumberToAlphabet($key)}}">
                                    {{ \App\Helpers\Helper::convertKeyNumberToAlphabet($key) }}.
                                    {{ $option->option }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach

        <div class="text-center border-top">
            <a href="{{route('client.quiz.index')}}" class="btn submit mt-3">Quay lại tiếp tục kiểm tra</a>
        </div>
    </div>
@endsection
