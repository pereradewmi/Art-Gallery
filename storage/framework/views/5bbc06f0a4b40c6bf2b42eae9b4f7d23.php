<?php $__env->startSection('title'); ?>
Contact Us
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="small-breadcrumb">
                    <div class=" breadcrumb-link">
                        <ul>
                            <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
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
                        <form method="POST" action="<?php echo e(route('contact-us.send-inquiry')); ?>">
                            <?php echo csrf_field(); ?>
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
                                    <button class="btn btn-theme" type="submit" style=" border-radius: 50px">Send
                                        Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="contactInfo">
                            <div class="singleContadds">
                                <i class="fa fa-map-marker"></i>
                                <p> No. 10, Egodahenawaththa Road, Mampe, Piliyandala </p>
                            </div>
                            <div class="singleContadds phone">
                                <i class="fa fa-phone"></i>
                                <p> +94 70 7 590 690</p>
                                <p> +94 76 7 590 690 </p>
                            </div>
                            <div class="singleContadds"> <i class="fa fa-envelope"></i> <a
                                    href="mailto:heenapublications@gmail.com">heenapublications@gmail.com</a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row End -->


            <div class="row" style="margin-top: 5%">
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding commentForm">

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31693.723529346807!2d79.89159891946082!3d6.804429617028375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae24ffad3e28af5%3A0xb1bb71c74f2c7b3!2sMampe%2C%20Piliyandala!5e0!3m2!1sen!2slk!4v1698923568177!5m2!1sen!2slk"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                </div>
            </div>


        </div>
        <!-- Main Container End -->
    </section>
    <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dewmi\Downloads\Heena-website-main\Heena-website-main\resources\views/contact-us.blade.php ENDPATH**/ ?>