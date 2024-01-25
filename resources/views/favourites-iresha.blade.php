@extends('layouts.master')

@section('title')
Favourites
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
                            <li><a class="active" href="#">Favourites</a></li>
                        </ul>
                    </div>
                    <div class="header-page">
                        <h1>Favourites</h1>
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


                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-xs font-bold text-left text-gray-500 uppercase">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3 text-xs font-bold text-left text-gray-500 uppercase">
                                    Product Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-xs font-bold text-left text-gray-500 uppercase">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3 text-xs font-bold text-left text-gray-500 uppercase">
                                    Image
                                </th>
                                <th scope="col" class="px-6 py-3 text-xs font-bold text-right text-gray-500 uppercase">
                                    Delete
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($products as $product)


                            <tr>
                                <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap">
                                    {{ $product->stock_no }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap">
                                    {{ $product->title }}

                                </td>
                                <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap">
                                    {{ $product->price }}

                                </td>
                                <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap">
                                    <img src="{{ asset($product['cover_image_path']) }}" alt="" class="w-12 h-12">

                                </td>

                                <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                    <form action="{{ route('favorite.remove',$product->id) }}" method="POST"
                                        onsubmit="return confirm('{{ trans('Are you sure you want to delete ? ') }}');"
                                        style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="px-4 py-2 text-white bg-red-700 rounded"
                                            value="Delete">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
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