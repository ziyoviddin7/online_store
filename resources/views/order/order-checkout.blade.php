@extends('layouts.main')

@section('content')
    <div class="hp-main-layout-content">

        <div class="row mb-32 gy-32">

            <div class="col-12">
                <div class="row g-32">
                    <div class="col-12 col-lg-9">
                        <div
                            class="py-18 px-24 rounded border border-black-40 hp-border-color-dark-80 bg-black-0 hp-bg-color-dark-100 mb-32 overflow-scroll hp-scrollbar-x-hidden">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span
                                        class="bg-white text-primary border-primary border rounded-circle me-8 hp-caption lh-normal d-flex align-items-center justify-content-center"
                                        style="min-width: 24px; height: 24px;">
                                        <svg viewBox="64 64 896 896" focusable="false" data-icon="check" width="1em"
                                            height="1em" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 00-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z">
                                            </path>
                                        </svg>
                                    </span>

                                    <a href="{{ route('cart.show') }}">
                                        <span class="text-black-80 hp-text-color-dark-0 text-nowrap">Order Details</span>
                                    </a>
                                </div>

                                <div class="divider flex-grow-1 border-primary mx-16"></div>

                                <div class="d-flex align-items-center">
                                    <span
                                        class="bg-primary text-white border-primary border rounded-circle me-8 hp-caption lh-normal d-flex align-items-center justify-content-center"
                                        style="min-width: 24px; height: 24px;">2</span>

                                    <a href="app-ecommerce-checkout-address.html">
                                        <span class="text-black-100 hp-text-color-dark-0 text-nowrap">Address
                                            Informations</span>
                                    </a>
                                </div>

                                <div class="divider flex-grow-1 mx-16"></div>

                                <div class="d-flex align-items-center">
                                    <span
                                        class="bg-white hp-bg-dark-30 text-black-60 hp-text-color-dark-100 border-black-60 border rounded-circle me-8 hp-caption lh-normal d-flex align-items-center justify-content-center"
                                        style="min-width: 24px; height: 24px;">3</span>

                                    <a href="javascript:;">
                                        <span class="text-black-60 hp-text-color-dark-30 text-nowrap">Payment</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row g-32">
                            <div class="col-12">
                                <div
                                    class="p-16 p-sm-24 rounded border border-black-40 hp-border-color-dark-80 bg-black-0 hp-bg-color-dark-100">
                                    <h3 class="mb-24 text-black-80 hp-text-color-dark-0">Address</h3>

                                    <form action="{{ route('order.checkout.store') }}" method="post">
                                        @csrf
                                        <div class="row g-24">
                                            <div class="col-12 col-md-6">
                                                <label for="checkoutAddressFullName" class="form-label">
                                                    <span class="text-danger me-4">*</span>Full Name
                                                </label>
                                                <input name="full_name" type="text" class="form-control"
                                                    placeholder="Ivan Ivanov" id="checkoutAddressFullName"
                                                    value="{{ old('full_name') }}" required>
                                                @error('full_name')
                                                    <p style="color: red"> {{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <label for="checkoutAddressEmail" class="form-label">
                                                    <span class="text-danger me-4">*</span>Email
                                                </label>
                                                <input name="email" type="email" class="form-control"
                                                    placeholder="example@gmail.com" id="checkoutAddressEmail"
                                                    value="{{ old('email') }}" aria-describedby="emailHelp">
                                                @error('email')
                                                    <p style="color: red"> {{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <label for="checkoutAddressPhone" class="form-label">
                                                    <span class="text-danger me-4">*</span>Phone
                                                </label>
                                                <input type="text" name="phone" class="form-control"
                                                    placeholder="+7 912 122 12 21" id="checkoutAddressPhone"
                                                    value="{{ old('phone') }}" required>
                                                @error('phone')
                                                    <p style="color: red"> {{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <label for="checkoutAddressTitle" class="form-label">
                                                    <span class="text-danger me-4">*</span>Postal Code
                                                </label>
                                                <input name="postal_code" type="text" class="form-control"
                                                    placeholder="233 233" id="checkoutAddressTitle"
                                                    value="{{ old('postal_code') }}" required>
                                                @error('postal_code')
                                                    <p style="color: red"> {{ $message }}</p>
                                                @enderror
                                            </div>


                                            <div class="col-12 col-md-6">
                                                <label for="checkoutAddressState" class="form-label">
                                                    <span class="text-danger me-4">*</span>Country
                                                </label>
                                                <input name="country" type="text" class="form-control"
                                                    placeholder="Russia" id="checkoutAddressState"
                                                    value="{{ old('country') }}" required>
                                                @error('country')
                                                    <p style="color: red"> {{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <label for="exampleInputEmail1" class="form-label">Region/City</label>
                                                <input name="region_city" type="text" class="form-control"
                                                    placeholder="Moscow Region/Moscow" value="{{ old('region_city') }}"
                                                    id="checkoutAddressState" required>
                                                @error('region_city')
                                                    <p style="color: red"> {{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-12">
                                                <label for="checkoutAddress" class="form-label">Address</label>
                                                <textarea name="address" class="form-control"  placeholder="32 Moskovskaya Street"
                                                    id="checkoutAddress">{{ old('address') }}</textarea>
                                                @error('address')
                                                    <p style="color: red"> {{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3">
                        <div
                            class="p-24 rounded border border-black-40 hp-border-color-dark-80 bg-black-0 hp-bg-color-dark-100">
                            <h3 class="mb-0 text-black-80 hp-text-color-dark-0">Summary</h3>
                            <br>
                            <span
                                class="hp-p1-body d-block text-black-60 hp-text-color-dark-40 fw-medium">{{ $cart_total_quantity }}
                                Products</span>

                            <div class="row mt-8">
                                @foreach ($cart_items as $item)
                                    <div class="col-12 mt-8">
                                        <div class="row align-items-center justify-content-between">
                                            <div class="col-6 hp-input-description text-black-80 hp-text-color-dark-30">
                                                {{ $item['quantity'] }} X {{ $item['product']->name }} </div>
                                            <div class="col-6 text-end hp-p1-body fw-medium text-primary">
                                                ${{ $item['total'] }}</div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                            <div class="row mt-16">
                                <div class="col-12">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-6 h5 fw-medium text-primary">Total</div>
                                        <div class="col-6 h5 text-end hp-p1-body fw-medium text-primary">
                                            ${{ $cart_total }}</div>
                                    </div>
                                </div>

                                <div class="col-12 mt-16">
                                    <button type="submit" class="btn btn-primary w-100">
                                        Place Order
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
@endsection
