@extends('client.layouts.app')

@section('title', 'Chi tiết')

@section('content')
    <div class="banner__top"></div>
    <div class="banner__body"></div>
    <div class="container container__background">
        <h2 class="heading__h">{{ $book->name }}</h2>
        <p class="font-size pt-3 pb-3">
            {{ $book->description }}
        </p>
        <div class="row">
            @if(count($lessons) > 0)
                @foreach($lessons as $lesson)
                    <div class="col-md-4 border shadow-sm mb-5 bg-body rounded-1">
                        <a href="">
                            <img
                                class="p-4"
                                src="{{ $lesson->image }}"
                                width="100%"
                                height="auto"
                                alt=""
                            />
                            <p class="fs-5 text">{{ $lesson->name }}</p>
                        </a>
                    </div>
                @endforeach
            @else
                @include('share.empty')
            @endif
        </div>
    </div>
@endsection
