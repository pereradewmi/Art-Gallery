

<?php $__env->startSection('title'); ?>
Book Details
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

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
								<li><a href="<?php echo e(route('home')); ?>">Home</a></li>
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
							<h1><?php echo e($book[0]->title); ?></h1>
							<div class="short-history">
								<ul>
									<li><b>Author(s):
											<?php $__currentLoopData = $book[0]->bookAuthor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleBookAuthor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<span><a href="#"><?php echo e($singleBookAuthor->author['author_name']); ?></a></span>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</b>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 detail_price col-xs-12">
						<div class="singleprice-tag">LKR <?php echo e($book[0]->price); ?>

							
						</div>
					</div>
				</div>
				<div class="col-md-4 col-xs-12 col-sm-12">
					<div class="singlepage-detail ">
						<?php if($book[0]->status=='0'): ?>
						<div class="featured-ribbon">
							<span>Out of Stock</span>
						</div>
						<?php endif; ?>

						<div id="single-slider" class="flexslider">
							<ul class="slides">
								<?php $__currentLoopData = $book[0]->bookImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li><a href="<?php echo e(asset($image->image_path)); ?>" data-fancybox="group">
										<img src="<?php echo e(asset($image->image_path)); ?>" />
									</a>
								</li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
						</div>
						<div id="carousel" class="flexslider">
							<ul class="slides">
								<?php $__currentLoopData = $book[0]->bookImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li><img alt="" src="<?php echo e(asset($image->image_path)); ?>"></li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								
							</ul>
						</div>

						

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
								<p><?php echo e($book[0]->description); ?></p>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Stock No</strong> :</span> <?php echo e($book[0]->stock_no); ?>

								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Title</strong> :</span> <?php echo e($book[0]->title); ?>

								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Author</strong> :</span>
									<?php $__currentLoopData = $book[0]->bookAuthor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleBookAuthor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($singleBookAuthor->author['author_name']); ?>

									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Price</strong> :</span> LKR <?php echo e($book[0]->price); ?>

								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Quantity</strong> :</span> <?php echo e($book[0]->stock_quantity); ?>

								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Category</strong> :</span> <?php echo e($book[0]->bookCategory['category_name']); ?>

								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Language</strong> :</span> <?php echo e($book[0]->bookLanguage['language']); ?>

								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Publisher</strong> :</span> <?php echo e($book[0]->bookPublisher['publisher_name']); ?>

								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Publication Date</strong> :</span> <?php echo e($book[0]->publication_date); ?>

								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Edition</strong> :</span> <?php echo e($book[0]->bookEdition['edition']); ?>

								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Pages Count</strong> :</span> <?php echo e($book[0]->pages_count); ?>

								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Reading Age Group</strong> :</span> <?php echo e($book[0]->bookReadingAgeGroup['reading_age_group']); ?>

								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Dimensions</strong> :</span> <?php echo e($book[0]->length); ?> cm * <?php echo e($book[0]->width); ?> cm * <?php echo e($book[0]->height); ?> cm
								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>Weight</strong> :</span> <?php echo e($book[0]->weight); ?> g
								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>ISBN 10</strong> :</span> <?php echo e($book[0]->isbn_10); ?>

								</div>
								<div class="col-sm-4 col-md-6 col-xs-12 no-padding">
									<span><strong>ISBN 13</strong> :</span> <?php echo e($book[0]->isbn_13); ?>

								</div>
							</div>

							<div class="clearfix"></div>

							<hr />

							<div class="widget-content margin-top-30">
								<div class="finance-calculator">


									<form action="<?php echo e(route('add.to.cart', $book[0]->id)); ?>" method="GET">
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

												<!--<a href="<?php echo e(route('add.to.cart', $book[0]->id)); ?>"-->
												<!--	class="btn btn-theme btn-block"><i class="fa fa-shopping-cart"></i>-->
												<!--	Add to Cart</a>-->
											</div>

											<?php if(auth()->guard('customers')->check()): ?>
											

											<div class="col-md-4 col-xs-12 col-sm-12 margin-top-10">
												<a href="<?php echo e(route('favorite.add', $book[0]->id)); ?>"
													class="btn btn-theme btn-block"><i class="fa fa-heart-o"></i>Add
													to Favourites</a>
											</div>

											<?php else: ?>

											<div class="col-md-4 col-xs-12 col-sm-12 margin-top-10">
												<a href="<?php echo e(route('customer.login')); ?>"
													class="btn btn-theme btn-block"><i class="fa fa-heart-o"></i>Add to
													Favourites</a>
											</div>
											<?php endif; ?>

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




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dewmi\OneDrive\Desktop\Art-Gallery\resources\views/book-details.blade.php ENDPATH**/ ?>