@extends('client.layouts.app')

@section('title', 'Học qua video')

@section('content')
    <div class="container container__background">
        <div>
            <div>
                <div class="pb-5">
                    <h3 class="heading__h border-bottom text-danger">Luyện nghe qua {{  !empty($category->name) ? $category->name : 'bài học' }}
                    </h3>
                    <div>
                        @if(count($videos) > 0)
                            @foreach($videos as $key=>$video)
                                <div
                                    class="d-flex align-items-center @if($key %2 == 0)bg-success p-2 text-dark bg-opacity-10 @endif">
                                    <a class="lesten" href="{{ route('client.video.detail', $video->id) }}">
                                        <img
                                            class="border shadow-sm p-3 m-2 bg-body rounded"
                                            src="{{ $video->image }}" alt="" width="160px"
                                            height="120px"/>
                                    </a>
                                    <div class="">
                                        <div class="border-bottom pb-3">
                                            <a class="lesten" href="{{ route('client.video.detail', $video->id) }}"><p
                                                    class="font-size mb-0 text-dark">
                                                    {{ $video->title }}
                                                </p></a>
                                            <span>{{ $video->sub_title }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            @include('share.empty')
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
          {{ $videos->links() }}
        </div>
    </div>
@endsection
