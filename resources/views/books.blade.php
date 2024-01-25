@extends('layouts.master')

@section('title')
Books
@endsection

@section('content')
<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="small-breadcrumb">
                    <div class="breadcrumb-link">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a class="active" href="#">Books</a></li>
                        </ul>
                    </div>
                    <div class="header-page">
                        <h1>Books</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
<div class="main-content-area clearfix">
    <section class="section-padding no-top gray">
        <div class="container">
            <div class="row">

                {{-- right sidebar --}}
                <div class="col-md-12 col-lg-12 col-sx-12">
                    <div class="row">
                        <!-- Sorting Filters -->
                        {{-- <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                            <div class="clearfix"></div>
                            <div class="listingTopFilterBar">
                                <div class="col-md-7 col-xs-12 col-sm-7 no-padding">
                                    <ul class="filterAdType">
                                        <li class="active"><a href="">All ads <small>(1)</small></a> </li>
                                        <li class=""><a href="">Featured <small>(35)</small></a> </li>
                                    </ul>
                                </div>
                                <div class="col-md-5 col-xs-12 col-sm-5 no-padding">
                                    <div class="header-listing">
                                        <h6>Sort by :</h6>
                                        <div class="custom-select-box">
                                            <select name="order" class="custom-select">
                                                <option value="0">Most popular</option>
                                                <option value="1">The latest</option>
                                                <option value="2">The best rating</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="clearfix"></div> --}}

                        <div class="grid-style-4">
                            <div class="posts-masonry">

                                @foreach ($books as $book)
                                <div class="col-md-2 col-xs-12 col-sm-4">

                                    <div class="white category-grid-box-1">
                                        @if ($book->status == '0')
                                        <div class="featured-ribbon">
                                            <span>Out of Stock</span>
                                        </div>
                                        @endif

                                        <div class="image">
                                            <div alt="Carspot" {{-- src="{{ asset($book->cover_image_path) }}"
                                                class="img-responsive"> --}}
                                                style="background-image:url({{ asset($book->cover_image_path) }});
                                                height:250px; background-size:cover;background-position:center;
                                                position:relative;">
                                            </div>
                                        </div>

                                        <div class="short-description-1 ">
                                            <div class="category-title cut-text">
                                                @foreach ($book->bookAuthor as $singleBookAuthor)
                                                <span><a href="#">{{ $singleBookAuthor->author['author_name']
                                                        }}</a></span>
                                                @endforeach
                                            </div>

                                            <h3 class="cut-text">
                                                <a href="{{ route('book-details', $book->id) }}">{{ $book->title }}</a>
                                            </h3>

                                            {{-- <p class="location"><i class="fa fa-map-marker"></i> Model Town
                                                Link
                                                Road London</p> --}}

                                            <span class="ad-price">LKR {{ $book->price }}</span>
                                        </div>

                                        <div class="ad-info-1">
                                            <ul style="display: inline-flex; list-style: none; padding: 0; margin: 0;">
                                                @if (auth()->guard('customers')->check())
                                                <li><a href="{{ route('favorite.add', $book->id) }}"
                                                        class="btn save-ad"><i class="fa fa-heart"
                                                            style="font-size: 15px;"></i></a>
                                                </li>
                                                {{-- <form action="{{ route('favorite.add', $book->id) }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <li><a href="javascript:$('form').submit();" class="btn save-ad"><i
                                                                class="fa fa-heart" style="font-size: 15px;"></i></a>
                                                    </li>
                                                </form> --}}
                                                @else
                                                <li><a href="{{ route('customer.login') }}" class="btn save-ad"><i
                                                            class="fa fa-heart" style="font-size: 15px;"></i></a>
                                                </li>
                                                @endif

                                                <li><a href="{{ route('add.to.cart') }}/{{$book->id}}"
                                                        class="btn save-ad"><i class="fa fa-shopping-cart"
                                                            style="font-size: 15px;"></i></a>
                                                </li>

                                                <li><a href="{{ route('book-details', $book->id) }}"
                                                        class="btn save-ad"><i class="fa fa-eye"
                                                            style="font-size: 15px;"></i></a>

                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <!-- Pagination -->
                        {{-- <div class="text-center margin-top-30">
                            <ul class="pagination ">
                                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div> --}}
                        <!-- Pagination End -->
                    </div>
                </div>

                {{-- left sidebar --}}
                {{-- <div class="col-md-4 col-md-pull-8 col-sx-12">
                    <div class="sidebar">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                            <div class="panel panel-default">

                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            <i class="more-less glyphicon glyphicon-plus"></i>
                                            Brands
                                        </a>
                                    </h4>
                                </div>

                                <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">

                                        <div class="search-widget">
                                            <input placeholder="Search by Car Name" type="text">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>

                                        <div class="skin-minimal">
                                            <ul class="list">
                                                <li>
                                                    <input type="checkbox" id="minimal-checkbox-1">
                                                    <label for="minimal-checkbox-1">All Brands</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="minimal-checkbox-2">
                                                    <label for="minimal-checkbox-2">Audi </label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="minimal-checkbox-3">
                                                    <label for="minimal-checkbox-3">BMW </label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="minimal-checkbox-4">
                                                    <label for="minimal-checkbox-4">Mercedes </label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="minimal-checkbox-5">
                                                    <label for="minimal-checkbox-5">Lamborghini </label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="minimal-checkbox-6">
                                                    <label for="minimal-checkbox-6">Honda</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="minimal-checkbox-7">
                                                    <label for="minimal-checkbox-7">Bugatti </label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="minimal-checkbox-8">
                                                    <label for="minimal-checkbox-8">Acura </label>
                                                </li>
                                            </ul>
                                            <a href=".cat_modal" data-toggle="modal" class="pull-right"><strong>View
                                                    All</strong></a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div> --}}
                <!-- Left Sidebar End -->


            </div>
        </div>
        <style>
            .short-description-1 {
                /* Reduce font size for all text within this div */
                font-size: 15px;
                /* You can adjust the value as needed */
            }

            /* Target specific elements for further adjustments */
            .short-description-1 h3 a {
                /* Reduce the font size for the h3 element within this div */
                font-size: 16px;

                /* You can adjust the value as needed */
            }

            .short-description-1 .ad-price {
                /* Reduce the font size for the price span within this div */
                font-size: 15px;
                /* You can adjust the value as needed */
            }

            .short-description-1 .category-title a {
                /* Reduce the font size for the author links within this div */
                font-size: 14px;

                /* You can adjust the value as needed */
            }

            .cut-text {
                display: block;
                max-width: 98%;
                white-space: nowrap;
                overflow: hidden !important;
                text-overflow: ellipsis;
            }
        </style>
    </section>
</div>
@endsection
