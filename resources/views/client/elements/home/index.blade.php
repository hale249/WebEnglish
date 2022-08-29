@extends('client.layouts.app')

@section('title', 'Trang chủ')

@section('content')
    <div class="body__lesson">
        <div class="header__title">
            <a href="./example.html" class="body__lesson-link body__lesson-title">
                HỌC PHÁT ÂM TIẾNG ANH <span>VỚI GIÁO VIÊN MỸ</span>
                <a href="" class=" body__lesson-title"><i
                        class="body__lesson-link-logo bi bi-chevron-right"></i></a>
            </a>
        </div>
        <h4 class="body__lesson-title-strong">
            Dành cho học sinh cấp 2
        </h4>
        <div class="container">
            <div class="row">
                <div class="col-4 p-0 mb-4">
                    <figure class="figure">
                        <a class="body__lesson-title-link" href="{{ route('client.unit.detail', 1) }}">
                            <img
                                src="https://www.tienganh123.com/file/baihoc/phat_am/images1/unit1.png"
                                class="figure-img img-fluid rounded body__lesson-img"
                                alt="...">
                            <figcaption class="figure-caption"><a
                                    class="figure-caption__link" href="{{ route('client.unit.detail', 1) }}"><span>1</span>a
                                    - âm /æ/
                                </a></figcaption>
                        </a>
                    </figure>
                </div>
                <div class="col-4 p-0 mb-4">
                    <figure class="figure">
                        <a class="body__lesson-title-link" href="{{ route('client.unit.detail', 1) }}">
                            <img
                                src="https://www.tienganh123.com/file/baihoc/phat_am/images1/unit2.png"
                                class="figure-img img-fluid rounded body__lesson-img"
                                alt="...">
                            <figcaption class="figure-caption"><a
                                    class="figure-caption__link" href="{{ route('client.unit.detail', 1) }}"><span>2</span>b
                                    - âm /b/
                                </a></figcaption>
                        </a>
                    </figure>
                </div>
                <div class="col-4 p-0 mb-4">
                    <figure class="figure">
                        <a class="body__lesson-title-link" href="{{ route('client.unit.detail', 1) }}">
                            <img
                                src="https://www.tienganh123.com/file/baihoc/phat_am/images1/unit3.png"
                                class="figure-img img-fluid rounded body__lesson-img"
                                alt="...">
                            <figcaption class="figure-caption"><a
                                    class="figure-caption__link" href="{{ route('client.unit.detail', 1) }}"><span>3</span>c
                                    - âm /k/
                                </a></figcaption>
                        </a>
                    </figure>
                </div>
                <div class="col-4 p-0 mb-4">
                    <figure class="figure">
                        <a class="body__lesson-title-link" href="{{ route('client.unit.detail', 1) }}">
                            <img
                                src="https://www.tienganh123.com/file/baihoc/phat_am/images1/unit4.png"
                                class="figure-img img-fluid rounded body__lesson-img"
                                alt="...">
                            <figcaption class="figure-caption"><a
                                    class="figure-caption__link" href="{{ route('client.unit.detail', 1) }}"><span>4</span>d
                                    - âm /d/
                                </a></figcaption>
                        </a>
                    </figure>
                </div>
                <div class="col-4 p-0 mb-4">
                    <figure class="figure">
                        <a class="body__lesson-title-link" href="{{ route('client.unit.detail', 1) }}">
                            <img
                                src="https://www.tienganh123.com/file/baihoc/phat_am/images1/unit5.png"
                                class="figure-img img-fluid rounded body__lesson-img"
                                alt="...">
                            <figcaption class="figure-caption"><a
                                    class="figure-caption__link" href="{{ route('client.unit.detail', 1) }}"><span>5</span>e
                                    - âm /e/
                                </a></figcaption>
                        </a>
                    </figure>
                </div>
                <div class="col-4 p-0 mb-4">
                    <figure class="figure">
                        <a class="body__lesson-title-link" href="{{ route('client.unit.detail', 1) }}">
                            <img
                                src="https://www.tienganh123.com/file/baihoc/phat_am/images1/unit6.png"
                                class="figure-img img-fluid rounded body__lesson-img"
                                alt="...">
                            <figcaption class="figure-caption"><a
                                    class="figure-caption__link" href="{{ route('client.unit.detail', 1) }}"><span>6</span>f
                                    - âm /f/
                                </a></figcaption>
                        </a>
                    </figure>
                </div>
            </div>
        </div>
        <div class="body__lesson-footer">
            <div class="body__lesson-footer-tag">
                <span class="body__lesson-footer-icon"><i class="bi bi-fire"></i></span>Hot
                nhất trên Tiếng Anh 123
            </div>
            <a href="{{ route('client.lesson.index') }}" class="body__lesson-footer-btn"><span>Xem thêm</span><i
                    class="body__lesson-link-logo bi bi-chevron-right"></i></a>
        </div>
        <div class="new__lesson">
            <div class="header__title">
                <a href="{{ route('client.lesson.index') }}" class="body__lesson-link body__lesson-title">
                    BÀI MỚI <span>TIẾNG ANH PHỔ THÔNG</span>
                    <a href="" class=" body__lesson-title"><i
                            class="body__lesson-link-logo bi bi-chevron-right"></i></a>
                </a>
            </div>
            <ul class="list-group">
                <li class="new__lesson-item list-group-item d-flex
                justify-content-between align-items-start">
                    <a class="new__lesson-item-link" href="">
                        <div class="new__lesson-content">
                            <div class="fw-bold new__lesson-content--blue">Thực hành
                                tiếng Anh hàng ngày
                            </div>
                            <span>Thực hành tiếng Anh hàng ngày</span>
                        </div>
                    </a>
                    <span class="new__lesson-date">Cập nhật cuối: 2021-10-01
                  17:19:13</span>
                </li>
                <li class="list-group-item d-flex justify-content-between
                align-items-start">
                    <a class="new__lesson-item-link" href="">
                        <div class="new__lesson-content">
                            <div class="fw-bold new__lesson-content--blue">Tiếng Anh
                                hàng ngày
                            </div>
                            <span>Tiếng Anh hàng ngày</span>
                        </div>
                    </a>
                    <span class="new__lesson-date">Cập nhật cuối: 2021-10-01
                  17:16:34</span>
                </li>
                <li class="list-group-item d-flex justify-content-between
                align-items-start">
                    <a class="new__lesson-item-link" href="">
                        <div class="new__lesson-content">
                            <div class="fw-bold new__lesson-content--blue">Tiếng Anh
                                hàng ngày
                            </div>
                            <span>Tiếng Anh hàng ngày</span>
                        </div>
                    </a>
                    <span class="new__lesson-date">Cập nhật cuối: 2021-10-01
                  17:16:34</span>
                </li>
                <li class="list-group-item d-flex justify-content-between
                align-items-start">
                    <a class="new__lesson-item-link" href="">
                        <div class="new__lesson-content">
                            <div class="fw-bold new__lesson-content--blue">Đưa ra lời
                                cảnh báo - Bài tập
                            </div>
                            <span>Thực hành tiếng Anh hàng ngày</span>
                        </div>
                    </a>
                    <span class="new__lesson-date">Cập nhật cuối: 2021-10-01
                  17:00:26</span>
                </li>
                <li class="list-group-item d-flex justify-content-between
                align-items-start">
                    <a class="new__lesson-item-link" href="">
                        <div class="new__lesson-content">
                            <div class="fw-bold new__lesson-content--blue">So sánh nhất
                                của tính từ ngắn - Bài tập 6
                            </div>
                            <span>Thực hành ngữ pháp</span>
                        </div>
                    </a>
                    <span class="new__lesson-date">Cập nhật cuối: 2021-10-01
                  16:58:18</span>
                </li>
            </ul>
            <a href="{{ route('client.lesson.index') }}" class="new__lesson-btn body__lesson-footer-btn">Xem thêm</a>
        </div>
        <div class="lesson__banner"></div>
        <div class="lesson__hightschool">
            <div class="header__title">
                <a href="{{ route('client.book.index') }}" class="body__lesson-link body__lesson-title">
                    TIẾNG ANH CƠ SỞ
                    <a href="" class=" body__lesson-title"><i
                            class="body__lesson-link-logo bi bi-chevron-right"></i></a>
                </a>
            </div>
            <div class="container text-center">
                <div class="row">
                    <div class="col ">
                        <a href="{{ route('client.book.index') }}" class="lesson__hightschool-link">
                            <img class="lesson__hightschool-link-img w-100"
                                 src="{{ asset('images/hight_school.png') }}" alt="">
                            <span class="lesson__hightschool-link-content">Tiếng Anh<br/>trung
                        học cở sở</span>
                        </a>
                        <div class="list-group list-group__color ">
                            <a href="{{ route('client.book.lesson', 1) }}" class="list-group-item d-flex
                        justify-content-between align-items-center
                        lesson__hightschool-list">Tiếng Anh lớp 6 <span
                                    class="">6</span></a>
                            <a href="{{ route('client.book.lesson', 1) }}" class="list-group-item d-flex
                        justify-content-between align-items-center
                        lesson__hightschool-list">Tiếng Anh lớp 7 <span
                                    class="">7</span></a>
                            <a href="{{ route('client.book.lesson', 1) }}" class="list-group-item d-flex
                        justify-content-between align-items-center
                        lesson__hightschool-list">Tiếng Anh lớp 8 <span
                                    class="{{ route('client.book.lesson', 1) }}">8</span></a>
                            <a class="list-group-item d-flex justify-content-between
                        align-items-center lesson__hightschool-list" href="{{ route('client.book.lesson', 1) }}">Tiếng Anh
                                lớp 9 <span class="">9</span></a>
                        </div>
                    </div>
                    <div class="col">
                        <a href="" class="lesson__hightschool-link">
                            <img class="lesson__hightschool-link-img w-100"
                                 src="{{ asset('images/fight.png') }}" alt="">
                            <span class="lesson__hightschool-link-content">Thi đấu<br/>Tiếng
                          Anh sơ sở</span>
                        </a>
                        <p>Chương trình thi đấu Tiếng Anh đối kháng trực tiếp dành
                            cho các bạn học sinh từ lớp 6 đến lớp 9.</p>
                        <a href="" class="lesson__hightschool-btn">
                        <span>Vào thi đấu<i class="lesson__hightschool-btn-logo
                            bi bi-chevron-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="point">
            <div class="header__title">
                <a href="" class="body__lesson-link body__lesson-title">
                    LUYỆN KỸ NĂNG
                    <a href="" class=" body__lesson-title"><i
                            class="body__lesson-link-logo bi bi-chevron-right"></i></a>
                </a>
            </div>
            <div class="container text-center point__content">
                <div class="row">
                    <div class="col-3">
                        <a calss="point-link" href="{{ route('client.video.index') }}">
                            <img src="{{ asset('images/ig_lpa.jpg') }}" alt="" class="point-img">
                            <p class="point-img__content">Luyện <span>phát âm</span></p>
                        </a>
                    </div>
                    <div class="col-3">
                        <a calss="point-link" href="{{ route('client.video.index') }}">
                            <img src="{{ asset('images/img2.jpg') }}" alt="" class="point-img">
                            <p class="point-img__content">Luyện <span>nghe</span></p>
                        </a>
                    </div>
                    <div class="col-3">
                        <a calss="point-link" href="{{ route('client.video.index') }}">
                            <img src="{{ asset('images/ig_ld.jpg') }}" alt="" class="point-img">
                            <p class="point-img__content">Luyện <span>đọc</span></p>
                        </a>
                    </div>
                    <div class="col-3">
                        <a calss="point-link" href="{{ route('client.video.index') }}">
                            <img src="{{ asset('images/ig_thcs.jpg') }}" alt="" class="point-img">
                            <p class="point-img__content">Luyện <span>viết</span></p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="point__footer">
                <div class="point__footer-content">
                    <h2>Từ điển hội thoại</h2>
                    <p>Nghe các mẫu câu hội thoại theo chủ đề có sẵn, ghi âm
                        theo và tự so sánh đánh giá với audio mẫu.</p>
                </div>
            </div>
        </div>
        <div class="lesson__video">
            <div class="header__title">
                <a href="" class="body__lesson-link body__lesson-title">
                    HỌC QUA VIDEO
                    <a href="{{ route('client.video.index') }}" class=" body__lesson-title"><i
                            class="body__lesson-link-logo bi bi-chevron-right"></i></a>
                </a>
            </div>
            <ul class="lesson__video-list d-flex justify-content-evenly
                  bg-light">
                <li class="lesson__video-item d-flex align-items-center w-50">
                    <div class="video__img">
                        <a class="video__img-link" href=""><img
                                class="video__img-img" src="{{ asset('images/video1.png') }}" alt=""></a>
                    </div>
                    <div class="lesson__video-heading">
                        <a class="lesson__video-heading-link" href="{{ route('client.video.index') }}">Luyện nghe
                            qua<span> Tienganh123 news</span></a>
                        <div class="sup__div"><i class="bi bi-camera-video-fill"></i><a
                                href="{{ route('client.video.index') }}" class="lesson__video-heading-suplink">Drivers
                                can send driving...</a></div>
                    </div>
                </li>
                <li class="lesson__video-item d-flex align-items-center w-50">
                    <div class="video__img">
                        <a class="video__img-link" href="{{ route('client.video.index') }}"><img
                                class="video__img-img" src="{{ asset('images//video2.png') }}" alt=""></a>
                    </div>
                    <div class="lesson__video-heading">
                        <a class="lesson__video-heading-link" href="{{ route('client.video.index') }}">Học tiếng
                            Anh qua<span> VOA NEWS</span></a>
                        <div class="sup__div"><i class="bi bi-camera-video-fill"></i><a
                                href="" class="lesson__video-heading-suplink">Silicon
                                Businesses Fueled by...</a></div>
                    </div>
                </li>
            </ul>
            <ul class="lesson__video-list d-flex justify-content-evenly">
                <li class="lesson__video-item d-flex align-items-center w-50">
                    <div class="video__img">
                        <a class="video__img-link" href="{{ route('client.video.index') }}"><img
                                class="video__img-img" src="{{ asset('images/video3.png') }}" alt=""></a>
                    </div>
                    <div class="lesson__video-heading">
                        <a class="lesson__video-heading-link" href="{{ route('client.video.index') }}">Học qua
                            video<span> theo chủ đề</span></a>
                        <div class="sup__div"><i class="bi bi-camera-video-fill"></i><a
                                href="" class="lesson__video-heading-suplink">Maria
                                Contreras-Sweet: Agent...
                                <br/>(Business)</a></div>
                    </div>
                </li>
                <li class="lesson__video-item d-flex align-items-center
                      w-50">
                    <div class="video__img">
                        <a class="video__img-link" href="{{ route('client.video.index') }}"><img
                                class="video__img-img" src="{{ asset('images/video4.png') }}" alt=""></a>
                    </div>
                    <div class="lesson__video-heading">
                        <a class="lesson__video-heading-link" href="{{ route('client.video.index') }}">Học với<span>
                            người nổi tiếng</span></a>
                        <div class="sup__div"><i class="bi
                            bi-camera-video-fill"></i><a href=""
                                                         class="lesson__video-heading-suplink">15/10/2016:
                                Your weekly...
                                <br/>(Tổng thống Mỹ Obama)</a></div>
                    </div>
                </li>
            </ul>
            <ul class="lesson__video-list d-flex justify-content-evenly
                      bg-light">
                <li class="lesson__video-item d-flex align-items-center
                        w-50">
                    <div class="video__img">
                        <a class="video__img-link" href="{{ route('client.video.index') }}"><img
                                class="video__img-img" src="{{ asset('images/video5.png') }}"
                                alt=""></a>
                    </div>
                    <div class="lesson__video-heading">
                        <a class="lesson__video-heading-link" href="{{ route('client.video.index') }}">Học
                            tiếng Anh qua<span> VOV TV</span></a>
                        <div class="sup__div"><i class="bi
                              bi-camera-video-fill"></i><a href=""
                                                           class="lesson__video-heading-suplink">Search for
                                Cheaper,...</a></div>
                    </div>
                </li>
                <li class="lesson__video-item d-flex align-items-center
                        w-50">
                    <div class="video__img">
                        <a class="video__img-link" href="{{ route('client.video.index') }}"><img
                                class="video__img-img" src="{{ asset('images/video6.png') }}"
                                alt=""></a>
                    </div>
                    <div class="lesson__video-heading">
                        <a class="lesson__video-heading-link" href="{{ route('client.video.index') }}">Học
                            tiếng Anh qua<span> Youtube</span></a>
                        <div class="sup__div"><i class="bi
                              bi-camera-video-fill"></i><a href=""
                                                           class="lesson__video-heading-suplink">How to Use
                                the New York City...</a></div>
                    </div>
                </li>
            </ul>
            <ul class="lesson__video-list d-flex
                      justify-content-evenly">
                <li class="lesson__video-item d-flex align-items-center
                        w-50">
                    <div class="video__img">
                        <a class="video__img-link" href="{{ route('client.video.index') }}"><img
                                class="video__img-img" src="{{ asset('images/video7.png') }}"
                                alt=""></a>
                    </div>
                    <div class="lesson__video-heading">
                        <a class="lesson__video-heading-link" href="{{ route('client.video.index') }}">Học
                            tiếng Anh qua<span> video thực tế</span></a>
                        <div class="sup__div"><i class="bi
                              bi-camera-video-fill"></i><a href=""
                                                           class="lesson__video-heading-suplink">Listen and
                                Repeat - Beginner...</a></div>
                    </div>
                </li>
                <li class="lesson__video-item d-flex align-items-center
                        w-50">
                    <div class="video__img">
                        <a class="video__img-link" href="{{ route('client.video.index') }}"><img
                                class="video__img-img" src="{{ asset('images/vide08.png') }}"
                                alt=""></a>
                    </div>
                    <div class="lesson__video-heading">
                        <a class="lesson__video-heading-link" href="{{ route('client.video.index') }}">Luyện
                            nghe với video <span> TED</span></a>
                        <div class="sup__div"><i class="bi
                              bi-camera-video-fill"></i><a href=""
                                                           class="lesson__video-heading-suplink">Fabian
                                Hemmert: The shape-shifting...</a></div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="lesson-entertainment">
            <div class="header__title">
                <a href="" class="body__lesson-link body__lesson-title">
                    GIẢI TRÍ VỚI TIẾNG ANH
                    <a href="" class=" body__lesson-title"><i
                            class="body__lesson-link-logo bi bi-chevron-right"></i></a>
                </a>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="lesson-entertainment__film">
                            <a class="lesson-entertainment__link" href="{{ route('client.music.index') }}">
                                <img class="lesson-entertainment__img"
                                     src="{{ asset('images/music.png') }}" alt="">
                                <div class="lesson-entertainment__img-title">
                                    <h4
                                        class="lesson-entertainment__img-title-headding">Học
                                        tiếng Anh qua bài hát</h4>
                                    <span><i class="bi bi-music-note-beamed
                                    lesson-entertainment__img-title-icon"></i></span>Titanium
                                </div>
                            </a>
                        </div>
                        <div class="list">
                            <div class="list__music">
                                <a href="{{ route('client.music.detail', 1) }}">
                                <span class="list__content"><i class="bi
                                    bi-music-note-beamed
                                    lesson-entertainment__img-title-icon"></i>If
                                  You're Not The One</span>
                                    <span class="list__sub">(71084 lượt nghe)</span>
                                </a>
                            </div>
                            <div class="list__music">
                                <a href="{{ route('client.music.index') }}">
                                <span class="list__content"><i class="bi
                                    bi-music-note-beamed
                                    lesson-entertainment__img-title-icon"></i>Let
                                  It Go</span>
                                    <span class="list__sub">(181789 lượt nghe)</span>
                                </a>
                            </div>
                            <a href="{{ route('client.music.detail', 1) }}" id="logo"
                               class="body__lesson-footer-btn"><span>Xem thêm</span><i
                                    class="body__lesson-link-logo bi
                                bi-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="lesson-entertainment__film">
                            <a class="lesson-entertainment__link" href="">
                                <img class="lesson-entertainment__img"
                                     src="{{ asset('images/trailer.png') }}" alt="">
                                <div class="lesson-entertainment__img-title">
                                    <h4
                                        class="lesson-entertainment__img-title-headding">Học
                                        tiếng Anh qua trailer phim</h4>
                                    <span><i class="bi bi-film
                                    lesson-entertainment__img-title-icon"></i></span>Học
                                    tiếng Anh qua phim Trailler
                                </div>
                            </a>
                        </div>
                        <div class="list">
                            <div class="list__music">
                                <a href="{{ route('client.music.index') }}">
                                <span class="list__content"><i class="bi bi-film
                                    lesson-entertainment__img-title-icon"></i>The
                                  Fault in Our Stars</span>
                                </a>
                            </div>
                            <div class="list__music">
                                <a href="{{ route('client.music.detail', 1) }}">
                                <span class="list__content"><i class="bi bi-film
                                    lesson-entertainment__img-title-icon"></i>X-Men:
                                  Days of Future Past</span>
                                </a>
                            </div>
                            <a href="" id="logo"
                               class="body__lesson-footer-btn"><span>Xem thêm</span><i
                                    class="body__lesson-link-logo bi
                                bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
