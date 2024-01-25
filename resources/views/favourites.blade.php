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


                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col-md-3 col-xs-12 col-sm-6"> Image</th>
                                <th scope="col-md-3 col-xs-12 col-sm-6" style="text-align: center">Book Name</th>
                                <th scope="col-md-3 col-xs-12 col-sm-6" style="text-align: center">Price</th>
                                <th scope="col-md-3 col-xs-12 col-sm-6" style="text-align: center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <th padding: 25px>
                                    <img src="{{ asset($product->book['cover_image_path']) }}" alt="" class="w-12 h-12">
                                </th>
                                <td style="">{{ ucwords(strtolower($product->book->title)) }}</td>
                                <td>LKR {{ $product->book->price }}</td>
                                <td>
                                    {{-- <form action="{{ route('favorite.remove', $product->id) }}" method="POST"
                                        onsubmit="return confirm('{{ trans('Are you sure you want to delete ? ') }}');"
                                        style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="px-4 py-2 text-white bg-red-700 rounded"
                                            value="Delete">
                                    </form> --}}
                                    <form action="{{ route('favorite.remove', $product->id) }}" method="POST"
                                        onsubmit="return confirm('{{ trans('Are you sure you want to delete?') }}');"
                                        style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="text-red-700 px-2 py-2 text-2xl"
                                            style="border: none; background: none;">
                                            <i class="fa fa-close" style="color: red;"></i>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{--
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-xs font-bold text-left text-gray-500 uppercase">
                                    Image
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
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($products as $product)


                            <tr>
                                <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap">
                                    <img src="{{ asset($product['cover_image_path']) }}" alt="" class="w-12 h-12">

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
                                    <form action="{{ route('favorite.remove', $product->id) }}" method="POST"
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
                    </table> --}}



                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Main Container End -->
    </section>

</div>
<!-- Main Content Area End -->


@endsection