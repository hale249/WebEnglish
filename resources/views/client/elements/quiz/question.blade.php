@extends('client.layouts.app')

@section('title', 'Bài học')

@section('content')
    <div class="container container__background">
        <h3 class="heading__h">Bài thực hành: {{ $quiz->name }}</h3>
        <div class="bg-light text-center">
            <p class="fs-5 text text-primary mb-0">Choose the best answer to complete the following conversation.</p>
            <p class="fs-5 text text-danger fst-italic mb-0">(Chọn đáp án đúng nhất để hoàn thành bài kiểm tra.)</p>
        </div>

        <form action="{{ route('client.quiz.question.test', $quiz->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @foreach($questions as $key=>$question)
                <div class="">
                    <div class="answer">
                        <div>
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
            @if(count($questions) > 0)
            <div class="text-center border-top">
                @if(!empty(\Illuminate\Support\Facades\Auth::guard('client')->user()))
                    <p class="fw-normal fs-5 text">Sau khi hoàn thiện bài làm hãy bấm vào <span class="fw-bold fs-4 text">"Hoàn thành"</span> bên dưới</p>
                    <button class="btn submit" type="submit">Hoàn thành</button>
                @else
                    <p class="fw-normal fs-5 text">Vui lòng thực hiện đăng nhập để thực hiện làm bài kiểm tra</p>
                    <a href="{{ route('client.auth.form.login') }}" class="btn submit">Đăng nhập</a>
                @endif
            </div>
            @else
               <div class="pb-4">
                   @include('share.empty')
               </div>
            @endif
        </form>
    </div>
@endsection
