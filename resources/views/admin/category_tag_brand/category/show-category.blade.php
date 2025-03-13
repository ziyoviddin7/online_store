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
 
            <h1>'{{ $category->name }}' category products</h1>
            <div class="col-12">
                <div class="row g-32">
                    

                    
                    <div class="col flex-grow-1 hp-ecommerce-app-content">

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="list-grid" role="tabpanel" aria-labelledby="list-grid-tab">
                                <div class="row g-32">
                                    
                                    

                                    
                                    @foreach ($products as $product)
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="card hp-card-6 hp-eCommerceCardOne hp-eCommerceCardOne-wishlist">
                                            <div class="card-body p-16">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="row mx-0 align-items-start justify-content-between">
                                                            @foreach ($product->tags as $tag)
                                                            <span class="badge bg-warning-4 hp-bg-dark-warning text-warning border-none w-auto py-8 px-16 fw-medium" style="font-size: 10px">{{ $tag->name }}</span>
                                                                
                                                            @endforeach



                                                            <div class="d-flex w-auto lh-1 hp-wish-button hp-cursor-pointer rounded-circle remix-icon p-8 text-black-40 hp-text-color-dark-70 bg-black-10 hp-bg-color-dark-90">
                                                                <p style="margin-top: -7px">stock: {{ $product->stock }}</p>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="text-center my-24">
                                                            <a href="app-ecommerce-product-detail.html" class="d-block">
                                                                <img src="{{ Storage::url($product->image) }}" alt="Wireless Multiroom Speaker" height="125">
                                                            </a>
                                                        </div>

                                                        <div class="row justify-content-between">
                                                            
                                                            <div class="col w-auto">
                                                                <p style="font-size: 10px">By {{ $product->brand->name }}</p>
                                                            </div>
                                                            <div class="col w-auto">
                                                                <div class="d-flex align-items-center justify-content-end">
                                                                    @if ($product->discount)
                                                                    <p class="w-auto px-0 mb-0 me-4 text-black-60 text-decoration-line-through hp-input-description">$59.00</p>
                                                                    <p class="w-auto px-0 mb-0 text-primary fw-medium">$29.00</p>
                                                                    @else
                                                                    <p class="w-auto px-0 mb-0 text-primary fw-medium">${{ $product->price }}</p>
                                                                    @endif
                                                                    

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 mb-16 mt-16">
                                                            <p class="mb-4 text-black-100 hp-text-color-dark-0 hp-p1-body fw-medium">{{ $product->name }}</p>
                                                            <p class="mb-0 hp-caption fw-normal text-black-80 hp-text-color-dark-30">{{ Str::limit($product->description, 40, '...') }}</p>
                                                        </div>

                                                        <div class="row g-8">


                                                            <div class="col-12">
                                                                <button class="btn btn-primary px-12 w-100">
                                                                    <span>Check Detail</span>
                                                                </button>
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

                        <nav class="my-64">
                            <ul class="pagination pagination-sm justify-content-center justify-content-sm-end">
                                <li class="page-item">
                                    <a class="page-link bg-transparent" href="javascript:;" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <svg viewBox="64 64 896 896" focusable="false" data-icon="left" width="12px" height="12px" fill="currentColor" aria-hidden="true">
                                                <path d="M724 218.3V141c0-6.7-7.7-10.4-12.9-6.3L260.3 486.8a31.86 31.86 0 000 50.3l450.8 352.1c5.3 4.1 12.9.4 12.9-6.3v-77.3c0-4.9-2.3-9.6-6.1-12.6l-360-281 360-281.1c3.8-3 6.1-7.7 6.1-12.6z"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link bg-transparent" href="javascript:;">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link bg-transparent" href="javascript:;">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link bg-transparent" href="javascript:;">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link bg-transparent" href="javascript:;" aria-label="Next">
                                        <span aria-hidden="true">
                                            <svg viewBox="64 64 896 896" focusable="false" data-icon="right" width="12px" height="12px" fill="currentColor" aria-hidden="true">
                                                <path d="M765.7 486.8L314.9 134.7A7.97 7.97 0 00302 141v77.3c0 4.9 2.3 9.6 6.1 12.6l360 281.1-360 281.1c-3.9 3-6.1 7.7-6.1 12.6V883c0 6.7 7.7 10.4 12.9 6.3l450.8-352.1a31.96 31.96 0 000-50.4z"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection