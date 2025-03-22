@extends('layouts.main')

@section('content')

<div class="hp-main-layout-content">

    <div class="row mb-32 gy-32">
        <div class="col-12">
            <div class="row justify-content-between gy-32">
                <div class="col hp-flex-none w-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>

                            <li class="breadcrumb-item">
                                <a href="javascript:;">Applications</a>
                            </li>

                            <li class="breadcrumb-item">
                                <a href="javascript:;">E-Commerce</a>
                            </li>

                            <li class="breadcrumb-item active">
                                Wishlist
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="row g-32">
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="card hp-card-6 hp-eCommerceCardOne hp-eCommerceCardOne-wishlist">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row mx-0 align-items-start justify-content-between">
                                        <span class="badge bg-primary-4 hp-bg-dark-primary text-primary border-none w-auto py-8 px-16 fw-medium">Featured</span>

                                        <div class="d-flex w-auto lh-1 hp-wish-button hp-cursor-pointer text-danger bg-danger-4 hp-bg-color-dark-danger rounded-circle remix-icon p-8">
                                            <i class="ri-heart-fill"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="text-center mb-24">
                                        <a href="app-ecommerce-product-detail.html" class="d-block">
                                            <img src="../../../app-assets/img/product/watch-1.png" alt="Smart Watches 3" height="200">
                                        </a>
                                    </div>

                                    <div class="row justify-content-between">
                                        <div class="col w-auto">
                                            <ul class="row g-6">
                                                <li class="col hp-flex-none w-auto">
                                                    <i class="ri-star-fill text-warning" style="font-size: 15px;"></i>
                                                </li>
                                                <li class="col hp-flex-none w-auto">
                                                    <i class="ri-star-fill text-warning" style="font-size: 15px;"></i>
                                                </li>
                                                <li class="col hp-flex-none w-auto">
                                                    <i class="ri-star-fill text-warning" style="font-size: 15px;"></i>
                                                </li>
                                                <li class="col hp-flex-none w-auto">
                                                    <i class="ri-star-fill text-warning" style="font-size: 15px;"></i>
                                                </li>
                                                <li class="col hp-flex-none w-auto">
                                                    <i class="ri-star-fill text-black-40 hp-text-color-dark-70" style="font-size: 15px;"></i>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col w-auto">
                                            <div class="row align-items-center text-end">
                                                <p class="mb-0 text-primary fw-medium">$59.00</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 mb-16 mt-16">
                                        <p class="mb-4 text-black-100 hp-text-color-dark-0 hp-p1-body fw-medium">Smart Watches 3</p>
                                        <p class="mb-0 hp-caption fw-normal text-black-80 hp-text-color-dark-30">SWR50</p>
                                    </div>

                                    <div class="row g-8">
                                        <div class="col-6">
                                            <div class="input-number w-100">
                                                <div class="input-number-handler-wrap">
                                                    <span class="input-number-handler input-number-handler-up">
                                                        <span class="input-number-handler-up-inner">
                                                            <svg viewBox="64 64 896 896" width="1em" height="1em" fill="currentColor">
                                                                <path d="M890.5 755.3L537.9 269.2c-12.8-17.6-39-17.6-51.7 0L133.5 755.3A8 8 0 00140 768h75c5.1 0 9.9-2.5 12.9-6.6L512 369.8l284.1 391.6c3 4.1 7.8 6.6 12.9 6.6h75c6.5 0 10.3-7.4 6.5-12.7z"></path>
                                                            </svg>
                                                        </span>
                                                    </span>

                                                    <span class="input-number-handler input-number-handler-down input-number-handler-down-disabled">
                                                        <span class="input-number-handler-down-inner">
                                                            <svg viewBox="64 64 896 896" width="1em" height="1em" fill="currentColor">
                                                                <path d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </div>

                                                <div class="input-number-input-wrap">
                                                    <input class="input-number-input" type="number" min="1" max="10" value="1">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <a href="app-ecommerce-checkout.html">
                                                <button class="btn btn-primary px-12 w-100">
                                                    <i class="ri-shopping-bag-line remix-icon"></i>
                                                    <span>Go to Cart</span>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4">
                    <div class="card hp-card-6 hp-eCommerceCardOne hp-eCommerceCardOne-wishlist">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row mx-0 align-items-start justify-content-between">
                                        <span class="badge bg-danger-4 hp-bg-dark-danger text-danger border-none w-auto py-8 px-16 fw-medium">On Sale</span>

                                        <div class="d-flex w-auto lh-1 hp-wish-button hp-cursor-pointer text-danger bg-danger-4 hp-bg-color-dark-danger rounded-circle remix-icon p-8">
                                            <i class="ri-heart-fill"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="text-center mb-24">
                                        <a href="app-ecommerce-product-detail.html" class="d-block">
                                            <img src="../../../app-assets/img/product/action-cam-1.png" alt="4K Action Cam" height="200">
                                        </a>
                                    </div>

                                    <div class="row justify-content-between">
                                        <div class="col w-auto">
                                            <ul class="row g-6">
                                                <li class="col hp-flex-none w-auto">
                                                    <i class="ri-star-fill text-warning" style="font-size: 15px;"></i>
                                                </li>
                                                <li class="col hp-flex-none w-auto">
                                                    <i class="ri-star-fill text-warning" style="font-size: 15px;"></i>
                                                </li>
                                                <li class="col hp-flex-none w-auto">
                                                    <i class="ri-star-fill text-warning" style="font-size: 15px;"></i>
                                                </li>
                                                <li class="col hp-flex-none w-auto">
                                                    <i class="ri-star-fill text-warning" style="font-size: 15px;"></i>
                                                </li>
                                                <li class="col hp-flex-none w-auto">
                                                    <i class="ri-star-fill text-black-40 hp-text-color-dark-70" style="font-size: 15px;"></i>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col w-auto">
                                            <div class="d-flex align-items-center justify-content-end">
                                                <p class="w-auto px-0 mb-0 me-4 text-black-60 text-decoration-line-through hp-input-description">$59.00</p>
                                                <p class="w-auto px-0 mb-0 text-primary fw-medium">$49.00</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 mb-16 mt-16">
                                        <p class="mb-4 text-black-100 hp-text-color-dark-0 hp-p1-body fw-medium">4K Action Cam</p>
                                        <p class="mb-0 hp-caption fw-normal text-black-80 hp-text-color-dark-30">Wi-Fi & GPS</p>
                                    </div>

                                    <div class="row g-8">
                                        <div class="col-6">
                                            <button type="button" class="btn w-100 text-black-60 hp-hover-text-color-primary-1 hp-hover-text-color-dark-primary-2">
                                                <span>Check Detail</span>
                                            </button>
                                        </div>

                                        <div class="col-6">
                                            <a href="app-ecommerce-checkout.html">
                                                <button class="btn btn-primary px-12 w-100">
                                                    <i class="ri-shopping-bag-line remix-icon"></i>
                                                    <span>Go to Cart</span>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection