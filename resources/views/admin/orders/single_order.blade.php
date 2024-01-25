@extends('layouts.admin')

@section('title')
View Order Details
@endsection


@section('content')
<style>
    .status-text {
        text-transform: uppercase;
        font-size: 12px;
        font-weight: bold;
    }
    .text-green {
        color: green;
    }
    .text-red {
        color: green;
    }
</style>

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">

        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">

            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">

                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">View Order Details</h1>

                <span class="h-20px border-gray-200 border-start mx-4"></span>

            </div>
            <div class="d-flex align-items-center py-1">

            </div>
        </div>

    </div>

    {{-- @foreach ($table->ordered_books as $row) --}}
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Invoice 2 main-->
            <div class="card">
                {{-- <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <a type="reset" class="btn btn-light btn-active-light-primary me-2"
                        href="{{ route('page.admin.orders.completed') }}">Close</a>
                </div> --}}
                <!--begin::Body-->
                <div class="card-body p-lg-20">
                    <!--begin::Layout-->
                    <div class="d-flex flex-column flex-xl-row">
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid me-xl-18 mb-10 mb-xl-0">
                            <!--begin::Invoice 2 content-->
                            <div class="mt-n1">
                                <!--begin::Top-->
                                <div class="d-flex flex-stack pb-10">
                                    <!--begin::Logo-->
                                    <a href="#">
                                        {{-- <img alt="Logo" src="/assets/logo-darkk.png" height="90px" /> --}}
                                    </a>
                                    <!--end::Logo-->
                                    <!--begin::Action-->
                                    {{-- <a href="#" class="btn btn-sm btn-success">Pay Now</a> --}}
                                    <!--end::Action-->
                                </div>
                                <!--end::Top-->
                                <!--begin::Wrapper-->
                                <div class="m-0">
                                    <!--begin::Label-->

                                    <div class="fw-bolder fs-3 text-gray-800 mb-8">
                                        Order # {{ 'ORD' . str_pad(number_format($order->id + 100000, 0, '', ''), 6, '0', STR_PAD_LEFT) }}<br>

                                        @if ($order->paymentDetails->status_code == 2)
                                            <span class="status-text text-green">Paid</span>
                                        @elseif ($order->paymentDetails->status_code == 1)
                                            <span class="status-text text-green">Pending</span>
                                        @elseif ($order->paymentDetails->status_code == -1)
                                            <span class="status-text text-red">Canceled</span>
                                        @elseif ($order->paymentDetails->status_code == -2)
                                            <span class="status-text text-red">Failed</span>
                                        @elseif ($order->paymentDetails->status_code == -3)
                                            <span class="status-text text-red">Charged Back</span>
                                        @endif
                                    </div>
                                    <!--end::Label-->

                                    <!--begin::Row-->
                                    <div class="row g-5 mb-11">
                                        <!--end::Col-->
                                        <div class="col-sm-6">
                                            <!--end::Label-->
                                            <div class="fw-bold fs-7 text-gray-600 mb-1">Issue Date:</div>
                                            <!--end::Label-->
                                            <!--end::Col-->
                                            <div class="fw-bolder fs-6 text-gray-800">{{ date('Y-m-d',
                                                strtotime($order->updated_at)) }}</div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Col-->
                                        <!--end::Col-->
                                        <div class="col-sm-6">
                                            <!--end::Label-->
                                            <div class="fw-bold fs-7 text-gray-600 mb-1">Order Date:</div>
                                            <!--end::Label-->
                                            <!--end::Info-->
                                            <div
                                                class="fw-bolder fs-6 text-gray-800 d-flex align-items-center flex-wrap">
                                                <span class="pe-2">{{ date('Y-m-d', strtotime($order->ordered_date))
                                                    }}</span>
                                                <span class="fs-7 text-danger d-flex align-items-center">
                                                    {{-- <span class="bullet bullet-dot bg-danger me-2"></span>Due in 7
                                                    days</span> --}}
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Col-->
                                    </div>

                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <div class="row g-5 mb-12">
                                        <!--end::Col-->
                                        <div class="col-sm-6">
                                            <!--end::Label-->
                                            <div class="fw-bold fs-7 text-gray-600 mb-1">Order For:</div>
                                            <!--end::Label-->
                                            <!--end::Text-->
                                            <div class="fw-bolder fs-6 text-gray-800">{{ $order->customer->first_name ."
                                                ".$order->customer->last_name }}</div>
                                            <!--end::Text-->
                                            <!--end::Description-->
                                            <div class="fw-bold fs-7 text-gray-600">Shipping address : {{
                                                $order->customer->billing_address_street_address_line_1 }}, {{
                                                $order->customer->billing_address_street_address_line_2 }}
                                                <br />Billing address : {{
                                                $order->customer->shipping_address_street_address_line_1 }}, {{
                                                $order->customer->shipping_address_street_address_line_2 }} <br>
                                                Contact no : {{ $order->customer->contact_no_personal_country_code }} {{
                                                $order->customer->contact_no_personal }}
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Col-->
                                        <!--end::Col-->
                                        <div class="col-sm-6">
                                            <!--end::Label-->
                                            <div class="fw-bold fs-7 text-gray-600 mb-1">Issued By:</div>
                                            <!--end::Label-->
                                            <!--end::Text-->
                                            <div class="fw-bolder fs-6 text-gray-800">Heena Publishers (pvt) Ltd.
                                            </div>
                                            <!--end::Text-->
                                            <!--end::Description-->
                                            <div class="fw-bold fs-7 text-gray-600">No:10, Egodahenawaththa Road,

                                                <br />Mampe, piliyandala <br>
                                                +94 70 7 590 690 ( call & whatsapp ) <br>
                                                +94 76 7 590 690 ( call )
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Content-->
                                    <div class="flex-grow-1">
                                        <!--begin::Table-->
                                        <div class="table-responsive border-bottom mb-9">
                                            <table class="table mb-3">
                                                <thead>
                                                    <tr class="border-bottom fs-6 fw-bolder text-muted">
                                                        <th class="min-w-175px pb-2">Title</th>
                                                        <th class="min-w-80px text-end pb-2">Price</th>
                                                        <th class="min-w-70px text-end pb-2">Quantity</th>
                                                        <th class="min-w-100px text-end pb-2">Total Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($order->ordered_books as $row)
                                                    <tr class="fw-bolder text-gray-700 fs-5 text-end">
                                                        <td class="d-flex align-items-center pt-6">
                                                            <i class="fa fa-genderless text-danger fs-2 me-2"></i>
                                                            {{ $row->book->title ?? '-' }}
                                                        </td>
                                                        <td class="pt-6">LKR {{ $row->book->price }}</td>
                                                        <td class="pt-6">{{ $row->quantity }}</td>
                                                        <td class="pt-6 text-dark fw-boldest">LKR {{ $row->total_price
                                                            }}</td>
                                                    </tr>
                                                    {{-- <tr class="fw-bolder text-gray-700 fs-5 text-end">
                                                        <td class="d-flex align-items-center">
                                                            <i class="fa fa-genderless text-success fs-2 me-2"></i>Logo
                                                            Design
                                                        </td>
                                                        <td>120</td>
                                                        <td>$40.00</td>
                                                        <td class="fs-5 text-dark fw-boldest">$4800.00</td>
                                                    </tr> --}}
                                                    {{-- <tr class="fw-bolder text-gray-700 fs-5 text-end">
                                                        <td class="d-flex align-items-center">
                                                            <i class="fa fa-genderless text-primary fs-2 me-2"></i>Web
                                                            Development
                                                        </td>
                                                        <td>210</td>
                                                        <td>$60.00</td>
                                                        <td class="fs-5 text-dark fw-boldest">$12600.00</td>
                                                    </tr> --}}
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--begin::Container-->
                                        <div class="d-flex justify-content-end">
                                            <!--begin::Section-->
                                            <div class="mw-300px">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-3">
                                                    <!--begin::Accountname-->
                                                    <div class="fw-bold pe-10 text-gray-600 fs-7">Subtotal</div>
                                                    <!--end::Accountname-->
                                                    <!--begin::Label-->
                                                    <div class="text-end fw-bolder fs-6 text-gray-800">LKR {{
                                                        $order->sub_total }}</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-3">
                                                    <!--begin::Accountname-->
                                                    <div class="fw-bold pe-10 text-gray-600 fs-7">Delivery Fee</div>
                                                    <!--end::Accountname-->
                                                    <!--begin::Label-->
                                                    <div class="text-end fw-bolder fs-6 text-gray-800">LKR {{
                                                        $order->delivery_fee }}</div>
                                                    <!--end::Label-->
                                                </div>
                                                <div class="d-flex flex-stack mb-3">
                                                    <!--begin::Accountname-->
                                                    <div class="fw-bold pe-10 text-gray-600 fs-7">Processing Fee (3.42%)</div>
                                                    <!--end::Accountname-->
                                                    <!--begin::Label-->
                                                    <div class="text-end fw-bolder fs-6 text-gray-800">LKR {{
                                                        $order->processing_fee }}</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-3">
                                                    <!--begin::Accountnumber-->
                                                    <div class="fw-bold pe-10 text-gray-600 fs-7">Net Total
                                                    </div>
                                                    <!--end::Accountnumber-->
                                                    <!--begin::Number-->
                                                    <div class="text-end fw-bolder fs-6 text-gray-800">LKR {{
                                                        $order->net_total }}</div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="card-footer d-flex justify-content-end py-6 px-9">
                <a type="reset" class="btn btn-light btn-active-light-primary me-2"
                    href="{{ route('page.admin.orders.completed') }}">Close</a>
            </div> --}}
        </div>

        <!--end::Post-->
    </div>
</div>
@endsection


@section('js')
<script src="/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="/assets/js/custom/table/table.js"></script>
@endsection
