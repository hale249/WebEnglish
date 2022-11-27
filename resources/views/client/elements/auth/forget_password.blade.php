@extends('client.layouts.auth')

@section('title', 'Lấy lại mật khẩu')

@section('content')
    <div class="container container__background">
        <div class="new-lesson__list">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center pt-3">
                        <h1 class="h4 text-gray-900 mb-2">Lấy lại mật khẩu</h1>
                    </div>
                    @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif

                    <form action="{{ route('client.forget.password.post') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="email_address" class="col-md-4 col-form-label text-md-right">Email</label>
                            <div class="col-md-6">
                                <input type="text" id="email_address" class="form-control" name="email" placeholder="Nhập email..." required autofocus>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 offset-md-4 my-3">
                            <button type="submit" class="btn btn-primary">
                                Gửi liên kết đặt lại mật khẩu
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
