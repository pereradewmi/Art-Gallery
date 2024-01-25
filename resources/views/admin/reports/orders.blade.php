@extends('layouts.admin')

@section('title')
Reports
@endsection


@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Reports</h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start mx-4"></span>


                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-1">

                </div>
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Card-->
                <div class="d-flex flex-column flex-lg-row">
                    <div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
                        <div class="card">
                            <!--begin::Card header-->
                            <div class="card-header border-0 pt-6">
                                <!--begin::Card title-->
                                <div class="card-title w-100">
                                    <input type="hidden" data-kt-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search user" />

                                    <form class="d-flex justify-content-between w-100" data-kt-table-toolbar="base">

                                        <input  type="date"
                                            class="form-control form-control-solid me-2" placeholder="Enter Publication Date"
                                            name="start_date" required value="{{ $start_date ?? '' }}">

                                        <input  type="date"
                                            class="form-control form-control-solid me-2" placeholder="Enter Publication Date"
                                            name="end_date" required value="{{ $end_date ?? '' }}">

                                        <button type="submit" class="btn btn-primary" href="{{route('page.admin.users.create')}}" style="width:200px !important;">
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black"></path>
                                                    <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black"></path>
                                                </svg>
                                            </span>
                                            Filter
                                        </button>
                                    </form>

                                </div>

                                <div class="card-toolbar">


                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">

                                            <!--<th class="min-w-125px">Picture</th>-->
                                            <th class="min-w-125px">Order ID</th>
                                            <th class="min-w-125px">Ordered Date</th>
                                            <th class="min-w-125px">Net Total</th>
                                            <th class="min-w-125px">Status</th>
                                        </tr>

                                    </thead>


                                    <tbody class="text-gray-600 fw-bold">
                                        @foreach ($table as $key => $row)


                                            <tr>

                                                <td>
                                                    {{ 'ORD' . str_pad(number_format($row->id + 100000, 0, '', ''), 6, '0', STR_PAD_LEFT) }}
                                                </td>
                                                <td>
                                                    {{ date('d M ,Y', strtotime($row->ordered_date)) }}
                                                </td>
                                                <td>
                                                    LKR {{ $row->net_total }}
                                                </td>

                                                <td class="text-start">
                                                    @if ($row->status == 1)
                                                    <div class="badge badge-light-info fw-bolder">New Order</div>
                                                    @elseif ($row->status == 2)
                                                    <div class="badge badge-light-warning fw-bolder">Processing</div>
                                                    @elseif ($row->status == 3)
                                                    <div class="badge badge-light-primary fw-bolder">Dispatchec</div>
                                                    @else
                                                    <div class="badge badge-light-success fw-bolder">Completed</div>
                                                    @endif
                                                </td>

                                            </tr>

                                            @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div>
                    </div>

                    <div class="flex-column flex-lg-row-auto w-lg-350px w-xl-350px mb-10 order-lg-2">
                        <!--begin::Mixed Widget 1-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <!--begin::Body-->
                            <div class="card-body p-0">
                                <!--begin::Header-->
                                <div class="px-9 pt-7 card-rounded h-275px w-100 bg-primary">
                                    <!--begin::Heading-->
                                    <div class="d-flex flex-stack">
                                        <h3 class="m-0 text-white fw-bolder fs-3">Sales Summary</h3>
                                        <div class="ms-1">
                                            <!--begin::Menu-->
                                            <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color-primary border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                            <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                            <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                            <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </button>

                                        </div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Balance-->
                                    <div class="d-flex text-center flex-column text-white pt-8">
                                        <span class="fw-bold fs-7">Revenue</span>
                                        <span class="fw-bolder fs-2x pt-1">LKR {{$revenue}}</span>
                                    </div>
                                    <!--end::Balance-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Items-->
                                <div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1" style="margin-top: -100px">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-45px w-40px me-5">
                                            <span class="symbol-label bg-lighten">
                                                <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z" fill="black" />
                                                        <path d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Description-->
                                        <div class="d-flex align-items-center flex-wrap w-100">
                                            <!--begin::Title-->
                                            <div class="mb-1 pe-3 flex-grow-1">
                                                <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">Sales</a>
                                                <div class="text-gray-400 fw-bold fs-7">net</div>
                                            </div>
                                            <!--end::Title-->
                                            <!--begin::Label-->
                                            <div class="d-flex align-items-center">
                                                <div class="fw-bolder fs-5 text-gray-800 pe-1">LKR {{$sales}}</div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-45px w-40px me-5">
                                            <span class="symbol-label bg-lighten">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                                        <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                                                        <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                                                        <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Description-->
                                        <div class="d-flex align-items-center flex-wrap w-100">
                                            <!--begin::Title-->
                                            <div class="mb-1 pe-3 flex-grow-1">
                                                <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">Couriers</a>
                                                <div class="text-gray-400 fw-bold fs-7">Charges</div>
                                            </div>
                                            <!--end::Title-->
                                            <!--begin::Label-->
                                            <div class="d-flex align-items-center">
                                                <div class="fw-bolder fs-5 text-gray-800 pe-1">LKR {{$couriers_charges}}</div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-45px w-40px me-5">
                                            <span class="symbol-label bg-lighten">
                                                <!--begin::Svg Icon | path: icons/duotune/electronics/elc005.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M15 19H7C5.9 19 5 18.1 5 17V7C5 5.9 5.9 5 7 5H15C16.1 5 17 5.9 17 7V17C17 18.1 16.1 19 15 19Z" fill="black" />
                                                        <path d="M8.5 2H13.4C14 2 14.5 2.4 14.6 3L14.9 5H6.89999L7.2 3C7.4 2.4 7.9 2 8.5 2ZM7.3 21C7.4 21.6 7.9 22 8.5 22H13.4C14 22 14.5 21.6 14.6 21L14.9 19H6.89999L7.3 21ZM18.3 10.2C18.5 9.39995 18.5 8.49995 18.3 7.69995C18.2 7.29995 17.8 6.90002 17.3 6.90002H17V10.9H17.3C17.8 11 18.2 10.7 18.3 10.2Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Description-->
                                        <div class="d-flex align-items-center flex-wrap w-100">
                                            <!--begin::Title-->
                                            <div class="mb-1 pe-3 flex-grow-1">
                                                <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">Processing</a>
                                                <div class="text-gray-400 fw-bold fs-7">fee</div>
                                            </div>
                                            <!--end::Title-->
                                            <!--begin::Label-->
                                            <div class="d-flex align-items-center">
                                                <div class="fw-bolder fs-5 text-gray-800 pe-1">LKR {{$processing_fee}}</div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-45px w-40px me-5">
                                            <span class="symbol-label bg-lighten">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z" fill="black" />
                                                        <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Description-->
                                        <div class="d-flex align-items-center flex-wrap w-100">
                                            <!--begin::Title-->
                                            <div class="mb-1 pe-3 flex-grow-1">
                                                <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">Order</a>
                                                <div class="text-gray-400 fw-bold fs-7">count</div>
                                            </div>
                                            <!--end::Title-->
                                            <!--begin::Label-->
                                            <div class="d-flex align-items-center">
                                                <div class="fw-bolder fs-5 text-gray-800 pe-1">{{$order_count}}</div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Mixed Widget 1-->
                    </div>

                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->



        </div>
        <!--end::Post-->
    </div>
@endsection


@section('js')
    <script src="/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="/assets/js/custom/table/table.js"></script>
@endsection
