@extends('client.layouts.app')

@section('title', 'Tin tức')

@section('content')
    <div class="container container__background">
        <div class="pb-5">
            <h3 class="heading__h border-bottom text-danger">{{ $blog->title }}
            </h3>
            <div>{{ $blog->sub_title }}</div>
            @if(!empty($blog->image))
                <div class="d-flex justify-content-center">
                    <img src="{{ $blog->image }}" alt="{{ $blog->sub_title }}" style="width:80%;">
                </div>
            @endif

            <div>
                {!! $blog->content !!}
            </div>
        </div>
    </div>
@endsection
