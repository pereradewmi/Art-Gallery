@extends('layouts.master')

@section('title')
    Checkout
@endsection

@section('content')

<div class="page-header-area-2 gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="small-breadcrumb">
                    <div class="breadcrumb-link">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a class="active" href="#">Checkout</a></li>
                        </ul>
                    </div>

                    <div class="header-page">
                        <h1>Checkout</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-content-area clearfix">
    <section class="section-padding no-top gray ">
        <div class="container">

            {{-- <form method="post" action="https://www.payhere.lk/pay/checkout"> --}}
            <form method="post" action="https://sandbox.payhere.lk/pay/checkout">
                <input type="hidden" name="merchant_id" value="{{ $merchantId }}">
                <input type="hidden" name="return_url" value="{{ route('return-url') }}">
                <input type="hidden" name="cancel_url" value="{{ route('checkout') }}">
                <input type="hidden" name="notify_url" value="{{ route('notify-url') }}">

                <input type="hidden" name="order_id" id="payhere_order_id" value="{{ $payhereOrderId }}">
                <input type="hidden" name="items" value="">
                <input type="hidden" name="currency" value="{{ $currency }}">
                <input type="hidden" name="amount" id="payhere_amount" value="0">

                <input type="hidden" name="first_name" value="{{ auth()->guard('customers')->user()->first_name}}">
                <input type="hidden" name="last_name" value="{{ auth()->guard('customers')->user()->last_name }}">
                <input type="hidden" name="email" value="{{ auth()->guard('customers')->user()->email }}">
                <input type="hidden" name="phone" value="{{ auth()->guard('customers')->user()->contact_no_personal_country_code }} {{ auth()->guard('customers')->user()->contact_no_personal }}">
                <input type="hidden" name="address" value="{{ auth()->guard('customers')->user()->shipping_address_street_address_line_1 }} {{ auth()->guard('customers')->user()->shipping_address_street_address_line_2 ?? '' }}">
                <input type="hidden" name="city" value="{{ auth()->guard('customers')->user()->city['city_name'] }}">
                <input type="hidden" name="country" value="{{ auth()->guard('customers')->user()->country['country_name'] }}">
                <input type="hidden" name="hash" id="hash" value="">

                <div class="row">
                    <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12">
                        <div class="post-ad-form postdetails profile-edit">
                            <h2 class="heading-md margin-bottom-20">Shipping Details</h2>

                            @if(auth()->guard('customers')->check())
                                <dl class="dl-horizontal">
                                    <dt><strong>Deliver To </strong></dt>
                                    <dd>
                                        {{ auth()->guard('customers')->user()->first_name}} {{ auth()->guard('customers')->user()->last_name }}
                                    </dd>

                                    <dt><strong>Shipping Address </strong></dt>
                                    <dd>
                                        {{ auth()->guard('customers')->user()->shipping_address_street_address_line_1 }},
                                        {{ auth()->guard('customers')->user()->shipping_address_street_address_line_2 }},
                                        {{ auth()->guard('customers')->user()->city['city_name'] }},
                                        {{ auth()->guard('customers')->user()->shipping_address_state }},
                                        {{ auth()->guard('customers')->user()->shipping_address_zip_code }},
                                        {{ auth()->guard('customers')->user()->country['country_name'] }}
                                    </dd>

                                    <dt><strong>Contact No </strong></dt>
                                    <dd>
                                        {{ auth()->guard('customers')->user()->contact_no_personal_country_code }}
                                        {{ auth()->guard('customers')->user()->contact_no_personal }}
                                    </dd>
                                </dl>
                            @endif
                        </div>

                        <div class="post-ad-form postdetails profile-edit margin-top-20">
                            <h2 class="heading-md margin-bottom-20">Order Details</h2>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Product</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center">Quantity</th>
                                            <th class="text-center">Subtotal</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php
                                            $total = 0;
                                            $weight = 0;
                                        @endphp

                                        @if(session('cart'))
                                            @foreach(session('cart') as $id => $details)
                                                @php
                                                    $total += $details['price'] * $details['quantity'];
                                                    $weight += $details['weight'] * $details['quantity'];
                                                @endphp

                                                <tr data-id="{{ $id }}">
                                                    <td data-th="Product">
                                                        <div class="recent-ads recent-ads-list">
                                                            <div class="recent-ads-container">
                                                                <div class="recent-ads-list-image">
                                                                    <a class="recent-ads-list-image-inner">
                                                                        <img src="{{ asset($details['image']) }}">
                                                                    </a>
                                                                </div>
                                                                <div class="recent-ads-list-content">
                                                                    <h3 class="recent-ads-list-title">
                                                                        <a>{{ $details['name'] }}</a>
                                                                        <input id="book_id" class="book_id" type="hidden" value="{{ $details['id'] }}">
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td data-th="Price">LKR {{ $details['price'] }}</td>

                                                    <td data-th="Quantity">{{ $details['quantity'] }}
                                                        <input id="book_quantity" class="book_quantity" type="hidden" value="{{ $details['quantity'] }}">
                                                    </td>

                                                    <td data-th="Subtotal">
                                                        LKR {{ $details['price'] * $details['quantity']}}
                                                        <input id="book_subtotal" class="book_subtotal" type="hidden" value="{{ $details['price'] * $details['quantity']}}">
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <td>Total</td>
                                            <td></td>
                                            <td></td>
                                            <td>LKR {{ $total }}</td>
                                            <td></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-12 col-sm-12">
                        <div class="blog-sidebar">
                            <div class="widget">
                                <div class="widget-heading">
                                    <h4 class="panel-title"><a>Order Summary </a></h4>
                                </div>

                                <div class="widget-content">
                                    <div class="margin-bottom-20">
                                        <label class="control-label">Select Shipping Method </label>
                                        <select class="form-control shipping-methods" id="shipping_method" required>
                                            <option label="- Select -"></option>
                                            @foreach ($shippingMethods as $shippingMethod)
                                                <option value="{{ $shippingMethod->id }}">{{ $shippingMethod->courier }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <dl class="dl-horizontal">
                                        <dt style="text-align: left"><strong>Subtotal </strong></dt>
                                        <input id="sub_total" class="sub_total" type="hidden" value="{{ $total }}">
                                        <dd style="text-align: right; padding: 10px 0;">LKR {{ number_format((float)$total, 2, '.', '') }}</dd>

                                        <dt style="text-align: left"><strong>Delivery Fee </strong></dt>
                                        <input id="total_weight" class="total_weight" type="hidden" value="{{ $weight }}">
                                        <input id="shipping_city" class="shipping_city" type="hidden" value="{{ auth()->guard('customers')->user()->shipping_address_city_id}}">
                                        <input id="total_delivery_fee" class="total_delivery_fee" type="hidden" value="0.00">
                                        <dd style="text-align: right; padding: 10px 0;">LKR <span id="delivery_fee">0.00</span></dd>

                                        <dt style="text-align: left"><strong>Processing Fee (3.42%)</strong></dt>
                                        <input id="card_processing_fee" class="card_processing_fee" type="hidden" value="0.00">
                                        <dd style="text-align: right; padding: 10px 0;">LKR <span id="processing_fee">0.00</span></dd>

                                        <dt style="text-align: left"><strong>Net Total</strong></dt>
                                        <input id="total_net_total" class="net_total" type="hidden" value="0.00">
                                        <dd style="text-align: right; padding: 10px 0;">LKR <span id="net_total">0.00</span></dd>
                                    </dl>

                                    <button class="btn btn-theme btn-lg btn-block" type="submit">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </section>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type='text/javascript'>
    $(document).ready(function(){

        // Department Change
        $('#shipping_method').change(function(){
            var id = $(this).val();
            var weight = $("#total_weight").val();
            var cityId = $("#shipping_city").val();
            var subTotal = $("#sub_total").val();
            var payhere_order_id = $("#payhere_order_id").val();

            // Empty the span
            $('#delivery_fee').empty();

            // AJAX request
            $.ajax({
                url: 'checkout/get-delivery-fee/'+ id + '/' + weight + '/' + cityId + '/' + payhere_order_id,
                type: 'get',
                dataType: 'json',
                success: function(response){
                    console.log(response);
                    const rate = response[0];
                    const hash = response[1];
                    const total_amount = response[2];

                    $("#delivery_fee").html("<span>"+rate+"</span>");
                    $('#total_delivery_fee').val(rate);

                    const netTotal = parseFloat(subTotal) + parseFloat(rate);
                    const processingFee = netTotal / 100 * 3.42;

                    $('#card_processing_fee').val(processingFee);
                    $('#processing_fee').html((processingFee).toFixed(2));

                    const finalNetTotal =  parseFloat(netTotal) + parseFloat(processingFee);
                    $('#total_net_total').val(finalNetTotal);
                    $("#net_total").html("<span>"+(finalNetTotal).toFixed(2)+"</span>");

                    $('#hash').val(hash);
                    $('#payhere_amount').val(total_amount);
                }
            });
        });

    });
</script>
@endsection
