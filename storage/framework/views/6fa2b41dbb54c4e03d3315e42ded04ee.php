

<?php $__env->startSection('content'); ?>

<form class="form w-100" action="<?php echo e(route('authenticate')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <div class="text-center mb-10">
        <h1 class="text-dark mb-3">Sign In to Heena Publishers</h1>
        
    </div>

    <div class="fv-row mb-10">
        <label class="form-label fs-6 fw-bolder text-dark">Email</label>
        <input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off"
            required />
    </div>

    <div class="fv-row mb-10">
        <div class="d-flex flex-stack mb-2">
            <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
            <a href="<?php echo e(route('forgot.password.get')); ?>" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
        </div>

        <input class="form-control form-control-lg form-control-solid" type="password" id="password" name="password"
            autocomplete="off" required />
        <span id="password-visibility" class="fa fa-fw fa-eye password-visibility-icon"></span>
    </div>

    <div class="text-center">
        <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
            <span class="indicator-label">Continue</span>
            <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
    </div>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dewmi\OneDrive\Desktop\Art-Gallery\resources\views/admin/login.blade.php ENDPATH**/ ?>