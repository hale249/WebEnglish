@extends('client.layouts.app')

@section('title', 'Tiếng anh phổ thông')

@section('content')
    <div class="container container__background">
        <div class="book">
            <h2>Tiếng Anh Cơ Sở</h2>
            <p>Bộ giáo trình dành cho học sinh phổ thông các lớp từ 6 đến 9 và đang ôn thi Đại Học các khối Tiếng Anh.
                Hệ thống bài học theo sách giáo khoa đã được điện tử hóa và phương pháp học thông minh, hiệu quả đang
                được rất nhiều học sinh theo học.
            </p>
            <div class="book-list">
                @foreach($books as $key=>$book)
                    <h3>Tiếng Anh lớp {{$key}}</h3>
                    <div class="row text-center">
                        @foreach($book as $item)
                        <div class="col-xl-6 col-sm-12 p-3">
                            <div class="border shadow mb-5 bg-body rounded-4 overflow-hidden">
                                <a class="book-list__link" href="{{ route('client.book.lesson', $item->id) }}">
                                    <div class="book-list__img">
                                        <img src="{{ $item->image }}" width="100%" height="100%"
                                             alt="">
                                    </div>
                                    <div class="mb-3">
                                        <p class="text-uppercase">{{ $item->name }}</p>
                                        <span>{{ $item->description }}</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
