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
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="title">
						<h3>About <span class="heading-color">Car Spot </span> Dealership</h3>
					</div>
					<div class="content">
						<p class="service-summary">Everything you need to build an amazing dealership automotive
							responsive website</p>
						<p>Carspot is not only a hub where buyers and sellers can interact, it is also a comprehensive
							automotive portal with a forum dedicated to all automotive discussions, a blog that keeps
							the users up to date with the latest happenings in the automotive industry.</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<img class="wow slideInRight center-block img-responsive" data-wow-delay="0ms"
						data-wow-duration="3000ms" alt="" src="{{ asset('img/about-us/gtr.png') }}">
				</div>
			</div>
			<div class="row margin-top-20">
				<div class="col-md-3 col-xs-12 col-sm-6">
					<!-- services grid -->
					<div class="services-grid">
						<div class="icons"><i class="flaticon-key"></i></div>
						<h4>Dealership</h4>
						<p>We have the right caring, experience and dedicated professional for you.</p>
					</div>
				</div>
				<div class="col-md-3 col-xs-12 col-sm-6">
					<!-- services grid -->
					<div class="services-grid">
						<div class="icons"><i class="flaticon-engine-2"></i></div>
						<h4> Engine Upgrades</h4>
						<p>We have the right caring, experience and dedicated professional for you.</p>
					</div>
				</div>
				<div class="col-md-3 col-xs-12 col-sm-6">
					<!-- services grid -->
					<div class="services-grid">
						<div class="icons"><i class="flaticon-security"></i></div>
						<h4> Security Inspections</h4>
						<p>We have the right caring, experience and dedicated professional for you.</p>
					</div>
				</div>
				<div class="col-md-3 col-xs-12 col-sm-6">
					<!-- services grid -->
					<div class="services-grid">
						<div class="icons"><i class="flaticon-disc-brake-1"></i></div>
						<h4>Break Checkup</h4>
						<p>We have the right caring, experience and dedicated professional for you.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =-=-=-=-=-=-= About CarSpot End =-=-=-=-=-=-= -->
	<!-- =-=-=-=-=-=-= Services Section  =-=-=-=-=-=-= -->
	<section class="padding-top-90 gray services-center">
		<div class="container">
			<!-- Heading Area -->
			<div class="heading-panel">
				<div class="col-xs-12 col-md-12 col-sm-12 text-center">
					<!-- Main Title -->
					<h1>Our <span class="heading-color"> Feature </span> Services</h1>
					<!-- Short Description -->
					<p class="heading-text">Eu delicata rationibus usu. Vix te putant utroque, ludus fabellas duo eu,
						his dico ut debet consectetuer.</p>
				</div>
			</div>
			<div class="row clearfix">
				<!--Left Column-->
				<div class="col-md-4 col-sm-6 col-xs-12 pull-left">
					<!--Service Block -->
					<div class="services-grid">
						<div class="icons icon-right"><i class="flaticon-engine-4"></i></div>
						<h4>Engine Upgrades</h4>
						<p>We have the right caring, experience and dedicated professional for you.</p>
					</div>
					<!--Service Block -->
					<div class="services-grid">
						<div class="icons icon-right"><i class="flaticon-settings"></i></div>
						<h4>Car Inspection</h4>
						<p>We have the right caring, experience and dedicated professional for you.</p>
					</div>
					<!--Service Block -->
					<div class="services-grid">
						<div class="icons icon-right"><i class="flaticon-settings"></i></div>
						<h4>Car Inspection</h4>
						<p>We have the right caring, experience and dedicated professional for you.</p>
					</div>
					<!--Service Block -->


				</div>

				<!--Right Column-->
				<div class="col-md-4 col-sm-6 col-xs-12 pull-right">
					<!--Service Block-->


					<div class="services-grid">
						<div class="icons icon-left"><i class="flaticon-vehicle-3"></i></div>
						<h4>Car Oil Change</h4>
						<p>We have the right caring, experience and dedicated professional for you.</p>
					</div>
					<!--Service Block-->
					<div class="services-grid">
						<div class="icons icon-left"><i class="flaticon-car-steering-wheel"></i></div>
						<h4>Power steering</h4>
						<p>We have the right caring, experience and dedicated professional for you.</p>
					</div>

					<!--Service Block-->
					<div class="services-grid">
						<div class="icons icon-left"><i class="flaticon-car-steering-wheel"></i></div>
						<h4>Power steering</h4>
						<p>We have the right caring, experience and dedicated professional for you.</p>
					</div>
				</div>
				<!--Image Column-->
				<div class="col-md-4 col-sm-12 col-xs-12">
					<figure class="wow bounceInUp  animated" data-wow-delay="0ms" data-wow-duration="3500ms">
						<img class="center-block" src="{{ asset('img/about-us/car-mechanic.png') }}" alt="">
					</figure>
				</div>
			</div>

		</div>

	</section>
	<!-- =-=-=-=-=-=-=  Services Section End =-=-=-=-=-=-= -->
	<div class="clearfix"></div>
	<!-- =-=-=-=-=-=-= Testimonials =-=-=-=-=-=-= -->
	<section class="section-padding parallex bg-img-3">
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
							<img src="images/users/1.jpg" alt="">
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
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
								veniam quis notru.</p>
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
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
								veniam quis notru.</p>
						</div>
						<div class="testimonial-meta-box">
							<img src="images/users/4.jpg" alt="">
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
					<div class="single_testimonial">
						<div class="textimonial-content">
							<h4>Just fabulous</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
								veniam quis notru.</p>
						</div>
						<div class="testimonial-meta-box">
							<img src="images/users/1.jpg" alt="">
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
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
								veniam quis notru.</p>
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
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
								veniam quis notru.</p>
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
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
								veniam quis notru.</p>
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
			</div>
		</div>
	</section>
	<!-- =-=-=-=-=-=-= Testimonials Section End =-=-=-=-=-=-= -->
	<section class="car-inspection section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12 nopadding hidden-sm">
					<div class="call-to-action-img-section-right">
						<img src="images/car-in-red.png" class="wow slideInLeft img-responsive" data-wow-delay="0ms"
							data-wow-duration="3000ms" alt="">
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 nopadding">
					<div class="call-to-action-detail-section">
						<div class="heading-2">
							<h3> Want To Sale Your Car ?</h3>
							<h2>Car Inspection</h2>
						</div>
						<p> Our CarSure experts inspect the car on over 200 checkpoints so you get complete satisfaction
							and peace of mind before buying. </p>
						<div class="row">
							<ul>
								<li class="col-sm-4"> <i class="fa fa-check"></i> Transmission</li>
								<li class="col-sm-4"> <i class="fa fa-check"></i> Steering</li>
								<li class="col-sm-4"> <i class="fa fa-check"></i> Engine</li>
								<li class="col-sm-4"> <i class="fa fa-check"></i> Tires</li>
								<li class="col-sm-4"> <i class="fa fa-check"></i> Lighting</li>
								<li class="col-sm-4"> <i class="fa fa-check"></i> Interior</li>
								<li class="col-sm-4"> <i class="fa fa-check"></i> Suspension</li>
								<li class="col-sm-4"> <i class="fa fa-check"></i> Exterior</li>
								<li class="col-sm-4"> <i class="fa fa-check"></i> Brakes</li>
								<li class="col-sm-4"> <i class="fa fa-check"></i> Air Conditioning</li>
								<li class="col-sm-4"> <i class="fa fa-check"></i> Engine Diagnostics</li>
								<li class="col-sm-4"> <i class="fa fa-check"></i> Wheel Alignment</li>
							</ul>
						</div>
						<a href="" class="btn-theme btn-lg btn">Schedule Inspection <i
								class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =-=-=-=-=-=-= Statistics Counter =-=-=-=-=-=-= -->
	<div class="funfacts custom-padding parallex">
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
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</div>
	<!-- /.funfacts -->
	<!-- =-=-=-=-=-=-= Statistics Counter End =-=-=-=-=-=-= -->


	<!-- =-=-=-=-=-=-= Clients  =-=-=-=-=-=-= -->
	<div class="happy-clients-area">
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
	</div>
	<!-- =-=-=-=-=-=-= Clients  End =-=-=-=-=-=-= -->
	<!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->

</div>
<!-- Main Content Area End -->

@endsection