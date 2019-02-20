<?php

include_once('includes/header.php');
?>
<style>
    .clt, .clt ul, .clt li {
        position: relative;
    }

    .clt ul {
        list-style: none;
        padding-left: 32px;
    }

    .clt li::before, .clt li::after {
        content: "";
        position: absolute;
        left: -12px;
    }

    .clt li::before {
        border-top: 1px solid #000;
        top: 9px;
        width: 8px;
        height: 0;
    }

    .clt li::after {
        border-left: 1px solid #000;
        height: 100%;
        width: 0px;
        top: 2px;
    }

    .clt ul > li:last-child::after {
        height: 8px;
    }
</style>
<div class="slider1-area overlay-default index1">
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider-3" class="slides nivoSlider">   
            <img src="img/slides/3.jpg" alt="slider" title="#slider-direction-3">
            <img src="img/slides/4.jpg" alt="slider" title="#slider-direction-4">
            <img src="img/slides/5.jpg" alt="slider" title="#slider-direction-5">
            <img src="img/slides/6.jpg" alt="slider" title="#slider-direction-6">
        </div>
        <!-- <div class="nivo-controlNav nivo-thumbs-enabled"></div>  -->
        <div id="slider-direction-1" class="t-cn slider-direction">
            <div class="slider-content s-tb slide-1">
                <div class="title-container s-tb-c">
                </div>
            </div>
        </div>
        <div id="slider-direction-2" class="t-cn slider-direction">
            <div class="slider-content s-tb slide-2">
                <div class="title-container s-tb-c">
                </div>
            </div>
        </div>
    </div> 
</div>


<section class="home-serivce sec-padding pb_60">
    <div class="container">
        <div class="sec-title text-center colored">
            <h2>Explore us</h2>
            <p>Shreeji Enterprises is one of the top lami tube manufacturer in India. Company is located in Pune, Maharashtra. Having integrated production facility and R & D team. We strive to provide techno-packaging solutions for your products. We continously work for developing packaging products to simplify the packaging needs & solutions to yours complex packaging needs. </p>
            <span class="decor"><span class="inner"></span></span>
        </div>
        <div class="row causes-style piechart-style">
            <div class="col-sm-12 col-md-4 col-lg-4"></div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="clt">
                    <ul>

                        <li>
                            <a href="index">Home</a>

                        </li>
                        <li>
                            <a href="index">Product</a>
                            <ul>
                                <li><a href="laminated_tubes">Laminated Tube</a></li>
                                <li><a href="tubes_caps">Tubes Caps</a></li>
                                <li><a href="engineering_module">Production Work & Engineering Module</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="index">Manufacture</a>
                            <ul>
                                <li><a href="tube_production">Tube Production</a></li>
                                <li><a href="injection_moduling">Injection Moduling</a></li>
                            </ul>
                        </li>
                        <li><a href="about_us">About Us</a></li>
                        <li><a href="contact_us">Contact Us</a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4"></div>
        </div>
        <!--<div class="row causes-style piechart-style">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="causes sm-col5-center mb_30">
                    <div class="thumb">
                        <img class="full-width" alt="" src="img/product/home/laminated_tubes.jpg">

                    </div>
                    <div class="causes-details clearfix">
                        <h4 class="title"><a href="laminated_tubes">Laminated Tubes</a></h4>
                        <ul class="about-causes list-inline clearfix">

                           
                        </ul>
                        <p>Shreeji Enterprises, that started its production of laminate tubes in 1993 for the domestic market needs, has now reached a level of internationally-accepted standards ...</p>
                        <div>
                            <a class="thm-btn btn-xs" href="laminated_tubes">View More</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="causes sm-col5-center mb_30">
                    <div class="thumb">
                        <img class="full-width" alt="" src="img/product/home/tube_caps.jpg">

                    </div>
                    <div class="causes-details clearfix">
                        <h4 class="title"><a href="tubes_caps">Tube Caps</a></h4>
                        <ul class="about-causes list-inline clearfix">

                           
                        </ul>
                        <p>At Shreeji Enterprises, we are known for our innovative product solutions and our flexible service.We are able to economically produce both high and low order quantities ...</p>
                        <div>
                            <a class="thm-btn btn-xs" href="tubes_caps">View More</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="causes sm-col5-center mb_30">
                    <div class="thumb">
                        <img class="full-width" alt="" src="img/product/home/enginering_module.jpg">

                    </div>
                    <div class="causes-details clearfix">
                        <h4 class="title"><a href="engineering_module">Engineering Module</a></h4>
                        <ul class="about-causes list-inline clearfix">
                            
                        </ul>
                        <p>Our production facilities have high hygienic standards, with balanced air humidity and well maintained equipment. Modern machinery generate substantial product quality...</p>
                        <div>
                            <a class="thm-btn btn-xs" href="engineering_module">View More</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="causes sm-col5-center mb_30">
                    <div class="thumb">
                        <img class="full-width" alt="" src="img/product/home/tube_production.jpg">

                    </div>
                    <div class="causes-details clearfix">
                        <h4 class="title"><a href="tube_production">Tube Production</a></h4>
                        <ul class="about-causes list-inline clearfix">

                            
                        </ul>
                        <p>Our production facilities have high hygienic standards, with balanced air humidity and well maintained equipment. Modern machinery generate substantial product quality...</p>
                        <div>
                            <a class="thm-btn btn-xs" href="tube_production">View More</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="causes sm-col5-center mb_30">
                    <div class="thumb">
                        <img class="full-width" alt="" src="img/product/home/injection_moduling.jpg">

                    </div>
                    <div class="causes-details clearfix">
                        <h4 class="title"><a href="injection_moduling">Injuction Moduling</a></h4>
                        <ul class="about-causes list-inline clearfix">

                            
                        </ul>
                        <p>Our injection moulding department includes 15 injection moulding machines. Skilled toolmakers design and build moulds according to customer requirements.</p>
                        <div>
                            <a class="thm-btn btn-xs" href="injection_moduling">View More</a>

                        </div>
                    </div>
                </div>
            </div>

        </div> -->
    </div>
</section>

<section class="fact-counter-wrapper sec-padding parallax-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 md-text-center">
                <h2>We are served since <b>11 years</b> <br>to helpless people with trust and <br>we are happy</h2>
                <a href="index" class="thm-btn inverse mb-md-40">Be a part of us</a>
            </div>
            <div class="col-lg-6 col-md-12 md-text-center">
                <div class="single-fact">
                    <div class="icon-box">
                        <i class="flaticon-shapes-2"></i>
                    </div>
                    <span class="timer" data-from="10" data-to="365" data-speed="5000" data-refresh-interval="50">365</span>
                    <p>Total Awards</p>
                </div>
                <div class="single-fact">
                    <div class="icon-box">
                        <i class="flaticon-people-3"></i>
                    </div>
                    <span class="timer" data-from="10" data-to="2200" data-speed="5000" data-refresh-interval="50">155</span>
                    <p>Total Volunteer</p>
                </div>
                <div class="single-fact">
                    <div class="icon-box">
                        <i class="flaticon-hands"></i>
                    </div>
                    <span class="timer" data-from="10" data-to="155" data-speed="5000" data-refresh-interval="50">2200</span>
                    <p>Total Projects</p>
                </div>
            </div>
        </div>
    </div>
</section>



<?php

include_once('includes/footer.php');
?>