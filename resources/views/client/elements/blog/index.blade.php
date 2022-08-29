@extends('client.layouts.app')

@section('title', 'Tin tức')

@section('content')
    <div class="container container__background">
        <div>
            <div class="pb-5">
                <h3 class="heading__h border-bottom text-danger">Kinh nghiệm học tập - Kinh nghiệm học tiếng Anh -
                    Học
                    tốt tiếng Anh
                </h3>
                <div>
                    <div class="d-flex align-items-center">
                        <a class="lesten" href="{{ route('client.blog.detail', 1) }}"><img class="border shadow-sm p-3 m-2 bg-body rounded"
                                                       src="{{ asset('images/xp/cach-hoc-tieng-anh-giao-tiep.jpg') }}" alt=""
                                                       width="160px" height="120px"></a>
                        <div class="">
                            <div class="border-bottom pb-3">
                                <a class="lesten" href="{{ route('client.blog.detail', 1) }}"><p class="font-size mb-0 text-dark">
                                        Cách học tiếng Anh giao tiếp</p></a>
                                <span>Cách học tiếng Anh giao tiếp</span>
                            </div>
                            <div>
                                <span class="text-muted"><i class="bi bi-eye-fill p-1"></i>3</span>
                                <span class="text-muted p-3"><i class="bi bi-chat-right-dots-fill p-1"></i>10</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center bg-success p-2 text-dark bg-opacity-10">
                        <a class="lesten" href="{{ route('client.blog.detail', 1) }}"><img class="border shadow-sm p-3 m-2 bg-body rounded"
                                                       src="{{ asset('images/xp/free.jpg') }}" alt="" width="160px"
                                                       height="120px"></a>
                        <div class="">
                            <div class="border-bottom pb-3 ">
                                <a class="lesten" href="{{ route('client.blog.detail', 1) }}"><p class="font-size mb-0 text-dark">Cách học tiếng anh
                                        online
                                        miễn phí hiệu quả nhất</p></a>
                                <span></span>
                            </div>
                            <div>
                                <span class="text-muted"><i class="bi bi-eye-fill p-1"></i>4</span>
                                <span class="text-muted p-3"><i class="bi bi-chat-right-dotsfill p-1"></i>5</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <a class="lesten" href="{{ route('client.blog.detail', 1) }}"><img class="border shadow-sm p-3 m-2 bg-body rounded"
                                                       src="{{ asset('images/xp/nguyên-tắc.jpg') }}" alt="" width="160px"
                                                       height="120px"></a>
                        <div class="">
                            <div class="border-bottom pb-3 ">
                                <a class="lesten" href="{{ route('client.blog.detail', 1) }}">
                                    <p class="font-size mb-0 text-dark">
                                        Nguyên tắc học tiếng anh online hiệu quả</p></a>
                                <span></span>
                            </div>
                            <div>
                                <span class="text-muted"><i class="bi bi-eye-fill p-1"></i>2</span>
                                <span class="text-muted p-3"><i class="bi bi-chat-right-dots-fill p-1"></i>6</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center bg-success p-2 text-dark bg-opacity-10">
                        <a class="lesten" href="{{ route('client.blog.detail', 1) }}"><img class="border shadow-sm p-3 m-2 bg-body rounded"
                                                       src="{{ asset('images/xp/đọc.jpg') }}" alt="" width="160px"
                                                       height="120px"></a>
                        <div class="">
                            <div class="border-bottom pb-3 ">
                                <a class="lesten" href="{{ route('client.blog.detail', 1) }}"><p class="font-size mb-0 text-dark">Cách đọc tiếng anh
                                        chuẩn
                                        nhất</p></a>
                                <span></span>
                            </div>
                            <div>
                                <span class="text-muted"><i class="bi bi-eye-fill p-1"></i>2</span>
                                <span class="text-muted p-3"><i class="bi bi-chat-right-dots-fill p-1"></i>4</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <a class="lesten" href="{{ route('client.blog.detail', 1) }}"><img class="border shadow-sm p-3 m-2 bg-body rounded"
                                                       src="{{ asset('images/xp/giao-tiếp.jpg') }}" alt="" width="160px"
                                                       height="120px"></a>
                        <div class="">
                            <div class="border-bottom pb-3 ">
                                <a class="lesten" href="{{ route('client.blog.detail', 1) }}"><p class="font-size mb-0 text-dark">
                                        Những cách giao tiếp tiếng anh tốt nhất</p></a>
                                <span></span>
                            </div>
                            <div>
                                <span class="text-muted"><i class="bi bi-eye-fill p-1"></i>4</span>
                                <span class="text-muted p-3"><i class="bi bi-chat-right-dots-fill p-1"></i>5</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center bg-success p-2 text-dark bg-opacity-10">
                        <a class="lesten" href="{{ route('client.blog.detail', 1) }}"><img class="border shadow-sm p-3 m-2 bg-body rounded"
                                                       src="{{ asset('images/xp/nghe.jpg') }}" alt="" width="160px"
                                                       height="120px"></a>
                        <div class="">
                            <div class="border-bottom pb-3 ">
                                <a class="lesten" href="{{ route('client.blog.detail', 1) }}"><p class="font-size mb-0 text-dark">Cách dạy con học tiếng
                                        anh
                                        tại nhà hiệu quả</p></a>
                                <span></span>
                            </div>
                            <div>
                                <span class="text-muted"><i class="bi bi-eye-fill p-1"></i>3</span>
                                <span class="text-muted p-3"><i class="bi bi-chat-right-dots-fill p-1"></i>4</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <a class="lesten" href="{{ route('client.blog.detail', 1) }}"><img class="border shadow-sm p-3 m-2 bg-body rounded"
                                                       src="{{ asset('images/xp/nghe.jpg') }}" alt="" width="160px"
                                                       height="120px"></a>
                        <div class="">
                            <div class="border-bottom pb-3 ">
                                <a class="lesten" href="{{ route('client.blog.detail', 1) }}"><p class="font-size mb-0 text-dark">Cách nghe tiếng anh
                                        hiệu
                                        quả - Những nguyên tắc dành cho bạn</p></a>
                                <span></span>
                            </div>
                            <div>
                                <span class="text-muted"><i class="bi bi-eye-fill p-1"></i>3</span>
                                <span class="text-muted p-3"><i class="bi bi-chat-right-dots-fill p-1"></i>4</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <nav aria-label="Page navigation example">
                <ul class="pagination mb-0 pb-4 justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
