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

    <!-- Charts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugin/apex-charts.css') }}">

    <!-- Pages -->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/dashboard-analytics.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/page-profile.css') }}">


    <!-- Horizontal -->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/layouts/horizontal-menu.css') }}">

    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <title>Ziyoviddin</title>
</head>

<body class="horizontal-active">
    <main class="hp-bg-color-dark-90 d-flex min-vh-100">
        <div class="hp-main-layout hp-main-layout-horizontal">
            <header>
                <div class="row w-100 m-0">
                    <div class="col px-0">
                        <div class="row w-100 align-items-center justify-content-between position-relative">
                            <div class="col w-auto hp-flex-none hp-mobile-sidebar-button me-24 px-0"
                                data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
                                <button type="button" class="btn btn-text btn-icon-only">
                                    <i class="ri-menu-fill hp-text-color-black-80 hp-text-color-dark-30 lh-1"
                                        style="font-size: 24px;"></i>
                                </button>
                            </div>


                            <div class="hp-horizontal-logo-menu d-flex align-items-center w-auto">
                                <div class="col hp-flex-none w-auto hp-horizontal-block">
                                    <div class="hp-header-logo d-flex align-items-center">
                                        <a href="" class="position-relative">
                                            <div class="hp-header-logo-icon position-absolute bg-black-20 hp-bg-dark-90 rounded-circle border border-black-0 hp-border-color-dark-90 d-flex align-items-center justify-content-center"
                                                style="width: 18px; height: 18px; top: -5px;">
                                                <svg class="hp-fill-color-dark-0" width="12" height="12"
                                                    viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
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

                                <div class="col hp-flex-none w-auto hp-horizontal-block hp-horizontal-menu ps-24">
                                    <ul class="d-flex flex-wrap align-items-center">
                                        <li class="px-6">
                                            <a href="{{ route('home') }}">
                                                <span>Home</span>
                                            </a>
                                        </li>

                                        <li class="px-6">
                                            <a href="{{ route('product.shop') }}">
                                                <span>Shop</span>
                                            </a>
                                        </li>
                                        <li class="px-6">
                                            <a href="javascript:;" class="px-12 py-4" data-bs-toggle="dropdown">
                                                <span>Catalog</span>
                                                <i class="ri-arrow-down-s-line"></i>
                                            </a>

                                            <ul class="dropdown-menu">

                                                @foreach ($categories as $category)
                                                    <li class="dropend">
                                                        <a class="dropdown-item" href="javascript:;"
                                                            data-bs-toggle="dropdown">
                                                            <span>
                                                                <span class="submenu-item-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="18" height="18"
                                                                        viewBox="0 0 24 24" fill="none">
                                                                        <path
                                                                            d="M4.26 11.02v4.97c0 1.82 0 1.82 1.72 2.98l4.73 2.73c.71.41 1.87.41 2.58 0l4.73-2.73c1.72-1.16 1.72-1.16 1.72-2.98v-4.97c0-1.82 0-1.82-1.72-2.98l-4.73-2.73c-.71-.41-1.87-.41-2.58 0L5.98 8.04C4.26 9.2 4.26 9.2 4.26 11.02Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"></path>
                                                                        <path
                                                                            d="M17.5 7.63V5c0-2-1-3-3-3h-5c-2 0-3 1-3 3v2.56M12.63 10.99l.57.89c.09.14.29.28.44.32l1.02.26c.63.16.8.7.39 1.2l-.67.81c-.1.13-.18.36-.17.52l.06 1.05c.04.65-.42.98-1.02.74l-.98-.39a.863.863 0 0 0-.55 0l-.98.39c-.6.24-1.06-.1-1.02-.74l.06-1.05c.01-.16-.07-.4-.17-.52l-.67-.81c-.41-.5-.24-1.04.39-1.2l1.02-.26c.16-.04.36-.19.44-.32l.57-.89c.36-.54.92-.54 1.27 0Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"></path>
                                                                    </svg>
                                                                </span>

                                                                <span>{{ $category->name }}</span>
                                                            </span>

                                                        </a>

                                                    </li>
                                                @endforeach

                                            </ul>
                                        </li>


                                    </ul>
                                </div>
                            </div>

                            <div class="hp-header-search d-none col">
                                <input type="text" class="form-control" placeholder="Search..."
                                    id="header-search" autocomplete="off">
                            </div>

                            <div class="col hp-flex-none w-auto pe-0">
                                <div class="row align-items-center justify-content-end">

                                    @auth
                                        <div
                                            class="hover-dropdown-fade w-auto px-0 d-flex align-items-center position-relative">
                                            <a href="{{ route('order.order_list') }}"
                                                class="btn btn-icon-only bg-transparent border-0 hp-hover-bg-black-10 hp-hover-bg-dark-100 hp-transition d-flex align-items-center justify-content-center"
                                                style="height: 40px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                    viewBox="0 0 24 24" fill="none"
                                                    class="hp-text-color-black-80 hp-text-color-dark-30">
                                                    <!-- Иконка коробки -->
                                                    <path d="M3.17 7.44L12 12.55l8.77-5.08M12 21.61v-9.07"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </path>
                                                    <path
                                                        d="M9.93 2.48 4.59 5.45c-1.21.67-2.2 2.35-2.2 3.73v5.65c0 1.38.99 3.06 2.2 3.73l5.34 2.97c1.14.63 3.01.63 4.15 0l5.34-2.97c1.21-.67 2.2-2.35 2.2-3.73V9.18c0-1.38-.99-3.06-2.2-3.73l-5.34-2.97c-1.14-.63-3.01-.63-4.15 0Z"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </path>
                                                    <path d="M17 13.24V9.58l-6.07-3.51-1.05-.6L3.5 5.96"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </path>
                                                </svg>
                                                @if ($orders->isNotEmpty())
                                                    <span
                                                        class="position-absolute translate-middle p-2 rounded-circle bg-primary hp-notification-circle"
                                                        style="width: 6px; height: 6px; top: 12px; left: 27px;"></span>
                                                @endif

                                            </a>
                                        </div>
                                    @endauth




                                    <div
                                        class="hover-dropdown-fade w-auto px-0 d-flex align-items-center position-relative">
                                        <a href="{{ route('favorites.show') }}"
                                            class="btn btn-icon-only bg-transparent border-0 hp-hover-bg-black-10 hp-hover-bg-dark-100 hp-transition d-flex align-items-center justify-content-center"
                                            style="height: 40px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                viewBox="0 0 24 24" fill="none"
                                                class="hp-text-color-black-80 hp-text-color-dark-30">
                                                <!-- Сердечко без заливки -->
                                                <path
                                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </path>
                                            </svg>
                                            @auth
                                                @if ($favorites_items->isNotEmpty())
                                                    <span
                                                        class="position-absolute translate-middle p-2 rounded-circle bg-primary hp-notification-circle"
                                                        style="width: 6px; height: 6px; top: 12px; left: 27px;"></span>
                                                @endif
                                            @else
                                                @if ($favoritesSession_items->isNotEmpty())
                                                    <span
                                                        class="position-absolute translate-middle p-2 rounded-circle bg-primary hp-notification-circle"
                                                        style="width: 6px; height: 6px; top: 12px; left: 27px;"></span>
                                                @endif
                                            @endguest

                                        </a>
                                    </div>


                                    @auth
                                        <div class="me-2 hp-basket-dropdown-button w-auto px-0 position-relative">
                                            <a href="{{ route('cart.show') }}"
                                                class="btn btn-icon-only bg-transparent border-0 hp-hover-bg-black-10 hp-hover-bg-dark-100 hp-transition d-flex align-items-center justify-content-center"
                                                style="height: 40px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                    viewBox="0 0 24 24" fill="none"
                                                    class="hp-text-color-black-80 hp-text-color-dark-30">
                                                    <path
                                                        d="M8.4 6.5h7.2c3.4 0 3.74 1.59 3.97 3.53l.9 7.5C20.76 19.99 20 22 16.5 22H7.51C4 22 3.24 19.99 3.54 17.53l.9-7.5C4.66 8.09 5 6.5 8.4 6.5Z"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path d="M8 8V4.5C8 3 9 2 10.5 2h3C15 2 16 3 16 4.5V8M20.41 17.03H8"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                                @if ($cart_items->isNotEmpty())
                                                    <span
                                                        class="position-absolute translate-middle p-2 rounded-circle bg-primary hp-notification-circle"
                                                        style="width: 6px; height: 6px; top: 12px; left: 26px;"></span>
                                                @endif

                                            </a>

                                            <div class="hp-basket-dropdown" style="width: 430px;">
                                                <div class="row px-0 justify-content-between align-items-center">
                                                    <h5 class="mb-0 w-auto hp-text-color-dark-15">My Cart</h5>

                                                    <div class="w-auto px-0 me-8">
                                                        <span
                                                            class="d-inline-block hp-caption fw-medium w-auto hp-text-color-black-80 hp-text-color-dark-30">

                                                            Total: ${{ number_format($total, 2, '.', ' ') }}</span>
                                                    </div>
                                                </div>

                                                <div class="divider mt-24 mb-4"></div>

                                                @foreach ($cart_items as $item)
                                                    <div class="hp-basket-dropdown-list">
                                                        <div class="hp-d-block hp-transition hp-hover-bg-primary-4 hp-hover-bg-dark-primary hp-hover-bg-dark-80 rounded py-8 px-10 hp-overflow-x-auto"
                                                            style="margin-left: -10px; margin-right: -10px;">
                                                            <div
                                                                class="row flex-nowrap justify-content-between align-items-center">
                                                                <div class="col mt-4 pe-0" style="flex: 0 0 32px;">
                                                                    <a href="javascript:;">
                                                                        <div class="avatar-item d-flex align-items-center justify-content-center hp-bg-black-0 hp-bg-dark-100 rounded-circle"
                                                                            style="width: 35px; height: 35px;">
                                                                            <img
                                                                                src="{{ Storage::url($item['product']->image) }}">
                                                                        </div>
                                                                    </a>
                                                                </div>

                                                                <div class="col ms-10 px-0" style="flex: 0 0 120px;">
                                                                    <a
                                                                        href="{{ route('product.detail', $item['product']->slug) }}">
                                                                        <h5
                                                                            class="mb-0 fw-medium hp-p1-body hp-text-color-black-100 hp-text-color-dark-15">
                                                                            {{ $item['product']->name }}</h5>
                                                                        <p class="mb-0 hp-caption hp-text-color-black-60"
                                                                            style="margin-top: 1px;">By <span
                                                                                class="hp-text-color-black-80">{{ $item['product']->brand->name }}</span>
                                                                        </p>
                                                                    </a>
                                                                </div>

                                                                <div class="col hp-d-flex hp-d-flex-column ms-8 px-0"
                                                                    style="flex: 0 0 70px;">
                                                                    <div class="input-number input-number-sm"
                                                                        style="width: 65px;">
                                                                        <div class="input-number-handler-wrap">


                                                                        </div>

                                                                        <div class="input-number-input-wrap">
                                                                            <input class="input-number-input"
                                                                                type="number" min="1"
                                                                                max="10"
                                                                                value="{{ $item['quantity'] }}">
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="hp-cursor-pointer mt-4 hp-input-description fw-medium text-black-60 text-decoration-underline">
                                                                        ${{ $item['price'] }}/unit</div>
                                                                </div>

                                                                <div class="col ps-0 text-end">
                                                                    <p
                                                                        class="hp-basket-dropdown-list-item-price hp-p1-body mb-0 hp-text-color-black-80 hp-text-color-dark-30 fw-medium">
                                                                        ${{ $item['total'] }}</p>


                                                                </div>
                                                                <div class="col ps-0 text-end" style="margin-left: 0px;">
                                                                    <form
                                                                        action="{{ route('cart.increase', $item['product']->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <button type="submit"
                                                                            class="btn btn-link p-0">↑</button>
                                                                    </form>

                                                                </div>
                                                                <div class="col ps-0 text-end">
                                                                    <form
                                                                        action="{{ route('cart.decrease', $item['product']->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="btn btn-link p-0">↓</button>
                                                                    </form>

                                                                </div>
                                                                <div class="col ps-0 text-end">
                                                                    <form
                                                                        action="{{ route('cart.remove', $item['product']->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="btn btn-link p-0">x</button>
                                                                    </form>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach


                                                <div class="divider mt-4 mb-12"></div>

                                                <div class="row">
                                                    @if ($cart_items->isEmpty())
                                                        <div class="col-6 px-8">
                                                            <a href="{{ route('product.shop') }}">
                                                                <button type="button"
                                                                    class="btn btn-text w-100 hp-bg-black-20 hp-text-color-black-100 hp-hover-text-color-primary-1 hp-hover-bg-primary-4">
                                                                    View Shop
                                                                </button>
                                                            </a>
                                                        </div>

                                                        <div class="col-6 px-8">
                                                            <a href="{{ route('cart.show') }}">
                                                                <button type="button"
                                                                    class="btn btn-text hp-text-color-black-0 hp-bg-black-100 hp-hover-bg-primary-1 w-100">
                                                                    View Cart
                                                                </button>
                                                            </a>
                                                        </div>
                                                    @else
                                                        <div class="col-6 px-8">
                                                            <a href="{{ route('cart.show') }}">
                                                                <button type="button"
                                                                    class="btn btn-text w-100 hp-bg-black-20 hp-text-color-black-100 hp-hover-text-color-primary-1 hp-hover-bg-primary-4">
                                                                    View Cart
                                                                </button>
                                                            </a>
                                                        </div>

                                                        <div class="col-6 px-8">
                                                            <a href="{{ route('order.checkout') }}">
                                                                <button type="button"
                                                                    class="btn btn-text hp-text-color-black-0 hp-bg-black-100 hp-hover-bg-primary-1 w-100">
                                                                    Checkout
                                                                </button>
                                                            </a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="me-2 hp-basket-dropdown-button w-auto px-0 position-relative">
                                            <a href="{{ route('cart.show') }}"
                                                class="btn btn-icon-only bg-transparent border-0 hp-hover-bg-black-10 hp-hover-bg-dark-100 hp-transition d-flex align-items-center justify-content-center"
                                                style="height: 40px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                    viewBox="0 0 24 24" fill="none"
                                                    class="hp-text-color-black-80 hp-text-color-dark-30">
                                                    <path
                                                        d="M8.4 6.5h7.2c3.4 0 3.74 1.59 3.97 3.53l.9 7.5C20.76 19.99 20 22 16.5 22H7.51C4 22 3.24 19.99 3.54 17.53l.9-7.5C4.66 8.09 5 6.5 8.4 6.5Z"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path d="M8 8V4.5C8 3 9 2 10.5 2h3C15 2 16 3 16 4.5V8M20.41 17.03H8"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                                @if ($cartSession_items->isNotEmpty())
                                                    <span
                                                        class="position-absolute translate-middle p-2 rounded-circle bg-primary hp-notification-circle"
                                                        style="width: 6px; height: 6px; top: 12px; left: 26px;"></span>
                                                @endif

                                            </a>

                                            <div class="hp-basket-dropdown" style="width: 430px;">
                                                <div class="row px-0 justify-content-between align-items-center">
                                                    <h5 class="mb-0 w-auto hp-text-color-dark-15">My Cart</h5>

                                                    <div class="w-auto px-0 me-8">
                                                        <span
                                                            class="d-inline-block hp-caption fw-medium w-auto hp-text-color-black-80 hp-text-color-dark-30">

                                                            Total:
                                                            ${{ number_format($cartSession_total, 2, '.', ' ') }}</span>
                                                    </div>
                                                </div>

                                                <div class="divider mt-24 mb-4"></div>

                                                @foreach ($cartSession_items as $item)
                                                    <div class="hp-basket-dropdown-list">
                                                        <div class="hp-d-block hp-transition hp-hover-bg-primary-4 hp-hover-bg-dark-primary hp-hover-bg-dark-80 rounded py-8 px-10 hp-overflow-x-auto"
                                                            style="margin-left: -10px; margin-right: -10px;">
                                                            <div
                                                                class="row flex-nowrap justify-content-between align-items-center">
                                                                <div class="col mt-4 pe-0" style="flex: 0 0 32px;">
                                                                    <a href="javascript:;">
                                                                        <div class="avatar-item d-flex align-items-center justify-content-center hp-bg-black-0 hp-bg-dark-100 rounded-circle"
                                                                            style="width: 35px; height: 35px;">
                                                                            <img
                                                                                src="{{ Storage::url($item['product']->image) }}">
                                                                        </div>
                                                                    </a>
                                                                </div>

                                                                <div class="col ms-10 px-0" style="flex: 0 0 120px;">
                                                                    <a
                                                                        href="{{ route('product.detail', $item['product']->slug) }}">
                                                                        <h5
                                                                            class="mb-0 fw-medium hp-p1-body hp-text-color-black-100 hp-text-color-dark-15">
                                                                            {{ $item['product']->name }}</h5>
                                                                        <p class="mb-0 hp-caption hp-text-color-black-60"
                                                                            style="margin-top: 1px;">By <span
                                                                                class="hp-text-color-black-80">{{ $item['product']->brand->name }}</span>
                                                                        </p>
                                                                    </a>
                                                                </div>

                                                                <div class="col hp-d-flex hp-d-flex-column ms-8 px-0"
                                                                    style="flex: 0 0 70px;">
                                                                    <div class="input-number input-number-sm"
                                                                        style="width: 65px;">
                                                                        <div class="input-number-handler-wrap">


                                                                        </div>

                                                                        <div class="input-number-input-wrap">
                                                                            <input class="input-number-input"
                                                                                type="number" min="1"
                                                                                max="10"
                                                                                value="{{ $item['quantity'] }}">
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="hp-cursor-pointer mt-4 hp-input-description fw-medium text-black-60 text-decoration-underline">
                                                                        ${{ $item['price'] }}/unit</div>
                                                                </div>

                                                                <div class="col ps-0 text-end">
                                                                    <p
                                                                        class="hp-basket-dropdown-list-item-price hp-p1-body mb-0 hp-text-color-black-80 hp-text-color-dark-30 fw-medium">
                                                                        ${{ $item['total'] }}</p>


                                                                </div>
                                                                <div class="col ps-0 text-end" style="margin-left: 0px;">
                                                                    <form
                                                                        action="{{ route('cart_session.increase', $item['product']->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <button type="submit"
                                                                            class="btn btn-link p-0">↑</button>
                                                                    </form>

                                                                </div>
                                                                <div class="col ps-0 text-end">
                                                                    <form
                                                                        action="{{ route('cart_session.decrease', $item['product']->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="btn btn-link p-0">↓</button>
                                                                    </form>

                                                                </div>
                                                                <div class="col ps-0 text-end">
                                                                    <form
                                                                        action="{{ route('cart_session.remove', $item['product']->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="btn btn-link p-0">x</button>
                                                                    </form>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach


                                                <div class="divider mt-4 mb-12"></div>

                                                <div class="row">
                                                    @if ($cartSession_items->isEmpty())
                                                        <div class="col-6 px-8">
                                                            <a href="{{ route('product.shop') }}">
                                                                <button type="button"
                                                                    class="btn btn-text w-100 hp-bg-black-20 hp-text-color-black-100 hp-hover-text-color-primary-1 hp-hover-bg-primary-4">
                                                                    View Shop
                                                                </button>
                                                            </a>
                                                        </div>
                                                        <div class="col-6 px-8">
                                                            <a href="{{ route('cart.show') }}">
                                                                <button type="button"
                                                                    class="btn btn-text hp-text-color-black-0 hp-bg-black-100 hp-hover-bg-primary-1 w-100">
                                                                    View Cart
                                                                </button>
                                                            </a>
                                                        </div>
                                                    @else
                                                        <div class="col-6 px-8">
                                                            <a href="{{ route('cart.show') }}">
                                                                <button type="button"
                                                                    class="btn btn-text w-100 hp-bg-black-20 hp-text-color-black-100 hp-hover-text-color-primary-1 hp-hover-bg-primary-4">
                                                                    View Cart
                                                                </button>
                                                            </a>
                                                        </div>
                                                        <div class="col-6 px-8">
                                                            <a href="{{ route('user.login') }}">
                                                                <button type="button"
                                                                    class="btn btn-text hp-text-color-black-0 hp-bg-black-100 hp-hover-bg-primary-1 w-100">
                                                                    Login
                                                                </button>
                                                            </a>
                                                        </div>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    @endguest

                                    <div class="hover-dropdown-fade w-auto px-0 ms-6 position-relative">
                                        @auth
                                            <div class="hp-cursor-pointer rounded-4 border hp-border-color-dark-80">
                                                <div class="rounded-3 overflow-hidden m-4 d-flex">
                                                    <a href="{{ route('user.profile.information') }}"
                                                        class="avatar-item hp-bg-info-4 d-flex"
                                                        style="width: 32px; height: 32px;">
                                                        <img src="{{ Storage::url($user->image) }}">
                                                    </a>
                                                </div>
                                            </div>


                                            <div class="hp-header-profile-menu dropdown-fade position-absolute pt-18"
                                                style="top: 100%; width: 260px;">
                                                <div class="rounded hp-bg-black-0 hp-bg-dark-100 px-18 py-24">


                                                    <a href="{{ route('user.profile.information') }}"
                                                        class="hp-p1-body fw-medium hp-hover-text-color-primary-2">View
                                                        Profile</a>



                                                    <div class="row">
                                                        @auth
                                                            <form action="{{ route('user.logout') }}" method="post">
                                                                @csrf
                                                                <div class="col-12 mt-24">
                                                                    <a class="hp-p1-body fw-medium"
                                                                        href="{{ route('user.logout') }}"
                                                                        onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                                                                </div>
                                                            </form>
                                                        @else
                                                            <div class="col-12 mt-24">
                                                                <a class="hp-p1-body fw-medium"
                                                                    href="{{ route('user.login') }}">Login</a>
                                                            </div>
                                                        @endguest
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="hp-cursor-pointer rounded-4 border hp-border-color-dark-80">
                                                <div class="rounded-3 overflow-hidden m-12 d-flex">
                                                    <a href="{{ route('user.login') }}" class=""
                                                        style="">Login

                                                    </a>
                                                </div>
                                            </div>
                                        @endguest

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="offcanvas offcanvas-start hp-mobile-sidebar bg-black-20 hp-bg-dark-90" tabindex="-1"
                id="mobileMenu" aria-labelledby="mobileMenuLabel" style="width: 256px;">
                <div class="offcanvas-header justify-content-between align-items-center ms-16 me-8 mt-16 p-0">
                    <div class="w-auto px-0">
                        <div class="hp-header-logo d-flex align-items-center">
                            <a href="index.html" class="position-relative">
                                <div class="hp-header-logo-icon position-absolute bg-black-20 hp-bg-dark-90 rounded-circle border border-black-0 hp-border-color-dark-90 d-flex align-items-center justify-content-center"
                                    style="width: 18px; height: 18px; top: -5px;">
                                    <svg class="hp-fill-color-dark-0" width="12" height="12"
                                        viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
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

                            <a href="https://hypeople-studio.gitbook.io/yoda/change-log" target="_blank"
                                class="d-flex">
                                <span
                                    class="hp-sidebar-hidden hp-caption fw-normal hp-text-color-primary-1">v.3.2</span>
                            </a>
                        </div>
                    </div>

                    <div class="w-auto px-0 hp-sidebar-collapse-button hp-sidebar-hidden" data-bs-dismiss="offcanvas"
                        aria-label="Close">
                        <button type="button" class="btn btn-text btn-icon-only bg-transparent">
                            <i class="ri-close-fill lh-1 hp-text-color-black-80" style="font-size: 24px;"></i>
                        </button>
                    </div>
                </div>


            </div>

            @yield('content')

        </div>
    </main>

    <div class="hp-theme-customizer">
        <div class="hp-theme-customizer-button">
            <div class="hp-theme-customizer-button-bg">
                <svg width="48" height="121" viewBox="0 0 48 121" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M38.6313 21.7613C46.5046 11.6029 47.6987 2.40985 48 0V61H0C1.03187 53.7789 1.67112 44.3597 13.2122 37.7607C22.0261 32.721 32.4115 29.7862 38.6313 21.7613Z"
                        fill="white"></path>
                    <path
                        d="M38.6058 99.5632C46.502 109.568 47.6984 118.627 48 121V61H0C1.03532 68.1265 1.67539 77.4295 13.3283 83.9234C22.1048 88.8143 32.3812 91.6764 38.6058 99.5632Z"
                        fill="white"></path>
                </svg>
            </div>

            <div class="hp-theme-customizer-button-icon">
                <span>
                    <span></span>
                    <span></span>
                    <span></span>
                </span>

                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M14.19 0H5.81C2.17 0 0 2.17 0 5.81V14.18C0 17.83 2.17 20 5.81 20H14.18C17.82 20 19.99 17.83 19.99 14.19V5.81C20 2.17 17.83 0 14.19 0ZM5.67 3.5C5.67 3.09 6.01 2.75 6.42 2.75C6.83 2.75 7.17 3.09 7.17 3.5V7.4C7.17 7.81 6.83 8.15 6.42 8.15C6.01 8.15 5.67 7.81 5.67 7.4V3.5ZM7.52282 14.4313C7.31938 14.5216 7.17 14.7132 7.17 14.9358V16.5C7.17 16.91 6.83 17.25 6.42 17.25C6.01 17.25 5.67 16.91 5.67 16.5V14.9358C5.67 14.7132 5.5206 14.5216 5.31723 14.4311C4.36275 14.0064 3.7 13.058 3.7 11.95C3.7 10.45 4.92 9.22 6.42 9.22C7.92 9.22 9.15 10.44 9.15 11.95C9.15 13.0582 8.47913 14.0066 7.52282 14.4313ZM14.33 16.5C14.33 16.91 13.99 17.25 13.58 17.25C13.17 17.25 12.83 16.91 12.83 16.5V12.6C12.83 12.19 13.17 11.85 13.58 11.85C13.99 11.85 14.33 12.19 14.33 12.6V16.5ZM13.58 10.77C12.08 10.77 10.85 9.55 10.85 8.04C10.85 6.93185 11.5209 5.98342 12.4772 5.55873C12.6806 5.46839 12.83 5.27681 12.83 5.05421V3.5C12.83 3.09 13.17 2.75 13.58 2.75C13.99 2.75 14.33 3.09 14.33 3.5V5.06421C14.33 5.28681 14.4794 5.47835 14.6828 5.56885C15.6372 5.9936 16.3 6.94195 16.3 8.05C16.3 9.55 15.08 10.77 13.58 10.77Z"
                        fill="#0010F7"></path>
                </svg>
            </div>
        </div>

        <div class="hp-theme-customizer-container bg-black-0 hp-bg-dark-90">
            <div class="hp-theme-customizer-container-header bg-black-10 hp-bg-dark-85 py-16 px-24">
                <div class="d-flex justify-content-between">
                    <div>
                        <span class="h5 mb-0 d-block text-black-80 hp-text-color-dark-0">Customise your YODA</span>
                        <span class="hp-caption fw-medium d-block text-black-60">Preview in Real Time</span>
                    </div>

                    <div>
                        <button type="button" class="btn btn-text hp-bg-dark-85">
                            <i class="ri-close-fill text-black-80 hp-text-color-dark-0" style="font-size: 16px;"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="hp-theme-customizer-container-body pb-md-96 pb-mb-0 py-24 px-24">
                <div class="row mx-0 hp-theme-customizer-container-body-item">
                    <div class="col-12 px-0 mb-16">
                        <span class="d-block hp-caption text-black-60">THEME</span>
                        <span class="d-block h5 mb-0 text-black-100 hp-text-color-dark-0">Dark &amp; Light</span>
                    </div>

                    <div class="col-12 px-0">
                        <div class="row g-24">
                            <div class="col-12 col-md-6">
                                <div class="hp-theme-customizer-container-body-item-svg active" data-theme="light">
                                    <svg width="244" height="150" viewBox="0 0 244 150" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="1" y="1" width="242" height="148" fill="white"></rect>
                                        <rect width="37" height="138" transform="translate(6 6)"
                                            fill="#DFE6E9"></rect>
                                        <path
                                            d="M33.7528 18.2807C32.9591 18.059 32.6126 18.0257 32.6126 18.0257C32.4785 18.0036 31.9531 17.9149 31.2377 17.8928C30.6676 17.8041 30.0751 17.6489 29.6839 17.3275C29.2591 16.9728 28.5437 16.3632 28.2642 16.2192C28.2531 16.2081 28.2419 16.2081 28.2307 16.2081C27.1576 15.4433 25.8497 15 24.4413 15C22.8316 15 21.3672 15.5653 20.227 16.5073C19.9029 16.7512 19.5116 17.0837 19.2434 17.3164C18.8521 17.6489 18.2597 17.793 17.6896 17.8817C16.9742 17.9038 16.4488 18.0036 16.3146 18.0147C16.3146 18.0147 16.0017 18.0479 15.2639 18.2474C14.9397 18.3361 14.9062 18.7794 15.208 18.9235C15.208 18.9235 15.2192 18.9235 15.2192 18.9346C15.6998 19.1673 16.1581 19.5442 16.7282 20.4419C17.4101 21.5059 17.5331 22.182 17.969 23.2017C18.6733 26.1277 21.3002 28.3 24.4301 28.3C27.4482 28.3 29.9969 26.2828 30.8129 23.5231C31.3718 22.315 31.4501 21.6167 32.199 20.4419C32.7691 19.5442 33.2274 19.1673 33.7081 18.9346C33.7416 18.9235 33.7751 18.9013 33.8087 18.8902C34.0881 18.7683 34.0546 18.3582 33.7528 18.2807ZM21.8814 23.4012C20.9872 23.1573 20.4283 22.3372 20.4283 22.3372C20.4283 22.3372 21.3896 21.6389 22.2839 21.8827C23.1781 22.1266 23.67 23.2127 23.67 23.2127C23.67 23.2127 22.7757 23.645 21.8814 23.4012ZM27.2023 23.4012C26.308 23.645 25.4138 23.2017 25.4138 23.2017C25.4138 23.2017 25.8944 22.1155 26.7999 21.8717C27.6942 21.6278 28.6555 22.3261 28.6555 22.3261C28.6555 22.3261 28.0966 23.1684 27.2023 23.4012Z"
                                            fill="#B2BEC3"></path>
                                        <rect width="191" height="13" transform="translate(47 6)"
                                            fill="#DFE6E9"></rect>
                                        <rect width="191" height="122" transform="translate(47 22)"
                                            fill="#DFE6E9"></rect>
                                        <rect x="1" y="1" width="242" height="148" stroke="white"
                                            stroke-width="2"></rect>
                                    </svg>

                                    <div class="hp-theme-customizer-container-body-item-svg-check">
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="16.9987" cy="17.0007" r="14.1667" fill="white">
                                            </circle>
                                            <path
                                                d="M16.9987 2.83398C9.1872 2.83398 2.83203 9.18915 2.83203 17.0007C2.83203 24.8122 9.1872 31.1673 16.9987 31.1673C24.8102 31.1673 31.1654 24.8122 31.1654 17.0007C31.1654 9.18915 24.8102 2.83398 16.9987 2.83398ZM16.9987 28.334C10.7498 28.334 5.66536 23.2496 5.66536 17.0007C5.66536 10.7517 10.7498 5.66732 16.9987 5.66732C23.2476 5.66732 28.332 10.7517 28.332 17.0007C28.332 23.2496 23.2476 28.334 16.9987 28.334Z"
                                                fill="#2D3436"></path>
                                            <path
                                                d="M14.1674 19.2479L10.9105 15.9966L8.91016 18.0026L14.1702 23.2514L23.6704 13.7512L21.6672 11.748L14.1674 19.2479Z"
                                                fill="#2D3436"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="hp-theme-customizer-container-body-item-svg" data-theme="dark">
                                    <svg width="244" height="150" viewBox="0 0 244 150" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="244" height="150" fill="#111314"></rect>
                                        <rect width="37" height="138" transform="translate(6 6)"
                                            fill="#2D3436"></rect>
                                        <path
                                            d="M33.7528 18.2807C32.9591 18.059 32.6126 18.0257 32.6126 18.0257C32.4785 18.0036 31.9531 17.9149 31.2377 17.8928C30.6676 17.8041 30.0751 17.6489 29.6839 17.3275C29.2591 16.9728 28.5437 16.3633 28.2642 16.2192C28.2531 16.2081 28.2419 16.2081 28.2307 16.2081C27.1576 15.4433 25.8497 15 24.4413 15C22.8316 15 21.3672 15.5653 20.227 16.5073C19.9029 16.7512 19.5116 17.0837 19.2434 17.3164C18.8521 17.6489 18.2597 17.793 17.6896 17.8817C16.9742 17.9038 16.4488 18.0036 16.3146 18.0147C16.3146 18.0147 16.0017 18.0479 15.2639 18.2474C14.9397 18.3361 14.9062 18.7794 15.208 18.9235C15.208 18.9235 15.2192 18.9235 15.2192 18.9346C15.6998 19.1673 16.1581 19.5442 16.7282 20.4419C17.4101 21.5059 17.5331 22.182 17.969 23.2017C18.6733 26.1277 21.3002 28.3 24.4301 28.3C27.4482 28.3 29.9969 26.2828 30.8129 23.5231C31.3718 22.315 31.4501 21.6167 32.199 20.4419C32.7691 19.5442 33.2274 19.1673 33.7081 18.9346C33.7416 18.9235 33.7751 18.9013 33.8087 18.8902C34.0881 18.7683 34.0546 18.3582 33.7528 18.2807ZM21.8814 23.4012C20.9872 23.1573 20.4283 22.3372 20.4283 22.3372C20.4283 22.3372 21.3896 21.6389 22.2839 21.8827C23.1781 22.1266 23.67 23.2127 23.67 23.2127C23.67 23.2127 22.7757 23.645 21.8814 23.4012ZM27.2023 23.4012C26.308 23.645 25.4138 23.2017 25.4138 23.2017C25.4138 23.2017 25.8944 22.1155 26.7999 21.8717C27.6942 21.6278 28.6555 22.3261 28.6555 22.3261C28.6555 22.3261 28.0966 23.1684 27.2023 23.4012Z"
                                            fill="#F7FAFC"></path>
                                        <rect width="191" height="13" transform="translate(47 6)"
                                            fill="#2D3436"></rect>
                                        <rect width="191" height="122" transform="translate(47 22)"
                                            fill="#2D3436"></rect>
                                        <rect width="244" height="150" stroke="#DFE6E9"></rect>
                                    </svg>

                                    <div class="hp-theme-customizer-container-body-item-svg-check">
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="16.9987" cy="17.0007" r="14.1667" fill="white">
                                            </circle>
                                            <path
                                                d="M16.9987 2.83398C9.1872 2.83398 2.83203 9.18915 2.83203 17.0007C2.83203 24.8122 9.1872 31.1673 16.9987 31.1673C24.8102 31.1673 31.1654 24.8122 31.1654 17.0007C31.1654 9.18915 24.8102 2.83398 16.9987 2.83398ZM16.9987 28.334C10.7498 28.334 5.66536 23.2496 5.66536 17.0007C5.66536 10.7517 10.7498 5.66732 16.9987 5.66732C23.2476 5.66732 28.332 10.7517 28.332 17.0007C28.332 23.2496 23.2476 28.334 16.9987 28.334Z"
                                                fill="#2D3436"></path>
                                            <path
                                                d="M14.1674 19.2479L10.9105 15.9966L8.91016 18.0026L14.1702 23.2514L23.6704 13.7512L21.6672 11.748L14.1674 19.2479Z"
                                                fill="#2D3436"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mx-0 hp-theme-customizer-container-body-item">
                    <div class="col-12 mb-16 px-0">
                        <span class="d-block hp-caption text-black-60">CONTENT WIDTH</span>
                        <span class="d-block h5 mb-0 text-black-100 hp-text-color-dark-0">FULL Width &amp;
                            Boxed</span>
                    </div>

                    <div class="col-12 px-0">
                        <div class="row g-24">
                            <div class="col-12 col-md-6">
                                <div class="hp-theme-customizer-container-body-item-svg active" data-content="full">
                                    <svg width="244" height="150" viewBox="0 0 244 150" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="1" y="1" width="242" height="148" fill="white"></rect>
                                        <rect width="37" height="138" transform="translate(6 6)"
                                            fill="#DFE6E9"></rect>
                                        <path
                                            d="M33.7528 18.2807C32.9591 18.059 32.6126 18.0257 32.6126 18.0257C32.4785 18.0036 31.9531 17.9149 31.2377 17.8928C30.6676 17.8041 30.0751 17.6489 29.6839 17.3275C29.2591 16.9728 28.5437 16.3632 28.2642 16.2192C28.2531 16.2081 28.2419 16.2081 28.2307 16.2081C27.1576 15.4433 25.8497 15 24.4413 15C22.8316 15 21.3672 15.5653 20.227 16.5073C19.9029 16.7512 19.5116 17.0837 19.2434 17.3164C18.8521 17.6489 18.2597 17.793 17.6896 17.8817C16.9742 17.9038 16.4488 18.0036 16.3146 18.0147C16.3146 18.0147 16.0017 18.0479 15.2639 18.2474C14.9397 18.3361 14.9062 18.7794 15.208 18.9235C15.208 18.9235 15.2192 18.9235 15.2192 18.9346C15.6998 19.1673 16.1581 19.5442 16.7282 20.4419C17.4101 21.5059 17.5331 22.182 17.969 23.2017C18.6733 26.1277 21.3002 28.3 24.4301 28.3C27.4482 28.3 29.9969 26.2828 30.8129 23.5231C31.3718 22.315 31.4501 21.6167 32.199 20.4419C32.7691 19.5442 33.2274 19.1673 33.7081 18.9346C33.7416 18.9235 33.7751 18.9013 33.8087 18.8902C34.0881 18.7683 34.0546 18.3582 33.7528 18.2807ZM21.8814 23.4012C20.9872 23.1573 20.4283 22.3372 20.4283 22.3372C20.4283 22.3372 21.3896 21.6389 22.2839 21.8827C23.1781 22.1266 23.67 23.2127 23.67 23.2127C23.67 23.2127 22.7757 23.645 21.8814 23.4012ZM27.2023 23.4012C26.308 23.645 25.4138 23.2017 25.4138 23.2017C25.4138 23.2017 25.8944 22.1155 26.7999 21.8717C27.6942 21.6278 28.6555 22.3261 28.6555 22.3261C28.6555 22.3261 28.0966 23.1684 27.2023 23.4012Z"
                                            fill="#B2BEC3"></path>
                                        <rect width="191" height="13" transform="translate(47 6)"
                                            fill="#DFE6E9"></rect>
                                        <rect width="191" height="122" transform="translate(47 22)"
                                            fill="#DFE6E9"></rect>
                                        <rect x="1" y="1" width="242" height="148" stroke="white"
                                            stroke-width="2"></rect>
                                    </svg>

                                    <div class="hp-theme-customizer-container-body-item-svg-check">
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="16.9987" cy="17.0007" r="14.1667" fill="white">
                                            </circle>
                                            <path
                                                d="M16.9987 2.83398C9.1872 2.83398 2.83203 9.18915 2.83203 17.0007C2.83203 24.8122 9.1872 31.1673 16.9987 31.1673C24.8102 31.1673 31.1654 24.8122 31.1654 17.0007C31.1654 9.18915 24.8102 2.83398 16.9987 2.83398ZM16.9987 28.334C10.7498 28.334 5.66536 23.2496 5.66536 17.0007C5.66536 10.7517 10.7498 5.66732 16.9987 5.66732C23.2476 5.66732 28.332 10.7517 28.332 17.0007C28.332 23.2496 23.2476 28.334 16.9987 28.334Z"
                                                fill="#2D3436"></path>
                                            <path
                                                d="M14.1674 19.2479L10.9105 15.9966L8.91016 18.0026L14.1702 23.2514L23.6704 13.7512L21.6672 11.748L14.1674 19.2479Z"
                                                fill="#2D3436"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="hp-theme-customizer-container-body-item-svg" data-content="boxed">
                                    <svg width="244" height="150" viewBox="0 0 244 150" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="244" height="150" fill="white"></rect>
                                        <rect width="37" height="138" transform="translate(6 6)"
                                            fill="#DFE6E9"></rect>
                                        <path
                                            d="M33.7528 18.2807C32.9591 18.059 32.6126 18.0257 32.6126 18.0257C32.4785 18.0036 31.9531 17.9149 31.2377 17.8928C30.6676 17.8041 30.0751 17.6489 29.6839 17.3275C29.2591 16.9728 28.5437 16.3633 28.2642 16.2192C28.2531 16.2081 28.2419 16.2081 28.2307 16.2081C27.1576 15.4433 25.8497 15 24.4413 15C22.8316 15 21.3672 15.5653 20.227 16.5073C19.9029 16.7512 19.5116 17.0837 19.2434 17.3164C18.8521 17.6489 18.2597 17.793 17.6896 17.8817C16.9742 17.9038 16.4488 18.0036 16.3146 18.0147C16.3146 18.0147 16.0017 18.0479 15.2639 18.2474C14.9397 18.3361 14.9062 18.7794 15.208 18.9235C15.208 18.9235 15.2192 18.9235 15.2192 18.9346C15.6998 19.1673 16.1581 19.5442 16.7282 20.4419C17.4101 21.5059 17.5331 22.182 17.969 23.2017C18.6733 26.1277 21.3002 28.3 24.4301 28.3C27.4482 28.3 29.9969 26.2828 30.8129 23.5231C31.3718 22.315 31.4501 21.6167 32.199 20.4419C32.7691 19.5442 33.2274 19.1673 33.7081 18.9346C33.7416 18.9235 33.7751 18.9013 33.8087 18.8902C34.0881 18.7683 34.0546 18.3582 33.7528 18.2807ZM21.8814 23.4012C20.9872 23.1573 20.4283 22.3372 20.4283 22.3372C20.4283 22.3372 21.3896 21.6389 22.2839 21.8827C23.1781 22.1266 23.67 23.2127 23.67 23.2127C23.67 23.2127 22.7757 23.645 21.8814 23.4012ZM27.2023 23.4012C26.308 23.645 25.4138 23.2017 25.4138 23.2017C25.4138 23.2017 25.8944 22.1155 26.7999 21.8717C27.6942 21.6278 28.6555 22.3261 28.6555 22.3261C28.6555 22.3261 28.0966 23.1684 27.2023 23.4012Z"
                                            fill="#B2BEC3"></path>
                                        <g clip-path="url(#clip0_5050:104461)">
                                            <rect width="133" height="13" transform="translate(76 6)"
                                                fill="#DFE6E9"></rect>
                                        </g>
                                        <rect width="133" height="122" transform="translate(76 22)"
                                            fill="#DFE6E9"></rect>
                                        <rect width="244" height="150" stroke="#DFE6E9"></rect>
                                        <defs>
                                            <clipPath id="clip0_5050:104461">
                                                <rect width="133" height="13" fill="white"
                                                    transform="translate(76 6)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <div class="hp-theme-customizer-container-body-item-svg-check">
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="16.9987" cy="17.0007" r="14.1667" fill="white">
                                            </circle>
                                            <path
                                                d="M16.9987 2.83398C9.1872 2.83398 2.83203 9.18915 2.83203 17.0007C2.83203 24.8122 9.1872 31.1673 16.9987 31.1673C24.8102 31.1673 31.1654 24.8122 31.1654 17.0007C31.1654 9.18915 24.8102 2.83398 16.9987 2.83398ZM16.9987 28.334C10.7498 28.334 5.66536 23.2496 5.66536 17.0007C5.66536 10.7517 10.7498 5.66732 16.9987 5.66732C23.2476 5.66732 28.332 10.7517 28.332 17.0007C28.332 23.2496 23.2476 28.334 16.9987 28.334Z"
                                                fill="#2D3436"></path>
                                            <path
                                                d="M14.1674 19.2479L10.9105 15.9966L8.91016 18.0026L14.1702 23.2514L23.6704 13.7512L21.6672 11.748L14.1674 19.2479Z"
                                                fill="#2D3436"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="scroll-to-top">
        <button type="button" class="btn btn-primary btn-icon-only rounded-circle hp-primary-shadow">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="16px"
                width="16px" xmlns="http://www.w3.org/2000/svg">
                <g>
                    <path fill="none" d="M0 0h24v24H0z"></path>
                    <path d="M13 7.828V20h-2V7.828l-5.364 5.364-1.414-1.414L12 4l7.778 7.778-1.414 1.414L13 7.828z">
                    </path>
                </g>
            </svg>
        </button>
    </div>

    <!-- Plugin -->
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

    <!-- Charts -->
    <script src="{{ asset('app-assets/js/plugin/apexcharts.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/charts/apex-chart.js') }}"></script>

    <!-- Cards -->
    <script src="{{ asset('app-assets/js/cards/card-analytic.js') }}"></script>
    <script src="{{ asset('app-assets/js/cards/card-advance.js') }}"></script>
    <script src="{{ asset('app-assets/js/cards/card-statistic.js') }}"></script>

    <!-- Horizontal -->
    <script src="{{ asset('app-assets/js/layouts/horizontal-menu.js') }}"></script>

    <!-- Custom -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
