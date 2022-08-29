@extends('client.layouts.app')

@section('title', 'Tra từ điển')

@section('content')
    <div class="container container__background">
        <div class="container contaier__background">
            <h2 class="heading__h">Tra từ điển</h2>
            <form action="" class="">
                <div class="input-group pb-3 d-flex justify-content-center">
                    <input type="text" class="container__form-input border
                  rounded-start" style="width: 50%" placeholder="Tìm kiếm tiếng anh" aria-label="Recipient's username"
                           aria-describedby="basic-addon2">
                    <button class="input-group-text diction_span" id="basic-addon2">
                        <i class="bi bi-search seach__icon"></i>Tìm kiếm
                    </button>
                </div>
            </form>
            <div class="pt-5 pb-3 border-bottom">
                <p class="font-size">Ý nghĩa của <strong class="fs-4 text
                  text-danger">are</strong> trong tiếng Anh</p>
            </div>
            <div class="h4 pb-2 mb-4 border-bottom border-danger">
                <h2 class="text-uppercase pt-4">Are</h2>
                <p class="font-size">verb</p>
                <p class="font-size fw-light"><span>UK</span> <span>strong</span>
                    <span>/</span><span>ɑːr</span><span>/ </span> <span>weak </span><span>/ər/</span>
                    <span>US </span> <span>strong</span> <span>/ɑːr/</span> <span>weak</span>
                    <span>/ɚ/</span></p>
            </div>
            <div class="pb-3 border-bottom">
                <p class="font-size">we/you/they form of <a href="#" class="fs-4
                  text text-danger">be</a> :</p>
                <ul>
                    <li>Are you hungry?</li>
                    <li>They're (= they are) very late.</li>
                </ul>
            </div>
            <div>
                <p class="font-size mt-4">Các ví dụ của <strong
                        class="text-decoration-underline">are</strong></p>
                <h2 class="text-uppercase pt-4">Are</h2>
                <div class="border-bottom">
                    <p class="font-size mb-1">In such situations there <strong
                            class="text-decoration-underline">are</strong> minimal
                        incentives for strategic voting and maximal for sincere
                        voting.</p>
                    <p class="fs-6 text fw-light">Từ <a
                            class="text-decoration-underline text-info" href="#">Cambridge
                            English Corpus</a></p>
                </div>
                <div class="border-bottom">
                    <p class="font-size mb-1">Assume there <strong
                            class="text-decoration-underline">are</strong> eight
                        electoral districts with three voters each.</p>
                    <p class="fs-6 text fw-light">Từ <a
                            class="text-decoration-underline text-info" href="#">Cambridge
                            English Corpus</a></p>
                </div>
                <div class="border-bottom">
                    <p class="font-size mb-1">Slots <strong
                            class="text-decoration-underline">are</strong> initialized
                        with their default value unless a user value is specified.</p>
                    <p class="fs-6 text fw-light">Từ <a
                            class="text-decoration-underline text-info" href="#">Cambridge
                            English Corpus</a></p>
                </div>
                <div class="border-bottom">
                    <p class="font-size mb-1">No memory is allocated for width and
                        height, as their values <strong
                            class="text-decoration-underline">are</strong> computed each
                        time they <strong class="text-decoration-underline">are</strong>
                        accessed.</p>
                    <p class="fs-6 text fw-light">Từ <a
                            class="text-decoration-underline text-info" href="#">Cambridge
                            English Corpus</a></p>
                </div>
                <div class="border-bottom">
                    <p class="font-size mb-1">The template instantiator and the
                        prettyprinter <strong class="text-decoration-underline">are</strong>
                        reusable components.</p>
                    <p class="fs-6 text fw-light">Từ <a
                            class="text-decoration-underline text-info" href="#">Cambridge
                            English Corpus</a></p>
                </div>
                <div class="border-bottom mb-5">
                    <p class="font-size mb-1">From now on terms of the -calculus
                        <strong class="text-decoration-underline">are</strong>
                        considered module -equivalence.</p>
                    <p class="fs-6 text fw-light">Từ <a
                            class="text-decoration-underline text-info" href="#">Cambridge
                            English Corpus</a></p>
                </div>

            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <ul class="footer__list">
                            <li class="footer__list-item">
                                <a class="footer__list-item-link" href="">Tin Tức</a>
                            </li>
                            <li>
                                <a class="footer__list-item-link" href="">Tin tức từ
                                    TiếngAnh123</a>
                            </li>
                            <li>
                                <a class="footer__list-item-link" href="">Kinh
                                    nghiệm học tập</a>
                            </li>
                            <li>
                                <a class="footer__list-item-link" href="">Hướng dẫn
                                    sử dụng</a>
                            </li>
                            <li>
                                <a class="footer__list-item-link" href="">Nhận xét
                                    mới nhất</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <ul class="footer__list">
                            <li class="footer__list-item">
                                <a class="footer__list-item-link" href="">Tiếng Anh
                                    phổ thông</a>
                            </li>
                            <li>
                                <a class="footer__list-item-link" href="">Tiếng Anh
                                    lớp 6</a>
                            </li>
                            <li>
                                <a class="footer__list-item-link" href="">Tiếng Anh
                                    lớp 7</a>
                            </li>
                            <li>
                                <a class="footer__list-item-link" href="">Tiếng Anh
                                    lớp 8</a>
                            </li>
                            <li>
                                <a class="footer__list-item-link" href="">Tiếng Anh
                                    lớp 9</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <ul class="footer__list">
                            <li class="footer__list-item">
                                <a class="footer__list-item-link" href="">Chấm điểm
                                    online</a>
                            </li>
                            <li>
                                <a class="footer__list-item-link" href="">Viết qua
                                    tranh (dễ)</a>
                            </li>
                            <li>
                                <a class="footer__list-item-link" href="">Viết bài
                                    luận</a>
                            </li>
                            <li>
                                <a class="footer__list-item-link" href="">Luyện đọc
                                    đoạn văn</a>
                            </li>
                            <li>
                                <a class="footer__list-item-link" href="">Nghe và
                                    viết lại</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
