@extends('client.layouts.app')

@section('title', 'Trang chủ')

@section('content')
    <div class="body__lesson">
        <div class="header__title">
            <span class="body__lesson-link body__lesson-title">
                HỌC PHÁT ÂM TIẾNG ANH <span>VỚI GIÁO VIÊN MỸ</span>
                <span class=" body__lesson-title"><i
                        class="body__lesson-link-logo bi bi-chevron-right"></i></span>
            </span>
        </div>
        <h4 class="body__lesson-title-strong">
            Luyện phát âm chuẩn người bản ngữ
        </h4>
        <div class="container">
            <div class="row">
                @foreach($skills as $key=>$skill)
                    <div class="col-xl-4 col-sm-6 col-xs-12 mb-2 p-3">
                        <figure class="figure">
                            <a class="body__lesson-title-link" href="{{ route('client.skill.detail', $skill->id) }}">
                                <img
                                    srcset="{{ $skill->image }}"
                                    class="figure-img img-fluid rounded body__lesson-img"
                                    alt="{{ $skill->name }}">
                                <figcaption class="figure-caption"><a
                                        class="figure-caption__link"
                                        href="{{ route('client.skill.detail', $skill->id) }}"><span>{{ $key+1 }}</span>{{ $skill->name }}
                                    </a></figcaption>
                            </a>
                        </figure>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="body__lesson-footer">
            <div class="body__lesson-footer-tag">
                <span class="body__lesson-footer-icon"><i class="bi bi-fire"></i></span>Hot
                nhất trên 123 Tiếng Anh
            </div>

            @if(count($skills) === 6)
                <a href="{{ route('client.skill.index', ['category_id' => $categoryPron->id]) }}" class="body__lesson-footer-btn"><span>Xem thêm</span><i
                        class="body__lesson-link-logo bi bi-chevron-right"></i></a>
            @endif
        </div>
        <div class="new__lesson">
            <div class="header__title">
                <span class="body__lesson-link body__lesson-title">
                    BÀI LUYỆN TẬP <span>KỸ NĂNG TIẾNG ANH</span>
                    <span class=" body__lesson-title"><i
                            class="body__lesson-link-logo bi bi-chevron-right"></i></span>
                </span>
            </div>
            <ul class="list-group">
                @foreach($quizList as $quiz)
                    <li class="new__lesson-item list-group-item d-flex
                justify-content-between align-items-start">
                        <a class="new__lesson-item-link" href="{{ route('client.quiz.question', $quiz->id) }}">
                            <div class="new__lesson-content">
                                <div class="fw-bold new__lesson-content--blue">
                                    {{ $quiz->name }}
                                </div>
                                <span>{{ $quiz->description }}</span>
                            </div>
                        </a>
                        <span class="new__lesson-date">Cập nhật cuối: {{ $quiz->updated_at->format('d-m-Y h:i:s') }}</span>
                    </li>
                @endforeach
            </ul>
            @if(count($quizList) === 5)
            <a href="{{ route('client.quiz.index') }}" class="new__lesson-btn body__lesson-footer-btn">Xem thêm</a>
            @endif
        </div>
        <div class="lesson__banner"></div>
        <div class="lesson__hightschool">
            <div class="header__title">
                <a href="#" class="body__lesson-link body__lesson-title">
                    TIẾNG ANH CƠ SỞ
                    <a href="" class=" body__lesson-title"><i
                            class="body__lesson-link-logo bi bi-chevron-right"></i></a>
                </a>
            </div>
            <div class="container text-center">
                <div class="row">
                    <div class="col-xl-6 col-sm-12">
                        <a href="#" class="lesson__hightschool-link">
                            <img class="lesson__hightschool-link-img w-100 h-100" src="{{ asset('images/hight_school.png') }}"
                                 alt="">
                            <span class="lesson__hightschool-link-content">Tiếng Anh<br>trung
                      học cở sở</span>
                        </a>
                    </div>
                    <div class="col-xl-6 col-sm-12 ">
                        <div class="list-group">
                            @foreach($books as $book)
                            <a href="{{ route('client.book.lesson', $book->slug) }}" class="list-group-item d-flex justify-content-between align-items-center lesson__hightschool-list py-3 cursor-pointer">
                                {{ $book->name }} <span class="">{{ $book->class_number }}</span>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="point" id="skill">
            <div class="header__title">
                <span class="body__lesson-link body__lesson-title">
                    LUYỆN KỸ NĂNG
                    <span class=" body__lesson-title"><i
                            class="body__lesson-link-logo bi bi-chevron-right"></i>
                    </span>
                </span>
            </div>
            <div class="container text-center point__content">
                <div class="row">
                    @foreach($skillCategories as $category)
                        <div class="col-xl-3 col-sm-6">
                            <a class="point-link" href="{{ route('client.skill.index', ['category_id' => $category->id]) }}">
                                <img src="{{ $category->image }}" alt="" class="point-img">
                                <p class="point-img__content">Luyện <span>{{ $category->name }}</span></p>
                            </a>
                        </div>
                    @endforeach
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
                <span class="body__lesson-link body__lesson-title">
                    HỌC QUA VIDEO
                    <span class=" body__lesson-title"><i
                            class="body__lesson-link-logo bi bi-chevron-right"></i></span>
                </span>
            </div>

            <div class="row">
                @foreach($videoCategories as $category)
                    <div class="col-6 mb-3">
                        <div class="lesson__video-item d-flex align-items-center">
                            <div class="video__img">
                                <a class="video__img-link" href="{{ route('client.video.index', ['slug' => $category->slug]) }}">
                                    <img
                                        width="84"
                                        height="84"
                                        class="video__img-img"
                                        src="{{ !empty($category->image) ? $category->image : asset('images/video1.png') }}"
                                        alt="" />
                                </a>
                            </div>

                            <div class="lesson__video-heading">
                                <a class="lesson__video-heading-link" href="{{ route('client.video.index', ['slug' => $category->slug]) }}">{{ $category->name }}</span></a>
                                <div class="sup__div"><i class="bi bi-camera-video-fill"></i>
                                    <a href="{{ route('client.video.index', ['slug' => $category->slug]) }}" class="lesson__video-heading-suplink">
                                        {{ $category->description }}
                                    </a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="lesson-entertainment">
            <div class="header__title">
                <span class="body__lesson-link body__lesson-title">
                    GIẢI TRÍ VỚI TIẾNG ANH
                    <a href="{{ route('client.music.index') }}" class=" body__lesson-title"><i
                            class="body__lesson-link-logo bi bi-chevron-right"></i></a>
                </span>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-sm-12">
                        <div class="lesson-entertainment__film">
                            <a class="lesson-entertainment__link" href="{{ route('client.music.index') }}">
                                <img class="lesson-entertainment__img" src="{{ asset('images/music.png') }}" />
                                <div class="lesson-entertainment__img-title">
                                    <h4 class="lesson-entertainment__img-title-headding">Học
                                        tiếng Anh qua bài hát</h4>
                                    <span><i class="bi bi-music-note-beamed lesson-entertainment__img-title-icon"></i></span>Titanium
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-12">
                        <div class="list">
                            @foreach($musics as $music)
                                <div class="list__music">
                                    <a href="{{ route('client.music.detail', $music->id) }}">
                            <span class="list__content"><i class="bi bi-music-note-beamed lesson-entertainment__img-title-icon"></i>
                              {{ $music->title }}</span>
{{--                                        <span class="list__sub">(784 lượt nghe)</span>--}}
                                    </a>
                                </div>
                            @endforeach

                            @if(count($musics) >= 4)
                            <a href="{{ route('client.music.index') }}" id="logo" class="body__lesson-footer-btn"><span>Xem thêm</span>
                                <i class="body__lesson-link-logo bi bi-chevron-right"></i>
                            </a>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
