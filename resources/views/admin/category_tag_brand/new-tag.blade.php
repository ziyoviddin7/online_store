@extends('layouts.admin')

@section('content')
    <div class="main-content">
        <!-- main-content-wrap -->
        <div class="main-content-inner">
            <!-- main-content-wrap -->
            <div class="main-content-wrap">
                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                    <h3>New Tag</h3>
                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">

                        <li>
                            <a href="#">
                                <div class="text-tiny">Tag</div>
                            </a>
                        </li>
                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                        <li>
                            <div class="text-tiny">New Tag</div>
                        </li>
                    </ul>
                </div>
                <!-- new-category -->
                <div class="wg-box">
                    <form action="{{ route('admin.tag.store') }}" method="post" class="form-new-product form-style-1">
                        @csrf
                        <fieldset class="name">
                            <div class="body-title">Name <span class="tf-color-1">*</span></div>

                            <input class="flex-grow" type="text" placeholder="Tag name" name="name"
                                tabindex="0" aria-required="true" required="">
                            @error('name')
                                <p style="color: red"> {{ $message }}</p>
                            @enderror
                        </fieldset>
                        <div class="bot">
                            <div></div>
                            <button class="tf-button w208" type="submit">Save</button>
                        </div>
                    </form>
                </div>
                <!-- /new-category -->
            </div>
            <!-- /main-content-wrap -->
        </div>
        <!-- /main-content-wrap -->
        <!-- bottom-page -->
        <div class="bottom-page">
            <div class="body-text">Copyright © 2024 Remos. Design with</div>
            <i class="icon-heart"></i>
            <div class="body-text">by <a href="https://themeforest.net/user/themesflat/portfolio">Themesflat</a> All rights
                reserved.</div>
        </div>
        <!-- /bottom-page -->
    </div>
@endsection
