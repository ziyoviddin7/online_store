<div>
    <div class="row mb-32 gy-32">

        <div class="col-12">
            <div class="row g-32">

                <div class="col hp-ecommerce-app-sidebar" style="flex: 0 0 270px;">
                    <div
                        class="row mx-0 rounded overflow-hidden border border-black-40 hp-border-color-dark-80 bg-black-0 hp-bg-color-dark-100 px-24 py-16">
                        <div class="col-12 px-0">
                            <h5 class="mb-4 text-black-80 hp-text-color-dark-30">All Products</h5>
                           
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
                                                            <a href="{{ route('product.detail', $product->slug) }}"
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
                                                                <a href="{{ route('product.detail', $product->slug) }}">
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
                        
                        <br>
                        <br>
                        <br>

                        {{ $products->links('livewire::bootstrap') }}

                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
