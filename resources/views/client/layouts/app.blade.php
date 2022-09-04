<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title')</title>
    <!-- <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.1-web/css/all.min.css"> -->
    <link href="{{ asset('css/client/bootstrap.min.css') }}" rel="stylesheet"/>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/client/style.css') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('css')
</head>
<body>
<div class="container">
    @include('client.includes.header')
    @yield('content')

    @include('client.includes.footer')

    <!-- Dang nhap -->
    <div class="modal fade" id="loginModal"
         data-bs-backdrop="static" data-bs-keyboard="false"
         tabindex="-1" aria-labelledby="staticBackdropLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h4>Đăng nhập</h4>
                    <form action="">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control form-input"
                                   id="email" placeholder="Nhập email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" class="form-control form-input"
                                   id="password" placeholder="Nhập mật khẩu">
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary
                          btn-primary__focus">Đăng nhập
                        </button>
                        <button type="button" class="btn btn-secondary
                          btn-primary__closer" data-bs-dismiss="modal">Đóng
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Dang ky -->
    <div class="modal fade" id="registerModal"
         data-bs-backdrop="static" data-bs-keyboard="false"
         tabindex="-1" aria-labelledby="staticBackdropLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h4>Đăng ký</h4>
                    <form action="">
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên</label>
                            <input type="text" class="form-control form-input"
                                   id="name" placeholder="Nhập tên">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control form-input"
                                   id="email" placeholder="Nhập email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" class="form-control form-input"
                                   id="password" placeholder="Nhập mật khẩu">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary
                            btn-primary__focus">Đăng ký
                            </button>
                            <button type="button" class="btn btn-secondary
                            btn-primary__closer" data-bs-dismiss="modal">Đóng
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/client/bootstrap.min.js') }}"></script>
@yield('js')
</body>
</html>
