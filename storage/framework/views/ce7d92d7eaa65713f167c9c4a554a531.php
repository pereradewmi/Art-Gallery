

<?php $__env->startSection('title'); ?>
Books
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="small-breadcrumb">
                    <div class="breadcrumb-link">
                        <ul>
                            <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
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

                
                <div class="col-md-12 col-lg-12 col-sx-12">
                    <div class="row">
                        <!-- Sorting Filters -->
                        
                        

                        <div class="grid-style-4">
                            <div class="posts-masonry">

                                <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-2 col-xs-12 col-sm-4">

                                    <div class="white category-grid-box-1">
                                        <?php if($book->status == '0'): ?>
                                        <div class="featured-ribbon">
                                            <span>Out of Stock</span>
                                        </div>
                                        <?php endif; ?>

                                        <div class="image">
                                            <div alt="Carspot" 
                                                style="background-image:url(<?php echo e(asset($book->cover_image_path)); ?>);
                                                height:250px; background-size:cover;background-position:center;
                                                position:relative;">
                                            </div>
                                        </div>

                                        <div class="short-description-1 ">
                                            <div class="category-title cut-text">
                                                <?php $__currentLoopData = $book->bookAuthor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleBookAuthor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <span><a href="#"><?php echo e($singleBookAuthor->author['author_name']); ?></a></span>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>

                                            <h3 class="cut-text">
                                                <a href="<?php echo e(route('book-details', $book->id)); ?>"><?php echo e($book->title); ?></a>
                                            </h3>

                                            

                                            <span class="ad-price">LKR <?php echo e($book->price); ?></span>
                                        </div>

                                        <div class="ad-info-1">
                                            <ul style="display: inline-flex; list-style: none; padding: 0; margin: 0;">
                                                <?php if(auth()->guard('customers')->check()): ?>
                                                <li><a href="<?php echo e(route('favorite.add', $book->id)); ?>"
                                                        class="btn save-ad"><i class="fa fa-heart"
                                                            style="font-size: 15px;"></i></a>
                                                </li>
                                                
                                                <?php else: ?>
                                                <li><a href="<?php echo e(route('customer.login')); ?>" class="btn save-ad"><i
                                                            class="fa fa-heart" style="font-size: 15px;"></i></a>
                                                </li>
                                                <?php endif; ?>

                                                <li><a href="<?php echo e(route('add.to.cart')); ?>/<?php echo e($book->id); ?>"
                                                        class="btn save-ad"><i class="fa fa-shopping-cart"
                                                            style="font-size: 15px;"></i></a>
                                                </li>

                                                <li><a href="<?php echo e(route('book-details', $book->id)); ?>"
                                                        class="btn save-ad"><i class="fa fa-eye"
                                                            style="font-size: 15px;"></i></a>

                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <!-- Pagination -->
                        
                        <!-- Pagination End -->
                    </div>
                </div>

                
                
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dewmi\OneDrive\Desktop\Art-Gallery\resources\views/books.blade.php ENDPATH**/ ?>