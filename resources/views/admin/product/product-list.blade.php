@extends('layouts.admin')

@section('content')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <meta name="author" content="Hypeople">
        <meta name="description" content="Responsive, Highly Customizable Dashboard Template" />

        <!-- Favicon -->

        <meta name="msapplication-TileColor" content="#0010f7">
        <meta name="theme-color" content="#ffffff">

        <!-- Font -->

        <!-- Plugin -->
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugin/swiper-bundle.min.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/icons/iconly/index.min.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/icons/remix-icon/index.min.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">

        <!-- Base -->
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/base/typography.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/base/base.css">

        <!-- Theme -->
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/theme/colors-dark.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/theme/theme-dark.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom-rtl.css">

        <!-- Layouts -->
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/layouts/sider.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/layouts/header.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/layouts/page-content.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">

        <!-- Pages -->
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-ecommerce.css">

        <!-- Custom -->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">

        <title>Shop Ecommerce - Yoda Admin Html Template</title>
    </head>


    <div class="hp-main-layout">
        <livewire:product-search />
    </div>
@endsection
