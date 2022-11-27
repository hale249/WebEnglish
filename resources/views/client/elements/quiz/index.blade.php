@extends('client.layouts.app')

@section('title', 'Bài học')

@section('content')
    <div class="container container__background">
        <div class="new-lesson__list">
            <h2>Danh sách bài luyện tập tiếng anh</h2>
            @foreach($quizList as $quiz)
                <div class="new-lesson__item d-flex justify-content-between
              align-content-center bg-light bg-gradient
              border-bottom">
                    <a class="new__lesson-conten" href="{{ route('client.quiz.question', $quiz->id) }}">
                        <p class="fw-bold new__lesson-content--blue">{{ $quiz->name }}</p>
                        <span>{{ $quiz->description }}</span>
                    </a>
                    <span class="font">Cập nhật cuối: {{ $quiz->updated_at->format('d-m-Y h:i:s') }}</span>
                </div>
            @endforeach

            @if(!empty($quizList))
                <div class="d-flex justify-content-center">
                    {{ $quizList->links() }}
                </div>
            @endif

            <div class="banner__top mt-4"></div>

        </div>
    </div>
@endsection
