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
                                    @if ($orders->isEmpty())
                                        <h1 class="mb-0 hp-text-color-black-0">You have no Orders yet</h1>
                                    @else
                                        <h1 class="mb-0 hp-text-color-black-0">Your all Orders</h1>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12">
                <div class="row g-32">

                    <div class="col-12">
                        <div class="card hp-card-6 hp-order-table-card">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table align-middle">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <span
                                                        class="hp-badge-size fw-normal text-black-60 hp-text-color-dark-50 text-uppercase">Order
                                                        Id</span>
                                                </th>
                                                <th>
                                                    <span
                                                        class="hp-badge-size fw-normal text-black-60 hp-text-color-dark-50 text-uppercase">Date</span>
                                                </th>
                                                <th>
                                                    <span
                                                        class="hp-badge-size fw-normal text-black-60 hp-text-color-dark-50 text-uppercase">Status</span>
                                                </th>
                                                <th>
                                                    <span
                                                        class="hp-badge-size fw-normal text-black-60 hp-text-color-dark-50 text-uppercase">Products</span>
                                                </th>
                                                <th>
                                                    <span
                                                        class="hp-badge-size fw-normal text-black-60 hp-text-color-dark-50 text-uppercase">Price</span>
                                                </th>
                                            </tr>
                                        </thead>


                                        <tbody>

                                            @foreach ($orders as $order)
                                            
                                                <tr>
                                                    <td>
                                                        <a href="{{ route('order.order_details', $order->id) }}" style="color: black">#{{ $order->id }}</a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('order.order_details', $order->id) }}" style="color: black">{{ $order->created_at->translatedFormat('j F Y') }}</a>
                                                    </td>
                                                    <td>
                                                        @if ($order->status == 'pending')
                                                            <div
                                                                class="badge bg-primary-4 hp-bg-dark-primary text-primary hp-text-color-dark-primary-2 border-primary">
                                                                PENDING</div>
                                                        @elseif ($order->status == 'paid')
                                                            <div
                                                                class="badge bg-success-4 hp-bg-dark-success text-success border-success">
                                                                PAID</div>
                                                        @elseif ($order->status == 'canceled')
                                                            <div
                                                                class="badge bg-danger-4 hp-bg-dark-danger text-danger border-danger">
                                                                CANCELED</div>
                                                        @endif

                                                    </td>
                                                    <td>
                                                        <a href="{{ route('order.order_details', $order->id) }}"
                                                            class="bg-black-20 hp-bg-color-dark-70 hp-img-container rounded text-center p-4 d-flex align-items-center">
                                                            @foreach ($order->products->take(7) as $product)
                                                                <img src="{{ Storage::url($product->image) }}"
                                                                    alt="Product" class="me-2">
                                                            @endforeach


                                                        </a>
                                                    </td>


                                                    <td>
                                                        <a href="{{ route('order.order_details', $order->id) }}" style="color: black">$ {{ $order->total_price }}</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>

    </div>
@endsection
