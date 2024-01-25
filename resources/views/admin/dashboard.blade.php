@extends('layouts.admin')

@section('title')
Dashboard
@endsection


@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Dashboard

                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>

                    <!--begin::Description-->
                    {{-- <small class="text-muted fs-7 fw-bold my-1 ms-1">#XRS-45670</small> --}}
                    <!--end::Description-->
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-1">
                <!--begin::Wrapper-->
                <div class="me-4">
                    <!--begin::Menu-->
                    {{-- <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                        <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                    fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Filter
                    </a> --}}

                    <!--end::Menu-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Button-->
                {{-- <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a>
                <!--end::Button--> --}}
            </div>
        </div>
    </div>

    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->
            <div class="row gy-5 g-xl-8">
                <!--begin::Col-->

                <div class="card card-xl-stretch">
                    <div class="card-header border-0  py-5">

                        <div class="col-xl-3">
                            <div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7 d-flex ">
                                <div>
                                    <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/keenthemes/metronic/docs/core/html/src/media/icons/duotune/general/gen028.svg-->
                                    <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2"><svg width="24"
                                            height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="7" y="2" width="14" height="16" rx="3"
                                                fill="currentColor" />
                                            <rect x="3" y="6" width="14" height="16" rx="3" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <a class="text-warning fw-bold fs-6">Books</a>
                                </div>
                                <div class="col d-flex justify-content-center align-items-center">
                                    <a class="text-warning fw-bold custom-font-size">{{ $booksCount }}</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3">
                            <div class="col bg-light-success px-6 py-8 rounded-2 me-7 mb-7 d-flex">
                                <div>
                                    <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/keenthemes/metronic/docs/core/html/src/media/icons/duotune/general/gen025.svg-->
                                    <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2"><svg width="24"
                                            height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
                                            <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                                fill="currentColor" />
                                            <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                                fill="currentColor" />
                                            <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <a class="text-success fw-bold fs-6 mt-2">Book Categories</a>
                                </div>
                                <div class="col d-flex justify-content-center  align-items-center">
                                    <a class="text-success fw-bold custom-font-size mt-2">{{
                                        $bookCategoriesCount }}</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3">
                            <div class="col bg-light-primary px-6 py-8 rounded-2 me-7 mb-7 flex-row d-flex">
                                <div>
                                    <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/keenthemes/metronic/docs/core/html/src/media/icons/duotune/communication/com014.svg-->
                                    <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2"><svg width="24"
                                            height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z"
                                                fill="currentColor" />
                                            <rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2"
                                                fill="currentColor" />
                                            <path
                                                d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z"
                                                fill="currentColor" />
                                            <rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <a class="text-primary fw-bold fs-6">Customers</a>
                                </div>
                                <div class="col d-flex justify-content-center  align-items-center">
                                    <a class="text-primary fw-bold custom-font-size mt-2">{{
                                        $customersCount}}</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3">
                            <div class="col bg-light-danger px-6 py-8 rounded-2 me-7 mb-7 d-flex">
                                <div>
                                    <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/keenthemes/metronic/docs/core/html/src/media/icons/duotune/ecommerce/ecm005.svg-->
                                    <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2"><svg width="24"
                                            height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M20 22H4C3.4 22 3 21.6 3 21V2H21V21C21 21.6 20.6 22 20 22Z"
                                                fill="currentColor" />
                                            <path
                                                d="M12 14C9.2 14 7 11.8 7 9V5C7 4.4 7.4 4 8 4C8.6 4 9 4.4 9 5V9C9 10.7 10.3 12 12 12C13.7 12 15 10.7 15 9V5C15 4.4 15.4 4 16 4C16.6 4 17 4.4 17 5V9C17 11.8 14.8 14 12 14Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <a href="#" class="text-danger fw-bold fs-6 mt-2">Orders</a>
                                </div>
                                <div class="col d-flex justify-content-center  align-items-center">
                                    <a class="text-danger fw-bold custom-font-size mt-2">{{ $ordersCount
                                        }}</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- <div class="col-xl-3">
                    <div class="col bg-light-danger px-6 py-8 rounded-2 me-7">
                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                        <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path opacity="0.3"
                                    d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                    fill="black" />
                                <path
                                    d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                    fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <a href="#" class="text-danger fw-bold fs-6 mt-2">Item Orders</a>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
</div>

<style>
    .custom-font-size {
        font-size: 48px;
    }
</style>
@endsection


@section('js')
@endsection