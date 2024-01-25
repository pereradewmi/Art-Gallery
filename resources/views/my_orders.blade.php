@extends('layouts.master')

@section('title')
    My Orders
@endsection

@section('content')
<style>
    #my_orders_table td,
    #order_details_table td {
        font-size: 14px;
        vertical-align: middle;
        font-weight: 600;
    }
    #my_orders_table td:first-child {
        background: none;
    }
    #my_orders_table td p {
        line-height: 1.3rem;
        font-size: 14px;
    }
    #my_orders_table .text-center,
    #order_details_table .text-center {
        text-align: center;
    }
    #my_orders_table .text-right,
    #order_details_table .text-right {
        text-align: right;
        float: none;
    }
    #my_orders_table .status-text {
        text-transform: uppercase;
        font-size: 14px;
        font-weight: bold;
    }
    .text-green {
        color: green;
    }
    .text-red {
        color: green;
    }
    .text-details {
        font-size: 14px;
        font-weight: bold;
        line-height: 1.3rem;
    }
    .order_details_div {
        margin-bottom: 1rem;
    }
    .order_details_div h5 {
        margin-bottom: 0.5rem;
        color: #494949;
        font-weight: bold;
    }
</style>

<div class="page-header-area-2 gray">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="small-breadcrumb">
                    <div class="breadcrumb-link">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a class="active" href="#">My Orders</a></li>
                        </ul>
                    </div>

                    <div class="header-page">
                        <h1>My Orders</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-content-area clearfix">
    <section class="section-padding no-top compare-detial gray ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="table-responsive">
                        <table class="table" id="my_orders_table">
                            <thead>
                                <th class="text-center">Order No</th>
                                <th class="text-center">Ordered Date</th>
                                <th class="text-center">Books</th>
                                <th class="text-center">Delivery Method</th>
                                <th class="text-center">Status</th>
                                <th class="text-right">Amount (LKR)</th>
                                <th class="text-center">Action</th>
                            </thead>

                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td class="text-center">{{ 'ORD' . str_pad(number_format($order->id + 100000, 0, '', ''), 6, '0', STR_PAD_LEFT) }}</td>
                                        <td class="text-center">{{ date('d M, Y', strtotime($order->created_at)) }}</td>
                                        <td class="text-center">
                                            @foreach($order->ordered_books as $orderedBook)
                                                <p>{{ $orderedBook->book->title }} (X{{ $orderedBook->quantity }})</p>
                                            @endforeach
                                        </td>
                                        <td class="text-center">{{ $order->deliveryMethod->courier }}</td>
                                        <td class="text-center">
                                            @if ($order->status == 0)
                                                <span class="status-text text-red">{{ 'Rejected' }}</span>
                                            @elseif ($order->status == 1)
                                                <span class="status-text text-green">{{ 'Placed' }}</span>
                                            @elseif ($order->status == 2)
                                                <span class="status-text text-green">{{ 'Processing' }}</span>
                                            @elseif ($order->status == 3)
                                                <span class="status-text text-green">{{ 'Shipped' }}</span>
                                            @elseif ($order->status == 4)
                                                <span class="status-text text-green">{{ 'Delivered' }}</span>
                                            @endif
                                        </td>
                                        <td class="text-right">{{ number_format((float)$order->net_total, 2, '.', '') }}</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-info btn-view" value={{ $order->id }}>
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="modal fade" id="order_details_modal" tabindex="-1" role="dialog" aria-labelledby="order_details_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="order_details_modal_label" style="float: left;">Order # <span id="order_no"></span></h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" style="padding: 3rem;">
                <div class="row">
                    <div class="col-md-6 order_details_div">
                        <h5>Order Details</h5>
                        <p class="text-details" id="order_status"></p>
                    </div>

                    <div class="col-md-6 order_details_div">
                        <h5>Shipping Method</h5>
                        <p class="text-details" id="shipping_method"></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 order_details_div">
                        <h5>Billing Details</h5>
                        <p class="text-details" id="billing_name"></p>
                        <p class="text-details" id="billing_address"></p>
                        <p class="text-details" id="billing_city"></p>
                        <p class="text-details" id="billing_country"></p>
                        <p class="text-details" id="billing_email"></p>
                        <p class="text-details" id="billing_phone"></p>
                    </div>

                    <div class="col-md-6 order_details_div">
                        <h5>Payment Method</h5>
                        <p class="text-details" id="card_no"></p>
                        <p class="text-details" id="card_holder"></p>
                        <p class="text-details" id="payment_status"></p>
                    </div>
                </div>
                <div class="table-responsive">
                <table class="table" id="order_details_table" style="margin-top: 2rem;">
                    <thead>
                        <th class="text-center">Image</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Quantity</th>
                        <th class="text-center">Price (LKR)</th>
                        <th class="text-right">Total (LKR)</th>
                    </thead>

                    <tbody id="order_details_tbody"></tbody>

                    <tbody>
                        <tr>
                            <td colspan="3" style="border-top: none;"></td>
                            <th>Sub Total</th>
                            <th class="text-right" id="sub_total"></th>
                        </tr>

                        <tr>
                            <td colspan="3" style="border-top: none;"></td>
                            <th>Delivery Fee</th>
                            <th class="text-right" id="delivery_fee"></th>
                        </tr>

                        <tr>
                            <td colspan="3" style="border-top: none;"></td>
                            <th>Processing Fee (3.42%)</th>
                            <th class="text-right" id="processing_fee"></th>
                        </tr>

                        <tr>
                            <td colspan="3" style="border-top: none;"></td>
                            <th>Net Amount</th>
                            <th class="text-right" id="net_amount"></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
            <div class="modal-footer" style="padding: 1rem;">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type='text/javascript'>
    $('.btn-view').on('click', function() {
        const order_id = $(this).val();

        $.ajax({
            url: '{{ url("orders/order_details") }}' + '/' + order_id,
            type: 'GET',
            dataType: 'JSON',
            success: function(res){
                console.log(res.customer);

                const order_no = 'ORD' + padNumber(parseInt(res.id) + 100000, 6);

                function padNumber(number, length) {
                    var str = '' + number;
                    while (str.length < length) {
                        str = '0' + str;
                    }
                    return str;
                }

                let order_status = '';
                if (res.status == 0) {
                    order_status = '<span class="status-text text-red">Rejected</span>';
                } else if (res.status == 1) {
                    order_status = '<span class="status-text text-green">Placed</span>';
                } else if (res.status == 2) {
                    order_status = '<span class="status-text text-green">Processing</span>';
                } else if (res.status == 3) {
                    order_status = '<span class="status-text text-green">Shipped</span>';
                } else if (res.status == 4) {
                    order_status = '<span class="status-text text-green">Completed</span>';
                }

                const billing_name = res.customer.first_name + ' ' + res.customer.last_name;

                let address_line_1 = '';
                if (res.customer.billing_address_street_address_line_1) {
                    address_line_1 = res.customer.billing_address_street_address_line_1;
                }

                let address_line_2 = '';
                if (res.customer.billing_address_street_address_line_2) {
                    address_line_2 = res.customer.billing_address_street_address_line_2;
                }

                const billing_address = address_line_1 + ', ' + address_line_2;
                const billing_city = res.customer.billing_city.city_name;
                const billing_state = res.customer.billing_address_state;
                const billing_zip = res.customer.billing_address_zip_code;
                const billing_country = res.customer.billing_country.country_name;
                const billing_email = res.customer.email;
                const billing_phone = res.customer.contact_no_personal_country_code + ' ' + res.customer.contact_no_personal;

                const shipping_method = res.delivery_method.courier;
                const card_no = res.payment_details.card_no;
                const card_holder = res.payment_details.card_holder_name;

                let payment_status = '';
                if (res.payment_details.status_code == 2) {
                    payment_status = '<span class="status-text text-green">Paid</span>';
                } else if (res.payment_details.status_code == 0) {
                    payment_status = '<span class="status-text text-green">Pending</span>';
                } else if (res.payment_details.status_code == -1) {
                    payment_status = '<span class="status-text text-red">Canceled</span>';
                } else if (res.payment_details.status_code == -2) {
                    payment_status = '<span class="status-text text-red">Failed</span>';
                } else if (res.payment_details.status_code == -3) {
                    payment_status = '<span class="status-text text-red">Charged Back</span>';
                }

                const sub_total = res.sub_total;
                const delivery_fee = res.delivery_fee;
                const processing_fee = res.processing_fee;
                const net_amount = res.net_total;

                const ordered_books = res.ordered_books;
                let ordered_books_list = '';
                for (let i = 0; i < ordered_books.length; i++) {
                    ordered_books_list += `<tr>
                                            <td class="text-center"><img src="${ ordered_books[i].book.cover_image_path }" width="50px" /></td>
                                            <td class="text-center">${ ordered_books[i].book.title }</td>
                                            <td class="text-center">${ ordered_books[i].quantity }</td>
                                            <td class="text-center">${ ordered_books[i].book.price }</td>
                                            <td class="text-right">${ (ordered_books[i].quantity * ordered_books[i].book.price).toFixed(2) }</td>
                                            </tr>`;
                }
                console.log(ordered_books.length);

                $('#order_no').html(order_no);
                $('#order_status').html(order_status);
                $('#billing_name').html(billing_name);
                $('#billing_address').html(billing_address);
                $('#billing_city').html(billing_city + ', ' + billing_state + ', ' + billing_zip);
                $('#billing_country').html(billing_country);
                $('#billing_email').html(billing_email);
                $('#billing_phone').html(billing_phone);
                $('#shipping_method').html(shipping_method);
                $('#card_no').html(card_no);
                $('#card_holder').html(card_holder);
                $('#payment_status').html(payment_status);
                $('#sub_total').html(sub_total);
                $('#delivery_fee').html(delivery_fee);
                $('#processing_fee').html(processing_fee);
                $('#net_amount').html(net_amount);
                $('#order_details_tbody').html(ordered_books_list);
                $('#order_details_modal').modal('show');
            }
        });
    });
</script>
@endsection
