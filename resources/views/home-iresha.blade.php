@extends('layouts.master')

@section('title')
Home
@endsection


@section('content')


<!-- Master Slider -->
<div class="master-slider ms-skin-default" id="masterslider">

	<div class="ms-slide slide-1" data-delay="5">
		<img src="{{ asset('img/home/blank.gif') }}" data-src="{{ asset('img/home/slider-banner.jpg') }}"
			alt="Slide1 background" />
		<img src="{{ asset('img/home/blank.gif') }}" data-src="{{ asset('img/home/audi.png') }}" alt="Master Slider"
			style="left:750px; top:180px;" class="ms-layer" data-type="image" data-delay="1000" data-duration="3000"
			data-ease="easeOutExpo" data-effect="scalefrom(1.1,1.1,190,0)" />
		<h3 class="ms-layer title4 font-white font-uppercase font-thin-xs" style="left:120px; top:150px;"
			data-type="text" data-delay="2000" data-duration="2000" data-ease="easeOutExpo"
			data-effect="skewleft(30,80)">Find Your Dream Book</h3>
		<h3 class="ms-layer title4 font-white font-thin-xs" style="left:120px; top:210px;" data-type="text"
			data-delay="2500" data-duration="2000" data-ease="easeOutExpo" data-effect="skewleft(30,80)"><span
				class="font-color font-thin-xs heading-color">Thousand Of Cars Of Your Choice</span></h3>
		<h5 class="ms-layer text1 font-white" style="left: 120px; top: 280px;" data-type="text" data-effect="bottom(45)"
			data-duration="2500" data-delay="3000" data-ease="easeOutExpo">Lorem Ipsum is simply dummy text of the
			printing typesetting<br>
			industry is proident sunt in culpa officia deserunt mollit.
		</h5>
		<a class="ms-layer btn3 uppercase" style="left:120px; top: 390px;" data-type="text" data-delay="3500"
			data-ease="easeOutExpo" data-duration="2000" data-effect="scale(1.5,1.6)">Search Books</a>
	</div>

	<div class="ms-slide slide-3" data-delay="5">
		<img src="{{ asset('img/home/blank.gif') }}" data-src="{{ asset('img/home/slider-banner2.jpg') }}"
			alt="Slide1 background" />
		<h3 class="ms-layer title4 font-white font-uppercase font-thin-xs" style="left:120px; top:150px;"
			data-type="text" data-delay="2000" data-duration="2000" data-ease="easeOutExpo"
			data-effect="skewleft(30,80)">Welcome to Heena Publications</h3>
		<h3 class="ms-layer title4 font-white font-thin-xs" style="left:120px; top:210px;" data-type="text"
			data-delay="2500" data-duration="2000" data-ease="easeOutExpo" data-effect="skewleft(30,80)"><span
				class="font-color font-thin-xs heading-color">Find Your Dream Car</span></h3>
		<h5 class="ms-layer text1 font-white" style="left: 120px; top: 280px;" data-type="text" data-effect="bottom(45)"
			data-duration="2500" data-delay="3000" data-ease="easeOutExpo">Lorem Ipsum is simply dummy text of the
			printing typesetting<br>
			industry is proident sunt in culpa officia deserunt mollit.
		</h5>
		<a class="ms-layer btn3 uppercase" style="left:120px; top: 390px;" data-type="text" data-delay="3500"
			data-ease="easeOutExpo" data-duration="2000" data-effect="scale(1.5,1.6)"> View All Books</a>
	</div>

	<div class="ms-slide slide-2" data-delay="4">
		<div class="ms-overlay-layers"></div>
		<img src="{{ asset('img/home/blank.gif') }}" data-src="{{ asset('img/home/slider-banner4.jpg') }}"
			alt="Slide1 background" />
		<h3 class="ms-layer title4 font-white font-uppercase font-thin-xs" style="left:120px; top:150px;"
			data-type="text" data-delay="2000" data-duration="2000" data-ease="easeOutExpo"
			data-effect="skewleft(30,80)">Welcome to JP Car Zone</h3>
		<h3 class="ms-layer title4 font-white font-thin-xs" style="left:120px; top:210px;" data-type="text"
			data-delay="2500" data-duration="2000" data-ease="easeOutExpo" data-effect="skewleft(30,80)"><span
				class="font-color font-thin-xs heading-color">Find Your Dream Car</span></h3>
		<h5 class="ms-layer text1 font-white" style="left: 120px; top: 280px;" data-type="text" data-effect="bottom(45)"
			data-duration="2500" data-delay="3000" data-ease="easeOutExpo">Lorem Ipsum is simply dummy text of the
			printing typesetting<br>
			industry is proident sunt in culpa officia deserunt mollit.
		</h5>
		<a class="ms-layer btn3 uppercase" style="left:120px; top: 390px;" data-type="text" data-delay="3500"
			data-ease="easeOutExpo" data-duration="2000" data-effect="scale(1.5,1.6)"> View All Books</a>
	</div>
</div>


<div class="main-content-area clearfix">
	<div class="search-bar">
		<div class="section-search search-style-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
						<div class="clearfix">
							<form method="post" action="{{ route('search') }}">
								@csrf
								<div class="search-form pull-left">
									<div class="search-form-inner pull-left">
										<div class="col-md-3 col-sm-6 col-xs-12 no-padding">
											<div class="form-group">
												<label>Select Title</label>
												<select class="form-control title" name="title">
													<option label="Any Title"></option>
													@foreach($bookTitles as $bookTitle)
													<option value="{{ $bookTitle->id }}" {{
														old('bookTitle')==$bookTitle->id ?
														'selected' : '' }}> {{ $bookTitle->title }}
													</option>
													@endforeach
												</select>
											</div>
										</div>
										<div class="col-md-3 col-sm-6 col-xs-12 no-padding">
											<div class="form-group">
												<label>Select Category</label>
												<select class="form-control category" name="category">
													<option label="Any Category"></option>
													@foreach($categories as $category)
													<option value="{{ $category->id }}" {{ old('category')==$category->
														id ? 'selected' : '' }}>
														{{ $category->category_name }}
													</option>
													@endforeach
												</select>
											</div>
										</div>
										<div class="col-md-3 col-sm-6 col-xs-12 no-padding">
											<div class="form-group">
												<label>Select Author</label>
												<select class="form-control author" name="author">
													<option label="Any Author"></option>
													@foreach($authors as $author)
													<option value="{{ $author->id }}" {{ old('author')==$author->id ?
														'selected' : '' }}>
														{{ $author->author_name }}
													</option>
													@endforeach
												</select>
											</div>
										</div>
										<div class="col-md-3 col-sm-6 col-xs-12 no-padding">
											<div class="form-group">
												<label>Select Language</label>
												<select class="form-control language" name="language">
													<option label="Any Language"></option>
													@foreach($languages as $language)
													<option value="{{ $language->id }}" {{ old('language')==$language->
														id ?'selected' : '' }}>
														{{ $language->language }}
													</option>
													@endforeach
												</select>
											</div>
										</div>
									</div>
									<div class="form-group pull-right">
										<button type="submit" value="submit" class="btn btn-lg btn-theme">Search
											Now</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- =-=-=-=-=-=-= Ads Archieve =-=-=-=-=-=-= -->
	<section class="custom-padding">
		<div class="container">
			<div class="row">
				<div class="clearfix"></div>
				<div class="heading-panel">
					<div class="col-xs-12 col-md-12 col-sm-12 text-center">
						<h1>New <span class="heading-color"> Book</span> Deals</h1>
						<p class="heading-text">Eu delicata rationibus usu. Vix te putant utroque, ludus fabellas duo
							eu, his dico ut debet consectetuer.</p>
					</div>
				</div>

				<!--<div class="row">-->
				<div class="col-md-12 col-xs-12 col-sm-12">
					<div class="posts-masonry">

						@foreach($newArrivals as $newArrival)
						<div class="col-md-4 col-xs-12 col-sm-6">
							<div class="category-grid-box">
								<div class="category-grid-img">
									<img class="img-responsive" src="{{ asset($newArrival->cover_image_path) }}">
									{{-- @if ($newArrival->status=='0')
									<span class="ad-status"> Out of Stock </span>
									@endif --}}
									{{-- <div class="user-preview">
										<a href="#">
											<img src="images/users/1.jpg" class="avatar avatar-small">
										</a>
									</div> --}}

									<div class="additional-information">
										{{-- <form action="{{ route('favorite.add', $newArrival->id) }}" method="POST"
											enctype="multipart/form-data">
											@csrf
											<button class="btn save-ad">
												<i class="fa fa-heart-o"></i>
											</button>
										</form> --}}
										@if(auth()->guard('customers')->check())
										<form action="{{ route('favorite.add', $newArrival->id) }}" method="POST"
											enctype="multipart/form-data">
											@csrf
											<p><a href="javascript:$('form').submit();" class="btn save-ad"><i
														class="fa fa-heart-o"></i> Add to Favourites</a>
											</p>
										</form>
										@else
										<p><a href="{{ route('customer.login') }}" class="btn save-ad"><i
													class="fa fa-heart-o"></i> Add to Favourites</a>
										</p>
										@endif

										<p><a href="{{ route('add.to.cart', $newArrival->id) }}" class="btn save-ad"><i
													class="fa fa-shopping-cart"></i> Add to Cart</a>
										</p>

										<p><a href="{{ route('book-details', $newArrival->id) }}" class="btn save-ad"><i
													class="fa fa-eye"></i> View Details</a></p>
									</div>
								</div>

								<div class="short-description">
									<div class="category-title">
										@foreach ($newArrival->bookAuthor as $singleBookAuthor)
										<span><a href="#">{{ $singleBookAuthor->author['author_name'] }}</a></span>
										@endforeach
									</div>

									<h3>
										<a href="{{ route('book-details', $newArrival->id) }}">{{
											$newArrival->title }} </a>
									</h3>

									<div class="price">LKR {{ $newArrival->price }}
										{{-- <span class="negotiable">(Negotiable)</span> --}}
									</div>
								</div>

								{{-- <div class="ad-info">
									<ul>
										<li><a class="btn save-ad"><i class="fa fa-heart-o"></i> Favourites</a></li>
										<li><a class="btn save-ad"><i class="fa fa-shopping-cart"></i> Cart</a>
										</li>
									</ul>
								</div> --}}
							</div>
						</div>
						@endforeach

					</div>
					<!--</div>-->
				</div>
				<!-- Middle Content Box End -->
				<img alt="" class="block-content wow zoomIn" data-wow-delay="0ms" data-wow-duration="3500ms"
					src="{{ asset('img/home/cars.png') }}">
			</div>
		</div>
	</section>

	<!-- =-=-=-=-=-=-= Statistics Counter =-=-=-=-=-=-= -->
	<div class="funfacts custom-padding parallex">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="icons">
						<i class="flaticon-vehicle"></i>
					</div>
					<div class="number"><span class="timer" data-from="0" data-to="1238" data-speed="1500"
							data-refresh-interval="5">0</span>+</div>
					<h4>Total <span>Cars</span></h4>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="icons">
						<i class="flaticon-security"></i>
					</div>
					<div class="number"><span class="timer" data-from="0" data-to="820" data-speed="1500"
							data-refresh-interval="5">0</span>+</div>
					<h4>Verified <span>Dealers</span></h4>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="icons">
						<i class="flaticon-like-1"></i>
					</div>
					<div class="number"><span class="timer" data-from="0" data-to="1042" data-speed="1500"
							data-refresh-interval="5">0</span>+</div>
					<h4>Active <span>Users</span></h4>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="icons">
						<i class="flaticon-cup"></i>
					</div>
					<div class="number"><span class="timer" data-from="0" data-to="34" data-speed="1500"
							data-refresh-interval="5">0</span>+</div>
					<h4>Featured <span>Ads</span></h4>
				</div>
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</div>
	<!-- =-=-=-=-=-=-= Statistics Counter End =-=-=-=-=-=-= -->

	<!-- =-=-=-=-=-=-= Services Section  =-=-=-=-=-=-= -->
	<section class="custom-padding services-2">
		<div class="absolute-img"><img alt="" src="{{ asset('img/home/car.png') }}"
				class="img-responsive wow slideInLeft" data-wow-delay="0ms" data-wow-duration="2000ms"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-5"></div>
				<div class="col-md-7 col-sm-12 col-xs-12 ">
					<div class="choose-title">
						<h3>Services We Offer</h3>
						<h2>We are expert in</h2>
						<p>Ut consequat velit a metus accumsan, vel tempor nulla blandit. Integer euismod magna vel mi
							congue suscipit. Praesent quis facilisis neque. Donec scelerisque nibh vitae sapien ornare
							efficitur.</p>
					</div>
					<div class="choose-services">
						<ul class="choose-list">
							<!-- feature -->
							<li class="col-md-6 col-xs-12 col-sm-6">
								<div class="services-grid">
									<div class="icons"><i class="flaticon-key"></i></div>
									<h4>Dealership</h4>
									<p>We have the right caring, experience and dedicated professional for you.</p>
								</div>
							</li>
							<!-- feature -->
							<li class="col-md-6 col-xs-12 col-sm-6">
								<div class="services-grid">
									<div class="icons"><i class="flaticon-engine-2"></i></div>
									<h4> Engine Upgrades</h4>
									<p>We have the right caring, experience and dedicated professional for you.</p>
								</div>
							</li>
							<!-- feature -->
							<li class="col-md-6 col-xs-12 col-sm-6">
								<div class="services-grid">
									<div class="icons"><i class="flaticon-security"></i></div>
									<h4> Security Inspections</h4>
									<p>We have the right caring, experience and dedicated professional for you.</p>
								</div>
							</li>
							<!-- feature -->
							<li class="col-md-6 col-xs-12 col-sm-6">
								<div class="services-grid">
									<div class="icons"><i class="flaticon-disc-brake-1"></i></div>
									<h4>Break Checkup</h4>
									<p>We have the right caring, experience and dedicated professional for you.</p>
								</div>
							</li>
						</ul>
						<!-- end choose-list -->
					</div>
				</div>
				<!-- /.col-lg-6 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>
	<!-- =-=-=-=-=-=-= Services Section End =-=-=-=-=-=-= -->


	<!-- =-=-=-=-=-=-= App Download Section =-=-=-=-=-=-= -->
	<div class="app-download-section style-2">
		<!-- app-download-section-wrapper -->
		<div class="app-download-section-wrapper">
			<!-- app-download-section-container -->
			<div class="app-download-section-container">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="mobile-image-content"> <img src="{{ asset('img/home/hand.png') }}" alt="">
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="app-text-section">
								{{-- <h5>Download our app</h5>
								<h3>Get Our App For Your Mobile</h3> --}}
								<h5>About Us</h5>
								<h3>Lorem ipsum dolor</h3>
								<ul>
									<li>Find nearby cars in your network with Scholar</li>
									<li>Browse real hirers reviews to know why choose Scholar</li>
									<li>Rent a car so easy with a tap !</li>
									<li>Rent a car so easy with a tap !</li>
								</ul>
								{{-- <div class="app-download-btn">
									<div class="row">
										<div class="col-md-6 col-sm-6">
											<a href="#" title="Windows Store" class="btn app-download-button">
												<span class="app-store-btn">
													<i class="fa fa-windows"></i>
													<span>
														<span>Download From</span>
														<span>Windows Store </span>
													</span>
												</span>
											</a>
										</div>
										<div class="col-md-6 col-sm-6">
											<a href="#" title="Windows Store" class="btn app-download-button"> <span
													class="app-store-btn">
													<i class="fa fa-apple"></i>
													<span>
														<span>Download From</span> <span>Apple Store </span> </span>
												</span>
											</a>
										</div>
									</div>
								</div> --}}
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /app-download-section-container -->
		</div>
		<!-- /download-section-wrapper -->
	</div>
	<!-- =-=-=-=-=-=-= App Download Section End =-=-=-=-=-=-= -->
	<!-- =-=-=-=-=-=-= Feedback Section =-=-=-=-=-=-= -->
	<section class="news section-padding">
		<div class="container">
			<div class="row">
				<div class="heading-panel">
					<div class="col-xs-12 col-md-12 col-sm-12 left-side">
						<!-- Main Title -->
						<h1>Clients <span class="heading-color"> Reviews</span> Feedback</h1>
						<!-- Short Description -->
						<p class="heading-text">Eu delicata rationibus usu. Vix te putant utroque, ludus fabellas duo
							eu, his dico ut debet consectetuer.</p>
					</div>
				</div>
				<!-- Middle Content Box -->
				<div class="col-md-12 col-xs-12 col-sm-12">
					<div class="row">
						<div class="owl-testimonial-1">
							<div class="single_testimonial">
								<div class="textimonial-content">
									<h4>Just fabulous</h4>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim
										minim veniam quis notru.</p>
								</div>
								<div class="testimonial-meta-box">
									<img src="{{ asset('img/home/1.jpg') }}" alt="">
									<div class="testimonial-meta">
										<h3 class="">Jhon Emily Copper </h3>
										<p> Developer</p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
							<div class="single_testimonial">
								<div class="textimonial-content">
									<h4>Awesome ! Loving It</h4>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim
										minim veniam quis notru.</p>
								</div>
								<div class="testimonial-meta-box">
									<img src="{{ asset('img/home/2.jpg') }}" alt="">
									<div class="testimonial-meta">
										<h3 class="">Hania Sheikh </h3>
										<p> CEO Pvt. Inc.</p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
							<div class="single_testimonial">
								<div class="textimonial-content">
									<h4>Very quick and Fast</h4>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim
										minim veniam quis notru.</p>
								</div>
								<div class="testimonial-meta-box">
									<img src="{{ asset('img/home/3.jpg') }}" alt="">
									<div class="testimonial-meta">
										<h3 class="">Jaccica Albana </h3>
										<p> CTO Albana Inc.</p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
							<div class="single_testimonial">
								<div class="textimonial-content">
									<h4>Done in 3 Months! Awesome</h4>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim
										minim veniam quis notru.</p>
								</div>
								<div class="testimonial-meta-box">
									<img src="{{ asset('img/home/4.jpg') }}" alt="">
									<div class="testimonial-meta">
										<h3 class="">Humayun Sarfraz </h3>
										<p> CTO Glixen Technologies.</p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
							<div class="single_testimonial">
								<div class="textimonial-content">
									<h4>Find It Quit Professional</h4>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim
										minim veniam quis notru.</p>
								</div>
								<div class="testimonial-meta-box">
									<img src="{{ asset('img/home/4.jpg') }}" alt="">
									<div class="testimonial-meta">
										<h3 class="">Massica O'Brain </h3>
										<p> Audit Officer </p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
							<div class="single_testimonial">
								<div class="textimonial-content">
									<h4>Just fabulous</h4>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim
										minim veniam quis notru.</p>
								</div>
								<div class="testimonial-meta-box">
									<img src="{{ asset('img/home/1.jpg') }}" alt="">
									<div class="testimonial-meta">
										<h3 class="">Jhon Emily Copper </h3>
										<p> Developer</p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
							<div class="single_testimonial">
								<div class="textimonial-content">
									<h4>Awesome ! Loving It</h4>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim
										minim veniam quis notru.</p>
								</div>
								<div class="testimonial-meta-box">
									<img src="images/users/2.jpg" alt="">
									<div class="testimonial-meta">
										<h3 class="">Hania Sheikh </h3>
										<p> CEO Pvt. Inc.</p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
							<div class="single_testimonial">
								<div class="textimonial-content">
									<h4>Very quick and Fast</h4>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim
										minim veniam quis notru.</p>
								</div>
								<div class="testimonial-meta-box">
									<img src="images/users/3.jpg" alt="">
									<div class="testimonial-meta">
										<h3 class="">Jaccica Albana </h3>
										<p> CTO Albana Inc.</p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
							<div class="single_testimonial">
								<div class="textimonial-content">
									<h4>Done in 3 Months! Awesome</h4>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim
										minim veniam quis notru.</p>
								</div>
								<div class="testimonial-meta-box">
									<img src="images/users/4.jpg" alt="">
									<div class="testimonial-meta">
										<h3 class="">Humayun Sarfraz </h3>
										<p> CTO Glixen Tech.</p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
							<div class="single_testimonial">
								<div class="textimonial-content">
									<h4>Find It Quit Professional</h4>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim
										minim veniam quis notru.</p>
								</div>
								<div class="testimonial-meta-box">
									<img src="images/users/4.jpg" alt="">
									<div class="testimonial-meta">
										<h3 class="">Massica O'Brain </h3>
										<p> Audit Officer </p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- Middle Content Box End -->
			</div>
			<div class="clearfix"></div>
		</div>
	</section>

	<!-- =-=-=-=-=-=-= Clients  =-=-=-=-=-=-= -->
	{{-- <div class="happy-clients-area gray">
		<div class="container">
			<div class="row clients-space">
				<div class="col-md-12 col-xs-12 col-sm-12">
					<div class="client-brand-list">
						<div class="sigle-clients-brand">
							<a href="#"><img src="images/brands/1.png" alt=""></a>
						</div>
						<div class="sigle-clients-brand">
							<a href="#"><img src="images/brands/2.png" alt=""></a>
						</div>
						<div class="sigle-clients-brand">
							<a href="#"><img src="images/brands/3.png" alt=""></a>
						</div>
						<div class="sigle-clients-brand">
							<a href="#"><img src="images/brands/4.png" alt=""></a>
						</div>
						<div class="sigle-clients-brand">
							<a href="#"><img src="images/brands/5.png" alt=""></a>
						</div>
						<div class="sigle-clients-brand">
							<a href="#"><img src="images/brands/6.png" alt=""></a>
						</div>
						<div class="sigle-clients-brand">
							<a href="#"><img src="images/brands/7.png" alt=""></a>
						</div>
						<div class="sigle-clients-brand">
							<a href="#"><img src="images/brands/8.png" alt=""></a>
						</div>
						<div class="sigle-clients-brand">
							<a href="#"><img src="images/brands/9.png" alt=""></a>
						</div>
						<div class="sigle-clients-brand">
							<a href="#"><img src="images/brands/11.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
	<!-- =-=-=-=-=-=-= Clients  End =-=-=-=-=-=-= -->

</div>



@endsection