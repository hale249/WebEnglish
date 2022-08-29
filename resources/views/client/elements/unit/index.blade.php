@extends('client.layouts.app')

@section('title', 'Unit')

@section('content')
    <div class="container container__background">
        <div class="learn-america">
            <h1 class="learn-america__headding">
                Học phát âm với giáo viên Mỹ
            </h1>
            <div class="row align-items-center">
                <div class="col">
                    <div class="col__logo d-inline-block">
                        <i class="bi bi-emoji-frown col__logo-img"></i>
                    </div>
                    <p class="col__logo-content">Cái yếu nhất mà học sinh Việt Nam
                        mắc phải là được học phát âm tiếng Anh không đúng và không đủ.</p>
                </div>
                <div class="col">
                    <div class="col__logo d-inline-block">
                        <i class="bi bi-ear col__logo-img"></i>
                    </div>
                    <p class="col__logo-content">Nếu học sinh học phát âm sai hoặc
                        được dạy thiếu phát âm tiếng Anh thì mãi mãi không nghe và nói
                        được tiếng Anh, mất tự tin trong giao tiếp.</p>
                </div>
                <div class="col">
                    <div class="col__logo d-inline-block">
                        <i class="bi bi-book col__logo-img"></i>
                    </div>
                    <p class="col__logo-content">Nếu con bạn bỏ qua khóa học phát âm
                        này thì thật đáng tiếc, trừ khi bạn phải bỏ ra hàng triệu đồng
                        để thuê giáo viên nước ngoài dạy kèm hoặc học ở các trung tâm
                        đắt tiền.</p>
                </div>
            </div>
            <div class="row learn-america__noti">
                <div class="col-6 learn-america__noti-list d-flex">
                    <span><i class="bi bi-check2 learn-america__noti-list-logo"></i></span>
                    <p class="col__logo-content">Đăng ký lộ trình học hiệu quả</p>
                </div>
                <div class="col-6 learn-america__noti-list d-flex">
                    <span><i class="bi bi-check2 learn-america__noti-list-logo"></i></span>
                    <p class="col__logo-content">Học sinh học ngay tại nhà, học từ
                        máy tính ipad, hoặc điện thoại thông minh, bố mẹ không mất
                        thời gian đưa đón.</p>
                </div>
                <div class="col-6 learn-america__noti-list d-flex">
                    <span><i class="bi bi-check2 learn-america__noti-list-logo"></i></span>
                    <p class="col__logo-content">Được học bằng video giảng dạy bởi
                        giáo viên Mỹ, nghe đi nghe lại bao nhiều lần cũng được. Được
                        làm bài luyện nói với ghi âm, chấm điểm bằng công nghệ nhận
                        dạng giọng nói mới nhất trên app Tiếng anh.</p>
                </div>
                <div class="col-6 learn-america__noti-list d-flex">
                    <span><i class="bi bi-check2 learn-america__noti-list-logo"></i></span>
                    <p class="col__logo-content">Học sinh biết phát âm tiếng Anh
                        chuẩn sau khóa học này. Nếu bạn không cho con mình cơ hội, món
                        quà này càng sớm thì con bạn mãi mãi không nói được tiếng Anh,
                        các con sẽ mãi mãi tự ti và sợ giao tiếp tiếng Anh với người
                        nước ngoài và mọi công sức học tiếng Anh sẽ trở thành vô
                        nghĩa.</p>
                </div>
            </div>
            <div class="learn__btn--center">
                <a href="" class="learn__btn btn text-center fs-12">
                    <i class="learn__btn-logo bi bi-credit-card-2-back"></i>
                    Đăng kí thành viên
                </a>
            </div>
        </div>
        <div class="list">
            <h2>Danh sách bài học</h2>
            <p class="font-size">Có <strong>92</strong> bài học phát âm </p>
            <p class="font-size">Đầy đủ tất cả các phụ âm, nguyên âm đơn, đôi,
                trọng âm, nối âm, ngữ điệu trong tiếng Anh.</p>
            <div class="row">
                <div class="col-4 col4__video">
                    <video width="100%" height="240" controls>
                        <source src="{{ asset('video/unit1_video1.mp4') }}" type="video/mp4">
                    </video>
                    <div class="sub-video">
                        <a class="sub-video__link" href="{{ route('client.unit.detail', 1) }}">Unit 1: a - âm /æ/</a>
                        <div class="sub-video__stick">
                            <i class="bi bi-bookmark-fill sub-video__link-logo"></i>
                            Học miễn phí
                        </div>
                    </div>
                </div>
                <div class="col-4 col4__video">
                    <video width="100%" height="240" controls>
                        <source src="{{ asset('video/unit2_video1_nonvip.mp4') }}" type="video/mp4">
                    </video>
                    <div class="sub-video">
                        <a class="sub-video__link" href="{{ route('client.unit.detail', 1) }}">Unit 2: b - âm /b/</a>
                        <div class="sub-video__stick--yellow ">
                            <i class="bi bi-tag-fill sub-video__link-logo"></i>
                            Học thử
                        </div>
                    </div>
                </div>
                <div class="col-4 col4__video">
                    <video width="100%" height="240" controls>
                        <source src="{{ asset('video/unit3_video1_nonvip.mp4') }}" type="video/mp4">
                    </video>
                    <div class="sub-video">
                        <a class="sub-video__link" href="{{ route('client.unit.detail', 1) }}">Unit 3: c - âm /k/</a>
                        <div class="sub-video__stick--yellow ">
                            <i class="bi bi-tag-fill sub-video__link-logo"></i>
                            Học thử
                        </div>
                    </div>
                </div>
                <div class="col-4 col4__video">
                    <video width="100%" height="240" controls>
                        <source src="{{ asset('video/unit4_video1_nonvip.mp4') }}" type="video/mp4">
                    </video>
                    <div class="sub-video">
                        <a class="sub-video__link" href="{{ route('client.unit.detail', 1) }}">Unit 4: d - âm /d/</a>
                        <div class="sub-video__stick--yellow ">
                            <i class="bi bi-tag-fill sub-video__link-logo"></i>
                            Học thử
                        </div>
                    </div>
                </div>
                <div class="col-4 col4__video">
                    <video width="100%" height="240" controls>
                        <source src="{{ asset('video/unit5_video1_nonvip.mp4') }}" type="video/mp4">
                    </video>
                    <div class="sub-video">
                        <a class="sub-video__link" href="{{ route('client.unit.detail', 1) }}">Unit 5: e - âm /e/</a>
                        <div class="sub-video__stick--yellow ">
                            <i class="bi bi-tag-fill sub-video__link-logo"></i>
                            Học thử
                        </div>
                    </div>
                </div>
                <div class="col-4 col4__video">
                    <video width="100%" height="240" controls>
                        <source src="{{ asset('video/unit6_video1_nonvip.mp4') }}" type="video/mp4">
                    </video>
                    <div class="sub-video">
                        <a class="sub-video__link" href="{{ route('client.unit.detail', 1) }}">Unit 6: f - âm /f/</a>
                        <div class="sub-video__stick--yellow ">
                            <i class="bi bi-tag-fill sub-video__link-logo"></i>
                            Học thử
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
