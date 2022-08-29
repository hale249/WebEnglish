@extends('client.layouts.app')

@section('title', 'Tra từ điển')

@section('content')
    <div class="container container__background">
        <h2 class="heading__h">Tra từ điển</h2>
        <form action="" class="">
            <div class="input-group pb-3 d-flex justify-content-center">
                <input type="text" class="container__form-input border rounded-start" style="width: 50%"
                       placeholder="Tìm kiếm tiếng anh" aria-label="Recipient's username"
                       aria-describedby="basic-addon2">
                <button class="input-group-text diction_span" id="basic-addon2"><i class="bi bi-search seach__icon"></i>
                    <a
                        href="{{ route('client.dictionary.detail', 1) }}">
                        Tìm kiếm
                    </a>
                </button>
            </div>
        </form>
        <div class="container pb-5">
            <div class="bg-success p-2 text-dark bg-opacity-10 pb-5">
                <h2 class="heading__h">Các tìm kiếm phổ biến</h2>
                <p>Từ điển tiếng Anh-Việt:</p>
                <div class="d-flex justify-content-around bg-light">
                    <ul class="mr-5 diction__list">
                        <li class="">
                            <a href="" class="fs-5 text text-decoration-underline">
                                approach
                            </a>
                        </li>
                        <li>
                            <a href="" class="fs-5 text text-decoration-underline">
                                arrange
                            </a>
                        </li>
                        <li>
                            <a href="" class="fs-5 text text-decoration-underline">
                                consist
                            </a>
                        </li>
                        <li>
                            <a href="" class="fs-5 text text-decoration-underline">
                                influence
                            </a>
                        </li>
                        <li>
                            <a href="" class="fs-5 text text-decoration-underline">
                                claim
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="" class="fs-5 text text-decoration-underline">
                                capture
                            </a>
                        </li>
                        <li>
                            <a href="" class="fs-5 text text-decoration-underline">
                                adopt
                            </a>
                        </li>
                        <li>
                            <a href="" class="fs-5 text text-decoration-underline">
                                define
                            </a>
                        </li>
                        <li>
                            <a href="" class="fs-5 text text-decoration-underline">
                                charge
                            </a>
                        </li>
                        <li>
                            <a href="" class="fs-5 text text-decoration-underline">
                                determine
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
