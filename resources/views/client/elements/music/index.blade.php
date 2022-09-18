@extends('client.layouts.app')

@section('title', 'Nghe nhạc')

@section('content')
    <div class="container container__background">
        <div>
            <div>
                <div class="pb-5">
                    <h3 class="heading__h border-bottom text-danger">Danh sách học tiếng Anh qua bài hát
                    </h3>
                    <div>
                        @if(count($musics) > 0)
                            @foreach($musics as $key=>$music)
                                <div class="d-flex align-items-center @if($key %2 !== 0) success p-2 text-dark bg-opacity-10 @endif">
                                    <a class="lesten" href="{{ route('client.music.detail', $music->id) }}">
                                        <img class="border shadow-sm p-3 m-2 bg-body rounded" src="{{ $music->image }}" width="160px" height="120px" />
                                    </a>
                                    <div class="">
                                        <div class="border-bottom pb-3 ">
                                            <a class="lesten" href="{{ route('client.music.detail', $music->id) }}"><p class="font-size mb-0 text-dark">
                                                    {{ $music->title }}</p></a>
                                            <i>{{ $music->sub_title }}</i>
                                        </div>
{{--                                        <div>--}}
{{--                                            <span class="text-muted"><i class="bi bi-eye-fill p-1"></i>642</span>--}}
{{--                                            <span class="text-muted p-3"><i class="bi bi-chat-right-dots-fill p-1"></i>56</span>--}}
{{--                                        </div>--}}
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
        <<div class="text-center">
            {{ $musics->links() }}
        </div>
    </div>
@endsection
