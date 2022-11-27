@extends('client.layouts.auth')

@section('title', 'Đăng ký tài khoản')

@section('content')
    <div class="container container__background">
        <div class="new-lesson__list">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center pt-3">
                        <h1 class="h4 text-gray-900 mb-2">Đăng nhập tài khoản</h1>
                    </div>
                    <form class="user" action="{{ route('client.auth.login') }}" method="post">
                        @csrf
                        @include('share.alerts.messages')
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                   class="form-control form-control-user" id="email" required
                                   aria-describedby="emailHelp" placeholder="Nhậpp Email...">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Mật khẩu</label>
                            <input type="password" name="password" class="form-control form-control-user" required
                                   id="password" placeholder="Nhập mật khẩu...">
                        </div>
                        <div class="text-center mb-3">
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Đăng nhập hệ thống
                            </button>
                        </div>
                    </form>

                    <hr>
                    <div class="d-flex justify-content-center gap-3 mb-4">
                        <div>
                            <a class="small text-primary" href="{{ route('client.forget.password.get') }}">Quên mật khẩu</a>
                        </div>
                        <div>
                            <a class="small text-primary" href="{{ route('client.auth.form.register') }}">Đăng ký tài khoản</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
