@extends('client.layouts.app')

@section('title', 'Kỹ năng')

@section('content')
    <div class="body__lesson">
        <h3>{{ $skill->name }}</h3>
{{--        <p class="txt-light">--}}
{{--            <i class="bi bi-tag-fill sub-video__link-logo"></i>--}}
{{--            Học thử (<a href="">Đăng ký VIP</a> <span>để được học toàn bộ bài học này!)</span>--}}
{{--        </p>--}}
        @if(!empty($skill->courses))
            @foreach($skill->courses as $course)
                <h5>{{ $course->name }}</h5>
                <div class="video text-center">
                    <iframe width="80%" height="440" src="{{ $course->link_video }}" frameborder="0" allowfullscreen>
                    </iframe>
                </div>
            @endforeach
        @else
            @include('share.empty');
        @endif

        @if(!$skill->is_login)
            <div class="row learn-america__noti">
                <div class="col-6 learn-america__noti-list d-flex">
                    <span><i class="bi bi-check2 learn-america__noti-list-logo"></i></span>
                    <p class="col__logo-content">Đăng nhập để học toàn bộ các
                        chương trình trên 123 Tiếng Anh </p>
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
        @endif

        @if(count($lastSkills) > 0)
        <div class="next-lesson">
            <h3>Bài tiếp theo</h3>
            <div class="d-flex gap-4">
                @foreach($lastSkills as $skill)
               <div>
                   <img width="100%" height="240" src="{{ $skill->image }}">
                   </img>
                   <div class="sub-video">
                       <a class="sub-video__link" href="">{{ $skill->name }}</a>
                       <div class="@if(!$skill->is_login) sub-video__stick @else sub-video__stick--yellow @endif">
                           <i class="bi bi-tag-fill sub-video__link-logo"></i>
                           @if(!$skill->is_login) Học miễn phí @else Đăng nhập để học @endif
                       </div>
                   </div>
               </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
@endsection
