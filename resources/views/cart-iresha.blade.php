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
    <section class="section-padding no-top compare-detial gray ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    {{-- <table>
                        <tbody>
                            <tr>
                                <td>
                                    Price
                                </td>
                                <td>
                                    $75,000
                                </td>
                                <td>
                                    $35,000
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Engine Type
                                </td>
                                <td>
                                    211-hp, 2.0-liter I-4 (premium)
                                </td>
                                <td>
                                    200-hp, 2.0-liter I-4 (premium)
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Transmission
                                </td>
                                <td>
                                    Automatic
                                </td>
                                <td>
                                    Manual
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Vehicle Type
                                </td>
                                <td>
                                    Sedan
                                </td>
                                <td>
                                    Coupe
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Fuel Type
                                </td>
                                <td>
                                    Petrol
                                </td>
                                <td>
                                    Diesel
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Available Colors
                                </td>
                                <td>
                                    <ul class="list-inline">
                                        <li>
                                            <a class="light-blue"></a>
                                        </li>
                                        <li>
                                            <a class="orange"></a>
                                        </li>
                                        <li>
                                            <a class="blueviolet"></a>
                                        </li>
                                        <li>
                                            <a class="orange-dark"></a>
                                        </li>

                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-inline">
                                        <li>
                                            <a class="steelblue"></a>
                                        </li>
                                        <li>
                                            <a class="red-light"></a>
                                        </li>
                                        <li>
                                            <a class="cyan-dark"></a>
                                        </li>

                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table> --}}


                    <table id="cart" class="table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th class="text-center">Subtotal</th>
                                <th></th>
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
                        <tfoot>
                            <tr>
                                <td colspan="5" class="text-right">
                                    <h3><strong>Total LKR {{ $total }}</strong></h3>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5" class="text-right">
                                    <a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i>
                                        Continue Shopping</a>
                                    <button class="btn btn-success">Checkout</button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>



                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Main Container End -->
    </section>

</div>
<!-- Main Content Area End -->

@endsection


@section('scripts')

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