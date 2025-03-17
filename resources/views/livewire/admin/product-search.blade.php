<div>


    <div class="row mb-32 gy-32" style="margin-left: 260px; margin-top: 100px;">

        <h1>All products</h1>
        <div class="col-12">
            <div class="row g-32">



                <div class="col flex-grow-1 hp-ecommerce-app-content">

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="list-grid" role="tabpanel"
                            aria-labelledby="list-grid-tab">
                            <div class="row g-32">




                                <!-- Поисковая строка -->
                                <div class="mb-40" style="margin-left: 640px; margin-top: -20px; font-size: 50px;">
                                    <input type="text" wire:model.live="search"
                                        placeholder="Search products..." class="form-control"
                                        style="max-width: 300px;  height: 50px; font-size: 20px">
                                </div>


                                @foreach ($products as $product)
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="card hp-card-6 hp-eCommerceCardOne hp-eCommerceCardOne-wishlist"
                                            style="height: 500px;">
                                            <div class="card-body p-16">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div
                                                            class="row mx-0 align-items-start justify-content-between">
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
                                                                <p style="margin-top: -7px">stock:
                                                                    {{ $product->stock }}
                                                                </p>
                                                               
                                                            </div>

                                                        </div>
                                                    </div>


                                                    <div class="col-12 ">
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

                                                                    <p
                                                                        class="w-auto px-0 mb-0 text-primary fw-medium">
                                                                        ${{ $product->price }}</p>


                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 mb-16 mt-16">
                                                            <p class="mb-4 text-black-100 " style="color: green">
                                                                Category: {{ $product->category->name }}</p>
                                                            <p
                                                                class="mb-4 text-black-100 hp-text-color-dark-0 hp-p1-body fw-medium">
                                                                {{ $product->name }}</p>
                                                            <p
                                                                class="mb-0 hp-caption fw-normal text-black-80 hp-text-color-dark-30">
                                                                {{ Str::limit($product->description, 40, '...') }}
                                                            </p>
                                                        </div>


                                                        <div class="row mt-0 g-8" style="margin-left: 30px">
                                                            <div class="col-12 col-xl-5">
                                                                <a
                                                                    href="{{ route('admin.product.show', $product->id) }}">
                                                                    <button type="button"
                                                                        class="btn w-100 text-black-60 hp-hover-text-color-primary-1 hp-hover-text-color-dark-primary-2">
                                                                        <span>Check Detail</span>
                                                                    </button>
                                                                </a>
                                                            </div>


                                                            <div class="col-20 col-xl-5">
                                                                <form
                                                                    action="{{ route('admin.product.delete', $product->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button class="btn btn-primary w-1000">
                                                                        <i
                                                                            class="ri-delete-bin-5-line remix-icon"></i>
                                                                        <span>Delete</span>
                                                                    </button>
                                                                </form>

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
                                
                                {{-- <div style="margin-left: 800px">
                                    {{ $products->links() }}
                                </div> --}}


                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
