@extends('layouts.admin')

@section('content')
    <div class="section-content-right">
        <!-- header-dashboard -->

        <!-- /header-dashboard -->
        <!-- main-content -->
        <div class="main-content">
            <!-- main-content-wrap -->
            <div class="main-content-inner">
                <!-- main-content-wrap -->
                <div class="main-content-wrap">
                    <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                        <h3>Add Product</h3>
                        <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                            
                            <li>
                                <a href="#">
                                    <div class="text-tiny">Products</div>
                                </a>
                            </li>
                            <li>
                                <i class="icon-chevron-right"></i>
                            </li>
                            <li>
                                <div class="text-tiny">Add product</div>
                            </li>
                        </ul>
                    </div>
                    <!-- form-add-product -->
                    <style>
                        .row {
                            display: flex;
                            gap: 20px;
                        }

                        .name {
                            flex: 1;
                        }
                    </style>
                    <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data"
                        class="tf-section-2 form-add-product">
                        @csrf
                        <div class="wg-box">
                            <div class="row">
                                <fieldset class="name">
                                    <div class="body-title mb-10">Name <span class="tf-color-1">*</span></div>
                                    <input class="mb-10" type="text" placeholder="Enter product name" name="name"
                                        tabindex="0" value="{{ old('name') }}" aria-required="true" required>
                                </fieldset>
                                @error('name')
                                    <p style="color: red"> {{ $message }}</p>
                                @enderror
                            </div>

                            <div class="row">
                                <fieldset class="name">
                                    <div class="body-title mb-10">Price <span class="tf-color-1">*</span></div>
                                    <input class="mb-10" type="number" placeholder="0" name="price" tabindex="0"
                                        value="{{ old('price') }}" aria-required="true" required>
                                    @error('price')
                                        <p style="color: red"> {{ $message }}</p>
                                    @enderror
                                </fieldset>
                                <fieldset class="name">
                                    <div class="body-title mb-10">Stock <span class="tf-color-1">*</span></div>
                                    <input class="mb-10" type="number" placeholder="0" name="stock" tabindex="0"
                                        value="{{ old('stock') }}" aria-required="true" required>
                                    @error('stock')
                                        <p style="color: red"> {{ $message }}</p>
                                    @enderror
                                </fieldset>
                            </div>

                            



                            <fieldset class="description">
                                <div class="body-title mb-10">Description <span class="tf-color-1">*</span></div>
                                <textarea class="mb-10" name="description" placeholder="Description" tabindex="0" aria-required="true"
                                    required="">{{ old('description') }}</textarea>
                                @error('description')
                                    <p style="color: red"> {{ $message }}</p>
                                @enderror
                            </fieldset>
                        </div>

                        <div class="wg-box">
                            <fieldset>
                                <div class="body-title mb-10">Upload image</div>
                                <div class="upload-image mb-16">
                                    <div class="item up-load">
                                        <label class="uploadfile">
                                            <span class="icon">
                                                <i class="icon-upload-cloud"></i>
                                            </span>
                                            <span class="text-tiny">Drop your image here or select
                                                <span class="tf-color">click to browse</span>
                                            </span>
                                        </label>
                                        <input type="file" name="image">

                                    </div>

                                </div>
                                @error('image')
                                    <p style="color: red"> {{ $message }}</p>
                                @enderror
                            </fieldset>
                            <div class="gap22 cols">
                                <fieldset class="category">
                                    <div class="body-title mb-10">Category <span class="tf-color-1">*</span></div>
                                    <div class="select">
                                        <select class="" name="category_id">
                                            @foreach ($categories as $category)
                                                <option {{ old('category_id') == $category->id ? ' selected' : '' }}
                                                    value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>

                                </fieldset>
                                <fieldset class="male">
                                    <div class="body-title mb-10">Brand <span class="tf-color-1">*</span></div>
                                    <div class="select">
                                        <select class="" name="brand_id">
                                            @foreach ($brands as $brand)
                                                <option {{ old('brand_id') == $brand->id ? ' selected' : '' }}
                                                    value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </fieldset>
                            </div>

                            <div class="row">
                                <fieldset class="category">
                                    <div class="body-title mb-10">Tag <span class="tf-color-1">*</span></div>
                                    <div class="select">
                                        <select class="" name="tag_id">
                                            <option value="Tag"></option>
                                            @foreach ($tags as $tag)
                                                <option {{ old('tag_id') == $tag->id ? ' selected' : '' }}
                                                    value="{{ $tag->id }}">{{ $tag->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </fieldset>

                            </div>

                            <div class="cols gap10">
                                <button class="tf-button w-full" type="submit">Add product</button>
                            </div>
                        </div>
                    </form>
                    <!-- /form-add-product -->
                </div>
                <!-- /main-content-wrap -->
            </div>
            <!-- /main-content-wrap -->
            <!-- bottom-page -->
            <div class="bottom-page">
                <div class="body-text">Copyright © 2024 Remos. Design with</div>
                <i class="icon-heart"></i>
                <div class="body-text">by <a href="https://themeforest.net/user/themesflat/portfolio">Themesflat</a> All
                    rights reserved.</div>
            </div>
            <!-- /bottom-page -->
        </div>
        <!-- /main-content -->
    </div>
@endsection
