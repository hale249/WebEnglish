@extends('client.layouts.app')

@section('title', 'Nghe nhạc')

@section('content')
    <div class="container container__background ">
        <h4 class=" mb-0 pt-3 text-info">{{ $music->title }}</h4>
        <div class="mb-4"><small>{{ $music->sub_title }}</small></div>
        <div class="text-center">
            <iframe width="80%" height="440" src="{{ $music->link_video }}" frameborder="0" allowfullscreen>
            </iframe>
        </div>
        <div class="p-3">
            {!! $music->content !!}
        </div>
        <div class="container pb-4">
            <h5>Giải thích</h5>
            <div class="mb-4">
                {!! $music->content_translate !!}
            </div>
        </div>
    </div>
@endsection
