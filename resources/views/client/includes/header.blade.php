<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid ">
        <div class="container__header">
            <a href="{{ route('client.home.index') }}" class="container__header-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo"
                     class="container__header-logo-img">
            </a>
        </div>
        <div class="container__member">
            <a class="container__member-login" data-bs-toggle="modal" data-bs-target="#loginModal">
                <i class="bi bi-person-fill container__member-login-logo"></i>
                Đăng nhập
            </a>
            <a class="container__member-register" data-bs-toggle="modal" data-bs-target="#registerModal">Đăng ký thành
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
                <a href="{{ route('client.book.index') }}" class="nav__item-link">Tiếng anh phổ thông</a>
                <div class="sub__nav">
                    <ul class="sub__nav-list">
                        <li class="sub__nav-item">
                            <a href="{{ route('client.book.lesson', 1) }}" class="sub__nav-item-link">Tiếng Anh lớp
                                6</a>
                        </li>
                        <li class="sub__nav-item">
                            <a href="{{ route('client.book.lesson', 1) }}" class="sub__nav-item-link">Tiếng Anh lớp 6 -
                                Sách
                                mới</a>
                        </li>
                        <li class="sub__nav-item">
                            <a href="{{ route('client.book.lesson', 1) }}" class="sub__nav-item-link">Giải bài tập SGK
                                Tiếng
                                Anh lớp 6 - Sách mới</a>
                        </li>
                        <li class="sub__nav-item">
                            <a href="{{ route('client.book.lesson', 1) }}" class="sub__nav-item-link">Tiếng Anh lớp
                                7</a>
                        </li>
                        <li class="sub__nav-item">
                            <a href="{{ route('client.book.lesson', 1) }}" class="sub__nav-item-link">Tiếng Anh lớp 7 -
                                Sách
                                mới</a>
                        </li>
                        <li class="sub__nav-item">
                            <a href="{{ route('client.book.lesson', 1) }}" class="sub__nav-item-link">Tiếng Anh lớp
                                8</a>
                        </li>
                        <li class="sub__nav-item">
                            <a href="{{ route('client.book.lesson', 1) }}" class="sub__nav-item-link">Tiếng Anh lớp 8 -
                                Sách
                                mới</a>
                        </li>
                        <li class="sub__nav-item">
                            <a href="{{ route('client.book.lesson', 1) }}" class="sub__nav-item-link">Tiếng Anh lớp
                                9</a>
                        </li>
                        <li class="sub__nav-item">
                            <a href="{{ route('client.book.lesson', 1) }}" class="sub__nav-item-link">Tiếng Anh lớp 9 -
                                Sách
                                mới</a>
                        </li>
                        <li class="sub__nav-item">
                    </ul>
                </div>
            </li>
            <li class="nav__item">
                <a href="{{ route('client.unit.index') }}" class="nav__item-link">Kỹ năng</a>
                <div class="sub__nav">
                    <ul class="sub__nav-list">
                        <li class="sub__nav-item">
                            <a href="{{ route('client.unit.index') }}" class="sub__nav-item-link">Phát âm tiếng Anh</a>
                        </li>
                        <li class="sub__nav-item">
                            <a href="{{ route('client.unit.index') }}" class="sub__nav-item-link">Ngữ pháp tiếng Anh</a>
                        </li>
                        <li class="sub__nav-item">
                            <a href="{{ route('client.unit.index') }}" class="sub__nav-item-link">Từ vựng tiếng Anh</a>
                        </li>
                        <li class="sub__nav-item">
                            <a href="{{ route('client.unit.index') }}" class="sub__nav-item-link">Nghe</a>
                        </li>
                        <li class="sub__nav-item">
                            <a href="{{ route('client.unit.index') }}" class="sub__nav-item-link">Đọc</a>
                        </li>
                        <li class="sub__nav-item">
                            <a href="{{ route('client.unit.index') }}" class="sub__nav-item-link">Viết</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav__item">
                <a href="{{ route('client.video.index') }}" class="nav__item-link">Học qua video</a>
                <div class="sub__nav">
                    <ul class="sub__nav-list">
                        <li class="sub__nav-item sub__nav-item--fist-child">
                            <a href="{{ route('client.video.index') }}" class="sub__nav-item-link
                        sub__nav-item-link--fist-child">Luyện nghe tiếng Anh</a>
{{--                            <div class="sub__child">--}}
{{--                                <ul class="sub__chill-list">--}}
{{--                                    <li class="sub__chill-item">--}}
{{--                                        <a href="" class="sub__chill-item-link">Arts</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="sub__chill-item">--}}
{{--                                        <a href="" class="sub__chill-item-link">Business</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="sub__chill-item">--}}
{{--                                        <a href="" class="sub__chill-item-link">Interview</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="sub__chill-item">--}}
{{--                                        <a href="" class="sub__chill-item-link">Travel</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="sub__chill-item">--}}
{{--                                        <a href="" class="sub__chill-item-link">Opinion</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="sub__chill-item">--}}
{{--                                        <a href="" class="sub__chill-item-link">Technology</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="sub__chill-item">--}}
{{--                                        <a href="" class="sub__chill-item-link">Entertainment</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="sub__chill-item">--}}
{{--                                        <a href="" class="sub__chill-item-link">Environment</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
                        </li>
                        <li class="sub__nav-item">
                            <a href="{{ route('client.video.index') }}" class="sub__nav-item-link">VOA: English in a
                                Minute</a>
                        </li>
                        <li class="sub__nav-item">
                            <a href="{{ route('client.video.index') }}" class="sub__nav-item-link">Học tiếng Anh qua
                                CNN</a>
                        </li>
                        <li class="sub__nav-item">
                            <a href="{{ route('client.video.index') }}" class="sub__nav-item-link">Học tiếng Anh qua
                                BBC</a>
                        </li>
                        <li class="sub__nav-item">
                            <a href="{{ route('client.video.index') }}" class="sub__nav-item-link">Học tiếng Anh qua
                                Video VOA</a>
                        </li>
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
    <div class="banner__slider">
        <div id="carouselExampleIndicators" class="carousel slide"
             data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button"
                        data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="0" class="active" aria-current="true"
                        aria-label="Slide 1"></button>
                <button type="button"
                        data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button"
                        data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img
                        src="https://data.tienganh123.com/images/v2/home/bg_slide_1.jpg"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img
                        src="https://data.tienganh123.com/images/v2/home/bg_slide_2.jpg"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img
                        src="https://data.tienganh123.com/images/v2/home/bg_slide_3.jpg"
                        class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>
</div>
