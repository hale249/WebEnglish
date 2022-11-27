@extends('client.layouts.auth')

@section('title', 'Đăng ký tài khoản')

@section('content')
    <div class="container container__background">
        <div class="new-lesson__list">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center pt-3">
                        <h1 class="h4 text-gray-900 mb-2">Đặt lại mật khẩu</h1>
                    </div>
                    <form action="{{ route('client.reset.password.post', $token) }}" method="POST">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row mb-3">
                            <label for="email_address" class="col-md-4 col-form-label text-md-right">Email</label>
                            <div class="col-md-6">
                                <input type="text" id="email_address" class="form-control" name="email" value="{{$passwordReset->email}}" disabled>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Mật khẩu</label>
                            <div class="col-md-6">
                                <input type="password" id="password" class="form-control" name="password" placeholder="Nhập mật khẩu mới..." required autofocus>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Xác nhận mật khẩu</label>
                            <div class="col-md-6">
                                <input type="password" id="password-confirm" class="form-control" name="password_confirmation" placeholder="Nhập xác nhận mật khẩu..." required autofocus>
                                @if ($errors->has('password_confirmation'))
                                    <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6 offset-md-4 my-3">
                            <button type="submit" class="btn btn-primary">
                                Đặt lại mật khẩu
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
