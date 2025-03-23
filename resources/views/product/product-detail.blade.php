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
                                                
                                                @auth
                                                    <form action="{{ route('cart.add') }}" method="post">
                                                        @csrf


                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                        <input type="hidden" name="quantity" value="1">
                                                        <input type="hidden" name="price" value="{{ $product->price }}">
                                                        <button class="btn btn-primary px-12 w-100">
                                                            <i class="ri-shopping-bag-line remix-icon"></i>
                                                            <span>Add To Cart</span>
                                                        </button>
                                                    </form>
                                                @else
                                                    <form action="{{ route('cart_session.add') }}" method="post">
                                                        @csrf


                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                        <input type="hidden" name="quantity" value="1">
                                                        <input type="hidden" name="price" value="{{ $product->price }}">
                                                        <button class="btn btn-primary px-12 w-100">
                                                            <i class="ri-shopping-bag-line remix-icon"></i>
                                                            <span>Add To Cart</span>
                                                        </button>
                                                    </form>
                                                @endguest
                                            </div>


                                            @auth
                                                @if (auth()->user()->favorites->contains('product_id', $product->id))
                                                    <div class="col hp-flex-none w-auto">
                                                        <form action="{{ route('favorites.remove', $product->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-primary btn-danger">
                                                                <i class="ri-heart-3-line remix-icon"></i>
                                                                <span>Remove From Favorites</span>
                                                            </button>

                                                        </form>
                                                    </div>
                                                @else
                                                    <div class="col hp-flex-none w-auto">
                                                        <form action="{{ route('favorites.add') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="product_id"
                                                                value="{{ $product->id }}">
                                                            <button class="btn btn-primary">
                                                                <i class="ri-heart-3-line remix-icon"></i>
                                                                <span>Add To Favorites</span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                @endif
                                            @else
                                                @if (isset($favorites_session[$product->id]))
                                                    <div class="col hp-flex-none w-auto">
                                                        <form action="{{ route('favorites_session.remove', $product->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-primary btn-danger">
                                                                <i class="ri-heart-3-line remix-icon"></i>
                                                                <span >Remove From Favorites</span>
                                                            </button>

                                                        </form>
                                                    </div>
                                                @else
                                                    <div class="col hp-flex-none w-auto">
                                                        <form action="{{ route('favorites_session.add') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="product_id"
                                                                value="{{ $product->id }}">
                                                            <button class="btn btn-primary">
                                                                <i class="ri-heart-3-line remix-icon"></i>
                                                                <span>Add To Favorites</span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                @endif
                                            @endguest

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
