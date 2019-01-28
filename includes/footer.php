<section class="p_20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="clients-carousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="img-box">
                            <img src="img/clients/logo-1.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box">
                            <img src="img/clients/logo-2.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box">
                            <img src="img/clients/logo-3.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box">
                            <img src="img/clients/logo-4.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box">
                            <img src="img/clients/logo-5.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box">
                            <img src="img/clients/logo-1.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box">
                            <img src="img/clients/logo-2.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box">
                            <img src="img/clients/logo-3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="footer-widget about-widget">
                    <a href="#">
                        <img src="img/hatch_img/logo_transparent.png" alt="Awesome Image"/>
                    </a>
                    <ul class="contact">
                        <li><i class="fa fa-map-marker"></i> <span>C-63, MIDC, SUPA, Aehed nagar,<br> pune nagar road,Pune, Maharashtra, 411011, India</span></li>
                        <li><i class="fa fa-phone"></i> <span>(+91) 96731 19250</span></li>
                        <li><i class="fa fa-envelope-o"></i> <span>info@lamitubeindia.com</span></li>
                    </ul>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="footer-widget quick-links">
                    <h3 class="title">Sitemap</h3>
                    <ul>
                        <li><a href="index">Home</a></li>
                        <li class="dropdown">
                            <a href="index">Product</a>
                            <ul class="submenu">
                                <li><a href="laminated_tubes">Laminated Tube</a></li>
                                <li><a href="tubes_caps">Tubes Caps</a></li>
                                <li><a href="engineering_module">Engineering Module</a></li>
                            </ul>
                        </li>

                        <li><a href="tube_production">Tube Production</a></li>
                        <li><a href="injection_moduling">Injuction Moduling</a></li>

                        <li><a href="about_us">About Us</a></li>
                        <li><a href="contact_us">Contact Us</a></li>

                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="footer-widget contact-widget">
                    <h3 class="title">Contact Us</h3>
                    <p>We Are Here To Help You! Tell us what you need </p>
					<span class='alert_message' id="contact-form_message"></span>
                    <form action="processAjax.php" method="post" id="contact-form"  novalidate="novalidate">
                        <div class='form-group'>
							<input class="form-control" type="email" data-rule-required="true" data-msg-required="Please enter email address." name="email_address" placeholder="Email">
							<input type="hidden" name="name" value="">
							<input type="hidden" name="contact_number" value="">
							<input type="hidden" name="message" value="">
							<input type="hidden" name="is_for_subscribe" value="1">
						</div>
                        <button type="submit">Subscribe</button>
                    </form>
					
                </div>
            </div> 
        </div>
    </div>
</footer>


<section class="footer-bottom">
    <div class="container text-center">
        <p>©<?php echo date("Y"); ?> All Rights Reserved. <a href="index.php">Shreeji Enterprises</a></p>
    </div>
</section>

<!--Scroll to top-->
<div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>


<!-- main jQuery -->
<script src="js/jquery-2.1.4.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>

<!-- owl carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- validate -->
<script src="js/jquery-parallax.js"></script>
<!-- validate -->
<script src="js/siteobj.js"></script>
<script src="js/validation.js"></script>
<script src="js/jquery.validate.min.js"></script>
<!-- mixit up -->
<script src="js/jquery.mixitup.min.js"></script>
<!-- fancybox -->
<script src="js/jquery.fancybox.pack.js"></script>
<!-- easing -->
<script src="js/jquery.easing.min.js"></script>
<!-- circle progress -->
<script src="js/circle-progress.js"></script>
<!-- appear js -->
<script src="js/jquery.appear.js"></script>
<!-- count to -->
<script src="js/jquery.countTo.js"></script>

<!-- isotope script -->
<script src="js/isotope.pkgd.min.js"></script>
<!-- jQuery ui js -->
<script src="js/jquery-ui-1.11.4/jquery-ui.js"></script>


<!-- Nivo slider js -->     
<script src="vendor/slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="vendor/slider/home.js" type="text/javascript"></script>




<!-- thm custom script -->

<script src="js/custom.js"></script>
<script src="js/common.js"></script>
<script>
    $(document).ready(function () {
        siteObjJs.admin.commonJs.init();
        
    });
	 $(document).ready(function () {
        $(".alert_message").delay(3000).fadeOut("slow", function () {
            $(".alert_message").html('');
        });
    });
</script>
</body>
</html>