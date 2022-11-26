@extends('client.layouts.app')

@section('title', 'Chi tiết')

@section('content')
    <div class="banner__top"></div>
    <div class="banner__body"></div>
    <div class="container container__background">
        <h2 class="heading__h">{{ $book->name }}</h2>
        <p class="font-size">
            <small><i>{{ $book->description }}</i></small>
        </p>
        <div class="row">
            @if(count($lessons) > 0)
                @foreach($lessons as $lesson)
                    <div class="col-xl-4 col-sm-4 p-2">
                        <div class="border">
                            <a href="{{ route('client.book.unit', ['slug' => $book->slug, 'lessonSlug' => $lesson->slug]) }}">
                                <img class="pt-3 pb-4" src="{{ $lesson->image }}"
                                     width="100%" height="auto" alt="">
                                <p class="fs-5 text text-center">{{ $lesson->name }}</p>
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
                @include('share.empty')
            @endif
        </div>
    </div>
@endsection
