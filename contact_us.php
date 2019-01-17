<?php
include_once('includes/header.php');
?>
<section class="tube_caps_header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 sec-title colored text-center">
                <h2 class="text-white">Contact Us</h2>
                <ul class="breadcumb">
                    <li><a href="index">Home</a></li>
                    <li><i class="fa fa-angle-right text-white"></i></li>
                    <li><span class="text-white">Contact Us</span></li>
                </ul>

            </div>
        </div>
    </div>
</section>
        <section class="contact-content sec-padding">
            <div class="container">
                <div class="sec-title text-center">
                   <!-- <p>We Are Here To Help You! <br> Tell us what you need </p> -->
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <h2>Contact</h2>
						<span class='alert_message' id="contact-page-contact-form_message"></span>
                        <form action="processAjax.php" class="contact-form row" method="post" id="contact-page-contact-form">
                            <div class="col-md-6">
                                <div class='form-group'>
									<input class="form-control" type="text" data-rule-required="true" data-msg-required="Please enter name." data-rule-minlength="2" data-rule-maxlength="100" data-msg-maxlength="Name should not contain more than {0} characters." data-msg-minlength="Name should contain at least {0} characters."   name="name" placeholder="Name">
                                </div>
								<div class='form-group'>
									<input class="form-control" type="email" data-rule-required="true" data-msg-required="Please enter email address." name="email_address" placeholder="Email">
                                 </div>
								<div class='form-group'>
									<input class="form-control" type="text" data-rule-required="true" data-msg-required="Please enter phone number." name="contact_number" placeholder="Phone">
								</div>
                            </div>
                            <div class="col-md-6">
								<div class='form-group'>
									<textarea class="form-control" name="message"  data-rule-required="true" data-msg-required="Please enter the message." placeholder="Message" cols="30" rows="10"></textarea>
								</div>
							</div>
							<input type="hidden" name="is_for_subscribe" value="0">
                            <div class="col-md-12"><button class="thm-btn mb-sm-60" type="submit">Send</button></div>
                        </form>
						
                    </div>
                    <div class="col-md-4">
                        <h2>Address</h2>
                        <ul class="contact-info">
                            <li>
                                <div class="icon-box">
                                    <div class="inner">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <h4>Address</h4>
                                    <p>C-63, MIDC, SUPA, Aehed nagar, pune nagar road,
									<br>Pune, Maharashtra, 411011, India</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon-box">
                                    <div class="inner">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <h4>Phone</h4>
                                    <p>(732) 803-01 03, (732) 806-01 04, (880)172380129</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon-box">
                                    <div class="inner">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <h4>Email</h4>
                                    <p>support@shreejienterprises.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

<?php
include_once('includes/footer.php');
?>

<script src="js/contact_us.js" > </script>

<script>
    $(document).ready(function () {
        siteObjJs.admin.contactUsJs.init();
        
    });
</script>

