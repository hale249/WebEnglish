@extends('client.layouts.app')

@section('title', 'Học qua sách')

@section('content')
    <div class="container container__background">
        <div>
            <div>
                <div class="pb-5">
                    <h3 class="heading__h border-bottom text-danger">Bài học {{  !empty($bookLesson->name) ? $bookLesson->name : '' }}
                    </h3>
                    <div>
                        @if(count($lessons) > 0)
                            @foreach($lessons as $key=>$lesson)
                                <div
                                    class="d-flex align-items-center @if($key %2 == 0)bg-success p-2 text-dark bg-opacity-10 @endif">
                                    <a class="lesten" href="{{ route('client.book.unitDetail', ['slug' => $book->slug, 'lessonSlug' => $bookLesson->slug, 'unitId' => $lesson->id]) }}">
                                        <img
                                            class="border shadow-sm p-3 m-2 bg-body rounded"
                                            src="{{ $lesson->image }}" alt="" width="160px"
                                            height="120px"/>
                                    </a>
                                    <div class="">
                                        <div class="border-bottom pb-3">
                                            <a class="lesten" href="{{ route('client.book.unitDetail', ['slug' => $book->slug, 'lessonSlug' => $bookLesson->slug, 'unitId' => $lesson->id]) }}"><p
                                                    class="font-size mb-0 text-dark">
                                                    {{ $lesson->title }}
                                                </p></a>
                                            <span>{{ $lesson->sub_title }}</span>
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
            {{ $lessons->links() }}
        </div>
    </div>
@endsection
