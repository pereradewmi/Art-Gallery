

<?php $__env->startSection('title'); ?>
Login
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
                            <li><a class="active" href="#">Login</a></li>
                        </ul>
                    </div>
                    <div class="header-page">
                        <h1>Login</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-content-area clearfix">
    <section class="section-padding no-top gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="form-grid">
                        <form action="<?php echo e(route('customer.log-in')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" placeholder="Enter Email"
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" id="password" name="password"
                                    placeholder="Enter Password" required>
                                <span id="password-visibility" class="fa fa-fw fa-eye password-visibility-icon"></span>
                            </div>

                            

                            <button class="btn btn-theme btn-lg btn-block">Log In</button>

                            <div style="display: flex;flex-direction: row;align-items: center;justify-content: center;padding-top:20px;">
                                <span style="margin-right: 5px;">If you are not a member?</span><a href="/customer/registration">Click Here to <b>Register</b></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>



<script type="text/javascript">
    window.history.forward();
    function noBack() {
        window.history.forward();
    }
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dewmi\OneDrive\Desktop\Art-Gallery\resources\views/login.blade.php ENDPATH**/ ?>