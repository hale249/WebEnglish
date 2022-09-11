@extends('client.layouts.app')

@section('title', 'Tin tức')

@section('content')
    <div class="container container__background">
        <div>
            <div class="pb-5">
                <h3 class="heading__h border-bottom text-danger">Kinh nghiệm học tập - Kinh nghiệm học tiếng Anh -
                    Học
                    tốt tiếng Anh
                </h3>
                <div>
                    @if(count($blogs) > 0)
                        @foreach($blogs as $key=>$blog)
                            <div
                                class="d-flex align-items-center @if($key %2 ==0) bg-success p-2 text-dark bg-opacity-10 @endif">
                                <a class="lesten" href="{{ route('client.blog.detail', $blog->id) }}"><img
                                        class="border shadow-sm p-3 m-2 bg-body rounded"
                                        src="{{ $blog->image }}" alt=""
                                        width="160px" height="120px"></a>
                                <div class="">
                                    <div class="border-bottom pb-3">
                                        <a class="lesten" href="{{ route('client.blog.detail', $blog->id) }}"><p
                                                class="font-size mb-0 text-dark">
                                                {{ $blog->title }}</p></a>
                                        <span>{{ $blog->sub_title }}</span>
                                    </div>
{{--                                    <div>--}}
{{--                                        <span class="text-muted"><i class="bi bi-eye-fill p-1"></i>3</span>--}}
{{--                                        <span class="text-muted p-3"><i--}}
{{--                                                class="bi bi-chat-right-dots-fill p-1"></i>10</span>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        @endforeach
                    @else
                        @include('share.empty')
                    @endif
                </div>
            </div>
            <div class="text-center">
                {{ $blogs->links() }}
            </div>
        </div>
@endsection
