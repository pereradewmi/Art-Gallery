@extends('layouts.master')

@section('title')
About Us
@endsection

@section('content')

<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="small-breadcrumb">
					<div class=" breadcrumb-link">
						<ul>
							<li><a href="{{ route('home') }}">Home</a></li>
							<li><a class="active" href="#">About Us</a></li>
						</ul>
					</div>
					<div class="header-page">
						<h1>About Us</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- =-=-=-=-=-=-= Breadcrumb End =-=-=-=-=-=-= -->

<!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
<div class="main-content-area clearfix">
	<!-- =-=-=-=-=-=-= About CarSpot =-=-=-=-=-=-= -->
	<section class="custom-padding about-us">
		<div class="container">
		   <!-- <div class="topic text-center">-->
					<!--	<h3>About <span class="heading-color">Heena Publications (Pvt) Ltd.</span></h3>-->
					<!--</div>-->
					<div class="heading-panel">
					<div class="col-xs-12 col-md-12 col-sm-12 text-center">
						<h1>About <span class="heading-color"> Heena Publications (Pvt) Ltd</span></h1>
					</div>
				</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

					<div class="content">
						<p>
						    Welcome to Heena publications (Pvt) Ltd, where we're passionate about
							talented authors bringing exceptional stories and knowledge to readers all around the world.
						</p> <br>
						<p><strong> Our Story </strong> <br> Founded in 2023, Heena publications (Pvt) Ltd has emerged as a
							hub for literary
							enthusiasts, authors, and readers alike. What began as a modest endeavor to promote great
							literature and share the joy of reading has evolved into a dynamic publishing company and an
							extensive online book store.</p>
							<p><strong> Mission </strong> <br> At Heena publications (Pvt) Ltd, our mission is to cultivate the
							literary
							landscape by publishing diverse, captivating, and thought-provoking works across a variety
							of genres. We believe in the power of storytelling to entertain, educate, and inspire. Our
							team is committed to nurturing both established authors and emerging talents, ensuring their
							voices reach a global audience.</p>

					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<img class="wow slideInRight center-block img-responsive" data-wow-delay="0ms"
						data-wow-duration="3000ms" alt="" src="{{ asset('img/about-us/book.jpg') }}">
				</div>

				<!--<div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">-->
					<!--<div class="content">-->

					<!--</div>-->
				<!--</div>-->
			</div>
			<div class="row margin-top-8rem">
				<div class="heading-panel">
					<div class="col-xs-12 col-md-12 col-sm-12 text-center">
						<h1>Why Choose <span class="heading-color"> Heena Publications (Pvt) Ltd? </span></h1>
					</div>
				</div>
				<div class="col-md-3 col-xs-12 col-sm-6">
					<!-- services grid -->
					<div class="services-grid">
						<div class="icons"><i class="fa fa-thumbs-o-up"></i></div>
						<h4>Quality and Diversity</h4>
						<p>We curate our collection to offer a diverse range of books, ensuring there's something for
							everyone.</p>
					</div>
				</div>
				<div class="col-md-3 col-xs-12 col-sm-6">
					<!-- services grid -->
					<div class="services-grid">
						<div class="icons"><i class="fa fa-pencil"></i></div>
						<h4>Author-Centric Approach</h4>
						<p>We are dedicated to nurturing authors and their creativity, providing a supportive platform
							for their literary journeys.</p>
					</div>
				</div>
				<div class="col-md-3 col-xs-12 col-sm-6">
					<!-- services grid -->
					<div class="services-grid">
						<div class="icons"><i class="fa fa-eye"></i></div>
						<h4>Reader-Focused</h4>
						<p>Your reading experience is our priority, and we're committed to delivering high-quality books
							and exceptional customer service.</p>
					</div>
				</div>
				<div class="col-md-3 col-xs-12 col-sm-6">
					<!-- services grid -->
					<div class="services-grid">
						<div class="icons"><i class="fa fa-lightbulb-o"></i></div>
						<h4>Innovation</h4>
						<p>We embrace technological advancements to stay ahead in the ever-evolving publishing industry.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =-=-=-=-=-=-= About CarSpot End =-=-=-=-=-=-= -->
	<!-- =-=-=-=-=-=-= Services Section  =-=-=-=-=-=-= -->
	<section class="padding-top-50 gray services-center">
		<div class="container">
			<!-- Heading Area -->
			<div class="heading-panel">
				<div class="col-xs-12 col-md-12 col-sm-12 text-center">
					<!-- Main Title -->
					<h1>Our <span class="heading-color"> Feature </span> Services</h1>
					<!-- Short Description -->
					<p class="heading-text">At Heena Publications, we pride ourselves on being more than just a book selling website. We are your literary companion, committed to providing an unparalleled reading experience. Explore our feature services designed to cater to every book lover's needs.</p>
					<p>Dive into our extensive library featuring a diverse range of genres, from gripping thrillers to heart-warming romance, thought-provoking non-fiction to magical fantasy. Discover hidden gems and bestsellers alike; our curated collection ensures there's something for every reader. </p>
				</div>
			</div>

			<div class="row clearfix">
				<div class="col-md-4 col-sm-6 col-xs-12 pull-left">
					<div class="services-grid">
						<div class="icons icon-right"><i class="fa fa-book"></i></div>
						<h4>Publishing Services</h4>
						<p>As a publishing company, we provide a range of comprehensive services to help authors bring
							their manuscripts to life. From editing and design to marketing and distribution, we partner
							with writers to transform their ideas into beautifully crafted books.</p>
					</div>
				</div>

				<!--Right Column-->
				<div class="col-md-4 col-sm-6 col-xs-12 pull-right">
					<!--Service Block-->
					<div class="services-grid">
						<div class="icons icon-left"><i class="fa fa-shopping-bag"></i></div>
						<h4>Online Book Store</h4>
						<p>In our online book store, you'll discover a treasure trove of literary gems from an array of
							genres, catering to all tastes and preferences. With an ever-expanding catalog, we aim to be
							your go-to destination for discovering new reads and revisiting timeless classics. We offer
							both physical books and digital eBooks to accommodate the modern reader's needs.</p>
					</div>
				</div>
				<!--Image Column-->
				<div class="col-md-4 col-sm-12 col-xs-12">
					<figure class="wow bounceInUp  animated" data-wow-delay="0ms" data-wow-duration="3500ms">
						<img class="center-block" src="{{ asset('img/about-us/potra.jpg') }}" width="85%">
					</figure>
				</div>
			</div>

		</div>

	</section>
	<!-- =-=-=-=-=-=-=  Services Section End =-=-=-=-=-=-= -->
	<div class="clearfix"></div>
	<!-- =-=-=-=-=-=-= Testimonials =-=-=-=-=-=-= -->
	{{-- <section class="section-padding parallex bg-img-3">
		<div class="container">
			<div class="row">
				<div class="owl-testimonial-2">
					<div class="single_testimonial">
						<div class="textimonial-content">
							<h4>Just fabulous</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
								veniam quis notru.</p>
						</div>
						<div class="testimonial-meta-box">
							<img src="{{ asset('img/users/1.jpg') }}" alt="">
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
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
								veniam quis notru.</p>
						</div>
						<div class="testimonial-meta-box">
							<img src="{{ asset('img/users/2.jpg') }}" alt="">
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
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
								veniam quis notru.</p>
						</div>
						<div class="testimonial-meta-box">
							<img src="{{ asset('img/users/3.jpg') }}" alt="">
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
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
								veniam quis notru.</p>
						</div>
						<div class="testimonial-meta-box">
							<img src="{{ asset('img/users/4.jpg') }}" alt="">
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
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
								veniam quis notru.</p>
						</div>
						<div class="testimonial-meta-box">
							<img src="{{ asset('img/users/4.jpg') }}" alt="">
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
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
								veniam quis notru.</p>
						</div>
						<div class="testimonial-meta-box">
							<img src="{{ asset('img/users/1.jpg') }}" alt="">
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
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
								veniam quis notru.</p>
						</div>
						<div class="testimonial-meta-box">
							<img src="{{ asset('img/users/2.jpg') }}" alt="">
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
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
								veniam quis notru.</p>
						</div>
						<div class="testimonial-meta-box">
							<img src="{{ asset('img/users/3.jpg') }}" alt="">
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
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
								veniam quis notru.</p>
						</div>
						<div class="testimonial-meta-box">
							<img src="{{ asset('img/users/4.jpg') }}" alt="">
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
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
								veniam quis notru.</p>
						</div>
						<div class="testimonial-meta-box">
							<img src="{{ asset('img/users/4.jpg') }}" alt="">
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
			</div>
		</div>
	</section> --}}


	<section class="car-inspection section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12 nopadding hidden-sm">
					<div class="call-to-action-img-section-right">
						<img src="{{ asset('img/about-us/car-in-red.png') }}" class="wow slideInLeft img-responsive"
							data-wow-delay="0ms" data-wow-duration="3000ms" alt="">
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 nopadding">
					<div class="call-to-action-detail-section">
						<div class="heading-2">
							<h3>Want To Publish Your Book ?</h3>
							<h2>We are here for you</h2>
						</div>
						<p> Heena publications (Pvt) Ltd is more than just a publisher and book store; we are a
							community of book lovers, writers, and adventurers. We invite you to join us on this
							literary journey, explore our offerings, and share in the joy of reading.</p>

						<p>Thank you for choosing Heena publications (Pvt) Ltd as your destination for literary
							exploration. We look forward to being a part of your reading adventures and helping you
							connect with the stories that matter most to you.</p>

						<div class="heading-2">
							<h3> Happy Reading!</h3>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- =-=-=-=-=-=-= Statistics Counter =-=-=-=-=-=-= -->
	{{-- <div class="funfacts custom-padding parallex">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="number"><span class="timer" data-from="0" data-to="1238" data-speed="1500"
							data-refresh-interval="5">0</span>+</div>
					<h4>Total <span>Cars</span></h4>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="number"><span class="timer" data-from="0" data-to="820" data-speed="1500"
							data-refresh-interval="5">0</span>+</div>
					<h4>Hose For <span>Sale</span></h4>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="number"><span class="timer" data-from="0" data-to="1042" data-speed="1500"
							data-refresh-interval="5">0</span>+</div>
					<h4>Active <span>Users</span></h4>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="number"><span class="timer" data-from="0" data-to="34" data-speed="1500"
							data-refresh-interval="5">0</span>+</div>
					<h4>Featured <span>Jobs</span></h4>
				</div>
			</div>
		</div>
	</div> --}}

	<!-- =-=-=-=-=-=-= Statistics Counter End =-=-=-=-=-=-= -->


	<!-- =-=-=-=-=-=-= Clients  =-=-=-=-=-=-= -->
	{{-- <div class="happy-clients-area">
		<div class="container">
			<div class="row clients-space">
				<div class="col-md-12 col-xs-12 col-sm-12">
					<div class="client-brand-list">
						<div class="sigle-clients-brand">
							<a href="#"><img src="{{ asset('img/about-us/1.png') }}" alt=""></a>
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
<!-- Main Content Area End -->

@endsection
