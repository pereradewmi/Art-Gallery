@extends('layouts.master')

@section('title')
Book Details
@endsection

@section('content')

<div class="car-detail gray">
	<div class="advertising">
		<div class="container">
			<div class="banner">
				<img src="images/banner-1.png" alt="">
			</div>
		</div>
	</div>
</div>

<div class="page-header-area-2 no-bottom gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 no-padding  col-md-12 col-sm-12 col-xs-12">
				<div class="small-breadcrumb">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<div class=" breadcrumb-link">
							<ul>
								<li><a href="{{ route('home') }}">Home</a></li>
								<li><a class="active" href="#">Book Details</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="main-content-area clearfix">
	<!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
	<section class="section-padding no-top gray ">
		<div class="container">
			<div class="row">
				<div class="pricing-area">
					<div class="col-md-9 col-xs-12 col-sm-8">
						<div class="heading-zone">
							<h1>{{ $book[0]->title }}</h1>
							<div class="short-history">
								<ul>
									<li><b>Author(s):
											@foreach ($book[0]->bookAuthor as $singleBookAuthor)
											<span><a href="#">{{ $singleBookAuthor->author['author_name']
													}}</a></span>
											@endforeach
										</b>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 detail_price col-xs-12">
						<div class="singleprice-tag">LKR {{ $book[0]->price }}
							{{-- <span>(Fixed)</span> --}}
						</div>
					</div>
				</div>
				<div class="col-md-4 col-xs-12 col-sm-12">
					<div class="singlepage-detail ">
						@if ($book[0]->status=='0')
						<div class="featured-ribbon">
							<span>Out of Stock</span>
						</div>
						@endif

						<div id="single-slider" class="flexslider">
							<ul class="slides">
								@foreach ($book[0]->bookImage as $key => $image)
								<li><a href="{{ asset($image->image_path) }}" data-fancybox="group">
										<img src="{{ asset($image->image_path) }}" />
									</a>
								</li>
								@endforeach
							</ul>
						</div>
						<div id="carousel" class="flexslider">
							<ul class="slides">
								@foreach ($book[0]->bookImage as $key => $image)
								<li><img alt="" src="{{ asset($image->image_path) }}"></li>
								@endforeach
								{{-- <li><img alt=""
										src="https://templates.scriptsbundle.com/carspot/demos/images/single-page/2_thumb.jpg">
								</li>
								<li><img alt="" src="images/single-page/3_thumb.jpg"> </li>
								<li><img alt="" src="images/single-page/4_thumb.jpg"></li>
								<li><img alt="" src="images/single-page/5_thumb.jpg"></li>
								<li><img alt="" src="images/single-page/6_thumb.jpg"></li> --}}
							</ul>
						</div>

						{{-- <div class="list-style-1 margin-top-20">
							<div class="panel with-nav-tabs panel-default">
								<div class="panel-heading">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#tab3default" data-toggle="tab">Video</a></li>
									</ul>
								</div>
								<div class="panel-body">
									<div class="tab-content">
										<div class="tab-pane in active fade" id="tab3default">
											<iframe src="https://www.youtube.com/embed/lr7mPzjTgC0" allowfullscreen=""
												height="370"></iframe>
										</div>
									</div>
								</div>
							</div>
						</div> --}}

					</div>
				</div>


				<!-- Right Sidebar -->
				<div class="col-md-8 col-xs-12 col-sm-12">
					<div class="sidebar">

						<div class="content-box-grid">
							<div class="short-features">
								<div class="heading-panel">
									<h3 class="main-title text-left">
										Details
									</h3>
								</div>
								<p>{{ $book[0]->description }}</p>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Stock No</strong> :</span> {{ $book[0]->stock_no }}
								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Title</strong> :</span> {{ $book[0]->title }}
								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Author</strong> :</span>
									@foreach ($book[0]->bookAuthor as $singleBookAuthor){{
									$singleBookAuthor->author['author_name']
									}}
									@endforeach
								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Price</strong> :</span> LKR {{ $book[0]->price }}
								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Quantity</strong> :</span> {{ $book[0]->stock_quantity }}
								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Category</strong> :</span> {{ $book[0]->bookCategory['category_name']
									}}
								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Language</strong> :</span> {{ $book[0]->bookLanguage['language'] }}
								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Publisher</strong> :</span> {{
									$book[0]->bookPublisher['publisher_name'] }}
								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Publication Date</strong> :</span> {{ $book[0]->publication_date }}
								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Edition</strong> :</span> {{ $book[0]->bookEdition['edition'] }}
								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Pages Count</strong> :</span> {{ $book[0]->pages_count }}
								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Reading Age Group</strong> :</span> {{
									$book[0]->bookReadingAgeGroup['reading_age_group'] }}
								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Dimensions</strong> :</span> {{ $book[0]->length }} cm * {{
									$book[0]->width }} cm * {{ $book[0]->height }} cm
								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Weight</strong> :</span> {{ $book[0]->weight }} g
								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>ISBN 10</strong> :</span> {{ $book[0]->isbn_10 }}
								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>ISBN 13</strong> :</span> {{ $book[0]->isbn_13 }}
								</div>
							</div>

							<div class="clearfix"></div>

							<hr />

							<div class="widget-content margin-top-30">
								<div class="finance-calculator">


									<form action="{{route('add.to.cart', $book[0]->id)}}" method="GET">
										<div class="row">
											<div class="col-md-1 col-xs-12 col-sm-12">
												<label>Quantity</label>
											</div>
											<div class="col-md-3 col-xs-12 col-sm-12">
												<input type="number" name="quantity" class="form-control" placeholder="" value="1">
											</div>
										</div>

										<div class="row margin-top-30">
											<!--<div class="col-md-4 col-xs-12 col-sm-12 margin-top-10">-->
											<!--	<input class="btn btn-theme btn-block" value="Buy It Now" type="submit">-->
											<!--</div>-->
											<div class="col-md-4 col-xs-12 col-sm-12 margin-top-10">

											    <button class="btn btn-theme btn-lg btn-block" type="submit"><i class="fa fa-shopping-cart"></i> Add to Cart</button>

												<!--<a href="{{ route('add.to.cart', $book[0]->id) }}"-->
												<!--	class="btn btn-theme btn-block"><i class="fa fa-shopping-cart"></i>-->
												<!--	Add to Cart</a>-->
											</div>

											@if(auth()->guard('customers')->check())
											{{-- <form action="{{ route('favorite.add', $book[0]->id) }}" method="POST"
												enctype="multipart/form-data">
												@csrf
												<div class="col-md-4 col-xs-12 col-sm-12">
													<a href="javascript:$('form').submit();"
														class="btn btn-theme btn-block"><i class="fa fa-heart-o"></i>Add
														to Favourites</a>
												</div>
											</form> --}}

											<div class="col-md-4 col-xs-12 col-sm-12 margin-top-10">
												<a href="{{ route('favorite.add', $book[0]->id) }}"
													class="btn btn-theme btn-block"><i class="fa fa-heart-o"></i>Add
													to Favourites</a>
											</div>

											@else

											<div class="col-md-4 col-xs-12 col-sm-12 margin-top-10">
												<a href="{{ route('customer.login') }}"
													class="btn btn-theme btn-block"><i class="fa fa-heart-o"></i>Add to
													Favourites</a>
											</div>
											@endif

										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- Sidebar Widgets End -->
				</div>

			</div>
		</div>
		<!-- Main Container End -->
	</section>


</div>




@endsection
