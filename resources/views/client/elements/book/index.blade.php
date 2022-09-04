@extends('client.layouts.app')

@section('title', 'Tiếng anh phổ thông')

@section('content')
    <div class="container container__background">
        <div class="book">
            <h2>Tiếng Anh Cơ Sở</h2>
            <p>Bộ giáo trình dành cho học sinh phổ thông các lớp từ 6 đến 12 và đang ôn thi Đại Học các khối Tiếng Anh.
                Hệ thống bài học theo sách giáo khoa đã được điện tử hóa và phương pháp học thông minh, hiệu quả đang được rất nhiều học sinh theo học.
            </p>
            <div class="book-list">
                <h3>Tiếng Anh lớp 6</h3>
                <div class="row text-center">
                    <div class="col-xl-6 col-sm-12 p-3">
                        <div class="border shadow mb-5 bg-body rounded-4 overflow-hidden">
                            <a class="book-list__link" href="{{ route('client.book.lesson', 1) }}">
                                <div class="book-list__img">
                                    <img src="{{ asset('images/book/lop-6-moi.png') }}"  width="100%" height="100%" alt="">
                                </div>
                                <div class="mb-3">
                                    <p class="text-uppercase">Tiếng Anh lớp 6</p>
                                    <span>Sách mới</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-12 p-3">
                        <div class="border shadow mb-5 bg-body rounded-4 overflow-hidden">
                            <a class="book-list__link" href="{{ route('client.book.lesson', 1) }}">
                                <div class="book-list__img">
                                    <img src="{{ asset('images/book/lop-6-cu.png') }}"  width="100%" height="100%" alt="">
                                </div>
                                <div class="mb-3">
                                    <p class="text-uppercase">Tiếng Anh lớp 6</p>
                                    <span>Sách mới</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <h3>Tiếng Anh lớp 7</h3>
                <div class="row text-center">
                    <div class="col-xl-6 col-sm-12 p-3">
                        <div class="border shadow mb-5 bg-body rounded-4 overflow-hidden">
                            <a class="book-list__link" href="{{ route('client.book.lesson', 1) }}">
                                <div class="book-list__img">
                                    <img src="{{ asset('images/book/lop-7-moi.png') }}"  width="100%" height="100%" alt="">
                                </div>
                                <div class="mb-3">
                                    <p class="text-uppercase">Tiếng Anh lớp 7</p>
                                    <span>Sách mới</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-12 p-3">
                        <div class="border shadow mb-5 bg-body rounded-4 overflow-hidden">
                            <a class="book-list__link" href="{{ route('client.book.lesson', 1) }}">
                                <div class="book-list__img">
                                    <img src="{{ asset('images/book/lop-7-cu.png') }}"  width="100%" height="100%" alt="">
                                </div>
                                <div class="mb-3">
                                    <p class="text-uppercase">Tiếng Anh lớp 7</p>
                                    <span>Sách cũ</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <h3>Tiếng Anh lớp 8</h3>
                <div class="row text-center">
                    <div class="col-xl-6 col-sm-12 p-3">
                        <div class="border shadow mb-5 bg-body rounded-4 overflow-hidden">
                            <a class="book-list__link" href="{{ route('client.book.lesson', 1) }}">
                                <div class="book-list__img">
                                    <img src="{{ asset('images/book/lop-8-moi.png') }}"  width="100%" height="100%" alt="">
                                </div>
                                <div class="mb-3">
                                    <p class="text-uppercase">Tiếng Anh lớp 8</p>
                                    <span>Sách mới</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-12 p-3">
                        <div class="border shadow mb-5 bg-body rounded-4 overflow-hidden">
                            <a class="book-list__link" href="{{ route('client.book.lesson', 1) }}">
                                <div class="book-list__img">
                                    <img src="{{ asset('images/book/lop-8-cu.png') }}"  width="100%" height="100%" alt="">
                                </div>
                                <div class="mb-3">
                                    <p class="text-uppercase">Tiếng Anh lớp 8</p>
                                    <span>Sách cũ</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <h3>Tiếng Anh lớp 9</h3>
                <div class="row text-center">
                    <div class="col-xl-6 col-sm-12 p-3">
                        <div class="border shadow mb-5 bg-body rounded-4 overflow-hidden">
                            <a class="book-list__link" href="{{ route('client.book.lesson', 1) }}">
                                <div class="book-list__img">
                                    <img src="{{ asset('images/book/lop-9-moi.png') }}"  width="100%" height="100%" alt="">
                                </div>
                                <div class="mb-3">
                                    <p class="text-uppercase">Tiếng Anh lớp 9</p>
                                    <span>Sách mới</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-12 p-3">
                        <div class="border shadow mb-5 bg-body rounded-4 overflow-hidden">
                            <a class="book-list__link" href="{{ route('client.book.lesson', 1) }}">
                                <div class="book-list__img">
                                    <img src="{{ asset('images/book/lop-9-cu.png') }}"  width="100%" height="100%" alt="">
                                </div>
                                <div class="mb-3">
                                    <p class="text-uppercase">Tiếng Anh lớp 9</p>
                                    <span>Sách cũ</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
