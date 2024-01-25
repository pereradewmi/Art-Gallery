@extends('layouts.master')

@section('title')
Contact Us
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
							<li><a class="active" href="#">Contact Us</a></li>
						</ul>
					</div>
					<div class="header-page">
						<h1>Fell Free To Contact Us</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- =-=-=-=-=-=-= Breadcrumb End =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
<div class="main-content-area clearfix">
	<!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
	<section class="section-padding gray no-top ">
		<!-- Main Container -->
		<div class="container">
			<!-- Row -->
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 no-padding commentForm">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<form method="POST" action="{{ route('contact-us.send-inquiry') }}">
                            @csrf
							<div class="row">
								<div class="col-lg-6 col-md-6 col-xs-12">
									<div class="form-group">
										<input type="text" placeholder="Name" id="name" name="name" class="form-control"
											required>
									</div>
									<div class="form-group">
										<input type="email" placeholder="Email" id="email" name="email"
											class="form-control" required>
									</div>
									<div class="form-group">
										<input type="text" placeholder="Subject" id="subject" name="subject"
											class="form-control" required>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-xs-12">
									<div class="form-group">
										<textarea cols="12" rows="7" placeholder="Message..." id="message"
											name="inquiry" class="form-control" required></textarea>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<button class="btn btn-theme" type="submit">Send Message</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="contactInfo">
							<div class="singleContadds">
								<i class="fa fa-map-marker"></i>
								<p> Model Town Link Road Lahore, 60 Street. Pakistan 54770 </p>
							</div>
							<div class="singleContadds phone">
								<i class="fa fa-phone"></i>
								<p> 0123 456 78 90 - <span>Office</span> </p>
								<p> 0123 456 78 90 - <span>Mobile</span> </p>
							</div>
							<div class="singleContadds"> <i class="fa fa-envelope"></i> <a
									href="mailto:contact@scriptsbundle.com">contact@scriptsbundle.com</a> <a
									href="mailto:contact@scriptsbundle.com">contact@scriptsbundle.com</a> </div>
						</div>
					</div>
				</div>
			</div>
			<!-- Row End -->


			<div class="row" style="margin-top: 5%">
				<div class="col-md-12 col-sm-12 col-xs-12 no-padding commentForm">

					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.3648718730724!2d79.8513991732655!3d7.199145114946839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2eef4ec302571%3A0xb5b1a3dc56348a74!2sEnrich%20Arcane%20(Pvt)%20Ltd!5e0!3m2!1sen!2slk!4v1695577990082!5m2!1sen!2slk"
						width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>


		</div>
		<!-- Main Container End -->
	</section>
	<!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
</div>


@endsection
