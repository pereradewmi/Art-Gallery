@extends('layouts.master')

@section('title')
    Search Results
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
                                <li><a class="active" href="#">Search Results</a></li>
                            </ul>
                        </div>
                        <div class="header-page">
                            <h1>Search Results</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
                                    @if (!empty($searchResults))
                                        @foreach ($searchResults as $searchResult)
                                            <div class="col-md-2 col-xs-12 col-sm-2">
                                                <div class="white category-grid-box-1">
                                                    {{-- @if ($searchResult->status == '0')
										<div class="featured-ribbon">
											<span>Coming Soon</span>
										</div>
										@endif --}}

                                                    <div class="image">
                                                        <div alt="Carspot" {{-- src="{{ asset($searchResult->cover_image_path) }}" --}}
                                                            style="background-image:url({{ asset($searchResult->cover_image_path) }}); height:250px; background-size:cover;background-position:center; position:relative;">
                                                            class="img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="short-description-1 ">
                                                        <div class="category-title">
                                                            @foreach ($searchResult->bookAuthor as $singleBookAuthor)
                                                                <span><a
                                                                        href="#">{{ $singleBookAuthor->author['author_name'] }}</a></span>
                                                            @endforeach
                                                        </div>
                                                        <h3 class="cut-text" style="font-size: 16px">
                                                            <a
                                                                href="{{ route('book-details', $searchResult->id) }}">{{ ucwords(strtolower($searchResult->title)) }}</a>
                                                        </h3>

                                                        {{-- <p class="location"><i class="fa fa-map-marker"></i> Model Town
												Link
												Road London</p> --}}

                                                        <span class="ad-price" style="font-size: 14px">LKR
                                                            {{ $searchResult->price }}</span>
                                                    </div>

                                                    {{-- <div class="ad-info-1">
											<ul>
												<li><i class="flaticon-fuel-1"></i>{{
													$searchResult->vehicleFuel->name
													}}
												</li>
												<li><i class="flaticon-dashboard"></i>{{ $searchResult->mileage
													}} km
												</li>
												<li><i class="flaticon-engine-2"></i>{{
													$searchResult->engine_capacity
													}} cc
												</li>
											</ul>
										</div> --}}
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                    @endif

                                </div>
                            </div>

                            <div class="clearfix"></div>

                            {{-- <div class="text-center margin-top-30">
							<ul class="pagination">
								<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
								<li><a href="#">1</a></li>
								<li class="active"><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
							</ul>
						</div> --}}
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

                </div>
            </div>
        </section>
    </div>
<style>
     .cut-text {
                    display: block;
                    max-width: 98%;
                    white-space: nowrap;
                    overflow: hidden !important;
                    text-overflow: ellipsis;
                }
</style>
@endsection
