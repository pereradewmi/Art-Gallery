<div class="colored-header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="header-top-left col-md-8 col-sm-6 col-xs-6">
                    <ul class="listnone">
                        

                    </ul>
                </div>

                <div class="header-right col-md-4 col-sm-12 col-xs-12">
                    <div class="pull-right">
                        <ul class="listnone">

                            <?php if(!auth()->guard('customers')->check()): ?>
                            <li><a href="<?php echo e(route('customer.login')); ?>" id="login-box"><i class="fa fa-sign-in"></i> Log In</a></li>
                            <li><a href="<?php echo e(route('customer.registration')); ?>"><i class="fa fa-unlock" aria-hidden="true"></i>Register</a></li>
                            
                            <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">
                                    
                                    <span class="myname">Hi, <?php echo e(auth()->guard('customers')->user()->first_name); ?> </span> <span class="caret"></span></a>

                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo e(route('customer.profile')); ?>">My Profile</a></li>
                                    <!-- <li><a href="<?php echo e(route('customer.orders')); ?>">My Orders</a></li> -->
                                    <li><a href="<?php echo e(route('wishlist')); ?>">Favourites</a></li>
                                    <li><a href="<?php echo e(route('orders.my_orders')); ?>">My Orders</a></li>
                                    <li><a href="<?php echo e(route('customer.log-out')); ?>">Log Out</a></li>
                                </ul>
                            </li>
                             
                            <?php endif; ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <nav id="menu-1" class="mega-menu">
        <section class="menu-list-items">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12" style="display: flex; flex-direction: row; align-items: center; justify-content: space-between;">
                        <ul class="menu-logo">
                            <li>
                                <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('img/logo.png')); ?>" alt="logo"
                                        style="width:60px;">
                                </a>
                            </li>
                        </ul>

                        <ul class="menu-links" style="margin-left: 0;">
                            <li>
                                <a href="<?php echo e(route('home')); ?>">Home </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('books')); ?>">Books</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('about-us')); ?>">About Us</a>
                            </li>
                            <!-- <li>
                                <a href="<?php echo e(route('about-us')); ?>">FAQ</a>
                            </li> -->
                            <li>
                                <a href="<?php echo e(route('contact-us')); ?>">Contact Us</a>
                            </li>

                        </ul>
                        <ul class="menu-search-bar" style="  display: flex;  flex-direction: row; justify-content: space-around; ">
                            <li style="" class="mobile-box"><div style="width: 1px;"></div></li>
                            <li style="display:inline; margin-right:50px;  ">
                                <a id="cart-box" href="<?php echo e(route('cart')); ?>" >
                                    <div id="cart-box-mobile" class="contact-in-header clearfix" style="border:1px solid #E52D27; border-radius: 30px;padding-inline:15px;">
                                        
                                        <img src="<?php echo e(asset('img/icons/cart.png')); ?>" alt="" style="height: 51px;">
                                        <span>

                                            <?php echo e(session()->get('cartSummary', (object)['cartTotal'=>0, 'cartCount'=>0,])->cartCount ?? 0); ?> item<?php echo e((session()->get('cartSummary', (object)['cartTotal'=>0, 'cartCount'=>0,])->cartCount ?? 0) > 1 ? 's' : ''); ?>

                                            <br>
                                            <strong>Rs. <?php echo e(session()->get('cartSummary', (object)['cartTotal'=>0, 'cartCount'=>0,])->cartTotal ?? 0); ?>.00</strong>
                                        </span>
                                    </div>
                                </a>
                            </li>

                            <li style="" class="contact-box">
                                <a href="<?php echo e(route('customer.login')); ?>">
                                    <div class="contact-in-header clearfix" style="height: 50px; display: flex;  align-items: center; padding-right: 50px;">
                                        <svg  xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M222-255q63-40 124.5-60.5T480-336q72 0 134 20.5T739-255q44-54 62.5-109T820-480q0-145-97.5-242.5T480-820q-145 0-242.5 97.5T140-480q0 61 19 116t63 109Zm257.814-195Q422-450 382.5-489.686q-39.5-39.686-39.5-97.5t39.686-97.314q39.686-39.5 97.5-39.5t97.314 39.686q39.5 39.686 39.5 97.5T577.314-489.5q-39.686 39.5-97.5 39.5Zm-.219 370q-83.146 0-156.275-31.5t-127.225-86Q142-252 111-324.841 80-397.681 80-480.5q0-82.819 31.5-155.659Q143-709 197.5-763t127.341-85.5Q397.681-880 480.5-880q82.819 0 155.659 31.5Q709-817 763-763t85.5 127Q880-563 880-480.266q0 82.734-31.5 155.5T763-197.5q-54 54.5-127.129 86T479.595-80Z"/></svg>

                                        <span>
                                            <?php echo e(auth()->guard('customers')->user()->first_name ?? 'login'); ?>


                                        </span>
                                    </div>
                                </a>
                            </li>

                            <li style="display: flex;flex-direction: row;justify-content: space-evenly;" class="contact-box">

                                <a>
                                    <div class="contact-in-header clearfix" style="padding-left: 10px;border-left:1px solid #acacac;">
                                        <i class="flaticon-customer-service" style="font-size:40px;"></i>
                                        <span>
                                            Call Us Now
                                            <br>
                                            <strong>+94 70 7 590 690</strong>
                                        </span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </nav>
</div>
<?php /**PATH C:\Users\dewmi\OneDrive\Desktop\Art-Gallery\resources\views/partials/nav-bar.blade.php ENDPATH**/ ?>