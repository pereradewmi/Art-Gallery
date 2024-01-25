@extends('layouts.master')

@section('title')
Cart
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
                            <li><a class="active" href="#">Cart</a></li>
                        </ul>
                    </div>
                    <div class="header-page">
                        <h1>Cart</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="main-content-area clearfix">
    <section class="section-padding no-top compare-detial gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">Product</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-center">Subtotal</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php 
                                    $total = 0;
                                    $weight = 0 
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
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td data-th="Price">LKR {{ $details['price'] }}</td>
                                    {{-- <td data-th="weight">{{ $details['weight'] }} g</td> --}}

                                    <td data-th="Quantity">
                                        <input type="number" class="form-control quantity update-cart"
                                            value="{{ $details['quantity'] }}" />
                                    </td>

                                    <td data-th="Subtotal">
                                        LKR {{ $details['price'] * $details['quantity']}}
                                    </td>
                                    {{-- <td data-th="Subweight">
                                        {{ $details['weight'] * $details['quantity']}} g
                                    </td> --}}

                                    <td data-th="">
                                        <button class="btn btn-danger btn-sm remove-from-cart"><i
                                                class="fa fa-trash-o"></i></button>
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
                                    {{-- <td>{{ $weight }} g</td> --}}
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>


                    {{-- <table id="cart" class="table table-hover ">
                        <thead>
                            <tr>
                                <th style="padding: 20px;">Product</th>
                                <th style="padding: 20px;">Price</th>
                                <th style="padding: 20px;">Quantity</th>
                                <th style="padding: 20px;" class="text-center">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $total = 0 @endphp
                            @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                            <tr data-id="{{ $id }}">
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-sm-3 hidden-xs"><img src="{{ asset($details['image']) }}"
                                                width="100" height="100" class="img-responsive" /></div>
                                        <div class="col-sm-9">
                                            <h4 class="nomargin">{{ $details['name'] }}</h4>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price">LKR {{ $details['price'] }}</td>
                                <td data-th="Quantity">
                                    <input type="number" value="{{ $details['quantity'] }}"
                                        class="form-control quantity update-cart" />
                                </td>
                                <td data-th="Subtotal" class="text-center">LKR {{ $details['price'] *
                                    $details['quantity']
                                    }}</td>
                                <td class="actions" data-th="">
                                    <button class="btn btn-danger btn-sm remove-from-cart"><i
                                            class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                        <tfoot style="text-align: left; display: block;">
                            <tr>
                                <td class="text-right">
                                    <h3><strong>Total LKR {{ $total }}</strong></h3>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i>
                                        Continue Shopping</a>
                                    <button class="btn btn-success">Checkout</button>
                                </td>
                            </tr>
                        </tfoot>
                    </table> --}}

                </div>


                <div class="col-md-12 col-xs-12 col-lg-12">
                    <a href="{{ route('books') }}" class="btn btn-default margin-bottom-10">Continue Shopping</a>

                    @if (auth()->guard('customers')->check())
                    <a href="{{ url('checkout') }}" class="btn btn-success margin-bottom-10" style="float: right">Checkout</a>
                    @else
                    <a href="{{ route('customer.login') }}" class="btn btn-success margin-bottom-10"
                        style="float: right">Checkout</a>
                    @endif
                </div>


            </div>

        </div>

    </section>

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>


<script type="text/javascript">
    $(document).on('change', '.update-cart', function(e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("data-id"),
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });


    $(document).on('click', '.remove-from-cart', function(e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>

@endsection