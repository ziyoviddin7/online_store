<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Admin Panel</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/style.css') }}">




    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('admin/assets/font/fonts.css') }}">

    <!-- Icon -->
    <link rel="stylesheet" href="{{ asset('admin/assets/icon/style.css') }}">

    <!-- Favicon and Touch Icons -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('admin/assets/images/favicon.png') }}">

    @livewireStyles


</head>

<body class="body">
    
    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">
            <!-- layout-wrap -->
            <div class="layout-wrap">
                <!-- section-menu-left -->
                <div class="section-menu-left">
                    <div class="box-logo">
                        <a href="{{ route('admin.product_list') }}" id="site-logo-inner" style="font-size: 30px">
                            Admin Panel
                        </a>
                    </div>
                    <div class="center">
                        <div class="center-item">
                            <ul class="menu-list">
                                <li class="menu-item has-children active">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div class="icon"><i class="icon-shopping-cart"></i></div>
                                        <div class="text">Product</div>
                                    </a>
                                    <ul class="sub-menu" style="display: block;">
                                        <li class="sub-menu-item">
                                            <a href="{{ route('admin.product.create') }}" class="">
                                                <div class="text">Add Product</div>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="{{ route('admin.product_list') }}" class="">
                                                <div class="text">Products</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div class="icon"><i class="icon-layers"></i></div>
                                        <div class="text">Category</div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="{{ route('admin.category.index') }}" class="">
                                                <div class="text">Categories</div>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="{{ route('admin.category.create') }}" class="">
                                                <div class="text">New category</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div class="icon"><i class="icon-plus"></i></div>
                                        <div class="text">Brand</div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="{{ route('admin.brand.index') }}"" class="">
                                                <div class="text">Brands</div>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="{{ route('admin.brand.create') }}"" class="">
                                                <div class="text">New Brand</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div class="icon"><i class="icon-file"></i></div>
                                        <div class="text">Tag</div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="{{ route('admin.tag.index') }}"" class="">
                                                <div class="text">Tags</div>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="{{ route('admin.tag.create') }}"" class="">
                                                <div class="text">New Tag</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="center-item">
                            <div class="center-heading">Connect us</div>
                            <ul class="wg-social">
                                <li>
                                    <a href="#"><i class="icon-facebook"></i></a>
                                </li>
                                <li class="active">
                                    <a href="#"><i class="icon-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="bot text-center">
                        <div class="wrap">
                            <div class="mb-20">
                                <img src="{{ asset('admin/assets/images/menu-left/img-bot.png')}}" alt="">
                            </div>
                            <div class="mb-20">
                                <h6>Hi, how can we help?</h6>
                                <div class="text">Contact us if you have any assistance, we will contact you as soon
                                    as possible</div>
                            </div>
                            <a href="#" class="tf-button w-full">Contact</a>
                        </div>
                    </div>
                </div>
                <!-- /section-menu-left -->
                <!-- section-content-right -->
                <div class="section-content-right">
                    <!-- header-dashboard -->
                    <div class="header-dashboard">
                        <div class="wrap">
                            <div class="header-left">
                                <a href="index.html">
                                    <img class="" id="logo_header_mobile" alt=""
                                        src="images/logo/logo.png" data-light="images/logo/logo.png"
                                        data-dark="images/logo/logo-dark.png" data-width="154px" data-height="52px"
                                        data-retina="images/logo/logo@2x.png">
                                </a>
                            </div>
                            <div class="header-grid">
                                <div class="header-item button-dark-light">
                                    <i class="icon-moon"></i>
                                </div>
                                <div class="header-item button-zoom-maximize">
                                    <div class="">
                                        <i class="icon-maximize"></i>
                                    </div>
                                </div>
                                <div class="popup-wrap user type-header">
                                    <div class="dropdown">
                                        
                                        <button class="btn btn-secondary btn-light dropdown-toggle" type="button"
                                            id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-user wg-user">
                                                <span class="flex flex-column" style="margin-left: 70px">
                                                    <span class="body-title mb-2">{{ $user_main->name }}</span>
                                                    <span class="text-tiny" style="color: black">Admin</span>
                                                </span>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end has-content"
                                            aria-labelledby="dropdownMenuButton3">
                                            
                                            <li>
                                                <a href="{{ route('admin.logout') }}" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-log-out"></i>
                                                    </div>
                                                    <div class="body-title-2">Log out</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /header-dashboard -->
                    <!-- main-content -->
                    @yield('content')
                    <!-- /main-content -->
                </div>
                <!-- /section-content-right -->
            </div>
            <!-- /layout-wrap -->
        </div>
        <!-- /#page -->
    </div>

    
    <!-- /#wrapper -->

    <!-- Javascript -->
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/zoom.js') }}"></script>
    <!-- <script src="{{ asset('admin/assets/js/switcher.js') }}"></script> -->
    <script src="{{ asset('admin/assets/js/theme-settings.js') }}"></script>
    <script src="{{ asset('admin/assets/js/main.js') }}"></script>

    @livewireScripts


</body>

</html>
