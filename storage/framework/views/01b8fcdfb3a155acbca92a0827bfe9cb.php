

<?php $__env->startSection('title'); ?>
Cart
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="page-header-area-2 gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="small-breadcrumb">
                    <div class="breadcrumb-link">
                        <ul>
                            <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                            <li><a class="active" href="#">Cart</a></li>
                        </ul>
                    </div>
                    <div class="header-page">
                        <h1>Cart</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="main-content-area clearfix">
    <section class="section-padding no-top compare-detial gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">Product</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-center">Subtotal</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $total = 0;
                                    $weight = 0 
                                ?>

                                <?php if(session('cart')): ?>
                                <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php 
                                    $total += $details['price'] * $details['quantity']; 
                                    $weight += $details['weight'] * $details['quantity'];
                                ?>
                                
                                <tr data-id="<?php echo e($id); ?>">

                                    <td data-th="Product">
                                        <div class="recent-ads recent-ads-list">
                                            <div class="recent-ads-container">
                                                <div class="recent-ads-list-image">
                                                    <a class="recent-ads-list-image-inner">
                                                        <img src="<?php echo e(asset($details['image'])); ?>">
                                                    </a>
                                                </div>
                                                <div class="recent-ads-list-content">
                                                    <h3 class="recent-ads-list-title">
                                                        <a><?php echo e($details['name']); ?></a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td data-th="Price">LKR <?php echo e($details['price']); ?></td>
                                    

                                    <td data-th="Quantity">
                                        <input type="number" class="form-control quantity update-cart"
                                            value="<?php echo e($details['quantity']); ?>" />
                                    </td>

                                    <td data-th="Subtotal">
                                        LKR <?php echo e($details['price'] * $details['quantity']); ?>

                                    </td>
                                    

                                    <td data-th="">
                                        <button class="btn btn-danger btn-sm remove-from-cart"><i
                                                class="fa fa-trash-o"></i></button>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>Total</td>
                                    <td></td>
                                    <td></td>
                                    <td>LKR <?php echo e($total); ?></td>
                                    
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>


                    

                </div>


                <div class="col-md-12 col-xs-12 col-lg-12">
                    <a href="<?php echo e(route('books')); ?>" class="btn btn-default margin-bottom-10">Continue Shopping</a>

                    <?php if(auth()->guard('customers')->check()): ?>
                    <a href="<?php echo e(url('checkout')); ?>" class="btn btn-success margin-bottom-10" style="float: right">Checkout</a>
                    <?php else: ?>
                    <a href="<?php echo e(route('customer.login')); ?>" class="btn btn-success margin-bottom-10"
                        style="float: right">Checkout</a>
                    <?php endif; ?>
                </div>


            </div>

        </div>

    </section>

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>


<script type="text/javascript">
    $(document).on('change', '.update-cart', function(e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '<?php echo e(route('update.cart')); ?>',
            method: "patch",
            data: {
                _token: '<?php echo e(csrf_token()); ?>',
                id: ele.parents("tr").attr("data-id"),
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });


    $(document).on('click', '.remove-from-cart', function(e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '<?php echo e(route('remove.from.cart')); ?>',
                method: "DELETE",
                data: {
                    _token: '<?php echo e(csrf_token()); ?>',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dewmi\OneDrive\Desktop\Art-Gallery\resources\views/cart.blade.php ENDPATH**/ ?>