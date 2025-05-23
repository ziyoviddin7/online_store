<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="Hypeople">
    <meta name="description" content="Responsive, Highly Customizable Dashboard Template" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('app-assets/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('app-assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('app-assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('app-assets/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('app-assets/favicon/safari-pinned-tab.svg') }}" color="#0010f7">
    <meta name="msapplication-TileColor" content="#0010f7">
    <meta name="theme-color" content="#ffffff">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- Plugin -->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugin/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/icons/iconly/index.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/icons/remix-icon/index.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">

    <!-- Base -->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/base/typography.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/base/base.css') }}">

    <!-- Theme -->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/theme/colors-dark.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/theme/theme-dark.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/custom-rtl.css') }}">

    <!-- Layouts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/layouts/sider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/layouts/header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/layouts/page-content.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
    <!-- Customizer -->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/layouts/customizer.css') }}">

    <!-- Pages -->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/authentication.css') }}">

    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <title>Register</title>
</head>

<body>
    <div class="row hp-authentication-page">
        <div class="hp-bg-black-20 hp-bg-color-dark-90 col-lg-6 col-12">
            <div class="row hp-image-row h-100 px-8 px-sm-16 px-md-0 pb-32 pb-sm-0 pt-32 pt-md-0">
                <div class="hp-logo-item m-16 m-sm-32 m-md-64 w-auto px-0 col-12">
                    <div class="hp-header-logo d-flex align-items-center">
                        <a href="index.html" class="position-relative">
                            <div class="hp-header-logo-icon position-absolute bg-black-20 hp-bg-dark-90 rounded-circle border border-black-0 hp-border-color-dark-90 d-flex align-items-center justify-content-center"
                                style="width: 18px; height: 18px; top: -5px;">
                                <svg class="hp-fill-color-dark-0" width="12" height="12" viewBox="0 0 12 12"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.709473 0L1.67247 10.8L5.99397 12L10.3267 10.7985L11.2912 0H0.710223H0.709473ZM9.19497 3.5325H4.12647L4.24722 4.88925H9.07497L8.71122 8.95575L5.99397 9.70875L3.28047 8.95575L3.09522 6.87525H4.42497L4.51947 7.93275L5.99472 8.33025L5.99772 8.3295L7.47372 7.93125L7.62672 6.21375H3.03597L2.67897 2.208H9.31422L9.19572 3.5325H9.19497Z"
                                        fill="#2D3436" />
                                </svg>
                            </div>

                            <img class="hp-logo hp-sidebar-visible hp-dark-none"
                                src="../../../app-assets/img/logo/logo-small.svg" alt="logo">
                            <img class="hp-logo hp-sidebar-visible hp-dark-block"
                                src="../../../app-assets/img/logo/logo-small-dark.svg" alt="logo">
                            <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-none"
                                src="../../../app-assets/img/logo/logo.svg" alt="logo">
                            <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-block"
                                src="../../../app-assets/img/logo/logo-dark.svg" alt="logo">
                            <img class="hp-logo hp-sidebar-hidden hp-dir-block hp-dark-none"
                                src="../../../app-assets/img/logo/logo-rtl.svg" alt="logo">
                            <img class="hp-logo hp-sidebar-hidden hp-dir-block hp-dark-block"
                                src="../../../app-assets/img/logo/logo-rtl-dark.svg" alt="logo">
                        </a>
                    </div>
                </div>

                <div class="col-12 px-0">
                    <div class="row h-100 w-100 mx-0 align-items-center justify-content-center">
                        <div class="hp-bg-item text-center mb-32 mb-md-0 px-0 col-12">
                            <img class="hp-dark-none m-auto w-100"
                                src="../../../app-assets/img/pages/authentication/authentication-bg.svg"
                                alt="Background Image">
                            <img class="hp-dark-block m-auto w-100"
                                src="../../../app-assets/img/pages/authentication/authentication-bg-dark.svg"
                                alt="Background Image">
                        </div>

                        <div class="hp-text-item text-center col-xl-9 col-12">
                            <h2 class="hp-text-color-black-100 hp-text-color-dark-0 mx-16 mx-lg-0 mb-16"> Very good
                                works are waiting for you </h2>
                            <p class="h4 mb-0 fw-normal hp-text-color-black-80 hp-text-color-dark-30"> Lorem Ipsum is
                                simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6 py-sm-64 py-lg-0">
            <div class="row align-items-center justify-content-center h-100 mx-4 mx-sm-n32">
                <div class="col-12 col-md-9 col-xl-7 col-xxxl-5 px-8 px-sm-0 pt-24 pb-48">

                    <h1 class="mb-0 mb-sm-24">Create Account</h1>

                    <form action="{{ route('user.register') }}" method="post" class="mt-16 mt-sm-32 mb-8">
                        @csrf

                        <div class="mb-16">
                            <label for="registerUsername" class="form-label">Username :</label>
                            <input value="{{ old('name') }}" name="name" type="text" class="form-control" id="registerUsername">
                            @error('name')
                                <p style="color: red"> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-16">
                            <label for="registerEmail" class="form-label">E-mail :</label>
                            <input value="{{ old('email') }}" name="email" type="email" class="form-control" id="registerEmail">
                            @error('email')
                                <p style="color: red"> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-16">
                            <label for="registerPassword" class="form-label">Password :</label>
                            <input name="password" type="password" class="form-control" id="registerPassword">
                            @error('password')
                                <p style="color: red"> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-16">
                            <label for="registerConfirmPassword" class="form-label">Confirm Password :</label>
                            <input name="password_confirmation" type="password" class="form-control"
                                id="registerConfirmPassword">
                            @error('password')
                                <p style="color: red"> {{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Sign Up
                        </button>
                    </form>

                    <div class="col-12 hp-form-info text-center">
                        <span class="text-black-80 hp-text-color-dark-40 hp-caption me-4">Already have an
                            account?</span>
                        <a class="text-primary-1 hp-text-color-dark-primary-2 hp-caption"
                            href="{{ route('user.login') }}">Login</a>
                    </div>

                    <div class="mt-48 mt-sm-96 col-12">
                        <p class="hp-p1-body text-center hp-text-color-black-60 mb-8"> Copyright 2021 Hypeople LTD.
                        </p>

                        <div class="row align-items-center justify-content-center mx-n8">
                            <div class="w-auto hp-flex-none px-8 col">
                                <a href="javascript:;" class="hp-text-color-black-80 hp-text-color-dark-40"> Privacy
                                    Policy </a>
                            </div>

                            <div class="w-auto hp-flex-none px-8 col">
                                <a href="javascript:;" class="hp-text-color-black-80 hp-text-color-dark-40"> Term of
                                    use </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Плагины -->
    <script src="{{ asset('app-assets/js/plugin/jquery.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/plugin/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/plugin/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/plugin/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/plugin/autocomplete.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/plugin/moment.min.js') }}"></script>

    <!-- Layouts -->
    <script src="{{ asset('app-assets/js/layouts/header-search.js') }}"></script>
    <script src="{{ asset('app-assets/js/layouts/sider.js') }}"></script>
    <script src="{{ asset('app-assets/js/components/input-number.js') }}"></script>

    <!-- Base -->
    <script src="{{ asset('app-assets/js/base/index.js') }}"></script>

    <!-- Customizer -->
    <script src="{{ asset('app-assets/js/customizer.js') }}"></script>

    <!-- Custom -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
