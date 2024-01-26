

<?php $__env->startSection('title'); ?>
Home
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<!-- Master Slider -->
<div class="master-slider ms-skin-default" id="masterslider">

	<div class="ms-slide slide-1" data-delay="5">
		<img src="<?php echo e(asset('img/home/blank.gif')); ?>" data-src="<?php echo e(asset('img/home/slider-banner.jpg')); ?>"
			alt="Slide1 background" />
		<img src="<?php echo e(asset('img/home/blank.gif')); ?>" 
			alt="Master Slider" style="left:750px; top:180px;" class="ms-layer" data-type="image" data-delay="1000"
			data-duration="3000" data-ease="easeOutExpo" data-effect="scalefrom(1.1,1.1,190,0)"
			style="height: 200px;" />
		<h3 class="ms-layer title4 font-white  font-thin-xs" style="left:120px; top:150px;" data-type="text"
			data-delay="2000" data-duration="2000" data-ease="easeOutExpo" data-effect="skewleft(30,80)">Welcome to
			Heena Publishers</h3>
		<h3 class="ms-layer title4 font-white font-thin-xs" style="left:120px; top:210px;" data-type="text"
			data-delay="2500" data-duration="2000" data-ease="easeOutExpo" data-effect="skewleft(30,80)"><span
				class="font-color font-thin-xs heading-color">Your Gateway to a World of Books</span></h3>
		<h5 class="ms-layer text1 font-white" style="left: 120px; top: 280px;" data-type="text" data-effect="bottom(45)"
			data-duration="2500" data-delay="3000" data-ease="easeOutExpo">At Heena Publishers, we pride ourselves on being more than just a book selling website.<br>
			 We are your literary companion, committed to providing  an unparalleled reading experience.
		</h5>
		<a href="<?php echo e(route('books')); ?>" class="ms-layer btn3" style="left:120px; top: 390px; border-radius: 50px;"
			data-type="text" data-delay="3500" data-ease="easeOutExpo" data-duration="2000"
			data-effect="scale(1.5,1.6)">
			View All Books</a>

	</div>

	<div class="ms-slide slide-3" data-delay="5">
		<img src="<?php echo e(asset('img/home/blank.gif')); ?>" data-src="<?php echo e(asset('img/home/slider-banner2.jpg')); ?>"
			alt="Slide1 background" />
		<h3 class="ms-layer title4 font-white  font-thin-xs" style="left:120px; top:150px;" data-type="text"
			data-delay="2000" data-duration="2000" data-ease="easeOutExpo" data-effect="skewleft(30,80)">Welcome to
			Heena Publishers</h3>
		<h3 class="ms-layer title4 font-white font-thin-xs" style="left:120px; top:210px;" data-type="text"
			data-delay="2500" data-duration="2000" data-ease="easeOutExpo" data-effect="skewleft(30,80)"><span
				class="font-color font-thin-xs heading-color">Your Gateway to a World of Books</span></h3>
		<h5 class="ms-layer text1 font-white" style="left: 120px; top: 280px;" data-type="text" data-effect="bottom(45)"
			data-duration="2500" data-delay="3000" data-ease="easeOutExpo">At Heena Publishers, we pride ourselves on being more than just a book selling website.<br>
			 We are your literary companion, committed to providing an unparalleled reading experience.
		</h5>
		<a href="<?php echo e(route('books')); ?>" class="ms-layer btn3 " style="left:120px; top: 390px;border-radius: 50px;"
			data-type="text" data-delay="3500" data-ease="easeOutExpo" data-duration="2000"
			data-effect="scale(1.5,1.6)"> View All Books</a>
	</div>

	<div class="ms-slide slide-2" data-delay="4">
		<div class="ms-overlay-layers"></div>
		<img src="<?php echo e(asset('img/home/blank.gif')); ?>" data-src="<?php echo e(asset('img/home/slider-banner4.jpg')); ?>"
			alt="Slide1 background" />
		<h3 class="ms-layer title4 font-white  font-thin-xs" style="left:120px; top:150px;" data-type="text"
			data-delay="2000" data-duration="2000" data-ease="easeOutExpo" data-effect="skewleft(30,80)">Welcome to
			Heena Publishers</h3>
		<h3 class="ms-layer title4 font-white font-thin-xs" style="left:120px; top:210px;" data-type="text"
			data-delay="2500" data-duration="2000" data-ease="easeOutExpo" data-effect="skewleft(30,80)"><span
				class="font-color font-thin-xs heading-color">Your Gateway to a World of Books</span></h3>
		<h5 class="ms-layer text1 font-white" style="left: 120px; top: 280px;" data-type="text" data-effect="bottom(45)"
			data-duration="2500" data-delay="3000" data-ease="easeOutExpo">At Heena Publishers, we pride ourselves on being more than just a book selling website.<br>
			 We are your literary companion, committed to providing an unparalleled reading experience.
		</h5>
		<a href="<?php echo e(route('books')); ?>" class="ms-layer btn3 uppercase"
			style="left:120px; top: 390px;border-radius: 50px;" data-type="text" data-delay="3500"
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
							<form method="post" action="<?php echo e(route('search')); ?>">
								<?php echo csrf_field(); ?>
								<div class="search-form pull-left">
									<div class="search-form-inner pull-left">
										<div class="col-md-3 col-sm-6 col-xs-12 no-padding">
											<div class="form-group">
												<label>Select Title</label>
												<select class="form-control title" name="title">
													<option label="Any Title"></option>
													<?php $__currentLoopData = $bookTitles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookTitle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<option value="<?php echo e($bookTitle->id); ?>" <?php echo e(old('bookTitle')==$bookTitle->id ? 'selected' : ''); ?>>
														<?php echo e($bookTitle->title); ?>

													</option>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												</select>
											</div>
										</div>
										<div class="col-md-3 col-sm-6 col-xs-12 no-padding">
											<div class="form-group">
												<label>Select Category</label>
												<select class="form-control category" name="category">
													<option label="Any Category"></option>
													<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<option value="<?php echo e($category->id); ?>" <?php echo e(old('category')==$category->
														id ? 'selected' : ''); ?>>
														<?php echo e($category->category_name); ?>

													</option>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												</select>
											</div>
										</div>
										<div class="col-md-3 col-sm-6 col-xs-12 no-padding">
											<div class="form-group">
												<label>Select Author</label>
												<select class="form-control author" name="author">
													<option label="Any Author"></option>
													<?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<option value="<?php echo e($author->id); ?>" <?php echo e(old('author')==$author->id ?
														'selected' : ''); ?>>
														<?php echo e($author->author_name); ?>

													</option>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												</select>
											</div>
										</div>
										<div class="col-md-3 col-sm-6 col-xs-12 no-padding">
											<div class="form-group">
												<label>Select Language</label>
												<select class="form-control language" name="language">
													<option label="Any Language"></option>
													<?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<option value="<?php echo e($language->id); ?>" <?php echo e(old('language')==$language->
														id ? 'selected' : ''); ?>>
														<?php echo e($language->language); ?>

													</option>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												</select>
											</div>
										</div>
									</div>
									<div class="form-group pull-right">
										<button type="submit" style=" border-radius: 50px" value="submit"
											class="btn btn-lg btn-theme">Search
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
						<p class="heading-text">Discover Exciting New Reads: Unveiling Heena Publishers' Latest Book Deals! <br>
							At Heena Publishers, our commitment to bringing you exceptional literature never wavers. We're thrilled to unveil our latest book deals, curated to captivate your imagination and fuel your love for reading. Here's a sneak peek into the literary wonders awaiting you</p>
					</div>
				</div>

				<!--<div class="row">-->
				<div class="col-md-12 col-xs-12 col-sm-12">
					<div class="posts-masonry">

						<?php $__currentLoopData = $newArrivals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newArrival): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

						<div class="col-md-2 col-xs-12 col-sm-6">
							<div class="category-grid-box">
								<div class="category-grid-img"
									style="background-image:url(<?php echo e(asset($newArrival->cover_image_path)); ?>); height:250px; background-size:cover;background-position:center; position:relative;">
									
									
									

									<div class="additional-information" style="position: absolute;">
										
										<?php if(auth()->guard('customers')->check()): ?>

										<p><a href="<?php echo e(route('favorite.add', $newArrival->id)); ?>" class="btn save-ad"><i
													class="fa fa-heart"></i> Add to Favourites</a>
										</p>
										<?php else: ?>
										<p><a href="<?php echo e(route('customer.login')); ?>" class="btn save-ad"><i
													class="fa fa-heart-o"></i> Add to Favourites</a>
										</p>
										<?php endif; ?>

										<p><a href="<?php echo e(route('add.to.cart', $newArrival->id)); ?>" class="btn save-ad"><i
													class="fa fa-shopping-cart"></i> Add to
												Cart</a>
										</p>

										<p><a href="<?php echo e(route('book-details', $newArrival->id)); ?>" class="btn save-ad"><i
													class="fa fa-eye"></i> View Details</a></p>
									</div>
								</div>

								<div class="short-description">
									<div class="category-title cut-text">
										<?php $__currentLoopData = $newArrival->bookAuthor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleBookAuthor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<span><a href="#"><?php echo e($singleBookAuthor->author['author_name']); ?></a></span>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</div>

									<h3 class="cut-text" style="font-size: 15px">
										<a href="<?php echo e(route('book-details', $newArrival->id)); ?>"><?php echo e(ucwords(strtolower($newArrival->title))); ?></a>
									</h3>

									<div class="price" style="font-size: 14px">LKR <?php echo e($newArrival->price); ?>

										
									</div>
								</div>

								
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</div>
					<!--</div>-->
				</div>
				<!-- Middle Content Box End -->
			
				
			</div>
		</div>
		<div class="container">
            <div class="row" style="margin-bottom: 10px">
                <?php $__currentLoopData = $banners_view; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner_view): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <div class="col-md-6 col-sm-6 col-xs-12" style="">
                    <div class="banner_img" style="background-image:url(<?php echo e(asset($banner_view->image_path)); ?>); background-position:center; position:relative; background-size:cover; max-width:100%;margin-bottom: 20px; height:250px;"></div>
                     <div class="banner_img-mobile" style="background-image:url(<?php echo e(asset($banner_view->image_path)); ?>); background-position:center; position:relative; background-size:cover; max-width:100%;margin-bottom: 20px; height:180px; "></div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
	</section>

	<!-- =-=-=-=-=-=-= Statistics Counter =-=-=-=-=-=-= -->
	<div class="funfacts custom-padding parallex">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
					<div class="icons">
						<i class="fa fa-book"></i>
					</div>

					<div class="number"><span class="timer" data-from="0" data-to="<?php echo e($total_book); ?>" data-speed="1500"
							data-refresh-interval="5">0</span>+</div>
					<h4>Total <span>Books</span></h4>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
					<div class="icons">
						<i class="fa fa-shopping-cart"></i>
					</div>
					<div class="number"><span class="timer" data-from="0" data-to="<?php echo e($total_sold); ?>" data-speed="1500"
							data-refresh-interval="5">0</span>+</div>
					<h4>Sold <span>Books</span></h4>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
					<div class="icons">
						<i class="fa fa-user"></i>
					</div>
					<div class="number"><span class="timer" data-from="0" data-to="<?php echo e($total_users); ?> " data-speed="1500"
							data-refresh-interval="5">0</span>+</div>
					<h4>Active <span>Users</span></h4>
				</div>

				
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</div>
	<!-- =-=-=-=-=-=-= Statistics Counter End =-=-=-=-=-=-= -->

	<!-- =-=-=-=-=-=-= Services Section  =-=-=-=-=-=-= -->
	
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
							<div class="mobile-image-content"> <img src="<?php echo e(asset('img/home/hand2.png')); ?>" alt="">
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="app-text-section">
								<h5>Welcome to Heena Publishers (Pvt) Ltd !</h5>
								<h3>Why Choose Us ?</h3>
								<ul>
									<li>Quality and Diversity </li>
									<li>Author-Centric Approach </li>
									<li>Reader-Focused </li>
									<li>Innovation </li>
								</ul>
								
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
	

	<!-- =-=-=-=-=-=-= Clients  =-=-=-=-=-=-= -->
	
	<!-- =-=-=-=-=-=-= Clients  End =-=-=-=-=-=-= -->

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dewmi\OneDrive\Desktop\Art-Gallery\resources\views/home.blade.php ENDPATH**/ ?>