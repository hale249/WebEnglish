@extends('client.layouts.app')

@section('title', 'Học qua video')

@section('content')
    <div class="container container__background ">
        <div class="">
            <h4 class="mb-0 pt-3 text-info">{{ $video->title   }}</h4>
            <div class="mb-3">{{ $video->sub_title }}</div>
            <div class="text-center">
                    <iframe width="80%" height="440" src="{{ $video->link_video }}" frameborder="0" allowfullscreen>
                    </iframe>
            </div>
            <div class="p-3 font-size">
                {!! $video->content !!}
            </div>

            <div class="px-3 pb-3 font-size">
                <div><strong>Dịch nghiã: </strong></div>
                {!! $video->content_translate !!}
            </div>
        </div>
    </div>
@endsection
