{{-- <footer class="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('img/logo-dark.png') }}">
                        </a>
                    </div>
                    <p>We provide everything you need to build an amazing dealership website developed especially
                        for car sellers dealers or auto motor retailers.</p>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="quick-links-col">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('vehicles') }}">Vehicles</a></li>
                            <li><a href="{{ route('about-us') }}">About Us</a></li>
                            <li><a href="{{ route('contact-us') }}">Contact us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="contact-us-col">
                        <h3>Contact Us</h3>
                        <ul>
                            <li><i class="fa-sharp fa-solid fa-location-dot"></i> No 54, Lorem Ipsum, Doler simet</li>
                            <li><i class="fa-solid fa-phone"></i> +245 698 669 8</li>
                            <li><i class="fa-solid fa-mobile"></i> +94 7502 5456</li>
                            <li><i class="fa-solid fa-envelope"></i> info@jpcarzone.com</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="follow-us-col">
                        <h3>Follow Us</h3>
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook"></i> Facebook</a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin"></i> LinkedIn</a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i> Youtube</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container-fluid">
            <div class="copyright-text text-dark text-center">
                © 2023 Heena Publishers. All Rights Reserved. Designed By <a href="https://www.enricharcane.com/"
                    target="_blank">Enrich Arcane</a>
            </div>
        </div>
    </div>

</footer> --}}





<style>
    .cell {
    display: table-cell;
    padding: 5px;
}
.icon{
     display: table-cell;
}
.contact-table {
    width: 100%;
    border-collapse: collapse;
}
</style>



<footer class="footer-bg">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="widget">
                        <div class="logo" style="text-align:center;"> <img alt="" src="{{ asset('img/logo.png') }}" width="20%"></div>
                        <p style="padding: 0 30px;">Heena Publishers your literary companion, committed to providing an unparalleled reading experience.</p>
                        {{-- <ul class="apps-donwloads">
                            <li><img src="images/googleplay.png" alt=""></li>
                            <li><img src="images/appstore.png" alt=""></li>
                        </ul> --}}
                    </div>
                </div>

                <div class="col-md-2  col-sm-6 col-xs-12">
                    <div class="widget my-quicklinks">
                        <h5>Quick Links</h5>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('books') }}">Books</a></li>
                            <li><a href="{{ route('about-us') }}">About Us</a></li>
                            <li><a href="{{ route('contact-us') }}">Contact us</a></li>
                            <li><a href="{{ route('policies') }}">Policies</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3  col-sm-6 col-xs-12">
                    <div class="widget my-quicklinks">
                        <h5 style="margin: 0 0 11px;">Contact Us</h5>
                        <div class="contact-table">
                            <div class="row">
                                <div class="icon"><i class="fa fa-map-marker"style="font-size: larger;" aria-hidden="true"></i></div>
                                <div class="cell">No. 10, Egodahenawaththa Road, Mampe, Piliyandala</div>
                            </div>
                            <div class="row">
                                <div class="icon"><i class="fa fa-phone"style="font-size: larger;" aria-hidden="true"></i></div>
                                <div class="cell">+94 70 7 590 690 / +94 76 7 590 690</div>
                            </div>
                            <div class="row">
                                <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                <div class="cell">heenapublications@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget socail-icons">
                        <h5>Follow Us</h5>
                        <ul>
                            <li><a class="Facebook" href=""><i class="fa fa-facebook"></i></a><span>Facebook</span></li>
                            <li><a class="Twitter" href=""><i class="fa fa-twitter"></i></a><span>Twitter</span></li>
                            <li><a class="Linkedin" href=""><i class="fa fa-linkedin"></i></a><span>Linkedin</span></li>
                            <li><a class="Google" href=""><i class="fa fa-google-plus"></i></a><span>Google+</span></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container-fluid">
            <div class="copyright-text text-dark text-center">
                © 2023 Heena Publishers. All Rights Reserved. Designed By <a href="https://www.enricharcane.com/" target="_blank">Enrich Arcane</a>
            </div>
        </div>
    </div>

</footer>
