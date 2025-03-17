@extends('layouts.main')

@section('content')
    {{-- <div class="hp-main-layout-content">

    <div class="row mb-32 g-32">
        <div class="col flex-grow-1 overflow-hidden">
            <div class="row g-32">
                <div class="col-12">
                    <h1 class="hp-mb-0">Dashboard</h1>
                </div>

                <div class="col-12">
                    <div class="row g-32">
                        <div class="col-md-4 col-6">
                            <div
                                class="card hp-dashboard-feature-card hp-border-color-black-0 hp-border-color-dark-80 hp-cursor-pointer">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-center hp-dashboard-feature-card-icon rounded-3 hp-bg-black-20 hp-bg-dark-80"
                                        style="width: 48px; height: 48px;">
                                        <svg class="hp-text-color-black-bg hp-text-color-dark-0"
                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M18.809 6.25h1.36c-.19-.27-.39-.52-.6-.77l-.76.77ZM18.52 4.42c-.25-.21-.5-.41-.77-.6v1.36l.77-.76ZM19.58 5.481l2.95-2.95c.29-.29.29-.77 0-1.06a.754.754 0 0 0-1.06 0l-2.95 2.95c.38.33.73.69 1.06 1.06ZM17.752 3c0-.41-.34-.75-.75-.75-.4 0-.72.32-.74.71.52.25 1.02.53 1.49.86V3ZM21.752 7c0-.41-.34-.75-.75-.75h-.83c.33.47.62.97.86 1.49.4-.02.72-.34.72-.74ZM12.75 14.75h.3c.39 0 .7-.35.7-.78 0-.54-.15-.62-.49-.74l-.51-.18v1.7Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M21.04 7.74c-.01 0-.02.01-.04.01h-4c-.1 0-.19-.02-.29-.06a.782.782 0 0 1-.41-.41.868.868 0 0 1-.05-.28V3c0-.01.01-.02.01-.04C14.96 2.35 13.52 2 12 2 6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10c0-1.52-.35-2.96-.96-4.26Zm-7.29 4.08c.64.22 1.5.69 1.5 2.16 0 1.25-.99 2.28-2.2 2.28h-.3v.25c0 .41-.34.75-.75.75s-.75-.34-.75-.75v-.25h-.08c-1.33 0-2.42-1.12-2.42-2.5 0-.42.34-.76.75-.76s.75.34.75.75c0 .55.41 1 .92 1h.08v-2.22l-1-.35c-.64-.22-1.5-.69-1.5-2.16 0-1.25.99-2.28 2.2-2.28h.3V7.5c0-.41.34-.75.75-.75s.75.34.75.75v.25h.08c1.33 0 2.42 1.12 2.42 2.5 0 .41-.34.75-.75.75s-.75-.34-.75-.75c0-.55-.41-1-.92-1h-.08v2.22l1 .35Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M10.25 10.03c0 .54.15.62.49.74l.51.18v-1.7h-.3c-.38 0-.7.35-.7.78Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </div>

                                    <div class="d-flex mt-12">
                                        <span
                                            class="h4 mb-0 d-block hp-text-color-black-bg hp-text-color-dark-0 fw-medium me-4">
                                            Income </span>
                                        <div>
                                            <svg class="hp-text-color-success-1"
                                                xmlns="http://www.w3.org/2000/svg" width="14"
                                                height="14" viewBox="0 0 24 24" fill="none">
                                                <path fill="currentColor"
                                                    d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81v8.37C2 19.83 4.17 22 7.81 22h8.37c3.64 0 5.81-2.17 5.81-5.81V7.81C22 4.17 19.83 2 16.19 2zm1.06 10.33c0 .41-.34.75-.75.75s-.75-.34-.75-.75V9.31l-7.72 7.72c-.15.15-.34.22-.53.22s-.38-.07-.53-.22a.754.754 0 010-1.06l7.72-7.72h-3.02c-.41 0-.75-.34-.75-.75s.34-.75.75-.75h4.83c.41 0 .75.34.75.75v4.83z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>

                                    <span
                                        class="hp-caption mt-4 d-block fw-normal hp-text-color-black-60">
                                        April 2022 </span>
                                    <span class="d-block mt-12 mb-8 h3"> $13,908 </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-6">
                            <div
                                class="card hp-dashboard-feature-card hp-border-color-black-0 hp-border-color-dark-80 hp-cursor-pointer">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-center hp-dashboard-feature-card-icon rounded-3 hp-bg-black-20 hp-bg-dark-80"
                                        style="width: 48px; height: 48px;">
                                        <svg class="hp-text-color-black-bg hp-text-color-dark-0"
                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M10.25 10.03c0 .54.15.62.49.74l.51.18v-1.7h-.3c-.38 0-.7.35-.7.78ZM12.75 14.75h.3c.39 0 .7-.35.7-.78 0-.54-.15-.62-.49-.74l-.51-.18v1.7Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="m19.58 5.48-2.05 2.05c-.15.15-.34.22-.53.22s-.38-.07-.53-.22a.754.754 0 0 1 0-1.06l2.05-2.05C16.76 2.92 14.49 2 12 2 6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10c0-2.49-.92-4.76-2.42-6.52Zm-5.83 6.34c.64.23 1.5.69 1.5 2.16 0 1.25-.99 2.28-2.2 2.28h-.3v.25c0 .41-.34.75-.75.75s-.75-.34-.75-.75v-.25h-.08c-1.33 0-2.42-1.12-2.42-2.5 0-.42.34-.76.75-.76s.75.34.75.75c0 .55.41 1 .92 1h.08v-2.22l-1-.35c-.64-.23-1.5-.69-1.5-2.16 0-1.25.99-2.28 2.2-2.28h.3V7.5c0-.41.34-.75.75-.75s.75.34.75.75v.25h.08c1.33 0 2.42 1.12 2.42 2.5 0 .41-.34.75-.75.75s-.75-.34-.75-.75c0-.55-.41-1-.92-1h-.08v2.22l1 .35ZM22.69 1.71a.782.782 0 0 0-.41-.41.868.868 0 0 0-.28-.05h-4c-.41 0-.75.34-.75.75s.34.75.75.75h2.19l-1.67 1.67c.38.33.73.68 1.06 1.06l1.67-1.67V6c0 .41.34.75.75.75s.75-.34.75-.75V2c0-.1-.02-.19-.06-.29Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </div>

                                    <div class="d-flex mt-12">
                                        <span
                                            class="h4 mb-0 d-block hp-text-color-black-bg hp-text-color-dark-0 fw-medium me-4">
                                            Expenses </span>
                                        <div>
                                            <svg class="hp-text-color-danger-1"
                                                xmlns="http://www.w3.org/2000/svg" width="14"
                                                height="14" viewBox="0 0 24 24" fill="none">
                                                <path fill="currentColor"
                                                    d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81v8.37C2 19.83 4.17 22 7.81 22h8.37c3.64 0 5.81-2.17 5.81-5.81V7.81C22 4.17 19.83 2 16.19 2zm1.34 5.53l-7.72 7.72h3.02c.41 0 .75.34.75.75s-.34.75-.75.75H8c-.41 0-.75-.34-.75-.75v-4.83c0-.41.34-.75.75-.75s.75.34.75.75v3.02l7.72-7.72c.15-.15.34-.22.53-.22s.38.07.53.22c.29.29.29.77 0 1.06z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>

                                    <span
                                        class="hp-caption mt-4 d-block fw-normal hp-text-color-black-60">
                                        April 2022 </span>
                                    <span class="d-block mt-12 mb-8 h3"> $7,949 </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-6">
                            <div
                                class="card hp-dashboard-feature-card hp-border-color-black-0 hp-border-color-dark-80 hp-cursor-pointer">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-center hp-dashboard-feature-card-icon rounded-3 hp-bg-black-20 hp-bg-dark-80"
                                        style="width: 48px; height: 48px;">
                                        <svg class="hp-text-color-black-bg hp-text-color-dark-0"
                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="m11.94 2.212-2.41 5.61H7.12c-.4 0-.79.03-1.17.11l1-2.4.04-.09.06-.16c.03-.07.05-.13.08-.18 1.16-2.69 2.46-3.53 4.81-2.89ZM18.731 8.09l-.02-.01c-.6-.17-1.21-.26-1.83-.26h-6.26l2.25-5.23.03-.07c.14.05.29.12.44.17l2.21.93c1.23.51 2.09 1.04 2.62 1.68.09.12.17.23.25.36.09.14.16.28.2.43.04.09.07.17.09.26.15.51.16 1.09.02 1.74ZM18.288 9.52c-.45-.13-.92-.2-1.41-.2h-9.76c-.68 0-1.32.13-1.92.39a4.894 4.894 0 0 0-2.96 4.49v1.95c0 .24.02.47.05.71.22 3.18 1.92 4.88 5.1 5.09.23.03.46.05.71.05h7.8c3.7 0 5.65-1.76 5.84-5.26.01-.19.02-.39.02-.59V14.2a4.9 4.9 0 0 0-3.47-4.68Zm-3.79 7.23h-5c-.41 0-.75-.34-.75-.75s.34-.75.75-.75h5c.41 0 .75.34.75.75s-.34.75-.75.75Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </div>

                                    <div class="d-flex mt-12">
                                        <span
                                            class="h4 mb-0 d-block hp-text-color-black-bg hp-text-color-dark-0 fw-medium me-4">
                                            Balance </span>
                                        <div></div>
                                    </div>

                                    <span
                                        class="hp-caption mt-4 d-block fw-normal hp-text-color-black-60">
                                        April 2022 </span>
                                    <span class="d-block mt-12 mb-8 h3"> $5,129 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row">
                        <div class="mb-18 col-12">
                            <div class="row align-items-center justify-content-between">
                                <div class="hp-flex-none w-auto col">
                                    <span class="d-block hp-p1-body">Balance</span>
                                    <span
                                        class="d-block mt-4 h3 fw-semibold hp-text-color-black-bg hp-text-color-dark-0">
                                        $12.389 </span>
                                </div>

                                <div class="hp-flex-none w-auto col">
                                    <span class="hp-p1-body d-block">Past 30 Days</span>
                                </div>
                            </div>
                        </div>

                        <div class="overflow-hidden col-12 mb-n24">
                            <div id="dashboard-analytics-balance-chart" class="overflow-hidden"></div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-sm-6 col-12">
                            <span
                                class="h3 fw-semibold hp-text-color-black-bg hp-text-color-dark-0 d-block mb-0">
                                History </span>
                            <p class="hp-p1-body mt-4 mb-0">Transection of last 6 months</p>
                        </div>

                        <div class="col"></div>
                    </div>

                    <div class="row mt-24 mx-0">
                        <div
                            class="hp-bg-black-0 hp-bg-dark-100 border hp-border-color-black-10 hp-border-color-dark-80 p-12 mb-16 col-12 rounded-5">
                            <div class="row align-items-center justify-content-between">
                                <div class="mb-16 mb-sm-0 col-sm-6 col-12">
                                    <div class="row align-items-center">
                                        <div class="hp-flex-none w-auto pe-0 col">
                                            <div class="hp-cursor-pointer border hp-border-color-dark-80 me-16"
                                                style="border-radius: 15px;">
                                                <div class="overflow-hidden m-4 d-flex hp-bg-danger-4"
                                                    style="min-width: 64px; width: 64px; height: 64px; border-radius: 15px;">
                                                    <img src="../../../app-assets/img/memoji/user-avatar-5.png"
                                                        alt="User" height="100%">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hp-flex-none w-auto ps-0 col">
                                            <span class="d-block h4 mb-0">Edward Adams</span>
                                            <span class="d-block hp-p1-body mt-4">Product Designer</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-sm-end text-start col-sm-3 col-6"
                                    style="min-height: 50px;">
                                    <span class="d-block h4 fw-normal mb-0"> $ 7734.32 </span>
                                    <span class="d-block hp-p1-body mt-4">30432</span>
                                </div>

                                <div class="text-end col-sm-3 col-6" style="min-height: 50px;">
                                    <span class="h4">23.23%</span>
                                </div>
                            </div>
                        </div>

                        <div
                            class="hp-bg-black-0 hp-bg-dark-100 border hp-border-color-black-10 hp-border-color-dark-80 p-12 mb-16 col-12 rounded-5">
                            <div class="row align-items-center justify-content-between">
                                <div class="mb-16 mb-sm-0 col-sm-6 col-12">
                                    <div class="row align-items-center">
                                        <div class="hp-flex-none w-auto pe-0 col">
                                            <div class="hp-cursor-pointer border hp-border-color-dark-80 me-16"
                                                style="border-radius: 15px;">
                                                <div class="overflow-hidden m-4 d-flex hp-bg-info-4"
                                                    style="min-width: 64px; width: 64px; height: 64px; border-radius: 15px;">
                                                    <img src="../../../app-assets/img/memoji/user-avatar-6.png"
                                                        alt="User" height="100%">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hp-flex-none w-auto ps-0 col">
                                            <span class="d-block h4 mb-0">John Doe</span>
                                            <span class="d-block hp-p1-body mt-4">Product Designer</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-sm-end text-start col-sm-3 col-6"
                                    style="min-height: 50px;">
                                    <span class="d-block h4 fw-normal mb-0"> $ 7614.43 </span>
                                    <span class="d-block hp-p1-body mt-4">949</span>
                                </div>

                                <div class="text-end col-sm-3 col-6" style="min-height: 50px;">
                                    <span class="h4">19.03%</span>
                                </div>
                            </div>
                        </div>

                        <div
                            class="hp-bg-black-0 hp-bg-dark-100 border hp-border-color-black-10 hp-border-color-dark-80 p-12 mb-16 col-12 rounded-5">
                            <div class="row align-items-center justify-content-between">
                                <div class="mb-16 mb-sm-0 col-sm-6 col-12">
                                    <div class="row align-items-center">
                                        <div class="hp-flex-none w-auto pe-0 col">
                                            <div class="hp-cursor-pointer border hp-border-color-dark-80 me-16"
                                                style="border-radius: 15px;">
                                                <div class="overflow-hidden m-4 d-flex hp-bg-warning-4"
                                                    style="min-width: 64px; width: 64px; height: 64px; border-radius: 15px;">
                                                    <img src="../../../app-assets/img/memoji/user-avatar-7.png"
                                                        alt="User" height="100%">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hp-flex-none w-auto ps-0 col">
                                            <span class="d-block h4 mb-0">Fazıl Say</span>
                                            <span class="d-block hp-p1-body mt-4">Product Designer</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-sm-end text-start col-sm-3 col-6"
                                    style="min-height: 50px;">
                                    <span class="d-block h4 fw-normal mb-0"> $ 6789.19 </span>
                                    <span class="d-block hp-p1-body mt-4">732</span>
                                </div>

                                <div class="text-end col-sm-3 col-6" style="min-height: 50px;">
                                    <span class="h4">13.98%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hp-flex-none w-auto hp-dashboard-line px-0 col">
            <div class="hp-bg-black-40 hp-bg-dark-80 h-100 mx-24" style="width: 1px;"></div>
        </div>

        <div class="col hp-analytics-col-2">
            <div class="row g-32">
                <div class="col-12">
                    <div class="overflow-hidden position-relative hp-bg-primary-1 pt-24 px-24 pb-18 rounded-5"
                        style="min-height: 200px;">
                        <div class="position-absolute w-100"
                            style="height: 90%; bottom: 0px; left: 0px;">
                            <svg width="100%" height="100%" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M370.717 85.179 180.539 10.257l46.817 86.462L99.151 44.63l129.884 138.803L55.517 116.68l60.47 87.899-127.415-32.922"
                                    stroke="url(#a)" stroke-width="20" stroke-linejoin="bevel"></path>
                                <defs>
                                    <linearGradient id="a" x1="151.96" y1="17.382"
                                        x2="195.449" y2="191.807" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#fff"></stop>
                                        <stop offset="0.737" stop-color="#fff" stop-opacity="0">
                                        </stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <img src="../../../app-assets/img/logo/logo-blue.svg" alt="Yoda">
                            </div>

                            <div class="mt-32 col-12">
                                <span class="h4 d-block hp-text-color-black-0"> 4512 0000 0000 0000 0000
                                </span>
                            </div>

                            <div class="mt-4 mb-n16 col-12">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col">
                                        <span class="hp-caption fw-medium hp-text-color-black-0"> Edward
                                            Adams </span>
                                    </div>

                                    <div class="d-flex hp-flex-none w-auto col">
                                        <svg stroke="currentColor" fill="currentColor"
                                            stroke-width="0" viewBox="0 0 24 24" height="64"
                                            width="64" xmlns="http://www.w3.org/2000/svg"
                                            class="hp-text-color-black-0">
                                            <g>
                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                <path
                                                    d="M22.222 15.768l-.225-1.125h-2.514l-.4 1.117-2.015.004a4199.19 4199.19 0 0 1 2.884-6.918c.164-.391.455-.59.884-.588.328.003.863.003 1.606.001L24 15.765l-1.778.003zm-2.173-2.666h1.62l-.605-2.82-1.015 2.82zM7.06 8.257l2.026.002-3.132 7.51-2.051-.002a950.849 950.849 0 0 1-1.528-5.956c-.1-.396-.298-.673-.679-.804C1.357 8.89.792 8.71 0 8.465V8.26h3.237c.56 0 .887.271.992.827.106.557.372 1.975.8 4.254L7.06 8.257zm4.81.002l-1.602 7.508-1.928-.002L9.94 8.257l1.93.002zm3.91-.139c.577 0 1.304.18 1.722.345l-.338 1.557c-.378-.152-1-.357-1.523-.35-.76.013-1.23.332-1.23.638 0 .498.816.749 1.656 1.293.959.62 1.085 1.177 1.073 1.782-.013 1.256-1.073 2.495-3.309 2.495-1.02-.015-1.388-.101-2.22-.396l.352-1.625c.847.355 1.206.468 1.93.468.663 0 1.232-.268 1.237-.735.004-.332-.2-.497-.944-.907-.744-.411-1.788-.98-1.774-2.122.017-1.462 1.402-2.443 3.369-2.443z">
                                                </path>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <span class="h3 d-block fw-semibold hp-text-color-black-bg hp-text-color-dark-0 mb-0">
                        Recent Activities </span>
                    <span class="hp-p1-body d-block mt-4">05 Dec 2021</span>

                    <div class="row mt-24">
                        <div
                            class="hp-cursor-pointer hp-transition hp-hover-bg-dark-100 hp-hover-bg-black-10 rounded py-8 mb-16 col-12">
                            <div class="row align-items-end justify-content-between">
                                <div class="col">
                                    <div class="row align-items-center">
                                        <div class="hp-flex-none w-auto pe-0 col">
                                            <div class="me-16 border hp-border-color-black-10 hp-bg-black-0 rounded-3 d-flex align-items-center justify-content-center"
                                                style="min-width: 48px; height: 48px;">
                                                <img src="../../../app-assets/img/dashboard/zendesk-logo.svg"
                                                    alt="Zendesk">
                                            </div>
                                        </div>

                                        <div class="hp-flex-none w-auto ps-0 col">
                                            <span
                                                class="d-block hp-p1-body fw-medium hp-text-color-black-bg hp-text-color-dark-0">
                                                Zendesk </span>
                                            <span
                                                class="d-block hp-caption fw-normal hp-text-color-black-60">
                                                05 Dec 2021 </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="hp-flex-none w-auto col">
                                    <span class="h5 hp-text-color-black-bg hp-text-color-dark-0"> $ 500.00
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div
                            class="hp-cursor-pointer hp-transition hp-hover-bg-dark-100 hp-hover-bg-black-10 rounded py-8 mb-16 col-12">
                            <div class="row align-items-end justify-content-between">
                                <div class="col">
                                    <div class="row align-items-center">
                                        <div class="hp-flex-none w-auto pe-0 col">
                                            <div class="me-16 border hp-border-color-black-10 hp-bg-black-0 rounded-3 d-flex align-items-center justify-content-center"
                                                style="min-width: 48px; height: 48px;">
                                                <img src="../../../app-assets/img/dashboard/sales-force-logo.svg"
                                                    alt="Sales Force">
                                            </div>
                                        </div>

                                        <div class="hp-flex-none w-auto ps-0 col">
                                            <span
                                                class="d-block hp-p1-body fw-medium hp-text-color-black-bg hp-text-color-dark-0">
                                                Sales Force </span>
                                            <span
                                                class="d-block hp-caption fw-normal hp-text-color-black-60">
                                                24 Dec 2021 </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="hp-flex-none w-auto col">
                                    <span class="h5 hp-text-color-black-bg hp-text-color-dark-0"> $ 337.00
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div
                            class="hp-cursor-pointer hp-transition hp-hover-bg-dark-100 hp-hover-bg-black-10 rounded py-8 mb-16 col-12">
                            <div class="row align-items-end justify-content-between">
                                <div class="col">
                                    <div class="row align-items-center">
                                        <div class="hp-flex-none w-auto pe-0 col">
                                            <div class="me-16 border hp-border-color-black-10 hp-bg-black-0 rounded-3 d-flex align-items-center justify-content-center"
                                                style="min-width: 48px; height: 48px;">
                                                <img src="../../../app-assets/img/dashboard/apple-logo.svg"
                                                    alt="Apple">
                                            </div>
                                        </div>

                                        <div class="hp-flex-none w-auto ps-0 col">
                                            <span
                                                class="d-block hp-p1-body fw-medium hp-text-color-black-bg hp-text-color-dark-0">
                                                Apple </span>
                                            <span
                                                class="d-block hp-caption fw-normal hp-text-color-black-60">
                                                29 Dec 2021 </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="hp-flex-none w-auto col">
                                    <span class="h5 hp-text-color-black-bg hp-text-color-dark-0"> $ 320.67
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div
                            class="hp-cursor-pointer hp-transition hp-hover-bg-dark-100 hp-hover-bg-black-10 rounded py-8 mb-16 col-12">
                            <div class="row align-items-end justify-content-between">
                                <div class="col">
                                    <div class="row align-items-center">
                                        <div class="hp-flex-none w-auto pe-0 col">
                                            <div class="me-16 border hp-border-color-black-10 hp-bg-black-0 rounded-3 d-flex align-items-center justify-content-center"
                                                style="min-width: 48px; height: 48px;">
                                                <img src="../../../app-assets/img/dashboard/google-logo.svg"
                                                    alt="Google Inc">
                                            </div>
                                        </div>

                                        <div class="hp-flex-none w-auto ps-0 col">
                                            <span
                                                class="d-block hp-p1-body fw-medium hp-text-color-black-bg hp-text-color-dark-0">
                                                Google Inc </span>
                                            <span
                                                class="d-block hp-caption fw-normal hp-text-color-black-60">
                                                29 Dec 2021 </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="hp-flex-none w-auto col">
                                    <span class="h5 hp-text-color-black-bg hp-text-color-dark-0"> $ 127.00
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div
                            class="hp-cursor-pointer hp-transition hp-hover-bg-dark-100 hp-hover-bg-black-10 rounded py-8 mb-16 col-12">
                            <div class="row align-items-end justify-content-between">
                                <div class="col">
                                    <div class="row align-items-center">
                                        <div class="hp-flex-none w-auto pe-0 col">
                                            <div class="me-16 border hp-border-color-black-10 hp-bg-black-0 rounded-3 d-flex align-items-center justify-content-center"
                                                style="min-width: 48px; height: 48px;">
                                                <img src="../../../app-assets/img/dashboard/virgin-logo.svg"
                                                    alt="Virgin Media">
                                            </div>
                                        </div>

                                        <div class="hp-flex-none w-auto ps-0 col">
                                            <span
                                                class="d-block hp-p1-body fw-medium hp-text-color-black-bg hp-text-color-dark-0">
                                                Virgin Media </span>
                                            <span
                                                class="d-block hp-caption fw-normal hp-text-color-black-60">
                                                29 Dec 2021 </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="hp-flex-none w-auto col">
                                    <span class="h5 hp-text-color-black-bg hp-text-color-dark-0"> $ 28.00
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <span class="h3 d-block fw-semibold hp-text-color-black-bg hp-text-color-dark-0 mb-0">
                        Upcoming Payments </span>
                    <span class="hp-p1-body d-block mt-4">05 Dec 2021</span>

                    <div class="row mt-24">
                        <div
                            class="hp-cursor-pointer hp-transition hp-hover-bg-dark-100 hp-hover-bg-black-10 rounded py-8 mb-16 col-12">
                            <div class="row align-items-end justify-content-between">
                                <div class="col">
                                    <div class="row align-items-center">
                                        <div class="hp-flex-none w-auto pe-0 col">
                                            <div class="me-16 border hp-border-color-black-10 hp-bg-black-0 rounded-3 d-flex align-items-center justify-content-center"
                                                style="min-width: 48px; height: 48px;">
                                                <img src="../../../app-assets/img/dashboard/zendesk-logo.svg"
                                                    alt="Zendesk">
                                            </div>
                                        </div>

                                        <div class="hp-flex-none w-auto ps-0 col">
                                            <span
                                                class="d-block hp-p1-body fw-medium hp-text-color-black-bg hp-text-color-dark-0">
                                                Zendesk </span>
                                            <span
                                                class="d-block hp-caption fw-normal hp-text-color-black-60">
                                                05 Dec 2021 </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="hp-flex-none w-auto col">
                                    <span class="h5 hp-text-color-black-bg hp-text-color-dark-0"> $ 500.00
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div
                            class="hp-cursor-pointer hp-transition hp-hover-bg-dark-100 hp-hover-bg-black-10 rounded py-8 mb-16 col-12">
                            <div class="row align-items-end justify-content-between">
                                <div class="col">
                                    <div class="row align-items-center">
                                        <div class="hp-flex-none w-auto pe-0 col">
                                            <div class="me-16 border hp-border-color-black-10 hp-bg-black-0 rounded-3 d-flex align-items-center justify-content-center"
                                                style="min-width: 48px; height: 48px;">
                                                <img src="../../../app-assets/img/dashboard/sales-force-logo.svg"
                                                    alt="Sales Force">
                                            </div>
                                        </div>

                                        <div class="hp-flex-none w-auto ps-0 col">
                                            <span
                                                class="d-block hp-p1-body fw-medium hp-text-color-black-bg hp-text-color-dark-0">
                                                Sales Force </span>
                                            <span
                                                class="d-block hp-caption fw-normal hp-text-color-black-60">
                                                24 Dec 2021 </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="hp-flex-none w-auto col">
                                    <span class="h5 hp-text-color-black-bg hp-text-color-dark-0"> $ 337.00
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div
                            class="hp-cursor-pointer hp-transition hp-hover-bg-dark-100 hp-hover-bg-black-10 rounded py-8 mb-16 col-12">
                            <div class="row align-items-end justify-content-between">
                                <div class="col">
                                    <div class="row align-items-center">
                                        <div class="hp-flex-none w-auto pe-0 col">
                                            <div class="me-16 border hp-border-color-black-10 hp-bg-black-0 rounded-3 d-flex align-items-center justify-content-center"
                                                style="min-width: 48px; height: 48px;">
                                                <img src="../../../app-assets/img/dashboard/virgin-logo.svg"
                                                    alt="Virgin Media">
                                            </div>
                                        </div>

                                        <div class="hp-flex-none w-auto ps-0 col">
                                            <span
                                                class="d-block hp-p1-body fw-medium hp-text-color-black-bg hp-text-color-dark-0">
                                                Virgin Media </span>
                                            <span
                                                class="d-block hp-caption fw-normal hp-text-color-black-60">
                                                29 Dec 2021 </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="hp-flex-none w-auto col">
                                    <span class="h5 hp-text-color-black-bg hp-text-color-dark-0"> $ 28.00
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> --}}

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
                                    <h1 class="mb-0 hp-text-color-black-0">Home</h1>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row g-32">
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row g-16">
                                    <div class="col-6 hp-flex-none w-auto">
                                        <div
                                            class="avatar-item d-flex align-items-center justify-content-center avatar-lg bg-primary-4 hp-bg-color-dark-primary rounded-circle">
                                            <i class="iconly-Light-People text-primary hp-text-color-dark-primary-2"
                                                style="font-size: 24px;"></i>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <h3 class="mb-4 mt-8">243<span
                                                class="hp-badge-text ms-8 text-primary hp-text-color-dark-primary-2">+3%</span>
                                        </h3>
                                        <p class="hp-p1-body mb-0 text-black-80 hp-text-color-dark-30">New Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row g-16">
                                    <div class="col-6 hp-flex-none w-auto">
                                        <div
                                            class="avatar-item d-flex align-items-center justify-content-center avatar-lg bg-secondary-4 hp-bg-color-dark-secondary rounded-circle">
                                            <i class="iconly-Light-Buy text-secondary" style="font-size: 24px;"></i>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <h3 class="mb-4 mt-8">1,243<span
                                                class="hp-badge-text ms-8 text-secondary">+4%</span></h3>
                                        <p class="hp-p1-body mb-0 text-black-80 hp-text-color-dark-30">New Orders</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row g-16">
                                    <div class="col-6 hp-flex-none w-auto">
                                        <div
                                            class="avatar-item d-flex align-items-center justify-content-center avatar-lg bg-warning-4 hp-bg-color-dark-warning rounded-circle">
                                            <i class="iconly-Light-Ticket text-warning" style="font-size: 24px;"></i>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <h3 class="mb-4 mt-8">$ 323<span
                                                class="hp-badge-text ms-8 text-warning">-1.4%</span></h3>
                                        <p class="hp-p1-body mb-0 text-black-80 hp-text-color-dark-30">Average Sale</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row g-16">
                                    <div class="col-6 hp-flex-none w-auto">
                                        <div
                                            class="avatar-item d-flex align-items-center justify-content-center avatar-lg bg-danger-4 hp-bg-color-dark-danger rounded-circle">
                                            <i class="iconly-Light-Discount text-danger" style="font-size: 24px;"></i>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <h3 class="mb-4 mt-8">$ 1,32<span class="hp-badge-text ms-8 text-danger">+3%</span>
                                        </h3>
                                        <p class="hp-p1-body mb-0 text-black-80 hp-text-color-dark-30">Gross Profit</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @foreach ($products->take(3) as $product)
                        <div class="col-12 col-md-4">
                            <div class="hp-card-6 hp-eCommerceCardOne">
                                <div
                                    class="rounded overflow-hidden border border-black-40 hp-border-color-dark-80 bg-black-0 hp-bg-color-dark-100 h-100">
                                    <a href=""
                                        class="text-center bg-black-10 hp-bg-color-dark-80 hp-card-2 d-flex align-items-center justify-content-center">
                                        <img src="{{ Storage::url($product->image) }}"
                                            alt="Rales Wireless Earbuds Bluetooth 5.0">
                                    </a>

                                    <div class="p-24">
                                        <div class="mb-16 mt-8">
                                            <h3 class="mb-4">${{ $product->price }}</h3>
                                        </div>

                                        <div class="mb-8">
                                            <a href=""
                                                class="mb-4 text-black-100 hp-text-color-dark-0 hp-p1-body">{{ $product->name }}</a>
                                            <p class="mb-0 hp-caption text-black-60 hp-text-color-dark-50">By
                                                {{ $product->brand->name }}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    @foreach ($products->skip(3)->take(3) as $product)
                        <div class="col-12 col-sm-6 col-xl-4">
                            <div class="row g-32">
                                <div class="col-12">
                                    <div class="card hp-card-5 hp-eCommerceCardOne">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row mx-0 align-items-start justify-content-between">


                                                        @foreach ($product->tags as $tag)
                                                            <span
                                                                class="badge bg-warning-4 hp-bg-dark-warning text-warning border-none w-auto py-8 px-16 fw-medium"
                                                                style="font-size: 10px">{{ $tag->name }}</span>
                                                        @endforeach

                                                        <div
                                                            class="d-flex w-auto lh-1 hp-wish-button hp-cursor-pointer text-danger bg-danger-4 hp-bg-color-dark-danger rounded-circle remix-icon p-8">
                                                            <i class="ri-heart-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="text-center">
                                                        <a href="app-ecommerce-product-detail.html" class="d-block">
                                                            <img src="{{ Storage::url($product->image) }}"
                                                                alt="4K Action Cam" style="max-height: 191px;">
                                                        </a>
                                                    </div>

                                                    <div class="row justify-content-between">
                                                        <div class="col w-auto">
                                                            <p>Category: {{ $product->category->name }}</p>
                                                        </div>

                                                        <div class="col w-auto">
                                                            <div class="d-flex align-items-center justify-content-end">

                                                                <p class="w-auto px-0 mb-0 text-primary fw-medium">
                                                                    ${{ $product->price }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 mb-24">
                                                        <p class="mb-0 me-4 hp-text-color-dark-0 hp-p1-body fw-medium">
                                                            {{ $product->name }}</p>
                                                        <p class="mb-0 hp-text-color-dark-0 hp-caption fw-normal">
                                                            {{ Str::limit($product->description, 60, '...') }}</p>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <a href="app-ecommerce-product-detail.html">
                                                                <button type="button"
                                                                    class="btn btn-ghost btn-primary w-100">
                                                                    <span>Check Detail</span>
                                                                </button>
                                                            </a>
                                                        </div>

                                                        <div class="col-12 col-sm-6">
                                                            <button class="btn btn-primary px-12 w-100">
                                                                <i class="ri-shopping-bag-line remix-icon"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
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

                    @foreach ($products->skip(6)->take(2) as $product)
                        <div class="col-12 col-xl-9" style="margin-left: 185px">
                            <div class="row g-32">
                                <div class="col-12">
                                    <div class="card hp-eCommerceCardOne hp-card-3">
                                        <div class="card-body">
                                            <div class="row g-32">
                                                <div class="col-12 col-md-5 mb-24 mb-md-0">
                                                    <div class="row mx-0 align-items-start justify-content-between">
                                                        @foreach ($product->tags as $tag)
                                                            <span
                                                                class="badge bg-warning-4 hp-bg-dark-warning text-warning border-none w-auto py-8 px-16 fw-medium"
                                                                style="font-size: 10px">{{ $tag->name }}</span>
                                                        @endforeach

                                                        <div
                                                            class="d-flex w-auto lh-1 hp-wish-button hp-cursor-pointer text-danger bg-danger-4 hp-bg-color-dark-danger rounded-circle remix-icon p-8">
                                                            <i class="ri-heart-fill"></i>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 text-center">
                                                        <a href="app-ecommerce-product-detail.html">
                                                            <img src="{{ Storage::url($product->image) }}"
                                                                alt="Xbox Wireless Game Console">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-7">
                                                    <p>Category: {{$product->category->name}} </p>

                                                    <div class="my-8">
                                                        <h4 class="mb-4">{{$product->name}}</h4>
                                                        <p class="hp-caption mb-0 text-black-60">By <span
                                                                class="text-black-80 hp-text-color-dark-30">{{$product->brand->name}}</span>
                                                        </p>
                                                    </div>

                                                    <p
                                                        class="mb-0 hp-p1-body fw-normal text-black-80 hp-text-color-dark-30">
                                                        {{ Str::limit($product->description, 140, '...') }}</p>

                                                    <div class="d-flex align-items-center mt-8 mb-12 mb-sm-0">
                                                        <p class="h5 w-auto px-0 mb-0 me-4 text-primary fw-medium">${{ $product->price }}
                                                        </p>
                                                    </div>

                                                    <div class="row mt-0 g-8">
                                                        <div class="col-12 col-xl-6">
                                                            <a href="app-ecommerce-product-detail.html">
                                                                <button type="button"
                                                                    class="btn btn-ghost btn-primary w-100">
                                                                    <span>Check Detail</span>
                                                                </button>
                                                            </a>
                                                        </div>

                                                        <div class="col-12 col-xl-6">
                                                            <button class="btn btn-primary w-100">
                                                                <i class="ri-shopping-bag-line remix-icon"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
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
        </div>

    </div>
@endsection
