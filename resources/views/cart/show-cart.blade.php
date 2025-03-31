@extends('layouts.main')

@section('content')
<div class="hp-main-layout-content">

    <div class="row mb-32 gy-32">


        <div class="col-12">
            <div class="row g-32">
                <div class="col-12 col-lg-9">
                    <div class="py-18 px-24 rounded border border-black-40 hp-border-color-dark-80 bg-black-0 hp-bg-color-dark-100 mb-32 overflow-scroll hp-scrollbar-x-hidden">
                        @auth
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <span class="bg-primary text-white border-primary border rounded-circle me-8 hp-caption lh-normal d-flex align-items-center justify-content-center" style="min-width: 24px; height: 24px;">1</span>

                                <a href="app-ecommerce-checkout.html">
                                    <span class="text-black-100 hp-text-color-dark-0 text-nowrap">Order Details</span>
                                </a>
                            </div>
                            

                            <div class="divider flex-grow-1 mx-16"></div>

                            <div class="d-flex align-items-center">
                                <span class="bg-white hp-bg-dark-30 text-black-60 hp-text-color-dark-100 border-black-60 hp-border-color-dark-30 border rounded-circle me-8 hp-caption lh-normal d-flex align-items-center justify-content-center" style="min-width: 24px; height: 24px;">2</span>

                                <a href="javascript:;">
                                    <span class="text-black-60 hp-text-color-dark-30 text-nowrap">Address Informations</span>
                                </a>
                            </div>

                            <div class="divider flex-grow-1 mx-16"></div>

                            <div class="d-flex align-items-center">
                                <span class="bg-white hp-bg-dark-30 text-black-60 hp-text-color-dark-100 border-black-60 hp-border-color-dark-30 border rounded-circle me-8 hp-caption lh-normal d-flex align-items-center justify-content-center" style="min-width: 24px; height: 24px;">3</span>

                                <a href="javascript:;">
                                    <span class="text-black-60 hp-text-color-dark-30 text-nowrap">Payment</span>
                                </a>
                            </div>
                        </div>
                        @else
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <span class="bg-primary text-white border-primary border rounded-circle me-8 hp-caption lh-normal d-flex align-items-center justify-content-center" style="min-width: 24px; height: 24px;">1</span>

                                <a href="app-ecommerce-checkout.html">
                                    <span class="text-black-100 hp-text-color-dark-0 text-nowrap">Order Details</span>
                                </a>
                            </div>

                            
                            <div class="divider flex-grow-1 mx-16"></div>

                            <div class="d-flex align-items-center">
                                <span class="bg-white hp-bg-dark-30 text-black-60 hp-text-color-dark-100 border-black-60 hp-border-color-dark-30 border rounded-circle me-8 hp-caption lh-normal d-flex align-items-center justify-content-center" style="min-width: 24px; height: 24px;">2</span>

                                <a href="{{ route('user.login') }}">
                                    <span class="text-black-60 hp-text-color-dark-30 text-nowrap">Login / Sign Up</span>
                                </a>
                            </div>

                            <div class="divider flex-grow-1 mx-16"></div>

                            <div class="d-flex align-items-center">
                                <span class="bg-white hp-bg-dark-30 text-black-60 hp-text-color-dark-100 border-black-60 hp-border-color-dark-30 border rounded-circle me-8 hp-caption lh-normal d-flex align-items-center justify-content-center" style="min-width: 24px; height: 24px;">3</span>

                                <a href="javascript:;">
                                    <span class="text-black-60 hp-text-color-dark-30 text-nowrap">Address Informations</span>
                                </a>
                            </div>

                            <div class="divider flex-grow-1 mx-16"></div>

                            <div class="d-flex align-items-center">
                                <span class="bg-white hp-bg-dark-30 text-black-60 hp-text-color-dark-100 border-black-60 hp-border-color-dark-30 border rounded-circle me-8 hp-caption lh-normal d-flex align-items-center justify-content-center" style="min-width: 24px; height: 24px;">4</span>

                                <a href="javascript:;">
                                    <span class="text-black-60 hp-text-color-dark-30 text-nowrap">Payment</span>
                                </a>
                            </div>
                        </div>
                        @endguest
                    </div>


                    @auth
                    @foreach ($cart_items as $item)
                    <div class="row g-32">
                        <div class="col-12">
                            <div class="p-16 py-sm-24 px-sm-32 rounded border border-black-40 hp-border-color-dark-80 bg-black-0 hp-bg-color-dark-100">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-12 col-md-7">
                                        <div class="row mx-0 mx-sm-n12 align-items-center">
                                            <div class="col px-0 hp-ecommerce-app-checkout-item-img" style="flex: 0 0 135px;">
                                                <a href="{{ route('product.detail', $item['product']->slug) }}">
                                                    <img src="{{ Storage::url($item['product']->image) }}" alt="Smart Watches 3">
                                                </a>
                                            </div>
                                            
                                            <div class="col hp-ecommerce-app-checkout-text mt-16 mt-sm-0 ps-0 ps-sm-32" style="flex: 1 0 0px;">
                                                <a href="{{ route('product.detail', $item['product']->slug) }}">
                                                    <h4 class="mb-4">{{ $item['product']->name }}</h4>
                                                </a>
                                                <span class="hp-caption d-block text-black-60">By<span class="ms-4 text-black-80 hp-text-color-dark-40">{{ $item['product']->brand->name }}</span></span>
                                                <p class="mt-8 mb-0 hp-caption fw-normal text-black-60">{{ Str::limit($item['product']->description, 60, '...') }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-5 mt-24 mt-sm-0 hp-ecommerce-app-checkout-info">
                                        <div class="row mx-0 mx-sm-n12 align-items-center justify-content-sm-end">
                                            <div class="w-auto px-0">
                                                <div class="input-number">
                                                    

                                                    <div class="input-number-input-wrap">
                                                        <input class="input-number-input" type="number" min="1" max="10" value="{{ $item['quantity'] }}">
                                                    </div>
                                                </div>

                                                <div class="hp-cursor-pointer mt-4 hp-caption text-black-60 text-decoration-underline">${{ $item['price'] }}/unit</div>
                                            </div>
                                            

                                            <div class="w-auto px-0 text-end ms-64">
                                                <div class="h2 mb-0 text-black-80 hp-text-color-dark-30">
                                                    <span>
                                                        ${{ $item['total'] }}
                                                    </span>
                                                </div>

                                                <div class="d-flex align-items-center mt-4 hp-caption fw-normal text-success">
                                                    <i class="ri-checkbox-circle-fill text-success me-4"></i>
                                                    <span class="text-decoration-underline">Free Shipping</span>
                                                </div>
                                            </div>

                                            <div class="col ps-0 text-end" style="margin-left: 40px;">
                                                <form action="{{ route('cart.increase', $item['product']->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-link p-0">↑</button>
                                                </form>
                                                
                                            </div>

                                            <div class="col ps-0 text-end" style="margin-left: -15px;">
                                                <form action="{{ route('cart.decrease', $item['product']->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-link p-0">↓</button>
                                                </form>
                                                
                                            </div>

                                            <div class="col ps-0 text-end">
                                                <form action="{{ route('cart.remove', $item['product']->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-link p-0">x</button>
                                                </form>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    @foreach ($cartSession_items as $item)
                    <div class="row g-32">
                        <div class="col-12">
                            <div class="p-16 py-sm-24 px-sm-32 rounded border border-black-40 hp-border-color-dark-80 bg-black-0 hp-bg-color-dark-100">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-12 col-md-7">
                                        <div class="row mx-0 mx-sm-n12 align-items-center">
                                            <div class="col px-0 hp-ecommerce-app-checkout-item-img" style="flex: 0 0 135px;">
                                                <a href="{{ route('product.detail', $item['product']->slug) }}">
                                                    <img src="{{ Storage::url($item['product']->image) }}" alt="Smart Watches 3">
                                                </a>
                                            </div>

                                            <div class="col hp-ecommerce-app-checkout-text mt-16 mt-sm-0 ps-0 ps-sm-32" style="flex: 1 0 0px;">
                                                <a href="{{ route('product.detail', $item['product']->slug) }}">
                                                    <h4 class="mb-4">{{ $item['product']->name }}</h4>
                                                </a>
                                                
                                                <span class="hp-caption d-block text-black-60">By<span class="ms-4 text-black-80 hp-text-color-dark-40">{{ $item['product']->brand->name }}</span></span>
                                                <p class="mt-8 mb-0 hp-caption fw-normal text-black-60">{{ Str::limit($item['product']->description, 60, '...') }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-5 mt-24 mt-sm-0 hp-ecommerce-app-checkout-info">
                                        <div class="row mx-0 mx-sm-n12 align-items-center justify-content-sm-end">
                                            <div class="w-auto px-0">
                                                <div class="input-number">
                                                    

                                                    <div class="input-number-input-wrap">
                                                        <input class="input-number-input" type="number" min="1" max="10" value="{{ $item['quantity'] }}">
                                                    </div>
                                                </div>

                                                <div class="hp-cursor-pointer mt-4 hp-caption text-black-60 text-decoration-underline">${{ $item['price'] }}/unit</div>
                                            </div>
                                            

                                            <div class="w-auto px-0 text-end ms-64">
                                                <div class="h2 mb-0 text-black-80 hp-text-color-dark-30">
                                                    <span>
                                                        ${{ $item['total'] }}
                                                    </span>
                                                </div>

                                                <div class="d-flex align-items-center mt-4 hp-caption fw-normal text-success">
                                                    <i class="ri-checkbox-circle-fill text-success me-4"></i>
                                                    <span class="text-decoration-underline">Free Shipping</span>
                                                </div>
                                            </div>

                                            <div class="col ps-0 text-end" style="margin-left: 40px;">
                                                <form action="{{ route('cart_session.increase', $item['product']->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-link p-0">↑</button>
                                                </form>
                                                
                                            </div>

                                            <div class="col ps-0 text-end" style="margin-left: -15px;">
                                                <form action="{{ route('cart_session.decrease', $item['product']->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-link p-0">↓</button>
                                                </form>
                                                
                                            </div>

                                            <div class="col ps-0 text-end">
                                                <form action="{{ route('cart_session.remove', $item['product']->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-link p-0">x</button>
                                                </form>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endguest
                </div>

                <div class="col-12 col-lg-3">
                    <div class="p-24 rounded border border-black-40 hp-border-color-dark-80 bg-black-0 hp-bg-color-dark-100">
                        <h3 class="mb-0 text-black-80 hp-text-color-dark-0">Your Cart</h3>
                        @auth
                        <div class="row mt-8">
                            <div class="col-12 mt-8">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-6 hp-input-description text-black-80 hp-text-color-dark-30" style="font-size: 15px">Products</div>
                                    <div class="col-6 text-end hp-p1-body fw-medium text-primary">{{ $cart_total_quantity }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-16">
                            <div class="col-12">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-6 h5 fw-medium text-primary">Total</div>
                                    <div class="col-6 h5 text-end hp-p1-body fw-medium text-primary">${{ $cart_total }}</div>
                                </div>
                            </div>
                            @if ($cart_items->isNotEmpty())
                            <div class="col-12 mt-16">
                                <a href="{{ route('order.checkout') }}">
                                    <div class="btn btn-primary w-100">
                                        Next Step
                                    </div>
                                </a>
                            </div>
                            @else
                            <div class="col-12 mt-16">
                                <a href="{{ route('product.shop') }}">
                                    <div class="btn btn-primary w-100">
                                        Next Step
                                    </div>
                                </a>
                            </div>
                            @endif
                        </div>
                        @else
                        <div class="row mt-8">
                            <div class="col-12 mt-8">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-6 hp-input-description text-black-80 hp-text-color-dark-30" style="font-size: 15px">Products</div>
                                    <div class="col-6 text-end hp-p1-body fw-medium text-primary">{{ $cartSession_total_quantity }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-16">
                            <div class="col-12">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-6 h5 fw-medium text-primary">Total</div>
                                    <div class="col-6 h5 text-end hp-p1-body fw-medium text-primary">${{ $cartSession_total }}</div>
                                </div>
                            </div>
                            <div class="col-12 mt-16">
                                <a href="{{ route('user.login') }}">
                                    <div class="btn btn-primary w-100">
                                        Next Step
                                    </div>
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
@endsection
