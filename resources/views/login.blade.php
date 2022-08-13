<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@lang('labels.pages.login.title')</title>
    <!-- Styles -->
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">@lang('labels.general.titles.login')</h1>
                                    </div>
                                    <form class="user" action="{{ route('auth.login') }}" method="post">
                                        @csrf
                                        @include('share.alerts.messages')
                                        <div class="form-group">
                                            <input type="email" name="email" value="{{ old('email') }}" class="form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="@lang('labels.pages.login.form.email_placeholder')">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="@lang('labels.pages.login.form.password_placeholder')">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input name="remember" type="checkbox" class="custom-control-input" id="remember">
                                                <label class="custom-control-label" for="remember">@lang('labels.pages.login.form.remember')</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            @lang('labels.general.buttons.login')
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="#">@lang('labels.pages.login.form.forgot_password')</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="#">@lang('labels.pages.login.form.create_new_account')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</body>

</html>
