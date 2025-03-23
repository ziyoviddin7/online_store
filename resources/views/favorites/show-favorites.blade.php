@extends('layouts.main')

@section('content')
    <div class="hp-main-layout-content">

        <div class="row mb-32 gy-32">
            @auth
            <h2>Your Favorite Products: {{ $favorites_total_quantity }}</h2>
            @else
            <h2>Your Favorite Products: {{ $favoritesSession_total_quantity }}</h2>
            @endguest
            

            <div class="col-12">
                <div class="row g-32">

                    @auth
                    @foreach ($favorites_items as $item)
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="card hp-card-6 hp-eCommerceCardOne hp-eCommerceCardOne-wishlist">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row mx-0 align-items-start justify-content-between">
                                            @foreach ($item->tags as $tag)
                                                <span
                                                    class="badge bg-danger-4 hp-bg-dark-danger text-danger border-none w-auto py-8 px-16 fw-medium">{{ $tag->name }}</span>
                                            @endforeach


                                            <div
                                                class="d-flex w-auto lh-1 hp-wish-button hp-cursor-pointer text-danger bg-danger-4 hp-bg-color-dark-danger rounded-circle remix-icon p-8">
                                                <form
                                                    action="{{ route('favorites.remove', $item->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')

                                                    <button type="submit" class="border-0 bg-transparent p-0">
                                                        <i class="ri-heart-fill lh text-danger"></i>

                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="text-center mb-24">
                                            <a href="{{ route('product.detail', $item->id) }}"
                                                class="d-block">
                                                <img src="{{ Storage::url($item->image) }}"
                                                    alt="4K Action Cam" height="200">
                                            </a>
                                        </div>

                                        <div class="row justify-content-between">
                                            <div class="col w-auto">
                                                <div class="col w-auto">
                                                    <p style="font-size: 13px; margin-top: 5px;">By
                                                        {{ $item->brand->name }}</p>
                                                </div>
                                            </div>

                                            <div class="col w-auto">
                                                <div class="d-flex align-items-center justify-content-end">
                                                    <p class="w-auto px-0 mb-0 text-primary fw-medium">
                                                        ${{ $item->price }}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mb-16 mt-16">
                                            <p class="mb-4 text-black-100 hp-text-color-dark-0 hp-p1-body fw-medium">
                                                {{ $item->name }}</p>
                                            <p class="mb-0 hp-caption fw-normal text-black-80 hp-text-color-dark-30">
                                                {{ Str::limit($item->description, 60, '...') }}</p>
                                        </div>

                                        <div class="row g-8">
                                            <div class="col-6">
                                                <a href="{{ route('product.detail', $item->id) }}"
                                                    class="btn w-100 text-black-60 hp-hover-text-color-primary-1 hp-hover-text-color-dark-primary-2">
                                                    <span>Check Detail</span>
                                                </a>
                                            </div>

                                            <div class="col-6">
                                                @auth
                                                    <form action="{{ route('cart.add') }}" method="post">
                                                        @csrf


                                                        <input type="hidden" name="product_id"
                                                            value="{{ $item->id }}">
                                                        <input type="hidden" name="quantity" value="1">
                                                        <input type="hidden" name="price" value="{{ $item->price }}">
                                                        <button class="btn btn-primary px-12 w-100">
                                                            <i class="ri-shopping-bag-line remix-icon"></i>
                                                            <span>Add To Cart</span>
                                                        </button>
                                                    </form>
                                                @else
                                                    <form action="{{ route('cart_session.add') }}" method="post">
                                                        @csrf


                                                        <input type="hidden" name="product_id"
                                                            value="{{ $item->id }}">
                                                        <input type="hidden" name="quantity" value="1">
                                                        <input type="hidden" name="price" value="{{ $item->price }}">
                                                        <button class="btn btn-primary px-12 w-100">
                                                            <i class="ri-shopping-bag-line remix-icon"></i>
                                                            <span>Add To Cart</span>
                                                        </button>
                                                    </form>
                                                @endguest
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                    @else
                    @foreach ($favoritesSession_items as $item)
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="card hp-card-6 hp-eCommerceCardOne hp-eCommerceCardOne-wishlist">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row mx-0 align-items-start justify-content-between">
                                                @foreach ($item['product']->tags as $tag)
                                                    <span
                                                        class="badge bg-danger-4 hp-bg-dark-danger text-danger border-none w-auto py-8 px-16 fw-medium">{{ $tag->name }}</span>
                                                @endforeach


                                                <div
                                                    class="d-flex w-auto lh-1 hp-wish-button hp-cursor-pointer text-danger bg-danger-4 hp-bg-color-dark-danger rounded-circle remix-icon p-8">
                                                    <form
                                                        action="{{ route('favorites_session.remove', $item['product']->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')

                                                        <button type="submit" class="border-0 bg-transparent p-0">
                                                            <i class="ri-heart-fill lh text-danger"></i>

                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="text-center mb-24">
                                                <a href="{{ route('product.detail', $item['product']->id) }}"
                                                    class="d-block">
                                                    <img src="{{ Storage::url($item['product']->image) }}"
                                                        alt="4K Action Cam" height="200">
                                                </a>
                                            </div>

                                            <div class="row justify-content-between">
                                                <div class="col w-auto">
                                                    <div class="col w-auto">
                                                        <p style="font-size: 13px; margin-top: 5px;">By
                                                            {{ $item['product']->brand->name }}</p>
                                                    </div>
                                                </div>

                                                <div class="col w-auto">
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <p class="w-auto px-0 mb-0 text-primary fw-medium">
                                                            ${{ $item['product']->price }}</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 mb-16 mt-16">
                                                <p class="mb-4 text-black-100 hp-text-color-dark-0 hp-p1-body fw-medium">
                                                    {{ $item['product']->name }}</p>
                                                <p class="mb-0 hp-caption fw-normal text-black-80 hp-text-color-dark-30">
                                                    {{ Str::limit($item['product']->description, 60, '...') }}</p>
                                            </div>

                                            <div class="row g-8">
                                                <div class="col-6">
                                                    <a href="{{ route('product.detail', $item['product']->id) }}"
                                                        class="btn w-100 text-black-60 hp-hover-text-color-primary-1 hp-hover-text-color-dark-primary-2">
                                                        <span>Check Detail</span>
                                                    </a>
                                                </div>

                                                <div class="col-6">
                                                    @auth
                                                        <form action="{{ route('cart.add') }}" method="post">
                                                            @csrf


                                                            <input type="hidden" name="product_id"
                                                                value="{{ $item['product']->id }}">
                                                            <input type="hidden" name="quantity" value="1">
                                                            <input type="hidden" name="price" value="{{ $item['product']->price }}">
                                                            <button class="btn btn-primary px-12 w-100">
                                                                <i class="ri-shopping-bag-line remix-icon"></i>
                                                                <span>Add To Cart</span>
                                                            </button>
                                                        </form>
                                                    @else
                                                        <form action="{{ route('cart_session.add') }}" method="post">
                                                            @csrf


                                                            <input type="hidden" name="product_id"
                                                                value="{{ $item['product']->id }}">
                                                            <input type="hidden" name="quantity" value="1">
                                                            <input type="hidden" name="price" value="{{ $item['product']->price }}">
                                                            <button class="btn btn-primary px-12 w-100">
                                                                <i class="ri-shopping-bag-line remix-icon"></i>
                                                                <span>Add To Cart</span>
                                                            </button>
                                                        </form>
                                                    @endguest
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
            </div>
        </div>

    </div>
@endsection
