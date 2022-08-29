@extends('client.layouts.app')

@section('title', 'Unit')

@section('content')
    <div class="body__lesson">
        <h1>Unit 1: a - âm /æ/</h1>
        <p class="txt-light">
            <i class="bi bi-tag-fill sub-video__link-logo"></i>
            Học thử (<a href="">Đăng ký VIP</a> <span>để được học toàn bộ bài học này!)</span>
        </p>
        <h2>Bài giảng 1</h2>
        <div class="video text-center">
            <video width="100%" height="100%" controls>
                <source src="{{ asset('video/unit1_video1.mp4') }}" type="video/mp4">
            </video>
        </div>
        <h2>Bài giảng 2</h2>
        <div class="video text-center">
            <video width="100%" height="100%" controls>
                <source src="{{ asset('video/uniit1_sub/unit1_video2.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="next">
            <div class="next_lesson">
                <h2>Bài giảng 3</h2>
                <div class="video text-center">
                    <video width="100%" height="100%" controls>
                        <source src="{{ asset('video/uniit1_sub/unit1_video3.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
        <div class="row learn-america__noti">
            <div class="col-6 learn-america__noti-list d-flex">
                <span><i class="bi bi-check2 learn-america__noti-list-logo"></i></span>
                <p class="col__logo-content">Giá thẻ VIP để học toàn bộ các
                    chương trình trên Tiếng Anh 123 chỉ <strong>199.000 đ/ 1 năm</strong>
                    (~ 1 ly cafe / 1 tháng).</p>
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
                    dạng giọng nói mới nhất trên app Tiếng Anh123.</p>
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
        <div class="next-lesson">
            <h2>Bài tiếp theo</h2>
            <div class="">
                <video width="400" height="240" controls>
                    <source src="{{ asset('video/unit2_video1_nonvip.mp4') }}" type="video/mp4">
                </video>
                <div class="sub-video">
                    <a class="sub-video__link" href="">Unit 2: b - âm /b/</a>
                    <div class="sub-video__stick--yellow ">
                        <i class="bi bi-tag-fill sub-video__link-logo"></i>
                        Học thử
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
