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
        rel="stylesheet">

    <!-- Plugin -->
    <link rel="stylesheet" href="{{ asset('app-assets/css/plugin/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/icons/iconly/index.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/icons/remix-icon/index.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/css/colors.css') }}">

    <!-- Base -->
    <link rel="stylesheet" href="{{ asset('app-assets/css/base/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/css/base/base.css') }}">

    <!-- Theme -->
    <link rel="stylesheet" href="{{ asset('app-assets/css/theme/colors-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/css/theme/theme-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/css/custom-rtl.css') }}">

    <!-- Layouts -->
    <link rel="stylesheet" href="{{ asset('app-assets/css/layouts/sider.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/css/layouts/header.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/css/layouts/page-content.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/css/components.css') }}">
    <!-- Customizer -->
    <link rel="stylesheet" href="{{ asset('app-assets/css/layouts/customizer.css') }}">

    <!-- Pages -->
    <link rel="stylesheet" href="{{ asset('app-assets/css/pages/page-error.css') }}">

    <!-- Custom -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <title>Order Successfully Placed</title>
</head>

<body>
    <div class="row text-center overflow-hidden">


        <div class="hp-error-content py-32 col-12">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col">
                    <div class="card-body">
                        <img class="hp-dark-none mx-auto"
                            src="{{ asset('app-assets/img/illustrations/we-got-a-problem.svg') }}" alt="Payment With Card"
                            height="300">
                        <img class="hp-dark-block mx-auto"
                            src="{{ asset('app-assets/img/illustrations/we-got-a-problem.svg') }}"
                            alt="Payment With Card" height="300">
                            <span class="d-block h5 mb-0 mt-6">Payment Failed</span>
                    </div>

                    <h2 class="h1 mb-16">Order #{{ $order->id }} Failed</h2>

                    <p class="mb-32 hp-p1-body hp-text-color-black-100 hp-text-color-dark-0">Unfortunately, your payment could not be processed. Please try again or use another payment method.</p>

                    <a href="{{ route('order.checkout') }}" class="btn router-link-active btn-primary">
                        <span>Try Again</span>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <!-- Scripts -->
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
