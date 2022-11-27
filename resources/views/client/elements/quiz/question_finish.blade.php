@extends('client.layouts.app')

@section('title', 'Bài học')

@section('content')
    <div class="container container__background">
        <h3 class="heading__h">Kết quả bài thực hành: {{ $quiz->name }}</h3>
        <div class="bg-light text-center">
            <p class="fs-5 text text-primary mb-0">Số câu trả lời đúng: 2.</p>
            <p class="fs-5 text text-danger fst-italic mb-0">Số câu trả lời sai: 3</p>
        </div>

        @foreach($questions as $key=>$question)
            <div class="">
                <div class="answer">
                    <div class="text-danger">
                        <i>Câu {{ $key+1 }}: {{ $question->question }}</i>
                    </div>
                    <div class="row">
                        @foreach($question->options as $key=>$option)
                            <div class=" form-check col-6 mb-3">
                                <input type="radio" value="{{ $option->id }}" name="{{$question->id}}" id="questionForm{{$question->id}}{{\App\Helpers\Helper::convertKeyNumberToAlphabet($key)}}">
                                <label class="form-check-label" for="questionForm{{$question->id}}{{\App\Helpers\Helper::convertKeyNumberToAlphabet($key)}}">
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
