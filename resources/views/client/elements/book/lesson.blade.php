@extends('client.layouts.app')

@section('title', 'Chi tiết')

@section('content')
    <div class="banner__top"></div>
    <div class="banner__body"></div>
    <div class="container container__background">
        <h2 class="heading__h">Tiếng anh lớp 6 - Sách mới</h2>
        <p class="font-size pt-3 pb-3">
            Học các bài tiếng Anh tương đương với chương trình lớp 6 (sách mới)
        </p>
        <div class="row text-center p-2">
            <div class="col-4 border shadow-sm mb-5 bg-body rounded-1">
                <a href="">
                    <img
                        class="pt-3 pb-4"
                        src="{{ asset('images/class_6/pt-lop6-u1.jpg') }}"
                        width="100%"
                        height="auto"
                        alt=""
                    />
                    <p class="fs-5 text">UNIT 1: MY NEW SCHOOL</p>
                </a>
            </div>
            <div class="col-4 border shadow-sm mb-5 bg-body rounded-1">
                <a href="">
                    <img
                        class="pt-3 pb-4"
                        src="{{ asset('images/class_6/pt-lop6-u2.jpg') }}"
                        width="100%"
                        height="auto"
                        alt=""
                    />
                    <p class="fs-5 text">UNIT 2: MY HOME</p>
                </a>
            </div>
            <div class="col-4 border shadow-sm mb-5 bg-body rounded-1">
                <a href="">
                    <img
                        class="pt-3 pb-4"
                        src="{{ asset('images/class_6/pt-lop6-u3.jpg') }}"
                        width="100%"
                        height="auto"
                        alt=""
                    />
                    <p class="fs-5 text">UNIT 3: MY FRIENDS</p>
                </a>
            </div>
            <div class="col-4 border shadow-sm mb-5 bg-body rounded-1">
                <a href="">
                    <img
                        class="pt-3 pb-4"
                        src="{{ asset('images/class_6/pt-lop6-u1.jpg') }}"
                        width="100%"
                        height="auto"
                        alt=""
                    />
                    <p class="fs-5 text">UNIT 1: MY NEW SCHOOL</p>
                </a>
            </div>
            <div class="col-4 border shadow-sm mb-5 bg-body rounded-1">
                <a href="">
                    <img
                        class="pt-3 pb-4"
                        src="{{ asset('images/class_6/pt-lop6-u2.jpg') }}"
                        width="100%"
                        height="auto"
                        alt=""
                    />
                    <p class="fs-5 text">UNIT 2: MY HOME</p>
                </a>
            </div>
            <div class="col-4 border shadow-sm mb-5 bg-body rounded-1">
                <a href="">
                    <img
                        class="pt-3 pb-4"
                        src="{{ asset('images/class_6/pt-lop6-u3.jpg') }}"
                        width="100%"
                        height="auto"
                        alt=""
                    />
                    <p class="fs-5 text">UNIT 3: MY FRIENDS</p>
                </a>
            </div>
        </div>

    </div>
@endsection
