@extends('client.layouts.app')

@section('title', 'Chi tiết')

@section('content')
    <div class="container container__background ">
        <h4 class=" mb-0 pt-3 text-info">{{ $lesson->title }}</h4>
        <div class="mb-4"><small>{{ $lesson->sub_title }}</small></div>
        <div class="text-center">
            <iframe width="80%" height="440" src="{{ $lesson ->link_video }}" frameborder="0" allowfullscreen>
            </iframe>
        </div>
        <div class="p-3">
            {!! $lesson->description !!}
        </div>
    </div>
@endsection
