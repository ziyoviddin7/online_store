@extends('layouts.main')

@section('content')
    <div class="hp-main-layout-content">



        <div class="row mb-32 gy-32">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            @foreach ($product->tags as $tag)
                                <span style="font-size: 20px; z-index: 2"
                                    class="badge bg-primary-4 hp-bg-dark-primary text-primary border-none position-absolute top-0 left-0 w-auto m-16 my-sm-32 mx-sm-18 py-8 px-16 fw-medium">{{ $tag->name }}</span>
                            @endforeach

                            <div class="col-12 col-lg-6 hp-ecommerce-app-detail-slider mt-24 mt-md-0 mb-64 mb-lg-0">
                                <div class="swiper hp-ecommerce-app-detail-slider-1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <img src="{{ Storage::url($product->image) }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <h2 class="mb-8">{{ $product->name }}</h2>
                                <h5 class="mb-8">{{ $product->description }}</h5>


                                <span class="hp-caption d-block text-black-60">
                                    By brand:
                                    <span
                                        class="ms-4 text-black-80 hp-text-color-dark-30">{{ $product->brand->name }}</span>
                                </span>

                                <div class="row align-items-center justify-content-between mt-24 pe-42">
                                    <div class="col-12 col-md-6">
                                        <div class="row mx-0 align-items-center">

                                            <div class="col w-auto p-0">
                                                <div class="row mx-0 align-items-end h-100">
                                                    <span class="w-auto px-0 h2 d-inline-block mb-0 me-4">
                                                        ${{ $product->price }}<sup style="top: -6px;"></sup>
                                                    </span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col hp-flex-none w-auto mt-24 mt-sm-0">
                                        <p>Category: {{ $product->category->name }}</p>

                                    </div>
                                </div>



                                <div class="divider"></div>

                                <div class="row g-24">
                                    <div class="col-12">
                                        <div class="row g-8">
                                            <div class="col hp-flex-none w-auto">
                                                <div class="input-number">
                                                    <div class="input-number-handler-wrap">
                                                        <span class="input-number-handler input-number-handler-up">
                                                            <span class="input-number-handler-up-inner">
                                                                <svg viewBox="64 64 896 896" width="1em" height="1em"
                                                                    fill="currentColor">
                                                                    <path
                                                                        d="M890.5 755.3L537.9 269.2c-12.8-17.6-39-17.6-51.7 0L133.5 755.3A8 8 0 00140 768h75c5.1 0 9.9-2.5 12.9-6.6L512 369.8l284.1 391.6c3 4.1 7.8 6.6 12.9 6.6h75c6.5 0 10.3-7.4 6.5-12.7z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </span>

                                                        <span
                                                            class="input-number-handler input-number-handler-down input-number-handler-down-disabled">
                                                            <span class="input-number-handler-down-inner">
                                                                <svg viewBox="64 64 896 896" width="1em" height="1em"
                                                                    fill="currentColor">
                                                                    <path
                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </div>

                                                    <div class="input-number-input-wrap">
                                                        <input class="input-number-input" type="number" min="1"
                                                            max="10" value="1">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col hp-flex-none w-auto">
                                                <a href="app-ecommerce-checkout.html">
                                                    <button class="btn btn-primary">
                                                        <i class="ri-shopping-bag-line remix-icon"></i>
                                                        <span>To Cart</span>
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="col hp-flex-none w-auto">
                                                <a href="app-ecommerce-checkout.html">
                                                    <button class="btn btn-primary">
                                                        <i class="ri-heart-3-line remix-icon"></i>
                                                        <span>To Favorites</span>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="row g-8">
                                            <div class="col-12 d-flex align-items-center">
                                                <i class="ri-truck-line text-primary"></i>
                                                <span
                                                    class="hp-caption text-black-80 hp-text-color-dark-30 fw-normal text-decoration-underline ms-4">Free
                                                    Shipping Worldwide</span>
                                            </div>

                                            <div class="col-12 d-flex align-items-center">
                                                <i class="ri-checkbox-circle-line text-primary"></i>
                                                <span
                                                    class="hp-caption text-black-80 hp-text-color-dark-30 fw-normal text-decoration-underline ms-4">Available
                                                    in stocks</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="divider"></div>

                                <div class="row mx-0 g-24">
                                    <div class="col-12 col-md-5">
                                        <div class="row align-items-center">
                                            <div class="col hp-flex-none rounded-circle bg-primary-4 d-flex align-items-center justify-content-center p-0 me-8"
                                                style="width: 36px; height: 36px;">
                                                <i class="ri-shield-line text-primary h3 mb-0 lh-normal"></i>
                                            </div>

                                            <div class="col px-0">
                                                <span
                                                    class="d-block hp-p1-body fw-medium text-black-100 hp-text-color-dark-0">1
                                                    Year Warranty</span>
                                                <span
                                                    class="d-block hp-input-description fw-normal text-black-80 hp-text-color-dark-30">Lorem
                                                    Ipsum Dolor Sıt Amet</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-5">
                                        <div class="row align-items-center">
                                            <div class="col hp-flex-none rounded-circle bg-primary-4 d-flex align-items-center justify-content-center p-0 me-8"
                                                style="width: 36px; height: 36px;">
                                                <i class="ri-time-line text-primary h3 mb-0 lh-normal"></i>
                                            </div>

                                            <div class="col px-0">
                                                <span
                                                    class="d-block hp-p1-body fw-medium text-black-100 hp-text-color-dark-0">14
                                                    Days Replacement</span>
                                                <span
                                                    class="d-block hp-input-description fw-normal text-black-80 hp-text-color-dark-30">Lorem
                                                    Ipsum Dolor Sıt Amet</span>
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
