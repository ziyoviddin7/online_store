@extends('layouts.main')

@section('content')
    <div class="hp-main-layout-content">

        <div class="row mb-32 gy-32">
            <div class="col-12">
                <div class="hp-bg-black-bg py-32 py-sm-64 px-24 px-sm-48 px-md-80 position-relative overflow-hidden hp-page-content"
                    style="border-radius: 32px;">
                    <svg width="358" height="336" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="position-absolute hp-rtl-scale-x-n1" style="bottom: 0px; right: 0px;">
                        <path
                            d="M730.404 135.471 369.675-6.641l88.802 164.001-243.179-98.8 246.364 263.281-329.128-126.619 114.698 166.726-241.68-62.446"
                            stroke="url(#a)" stroke-width="40" stroke-linejoin="bevel"></path>
                        <defs>
                            <linearGradient id="a" x1="315.467" y1="6.875" x2="397.957" y2="337.724"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#fff"></stop>
                                <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                            </linearGradient>
                        </defs>
                    </svg>

                    <div class="row">
                        <div class="col-sm-6 col-12">
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="mb-0 hp-text-color-black-0">Home</h1>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row g-32">
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row g-16">
                                    <div class="col-6 hp-flex-none w-auto">
                                        <div
                                            class="avatar-item d-flex align-items-center justify-content-center avatar-lg bg-primary-4 hp-bg-color-dark-primary rounded-circle">
                                            <i class="iconly-Light-People text-primary hp-text-color-dark-primary-2"
                                                style="font-size: 24px;"></i>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <h3 class="mb-4 mt-8">243<span
                                                class="hp-badge-text ms-8 text-primary hp-text-color-dark-primary-2">+3%</span>
                                        </h3>
                                        <p class="hp-p1-body mb-0 text-black-80 hp-text-color-dark-30">New Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row g-16">
                                    <div class="col-6 hp-flex-none w-auto">
                                        <div
                                            class="avatar-item d-flex align-items-center justify-content-center avatar-lg bg-secondary-4 hp-bg-color-dark-secondary rounded-circle">
                                            <i class="iconly-Light-Buy text-secondary" style="font-size: 24px;"></i>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <h3 class="mb-4 mt-8">1,243<span
                                                class="hp-badge-text ms-8 text-secondary">+4%</span></h3>
                                        <p class="hp-p1-body mb-0 text-black-80 hp-text-color-dark-30">New Orders</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row g-16">
                                    <div class="col-6 hp-flex-none w-auto">
                                        <div
                                            class="avatar-item d-flex align-items-center justify-content-center avatar-lg bg-warning-4 hp-bg-color-dark-warning rounded-circle">
                                            <i class="iconly-Light-Ticket text-warning" style="font-size: 24px;"></i>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <h3 class="mb-4 mt-8">$ 323<span
                                                class="hp-badge-text ms-8 text-warning">-1.4%</span></h3>
                                        <p class="hp-p1-body mb-0 text-black-80 hp-text-color-dark-30">Average Sale</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row g-16">
                                    <div class="col-6 hp-flex-none w-auto">
                                        <div
                                            class="avatar-item d-flex align-items-center justify-content-center avatar-lg bg-danger-4 hp-bg-color-dark-danger rounded-circle">
                                            <i class="iconly-Light-Discount text-danger" style="font-size: 24px;"></i>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <h3 class="mb-4 mt-8">$ 1,32<span class="hp-badge-text ms-8 text-danger">+3%</span>
                                        </h3>
                                        <p class="hp-p1-body mb-0 text-black-80 hp-text-color-dark-30">Gross Profit</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @foreach ($products->take(3) as $product)
                        <div class="col-12 col-md-4">
                            <div class="hp-card-6 hp-eCommerceCardOne">
                                <div
                                    class="rounded overflow-hidden border border-black-40 hp-border-color-dark-80 bg-black-0 hp-bg-color-dark-100 h-100">
                                    <a href="{{ route('product.detail', $product->id) }}"
                                        class="text-center bg-black-10 hp-bg-color-dark-80 hp-card-2 d-flex align-items-center justify-content-center">
                                        <img src="{{ Storage::url($product->image) }}"
                                            alt="Rales Wireless Earbuds Bluetooth 5.0">
                                    </a>

                                    <div class="p-24">
                                        <div class="mb-16 mt-8">
                                            <h3 class="mb-4">${{ $product->price }}</h3>
                                        </div>

                                        <div class="mb-8">
                                            <a href="{{ route('product.detail', $product->id) }}"
                                                class="mb-4 text-black-100 hp-text-color-dark-0 hp-p1-body">{{ $product->name }}</a>
                                            <p class="mb-0 hp-caption text-black-60 hp-text-color-dark-50">By
                                                {{ $product->brand->name }}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    @foreach ($products->skip(3)->take(3) as $product)
                        <div class="col-12 col-sm-6 col-xl-4">
                            <div class="row g-32">
                                <div class="col-12">
                                    <div class="card hp-card-5 hp-eCommerceCardOne">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row mx-0 align-items-start justify-content-between">


                                                        @foreach ($product->tags as $tag)
                                                            <span
                                                                class="badge bg-warning-4 hp-bg-dark-warning text-warning border-none w-auto py-8 px-16 fw-medium"
                                                                style="font-size: 10px">{{ $tag->name }}</span>
                                                        @endforeach

                                                        <div
                                                            class="d-flex w-auto lh-1 hp-wish-button hp-cursor-pointer text-danger bg-danger-4 hp-bg-color-dark-danger rounded-circle remix-icon p-8">
                                                            <i class="ri-heart-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="text-center">
                                                        <a href="{{ route('product.detail', $product->id) }}" class="d-block">
                                                            <img src="{{ Storage::url($product->image) }}"
                                                                alt="4K Action Cam" style="max-height: 191px;">
                                                        </a>
                                                    </div>

                                                    <div class="row justify-content-between">
                                                        <div class="col w-auto">
                                                            <p>Category: {{ $product->category->name }}</p>
                                                        </div>

                                                        <div class="col w-auto">
                                                            <div class="d-flex align-items-center justify-content-end">

                                                                <p class="w-auto px-0 mb-0 text-primary fw-medium">
                                                                    ${{ $product->price }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 mb-24">
                                                        <p class="mb-0 me-4 hp-text-color-dark-0 hp-p1-body fw-medium">
                                                            {{ $product->name }}</p>
                                                        <p class="mb-0 hp-text-color-dark-0 hp-caption fw-normal">
                                                            {{ Str::limit($product->description, 60, '...') }}</p>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <a href="{{ route('product.detail', $product->id) }}">
                                                                <button type="button"
                                                                    class="btn btn-ghost btn-primary w-100">
                                                                    <span>Check Detail</span>
                                                                </button>
                                                            </a>
                                                        </div>

                                                        <div class="col-12 col-sm-6">
                                                            <button class="btn btn-primary px-12 w-100">
                                                                <i class="ri-shopping-bag-line remix-icon"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    @endforeach

                    @foreach ($products->skip(6)->take(2) as $product)
                        <div class="col-12 col-xl-9" style="margin-left: 185px">
                            <div class="row g-32">
                                <div class="col-12">
                                    <div class="card hp-eCommerceCardOne hp-card-3">
                                        <div class="card-body">
                                            <div class="row g-32">
                                                <div class="col-12 col-md-5 mb-24 mb-md-0">
                                                    <div class="row mx-0 align-items-start justify-content-between">
                                                        @foreach ($product->tags as $tag)
                                                            <span
                                                                class="badge bg-warning-4 hp-bg-dark-warning text-warning border-none w-auto py-8 px-16 fw-medium"
                                                                style="font-size: 10px">{{ $tag->name }}</span>
                                                        @endforeach

                                                        <div
                                                            class="d-flex w-auto lh-1 hp-wish-button hp-cursor-pointer text-danger bg-danger-4 hp-bg-color-dark-danger rounded-circle remix-icon p-8">
                                                            <i class="ri-heart-fill"></i>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 text-center">
                                                        <a href="{{ route('product.detail', $product->id) }}">
                                                            <img src="{{ Storage::url($product->image) }}"
                                                                alt="Xbox Wireless Game Console">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-7">
                                                    <p>Category: {{$product->category->name}} </p>

                                                    <div class="my-8">
                                                        <h4 class="mb-4">{{$product->name}}</h4>
                                                        <p class="hp-caption mb-0 text-black-60">By <span
                                                                class="text-black-80 hp-text-color-dark-30">{{$product->brand->name}}</span>
                                                        </p>
                                                    </div>

                                                    <p
                                                        class="mb-0 hp-p1-body fw-normal text-black-80 hp-text-color-dark-30">
                                                        {{ Str::limit($product->description, 140, '...') }}</p>

                                                    <div class="d-flex align-items-center mt-8 mb-12 mb-sm-0">
                                                        <p class="h5 w-auto px-0 mb-0 me-4 text-primary fw-medium">${{ $product->price }}
                                                        </p>
                                                    </div>

                                                    <div class="row mt-0 g-8">
                                                        <div class="col-12 col-xl-6">
                                                            <a href="{{ route('product.detail', $product->id) }}">
                                                                <button type="button"
                                                                    class="btn btn-ghost btn-primary w-100">
                                                                    <span>Check Detail</span>
                                                                </button>
                                                            </a>
                                                        </div>

                                                        <div class="col-12 col-xl-6">
                                                            <button class="btn btn-primary w-100">
                                                                <i class="ri-shopping-bag-line remix-icon"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


            



                </div>
            </div>
        </div>

    </div>
@endsection
