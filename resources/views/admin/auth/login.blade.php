<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Login to Admin</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/style.css') }}">

    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('admin/assets/font/fonts.css') }}">

    <!-- Icon -->
    <link rel="stylesheet" href="{{ asset('admin/assets/icon/style.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('admin/assets/images/favicon.png') }}">

</head>

<body class="body">

    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">
            <div class="wrap-login-page">
                <div class="flex-grow flex flex-column justify-center gap30">
                    <a href="index.html" id="site-logo-inner">

                    </a>
                    <div class="login-box">
                        <div>
                            <h3>Login to Admin</h3>
                            <div class="body-text">Enter your email & password to login</div>
                        </div>
                        <form action="{{ route('admin.login_process') }}" method="post"
                            class="form-login flex flex-column gap24">
                            @csrf
                            <fieldset class="email">
                                <div class="body-title mb-10">Email address <span class="tf-color-1">*</span></div>
                                <input class="flex-grow" type="email" placeholder="Enter your email address"
                                    name="email" tabindex="0" value="{{ old('email') }}" aria-required="true" required="">
                                @error('email')
                                    <p style="color: red"> {{ $message }}</p>
                                @enderror
                            </fieldset>

                            <fieldset class="password">
                                <div class="body-title mb-10">Password <span class="tf-color-1">*</span></div>
                                <input class="password-input" type="password" placeholder="Enter your password"
                                    name="password" tabindex="0" value="" aria-required="true" required="">
                                <span class="show-pass">
                                    <i class="icon-eye view"></i>
                                    <i class="icon-eye-off hide"></i>
                                </span>
                                @error('password')
                                    <p style="color: red"> {{ $message }}</p>
                                @enderror
                            </fieldset>

                            <div class="flex justify-between items-center">
                                <div class="flex gap10">
                                    <input name="remember" class="" type="checkbox" id="signed">
                                    <label class="body-text" for="remember">Remember me</label>
                                </div>
                                <a href="#" class="body-text tf-color">Forgot password?</a>
                            </div>
                            <button type="submit" href="index.html" class="tf-button w-full">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <!-- Javascript -->
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/main.js') }}"></script>

</body>

</html>
