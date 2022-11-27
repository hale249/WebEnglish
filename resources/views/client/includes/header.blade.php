<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid ">
        <div class="container__header">
            <a href="{{ route('client.home.index') }}" class="container__header-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo"
                     class="container__header-logo-img">
            </a>
        </div>
        <div class="container__member">
            @if(!empty(\Illuminate\Support\Facades\Auth::guard('client')->user()))
                <span>
                    {{ \Illuminate\Support\Facades\Auth::guard('client')->user()->name ?? \Illuminate\Support\Facades\Auth::guard('client')->user()->email ?? '' }}
                </span>

                <a class="container__member-login" href="{{ route('client.auth.logout') }}">Đăng xuất</a>
            @else
                <a class="container__member-login" href="{{ route('client.auth.form.login') }}">
                    <i class="bi bi-person-fill container__member-login-logo"></i>
                    Đăng nhập
                </a>
                <a class="container__member-register" href="{{ route('client.auth.form.register') }}">Đăng ký thành
                    viên</a>
            @endif
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
    <div class="banner__slider">
        <div id="carouselExampleIndicators" class="carousel slide"
             data-bs-ride="true">
            <div class="carousel-indicators">
                @foreach($sliders as $key=>$slider)
                    <button type="button"
                            data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="{{ $key }}" class="active" aria-current="true"
                            aria-label="{{$slider->name}}"></button>
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach($sliders as $key=>$slider)
                    <div class="carousel-item @if($key== 0)active @endif">
                        <img
                            src="{{ $slider->image }}"
                            class="d-block w-100" alt="...">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
