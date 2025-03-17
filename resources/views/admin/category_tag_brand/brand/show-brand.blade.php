@extends('layouts.admin')

@section('content')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <meta name="author" content="Hypeople">
        <meta name="description" content="Responsive, Highly Customizable Dashboard Template" />

        <!-- Favicon -->

        <meta name="msapplication-TileColor" content="#0010f7">
        <meta name="theme-color" content="#ffffff">

        <!-- Font -->

        <!-- Plugin -->
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugin/swiper-bundle.min.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/icons/iconly/index.min.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/icons/remix-icon/index.min.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">

        <!-- Base -->
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/base/typography.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/base/base.css">

        <!-- Theme -->
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/theme/colors-dark.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/theme/theme-dark.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom-rtl.css">

        <!-- Layouts -->
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/layouts/sider.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/layouts/header.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/layouts/page-content.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">

        <!-- Pages -->
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-ecommerce.css">

        <!-- Custom -->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">

        <title>Shop Ecommerce - Yoda Admin Html Template</title>
    </head>
    <div class="hp-main-layout">







        <div class="row mb-32 gy-32" style="margin-left: 260px; margin-top: 100px;">

            <h1>'{{ $brand->name }}' brand products</h1>
            <div class="col-12">
                <div class="row g-32">



                    <div class="col flex-grow-1 hp-ecommerce-app-content">

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="list-grid" role="tabpanel"
                                aria-labelledby="list-grid-tab">
                                <div class="row g-32">




                                    @foreach ($products as $product)
                                        <div class="col-12 col-md-6 col-xl-4">
                                            <div class="card hp-card-6 hp-eCommerceCardOne hp-eCommerceCardOne-wishlist"
                                                style="height: 500px;">
                                                <div class="card-body p-16">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="row mx-0 align-items-start justify-content-between">
                                                                @if ($product->tags->isNotEmpty())
                                                                    @foreach ($product->tags as $tag)
                                                                        <span
                                                                            class="badge bg-warning-4 hp-bg-dark-warning text-warning border-none w-auto py-8 px-16 fw-medium"
                                                                            style="font-size: 10px">{{ $tag->name }}</span>
                                                                    @endforeach
                                                                @else
                                                                    <span
                                                                        class="badge bg-warning-4 hp-bg-dark-warning text-warning border-none w-auto py-8 px-16 fw-medium"
                                                                        style="font-size: 10px">No tag</span>
                                                                @endif



                                                                <div
                                                                    class="d-flex w-auto lh-1 hp-wish-button hp-cursor-pointer rounded-circle remix-icon p-8 text-black-40 hp-text-color-dark-70 bg-black-10 hp-bg-color-dark-90">
                                                                    <p style="margin-top: -7px">stock: {{ $product->stock }}
                                                                    </p>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="text-center my-24"
                                                                style="height: 160px; overflow: hidden;">
                                                                <a href="{{ route('admin.product.show', $product->id) }}"
                                                                    class="d-block h-100">
                                                                    <img src="{{ Storage::url($product->image) }}"
                                                                        alt="Wireless Multiroom Speaker"
                                                                        class="h-100 w-auto mx-auto"
                                                                        style="object-fit: contain;">
                                                                </a>
                                                            </div>

                                                            <div class="row justify-content-between">

                                                                <div class="col w-auto">
                                                                    <p style="font-size: 10px">By
                                                                        {{ $product->brand->name }}</p>
                                                                </div>
                                                                <div class="col w-auto">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-end">
                                                                        <p class="w-auto px-0 mb-0 text-primary fw-medium">
                                                                            ${{ $product->price }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 mb-16 mt-16">
                                                                <p
                                                                    class="mb-4 text-black-100 hp-text-color-dark-0 hp-p1-body fw-medium">
                                                                    {{ $product->name }}</p>
                                                                <p
                                                                    class="mb-0 hp-caption fw-normal text-black-80 hp-text-color-dark-30">
                                                                    {{ Str::limit($product->description, 40, '...') }}</p>
                                                            </div>

                                                            <div class="row g-8">


                                                                <div class="col-12">
                                                                    <a href="{{ route('admin.product.show', $product->id) }}"
                                                                        class="btn btn-primary px-12 w-100">
                                                                        Check Detail
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <p style="margin-top: -7px; margin-left: 125px;">ID:
                                                    {{ $product->id }}
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div style="margin-left: 800px">
                                        {{ $products->links() }}
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
