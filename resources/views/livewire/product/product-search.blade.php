<div>
    <div class="row mb-32 gy-32">

        <div class="col-12">
            <div class="row g-32">

                <div class="col hp-ecommerce-app-sidebar" style="flex: 0 0 270px;">
                    <div
                        class="row mx-0 rounded overflow-hidden border border-black-40 hp-border-color-dark-80 bg-black-0 hp-bg-color-dark-100 px-24 py-16">
                        <div class="col-12 px-0">
                            <h5 class="mb-4 text-black-80 hp-text-color-dark-30">All Products</h5>
                            <span
                                class="hp-badge-text d-block text-black-80 hp-text-color-dark-30">{{ $products->count() }}
                                Product</span>
                        </div>

                        <div class="divider px-0"></div>

                        <div class="col-12 px-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#sidebar-menu-1" role="button"
                                aria-expanded="false" aria-controls="sidebar-menu-1">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0 text-black-80 hp-text-color-dark-30">Categories</h5>
                                    <i class="ri-arrow-right-s-line hp-collapse-arrow hp-text-color-black-60 lh-1"
                                        style="font-size: 24px;"></i>
                                </div>
                            </a>

                            <div class="collapse" id="sidebar-menu-1">
                                <div class="row mt-16">

                                    @foreach ($categories as $category)
                                        <div class="col-12 mt-18">
                                            <a href="javascript:;" style="font-size: 13px"
                                                class="hp-badge-text d-block text-black-80 hp-text-color-dark-30">{{ $category->name }}
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="divider px-0"></div>




                        <div class="col-12 px-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#sidebar-menu-3" role="button"
                                aria-expanded="false" aria-controls="sidebar-menu-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0 text-black-80 hp-text-color-dark-30">Price Range</h5>
                                    <i class="ri-arrow-right-s-line hp-collapse-arrow hp-text-color-black-60 lh-1"
                                        style="font-size: 24px;"></i>
                                </div>
                            </a>

                            <div class="collapse" id="sidebar-menu-3">
                                <div class="row mt-16">
                                    <div class="col-12">
                                        <input type="range" class="form-range">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider px-0"></div>

                        <div class="col-12 px-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#sidebar-menu-4" role="button"
                                aria-expanded="false" aria-controls="sidebar-menu-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0 text-black-80 hp-text-color-dark-30">Tags</h5>
                                    <i class="ri-arrow-right-s-line hp-collapse-arrow hp-text-color-black-60 lh-1"
                                        style="font-size: 24px;"></i>
                                </div>
                            </a>

                            <div class="collapse" id="sidebar-menu-4">
                                <div class="row mt-16">

                                    @foreach ($tags as $tag)
                                        <div class="col-12 mt-6">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="form-check">
                                                    <a href="" class="form-check-label dark"
                                                        style="color: black;">
                                                        {{ $tag->name }}
                                                    </a>
                                                </div>

                                                <span
                                                    class="hp-caption text-black-80 hp-text-color-dark-30">{{ $tag->products->count() }}</span>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col flex-grow-1 hp-ecommerce-app-content">
                    <div class="row hp-ecommerce-app-header mb-32 g-16">
                        <div class="col flex-grow-1 w-auto hp-ecommerce-app-header-search">
                            <input wire:model.live="search" type="text" placeholder="Search here"
                                class="form-control">
                        </div>

                        <div class="col hp-flex-none w-auto">
                            <div class="row mx-0 nav nav-pills w-auto">
                                <button class="col hp-flex-none btn btn-icon-only active" id="list-grid-tab"
                                    data-bs-toggle="pill" data-bs-target="#list-grid" type="button" role="tab"
                                    aria-controls="list-grid" aria-selected="true">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 2H7.33333V7.33333H2V2ZM2 8.66667H7.33333V14H2V8.66667ZM8.66667 2H14V7.33333H8.66667V2ZM8.66667 8.66667H14V14H8.66667V8.66667ZM10 3.33333V6H12.6667V3.33333H10ZM10 10V12.6667H12.6667V10H10ZM3.33333 3.33333V6H6V3.33333H3.33333ZM3.33333 10V12.6667H6V10H3.33333Z"
                                            fill="#B2BEC3"></path>
                                    </svg>
                                </button>

                                <button class="ms-16 col hp-flex-none btn btn-icon-only" id="list-horizontal-tab"
                                    data-bs-toggle="pill" data-bs-target="#list-horizontal" type="button"
                                    role="tab" aria-controls="list-horizontal" aria-selected="false">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.33333 2.66659H14V3.99992H5.33333V2.66659ZM3 4.33325C2.73478 4.33325 2.48043 4.2279 2.29289 4.04036C2.10536 3.85282 2 3.59847 2 3.33325C2 3.06804 2.10536 2.81368 2.29289 2.62615C2.48043 2.43861 2.73478 2.33325 3 2.33325C3.26522 2.33325 3.51957 2.43861 3.70711 2.62615C3.89464 2.81368 4 3.06804 4 3.33325C4 3.59847 3.89464 3.85282 3.70711 4.04036C3.51957 4.2279 3.26522 4.33325 3 4.33325ZM3 8.99992C2.73478 8.99992 2.48043 8.89456 2.29289 8.70703C2.10536 8.51949 2 8.26514 2 7.99992C2 7.7347 2.10536 7.48035 2.29289 7.29281C2.48043 7.10528 2.73478 6.99992 3 6.99992C3.26522 6.99992 3.51957 7.10528 3.70711 7.29281C3.89464 7.48035 4 7.7347 4 7.99992C4 8.26514 3.89464 8.51949 3.70711 8.70703C3.51957 8.89456 3.26522 8.99992 3 8.99992ZM3 13.5999C2.73478 13.5999 2.48043 13.4946 2.29289 13.307C2.10536 13.1195 2 12.8651 2 12.5999C2 12.3347 2.10536 12.0803 2.29289 11.8928C2.48043 11.7053 2.73478 11.5999 3 11.5999C3.26522 11.5999 3.51957 11.7053 3.70711 11.8928C3.89464 12.0803 4 12.3347 4 12.5999C4 12.8651 3.89464 13.1195 3.70711 13.307C3.51957 13.4946 3.26522 13.5999 3 13.5999ZM5.33333 7.33325H14V8.66659H5.33333V7.33325ZM5.33333 11.9999H14V13.3333H5.33333V11.9999Z"
                                            fill="#B2BEC3"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="list-grid" role="tabpanel"
                            aria-labelledby="list-grid-tab">
                            <div class="row g-32">

                                @foreach ($products as $product)
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="card hp-card-6 hp-eCommerceCardOne hp-eCommerceCardOne-wishlist">
                                            <div class="card-body p-16">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div
                                                            class="row mx-0 align-items-start justify-content-between ">
                                                            @foreach ($product->tags as $tag)
                                                                <span
                                                                    class="badge bg-primary-4 hp-bg-dark-primary text-primary border-none w-auto py-8 px-16 fw-medium">{{ $tag->name }}</span>
                                                            @endforeach



                                                            @auth
                                                                @if (auth()->user()->favorites->contains('product_id', $product->id))
                                                                    <div
                                                                        class="d-flex w-auto d-flex align-items-center justify-content-center lh-1 hp-wish-button hp-cursor-pointer rounded-circle remix-icon p-8 text-danger bg-danger-4 hp-bg-color-dark-danger">
                                                                        <form
                                                                            action="{{ route('favorites.remove', $product->id) }}"
                                                                            method="post">
                                                                            @csrf
                                                                            @method('delete')

                                                                            <button type="submit"
                                                                                class="border-0 bg-transparent p-0">
                                                                                <i
                                                                                    class="ri-heart-fill lh text-danger"></i>

                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                @else
                                                                    <div
                                                                        class="d-flex d-flex align-items-center justify-content-center w-auto w-100 h-100 lh-1 hp-wish-button hp-cursor-pointer rounded-circle remix-icon p-8 text-black-40 hp-text-color-dark-70 bg-black-10 hp-bg-color-dark-90">
                                                                        <form action="{{ route('favorites.add') }}"
                                                                            method="post">
                                                                            @csrf
                                                                            <input type="hidden" name="product_id"
                                                                                value="{{ $product->id }}">
                                                                            <button type="submit"
                                                                                class="border-0 bg-transparent p-0 ">
                                                                                <i class="ri-heart-fill lh-normal"></i>
                                                                            </button>
                                                                        </form>

                                                                    </div>
                                                                @endif
                                                            @else
                                                                @if (isset($favorites_session[$product->id]))
                                                                    <div
                                                                        class="d-flex w-auto d-flex align-items-center justify-content-center lh-1 hp-wish-button hp-cursor-pointer rounded-circle remix-icon p-8 text-danger bg-danger-4 hp-bg-color-dark-danger">
                                                                        <form
                                                                            action="{{ route('favorites_session.remove', $product->id) }}"
                                                                            method="post">
                                                                            @csrf
                                                                            @method('delete')

                                                                            <button type="submit"
                                                                                class="border-0 bg-transparent p-0">
                                                                                <i
                                                                                    class="ri-heart-fill lh text-danger"></i>

                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                @else
                                                                    <div
                                                                        class="d-flex d-flex align-items-center justify-content-center w-auto w-100 h-100 lh-1 hp-wish-button hp-cursor-pointer rounded-circle remix-icon p-8 text-black-40 hp-text-color-dark-70 bg-black-10 hp-bg-color-dark-90">
                                                                        <form action="{{ route('favorites_session.add') }}"
                                                                            method="post">
                                                                            @csrf
                                                                            <input type="hidden" name="product_id"
                                                                                value="{{ $product->id }}">
                                                                            <button type="submit"
                                                                                class="border-0 bg-transparent p-0 ">
                                                                                <i class="ri-heart-fill lh-normal"></i>
                                                                            </button>
                                                                        </form>

                                                                    </div>
                                                                @endif

                                                            @endguest




                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="text-center my-24">
                                                            <a href="{{ route('product.detail', $product->id) }}"
                                                                class="d-block">
                                                                <img src="{{ Storage::url($product->image) }}"
                                                                    alt="Smart Watches 3" height="125">
                                                            </a>
                                                        </div>

                                                        <div class="row justify-content-between">
                                                            <div class="col w-auto">
                                                                <p style="font-size: 10px; margin-top: 5px;">By
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
                                                                <a href="{{ route('product.detail', $product->id) }}">
                                                                    <button type="button"
                                                                        class="btn w-100 text-black-60 hp-hover-text-color-primary-1 hp-hover-text-color-dark-primary-2">
                                                                        <span>Check Detail</span>
                                                                    </button>
                                                                </a>
                                                            </div>


                                                            <div class="col-12">
                                                                <div class="row g-8">


                                                                    <div class="col-12">

                                                                        @auth
                                                                            <form action="{{ route('cart.add') }}"
                                                                                method="post">
                                                                                @csrf


                                                                                <input type="hidden" name="product_id"
                                                                                    value="{{ $product->id }}">
                                                                                <input type="hidden" name="quantity"
                                                                                    value="1">
                                                                                <input type="hidden" name="price"
                                                                                    value="{{ $product->price }}">
                                                                                <button
                                                                                    class="btn btn-primary px-12 w-100">
                                                                                    <i
                                                                                        class="ri-shopping-bag-line remix-icon"></i>
                                                                                    <span>Add To Cart</span>
                                                                                </button>
                                                                            </form>
                                                                        @else
                                                                            <form action="{{ route('cart_session.add') }}"
                                                                                method="post">
                                                                                @csrf


                                                                                <input type="hidden" name="product_id"
                                                                                    value="{{ $product->id }}">
                                                                                <input type="hidden" name="quantity"
                                                                                    value="1">
                                                                                <input type="hidden" name="price"
                                                                                    value="{{ $product->price }}">
                                                                                <button
                                                                                    class="btn btn-primary px-12 w-100">
                                                                                    <i
                                                                                        class="ri-shopping-bag-line remix-icon"></i>
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
                                        </div>
                                    </div>
                                @endforeach




                            </div>
                        </div>


                        <div class="tab-pane fade" id="list-horizontal" role="tabpanel"
                            aria-labelledby="list-horizontal-tab">
                            <div class="row g-32">


                                @foreach ($products as $product)
                                    <div class="col-12">
                                        <div class="card hp-eCommerceCardOne hp-eCommerceCardOne-large">
                                            <div class="card-body">
                                                <div class="row g-32">
                                                    <div class="col-12 col-md-5 mb-24 mb-md-0">
                                                        <div
                                                            class="row mx-0 align-items-start justify-content-between">

                                                            @foreach ($product->tags as $tag)
                                                                <span
                                                                    class="badge bg-primary-4 hp-bg-dark-primary text-primary border-none w-auto py-8 px-16 fw-medium">{{ $tag->name }}</span>
                                                            @endforeach


                                                            @auth
                                                            @if (auth()->user()->favorites->contains('product_id', $product->id))
                                                                <div
                                                                    class="d-flex w-auto d-flex align-items-center justify-content-center lh-1 hp-wish-button hp-cursor-pointer rounded-circle remix-icon p-8 text-danger bg-danger-4 hp-bg-color-dark-danger">
                                                                    <form
                                                                        action="{{ route('favorites.remove', $product->id) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('delete')

                                                                        <button type="submit"
                                                                            class="border-0 bg-transparent p-0">
                                                                            <i
                                                                                class="ri-heart-fill lh text-danger"></i>

                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            @else
                                                                <div
                                                                    class="d-flex d-flex align-items-center justify-content-center w-auto w-100 h-100 lh-1 hp-wish-button hp-cursor-pointer rounded-circle remix-icon p-8 text-black-40 hp-text-color-dark-70 bg-black-10 hp-bg-color-dark-90">
                                                                    <form action="{{ route('favorites.add') }}"
                                                                        method="post">
                                                                        @csrf
                                                                        <input type="hidden" name="product_id"
                                                                            value="{{ $product->id }}">
                                                                        <button type="submit"
                                                                            class="border-0 bg-transparent p-0 ">
                                                                            <i class="ri-heart-fill lh-normal"></i>
                                                                        </button>
                                                                    </form>

                                                                </div>
                                                            @endif
                                                        @else
                                                            @if (isset($favorites_session[$product->id]))
                                                                <div
                                                                    class="d-flex w-auto d-flex align-items-center justify-content-center lh-1 hp-wish-button hp-cursor-pointer rounded-circle remix-icon p-8 text-danger bg-danger-4 hp-bg-color-dark-danger">
                                                                    <form
                                                                        action="{{ route('favorites_session.remove', $product->id) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('delete')

                                                                        <button type="submit"
                                                                            class="border-0 bg-transparent p-0">
                                                                            <i
                                                                                class="ri-heart-fill lh text-danger"></i>

                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            @else
                                                                <div
                                                                    class="d-flex d-flex align-items-center justify-content-center w-auto w-100 h-100 lh-1 hp-wish-button hp-cursor-pointer rounded-circle remix-icon p-8 text-black-40 hp-text-color-dark-70 bg-black-10 hp-bg-color-dark-90">
                                                                    <form action="{{ route('favorites_session.add') }}"
                                                                        method="post">
                                                                        @csrf
                                                                        <input type="hidden" name="product_id"
                                                                            value="{{ $product->id }}">
                                                                        <button type="submit"
                                                                            class="border-0 bg-transparent p-0 ">
                                                                            <i class="ri-heart-fill lh-normal"></i>
                                                                        </button>
                                                                    </form>

                                                                </div>
                                                            @endif

                                                        @endguest

                                                        </div>

                                                        <div class="col-12 text-center">
                                                            <a href="{{ route('product.detail', $product->id) }}">
                                                                <img src="{{ Storage::url($product->image) }}"
                                                                    alt="Smart Watches 3" height="155">
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-md-7">
                                                        <div class="col w-auto">
                                                            <p style="font-size: 12px; margin-top: 5px;">By
                                                                {{ $product->brand->name }}</p>
                                                        </div>

                                                        <div class="my-8">
                                                            <h4 class="mb-4">{{ $product->name }}</h4>
                                                        </div>

                                                        <p
                                                            class="mb-0 hp-p1-body fw-normal text-black-80 hp-text-color-dark-30">
                                                            {{ Str::limit($product->description, 120, '...') }}</p>

                                                        <div class="d-flex align-items-center mt-8 mb-12 mb-sm-0">

                                                            <p class="w-auto px-0 mb-0 text-primary fw-medium">
                                                                ${{ $product->price }}</p>

                                                        </div>

                                                        <div class="row mt-0 g-8">
                                                            <div class="col-12 col-xl-5">
                                                                <a href="{{ route('product.detail', $product->id) }}">
                                                                    <button type="button"
                                                                        class="btn w-100 text-black-60 hp-hover-text-color-primary-1 hp-hover-text-color-dark-primary-2">
                                                                        <span>Check Detail</span>
                                                                    </button>
                                                                </a>
                                                            </div>


                                                            <div class="col-6 col-xl-5">
                                                                @auth
                                                                    <form action="{{ route('cart.add') }}"
                                                                        method="post">
                                                                        @csrf


                                                                        <input type="hidden" name="product_id"
                                                                            value="{{ $product->id }}">
                                                                        <input type="hidden" name="quantity"
                                                                            value="1">
                                                                        <input type="hidden" name="price"
                                                                            value="{{ $product->price }}">
                                                                        <button class="btn btn-primary px-12 w-100">
                                                                            <i class="ri-shopping-bag-line remix-icon"></i>
                                                                            <span>Add To Cart</span>
                                                                        </button>
                                                                    </form>
                                                                @else
                                                                    <form action="{{ route('cart_session.add') }}"
                                                                        method="post">
                                                                        @csrf


                                                                        <input type="hidden" name="product_id"
                                                                            value="{{ $product->id }}">
                                                                        <input type="hidden" name="quantity"
                                                                            value="1">
                                                                        <input type="hidden" name="price"
                                                                            value="{{ $product->price }}">
                                                                        <button class="btn btn-primary px-12 w-100">
                                                                            <i class="ri-shopping-bag-line remix-icon"></i>
                                                                            <span>Add To Cart</span>
                                                                        </button>
                                                                    </form>
                                                                @endguest
                                                            </div>

                                                            {{-- <div class="col-6 col-xl-2">
                                                                <div class="input-number w-100">
                                                                    <div class="input-number-handler-wrap">
                                                                        <span
                                                                            class="input-number-handler input-number-handler-up">
                                                                            <span
                                                                                class="input-number-handler-up-inner">
                                                                                <svg viewBox="64 64 896 896"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor">
                                                                                    <path
                                                                                        d="M890.5 755.3L537.9 269.2c-12.8-17.6-39-17.6-51.7 0L133.5 755.3A8 8 0 00140 768h75c5.1 0 9.9-2.5 12.9-6.6L512 369.8l284.1 391.6c3 4.1 7.8 6.6 12.9 6.6h75c6.5 0 10.3-7.4 6.5-12.7z">
                                                                                    </path>
                                                                                </svg>
                                                                            </span>
                                                                        </span>

                                                                        <span
                                                                            class="input-number-handler input-number-handler-down input-number-handler-down-disabled">
                                                                            <span
                                                                                class="input-number-handler-down-inner">
                                                                                <svg viewBox="64 64 896 896"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor">
                                                                                    <path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z">
                                                                                    </path>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                    </div>

                                                                    <div class="input-number-input-wrap">
                                                                        <input class="input-number-input"
                                                                            type="number" min="1"
                                                                            max="10" value="">
                                                                    </div>
                                                                </div>
                                                            </div> --}}

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
                                        <svg viewBox="64 64 896 896" focusable="false" data-icon="left"
                                            width="12px" height="12px" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M724 218.3V141c0-6.7-7.7-10.4-12.9-6.3L260.3 486.8a31.86 31.86 0 000 50.3l450.8 352.1c5.3 4.1 12.9.4 12.9-6.3v-77.3c0-4.9-2.3-9.6-6.1-12.6l-360-281 360-281.1c3.8-3 6.1-7.7 6.1-12.6z">
                                            </path>
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
                                        <svg viewBox="64 64 896 896" focusable="false" data-icon="right"
                                            width="12px" height="12px" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M765.7 486.8L314.9 134.7A7.97 7.97 0 00302 141v77.3c0 4.9 2.3 9.6 6.1 12.6l360 281.1-360 281.1c-3.9 3-6.1 7.7-6.1 12.6V883c0 6.7 7.7 10.4 12.9 6.3l450.8-352.1a31.96 31.96 0 000-50.4z">
                                            </path>
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
