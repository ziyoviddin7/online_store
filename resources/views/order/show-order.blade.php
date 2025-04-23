@extends('layouts.main')

@section('content')
    <div class="hp-main-layout-content">

        <div class="row mb-32 gy-32">


            <div class="col-12">
                <div class="row g-32">
                    <div class="col-12 col-lg-9">

                        <div>
                            <h3>Order dated {{ $order->created_at->translatedFormat('j F Y') }}</h3>
                        </div>
                        <div
                            class="py-18 px-24 rounded border border-black-40 hp-border-color-dark-80 bg-black-0 hp-bg-color-dark-100 mb-32 overflow-scroll hp-scrollbar-x-hidden">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h5>Delivery to the point of delivery</h5>
                                    <p>Email:  {{ $order->email }}</p>
                                    <p>Address: {{ $order->country }}, {{ $order->region_city }}, {{ $order->address }}</p>
                                </div>
                            </div>
                        </div>


                        @foreach ($order->products as $product)
                            <div class="row g-32">
                                <div class="col-12">
                                    <div
                                        class="p-16 py-sm-24 px-sm-32 rounded border border-black-40 hp-border-color-dark-80 bg-black-0 hp-bg-color-dark-100">
                                        <div class="row align-items-center justify-content-between">
                                            <div class="col-12 col-md-7">
                                                <div class="row mx-0 mx-sm-n12 align-items-center">
                                                    <div class="col px-0 hp-ecommerce-app-checkout-item-img"
                                                        style="flex: 0 0 135px;">
                                                        <a href="{{ route('product.detail', $product->slug) }}">
                                                            <img src="{{ Storage::url($product->image) }}"
                                                                alt="Smart Watches 3">
                                                        </a>
                                                    </div>

                                                    <div class="col hp-ecommerce-app-checkout-text mt-16 mt-sm-0 ps-0 ps-sm-32"
                                                        style="flex: 1 0 0px;">
                                                        <a href="{{ route('product.detail', $product->slug) }}">
                                                            <h4 class="mb-4">{{ $product->name }}</h4>
                                                        </a>
                                                        <span class="hp-caption d-block text-black-60">By<span
                                                                class="ms-4 text-black-80 hp-text-color-dark-40">{{ $product->brand->name }}</span></span>
                                                        <p class="mt-8 mb-0 hp-caption fw-normal text-black-60">
                                                            {{ Str::limit($product->description, 60, '...') }}</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-5 mt-24 mt-sm-0 hp-ecommerce-app-checkout-info">
                                                <div class="row mx-0 mx-sm-n12 align-items-center justify-content-sm-end">
                                                    <div class="w-auto px-0">
                                                        <div class="input-number">


                                                            <div class="input-number-input-wrap">
                                                                <input class="input-number-input" type="number"
                                                                    value="{{ $product->pivot->quantity }}">
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="hp-cursor-pointer mt-4 hp-caption text-black-60 text-decoration-underline">
                                                            ${{ $product->pivot->price }}/unit</div>
                                                    </div>


                                                    <div class="w-auto px-0 text-end ms-64">
                                                        <div class="h2 mb-0 text-black-80 hp-text-color-dark-30">
                                                            <span>
                                                                ${{ $product->pivot->quantity * $product->pivot->price }}
                                                            </span>
                                                        </div>

                                                        <div
                                                            class="d-flex align-items-center mt-4 hp-caption fw-normal text-success">
                                                            <i class="ri-checkbox-circle-fill text-success me-4"></i>
                                                            <span class="text-decoration-underline">Free Shipping</span>
                                                        </div>

                                                    </div>

                                                    <div class="col ps-0 text-end">
                                                        <form action="{{ route('cart.add') }}" method="POST">
                                                            @csrf

                                                            <input type="hidden" name="product_id"
                                                                value="{{ $product->id }}">
                                                            <input type="hidden" name="quantity" value="1">
                                                            <input type="hidden" name="price"
                                                                value="{{ $product->price }}">

                                                            <button type="submit" class="btn btn-link p-0">
                                                                <i class="ri-shopping-bag-line remix-icon"></i>
                                                            </button>
                                                        </form>

                                                    </div>



                                                    @if (auth()->user()->favorites->contains('product_id', $product->id))
                                                        <div
                                                            class="d-flex w-auto d-flex align-items-center justify-content-center lh-1 hp-wish-button hp-cursor-pointer rounded-circle remix-icon p-8 text-danger bg-danger-4 hp-bg-color-dark-danger">
                                                            <form action="{{ route('favorites.remove', $product->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')

                                                                <button type="submit" class="border-0 bg-transparent p-0">
                                                                    <i class="ri-heart-fill lh text-danger"></i>

                                                                </button>
                                                            </form>
                                                        </div>
                                                    @else
                                                        <div
                                                            class="d-flex d-flex align-items-center justify-content-center w-auto w-100 h-100 lh-1 hp-wish-button hp-cursor-pointer rounded-circle remix-icon p-8 text-black-40 hp-text-color-dark-70 bg-black-10 hp-bg-color-dark-90">
                                                            <form action="{{ route('favorites.add') }}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="product_id"
                                                                    value="{{ $product->id }}">
                                                                <button type="submit" class="border-0 bg-transparent p-0 ">
                                                                    <i class="ri-heart-fill lh-normal"></i>
                                                                </button>
                                                            </form>

                                                        </div>
                                                    @endif





                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="col-12 col-lg-3">
                        <div
                            class="p-24 rounded border border-black-40 hp-border-color-dark-80 bg-black-0 hp-bg-color-dark-100">
                            <h3 class="mb-0 text-black-80 hp-text-color-dark-0">Your Order #{{ $order->id }}</h3>
                            <div class="row mt-8">
                                <div class="col-12 mt-8">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-6 hp-input-description text-black-80 hp-text-color-dark-30"
                                            style="font-size: 15px">Products</div>
                                        <div class="col-6 text-end hp-p1-body fw-medium text-primary">
                                            {{ $order->total_quantity }}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-8">
                                <div class="col-12 mt-8">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-6 hp-input-description text-black-80 hp-text-color-dark-30"
                                            style="font-size: 15px">Full Name</div>
                                        <div class="col-6 text-end hp-p1-body fw-medium text-primary">
                                            {{ $order->full_name }}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-8">
                                <div class="col-12 mt-8">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-6 hp-input-description text-black-80 hp-text-color-dark-30"
                                            style="font-size: 15px">postal code</div>
                                        <div class="col-6 text-end hp-p1-body fw-medium text-primary"
                                        >
                                            {{ $order->postal_code }}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-8">
                                <div class="col-12 mt-8">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-6 hp-input-description text-black-80 hp-text-color-dark-30"
                                            style="font-size: 15px">phone</div>
                                        <div class="col-6 text-end hp-p1-body fw-medium text-primary">
                                            {{ $order->phone }}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-16">
                                <div class="col-12">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-6 h5 fw-medium text-primary">Total</div>
                                        <div class="col-6 h5 text-end hp-p1-body fw-medium text-primary">
                                            ${{ $order->total_price }}</div>
                                    </div>
                                </div>
                                <div class="col-12 mt-16">
                                    @if ($order->status == 'pending')
                                        <div style="height: 50px; width: 270px; font-size: 35px;"
                                            class="badge bg-primary-4 hp-bg-dark-primary text-primary hp-text-color-dark-primary-2 border-primary">
                                            PENDING</div>
                                    @elseif ($order->status == 'paid')
                                        <div style="height: 50px; width: 270px; font-size: 35px"
                                            class="badge bg-success-4 hp-bg-dark-success text-success border-success">
                                            PAID</div>
                                    @elseif ($order->status == 'canceled')
                                        <div style="height: 50px; width: 270px; font-size: 35px;"
                                            class="badge bg-danger-4 hp-bg-dark-danger text-danger border-danger">
                                            CANCELED</div>
                                    @endif
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
