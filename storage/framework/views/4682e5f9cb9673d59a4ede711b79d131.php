<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta name="description" content="">
  <meta name="author" content="ScriptsBundle">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <title>Heena Publishers (Pvt) Ltd.</title>
  <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
  <link rel="icon" href="<?php echo e(asset('img/favicon.ico')); ?>" type="image/x-icon" />
  <!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
  <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
  <!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
  <!-- =-=-=-=-=-=-= Font Awesome =-=-=-=-=-=-= -->
  <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.css')); ?>" type="text/css">
  <!-- =-=-=-=-=-=-= Flat Icon =-=-=-=-=-=-= -->
  <link rel="stylesheet" href="<?php echo e(asset('css/flaticon.css')); ?>" type="text/css">
  <!-- =-=-=-=-=-=-= Et Line Fonts =-=-=-=-=-=-= -->
  <link rel="stylesheet" href="<?php echo e(asset('css/et-line-fonts.css')); ?>" type="text/css">
  <!-- =-=-=-=-=-=-= Menu Drop Down =-=-=-=-=-=-= -->
  <link rel="stylesheet" href="<?php echo e(asset('css/carspot-menu.css')); ?>" type="text/css">
  <!-- =-=-=-=-=-=-= Animation =-=-=-=-=-=-= -->
  <link rel="stylesheet" href="<?php echo e(asset('css/animate.min.css')); ?>" type="text/css">
  <!-- =-=-=-=-=-=-= Select Options =-=-=-=-=-=-= -->
  <link rel="stylesheet" href="<?php echo e(asset('css/select2.min.css')); ?>" type="text/css">
  <!-- =-=-=-=-=-=-= noUiSlider =-=-=-=-=-=-= -->
  <link rel="stylesheet" href="<?php echo e(asset('css/nouislider.min.css')); ?>" type="text/css">
  <!-- =-=-=-=-=-=-= Listing Slider =-=-=-=-=-=-= -->
  <link rel="stylesheet" href="<?php echo e(asset('css/slider.css')); ?>" type="text/css">
  <!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/owl.carousel.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/owl.theme.css')); ?>">
  <!-- =-=-=-=-=-=-= Check boxes =-=-=-=-=-=-= -->
  <link rel="stylesheet" href="<?php echo e(asset('css/minimal.css')); ?>">
  <!-- =-=-=-=-=-=-= PrettyPhoto =-=-=-=-=-=-= -->
  <link rel="stylesheet" href="<?php echo e(asset('css/jquery.fancybox.min.css')); ?>" type="text/css" media="screen" />
  <!-- =-=-=-=-=-=-= Responsive Media =-=-=-=-=-=-= -->
  <link rel="stylesheet" href="<?php echo e(asset('css/responsive-media.css')); ?>">
  <!-- =-=-=-=-=-=-= Template Color =-=-=-=-=-=-= -->
  <link rel="stylesheet" id="color" href="<?php echo e(asset('css/defualt.css')); ?>">
  <!-- Base MasterSlider style sheet -->
  <link rel="stylesheet" href="<?php echo e(asset('css/master-slider/masterslider.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('css/master-slider/style.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('css/master-slider/style.css')); ?>" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CSource+Sans+Pro:400,400i,600"
    rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(asset('css/toastr.min.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('css/ext-component-toastr.css')); ?>" />
  <!-- JavaScripts -->
  <script src="<?php echo e(asset('js/modernizr.js')); ?>"></script>

</head>


<body>


  <?php echo $__env->make("partials.page-loader", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->make('partials.nav-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->yieldContent('content'); ?>

  <?php echo $__env->make("partials.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->make('partials.scroll-to-top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
  <!-- Bootstrap Core Css  -->
  <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
  <!-- Jquery Easing -->
  <script src="<?php echo e(asset('js/easing.js')); ?>"></script>
  <!-- Menu Hover  -->
  <script src="<?php echo e(asset('js/carspot-menu.js')); ?>"></script>
  <!-- Jquery Appear Plugin -->
  <script src="<?php echo e(asset('js/jquery.appear.min.js')); ?>"></script>
  <!-- Numbers Animation   -->
  <script src="<?php echo e(asset('js/jquery.countTo.js')); ?>"></script>
  <!-- Jquery Select Options  -->
  <script src="<?php echo e(asset('js/select2.min.js')); ?>"></script>
  <!-- noUiSlider -->
  <script src="<?php echo e(asset('js/nouislider.all.min.js')); ?>"></script>
  <!-- Carousel Slider  -->
  <script src="<?php echo e(asset('js/carousel.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/slide.js')); ?>"></script>
  <!-- Image Loaded  -->
  <script src="<?php echo e(asset('js/imagesloaded.js')); ?>"></script>
  <script src="<?php echo e(asset('js/isotope.min.js')); ?>"></script>
  <!-- CheckBoxes  -->
  <script src="<?php echo e(asset('js/icheck.min.js')); ?>"></script>
  <!-- Jquery Migration  -->
  <script src="<?php echo e(asset('js/jquery-migrate.min.js')); ?>"></script>
  <!-- Style Switcher -->
  <script src="<?php echo e(asset('js/color-switcher.js')); ?>"></script>
  <!-- PrettyPhoto -->
  <script src="<?php echo e(asset('js/jquery.fancybox.min.js')); ?>"></script>
  <!-- Wow Animation -->
  <script src="<?php echo e(asset('js/wow.js')); ?>"></script>
  <!-- Template Core JS -->
  <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
  <!-- MasterSlider -->
  <script src="<?php echo e(asset('js/masterslider.min.js')); ?>"></script>
  <script type="text/javascript">
    (function($) {
       "use strict";
          var slider = new MasterSlider();
          slider.control('arrows');
          slider.setup('masterslider' , {
                width:1400,    // slider standard width
                height:560,   // slider standard height
                layout:'fullwidth',
                loop:true,
                preload:0,
                fillMode:'fill',
                instantStartLayers:true,
                autoplay:true,
                view:"basic"
          });
     })(jQuery);
  </script>

  <script src="<?php echo e(asset('js/toastr.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/ext-component-toastr.js')); ?>"></script>
  <script>
    $(document).ready(function() {
        toastr.options.timeOut = 5000;

        <?php if(Session::has('error')): ?>
        toastr['error']('<?php echo e(Session::get('error')); ?>', 'Error !!!', {
            closeButton: true,
            tapToDismiss: false,
        });

        <?php elseif(Session::has('success')): ?>
        toastr['success']('<?php echo e(Session::get('success')); ?>', 'Success !!!', {
            closeButton: true,
            tapToDismiss: false,
        });
        <?php endif; ?>
    });
  </script>

  
  <script>
    const togglePassword = document.querySelector('#password-visibility');
			const password = document.querySelector('#password');

			togglePassword.addEventListener('click', function (e) {
			// toggle the type attribute
			const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
			password.setAttribute('type', type);
			// toggle the eye slash icon
			this.classList.toggle('fa-eye-slash');
			});
  </script>


</body>

</html>
<?php /**PATH C:\Users\dewmi\Downloads\Heena-website-main\Heena-website-main\resources\views/layouts/master.blade.php ENDPATH**/ ?>