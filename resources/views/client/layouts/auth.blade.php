<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title')</title>
    <!-- <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.1-web/css/all.min.css"> -->
    <link href="{{ asset('css/client/bootstrap.min.css') }}" rel="stylesheet"/>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/client/style.css') }}">
    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        button.close {
            padding: 0;
            background-color: transparent;
            border: 0;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
        .close {
            float: right;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            opacity: 0.5;
        }
    </style>
    @yield('css')
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid ">
            <div class="container__header">
                <a href="{{ route('client.home.index') }}" class="container__header-logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo"
                         class="container__header-logo-img">
                </a>
            </div>
            <div class="container__member">
                <a class="container__member-login" href="{{ route('client.auth.form.login') }}">
                    <i class="bi bi-person-fill container__member-login-logo"></i>
                    Đăng nhập
                </a>
                <a class="container__member-register" href="{{ route('client.auth.form.register') }}">Đăng ký thành
                    viên</a>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="nav_menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="{{ route('client.home.index') }}" class="nav__item-link nav__item-link-logo">
                        <i class="bi bi-house-fill nav__item-logo"></i>
                    </a>
                </li>
                <li class="nav__item nav__item--before">
                    <span class="nav__item-link">Tiếng anh phổ thông</span>
                    <div class="sub__nav">
                        <ul class="sub__nav-list">
                            @foreach($books as $book)
                                <li class="sub__nav-item">
                                    <a href="{{ route('client.book.lesson', $book->slug) }}"
                                       class="sub__nav-item-link">{{ $book->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <li class="nav__item">
                    <a href="{{ route('client.skill.index') }}" class="nav__item-link">Kỹ năng</a>
                    <div class="sub__nav">
                        <ul class="sub__nav-list">
                            @foreach($skillCategories as $category)
                                <li class="sub__nav-item">
                                    <a href="{{ route('client.skill.index', ['category_id' => $category->id]) }}"
                                       class="sub__nav-item-link">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <li class="nav__item">
                    <span class="nav__item-link">Học qua video</span>
                    <div class="sub__nav">
                        <ul class="sub__nav-list">
                            @foreach($videoCategories as $category)
                                <li class="sub__nav-item">
                                    <a href="{{ route('client.video.index', ['slug' => $category->slug]) }}"
                                       class="sub__nav-item-link">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <li class="nav__item">
                    <a href="{{ route('client.dictionary.index') }}" class="nav__item-link">Tra từ điển</a>
                </li>
                <li class="nav__item">
                    <a href="{{ route('client.blog.index') }}" class="nav__item-link">Bài viết</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- menu - mobile -->
    <div>
        <label for="mb__nav-laybel" class="mb__menu">
            <i class="bi bi-list mb__menu-icon"></i>
        </label>

        <input type="checkbox" name="" hidden class="nav-input" id="mb__nav-laybel">

        <label for="mb__nav-laybel" class="mb__menu-overlay"></label>

        <div class="mb__nav">
            <ul class="mb__nav-list">
                <li class="mb__nav-items">
                    <a href="#" class="mb__nav-link">Tiếng anh phổ thông</a>
                </li>
                <li class="mb__nav-items">
                    <a href="#" class="mb__nav-link">Kỹ năng</a>
                </li>
                <li class="mb__nav-items">
                    <a href="#" class="mb__nav-link">Học qua video</a>
                </li>
                <li class="mb__nav-items">
                    <a href="#" class="mb__nav-link">Tra từ điển</a>
                </li>
                <li class="mb__nav-items">
                    <a href="#" class="mb__nav-link">Bài viết</a>
                </li>
            </ul>

            <label for="mb__nav-laybel" class="mb__close">
                <i class="bi bi-x mb__close-icon"></i>
            </label>
        </div>
    </div>

    <div class="banner">
        <div class="banner__top">
            <a href="">
                <img src="https://data.tienganh123.com/images/banner/lt123_1000_90_new2.jpg" alt=""
                     style="width:100%;height:85px">
            </a>
        </div>
        <div class="banner__body">
            <a href="">
                <img src="https://data.tienganh123.com/images/popup/banner_km_thang7_2022_ngang.jpg" alt=""
                     style="width:100%;height:150px">
            </a>
        </div>
    </div>

    @yield('content')

    @include('client.includes.footer')
</div>
<script src="{{ asset('js/client/bootstrap.min.js') }}"></script>
@yield('js')
</body>
</html>
