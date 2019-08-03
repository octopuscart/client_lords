<!-- Footer -->
<style>
    .footer-shop .social-links a {
    color: rgba(255,255,255,0.8);
    display: inline-block;
    width: 50px;
    height: 50px;
    text-align: center;
    line-height: 50px;
    border: 1px solid rgba(255,255,255,0.1);
    font-size: 33px;
}
    
</style>
<!-- Footer -->
<footer class="footer-shop" style="padding: 30px 0px">
    <div class="container">
        <div class="row"> 

            <!-- Contact -->
            <div class="col-md-4">
                <h4>Our Location</h4>
                <p>
                    <b><i class="fa fa-location-arrow"></i></b>
                    2/F Unit D, Far East Mansion,<br/> 5-6 Middle Road,
                    Tsim Sha Tsui, <br/>Kowloon, Hong Kong
                </p>
                <p><a href="https://api.whatsapp.com/send?phone=85296449965" style="color:white;"><b><i class="fa fa-phone"></i></b> +(852) 9644 9965</a></p>
                <p><a href="tel:+1 (646) 306 5182" style="color:white;"><b><i class="fa fa-phone"></i></b> +1 (646) 306 5182</a></p>
                <p><a href="mailto:jason@lordscustomtailors.com" style="color:white;"><b><i class="fa fa-envelope"></i></b> jason@lordscustomtailors.com</a></p>


                <div class="social-links"> 
                    <a href="https://www.facebook.com/lordscustomtailors" target="_blank"><i class="fa fa-facebook"></i></a> 
                    <a href="https://twitter.com/lordscustomtai1" target="_blank"><i class="fa fa-twitter"></i></a> 
                    <a href="https://www.instagram.com/lordscustomtailors/" target="_blank"><i class="fa fa-instagram"></i></a> 
                    <a href="" target="_blank"><i class="fa fa-tripadvisor"></i></a> 
                    <a href="https://www.pinterest.com/lordscustomtailors/" target="_blank"><i class="fa fa-pinterest"></i></a> 
                </div>
            </div>

            <!-- Categories -->
            <div class="col-md-3">
                <h4>Categories</h4>
                <ul class="links-footer">
                    <li><a href="<?php echo site_url('Product/ProductList/1/0'); ?>">Shirts</a></li>
                    <li><a href="<?php echo site_url('Product/ProductList/2/0'); ?>">Suits</a></li>
                    <li><a href="<?php echo site_url('Product/ProductList/4/0'); ?>">Sport Coats</a></li>
                    <li><a href="#">Waist Coats</a></li>
                    <li><a href="<?php echo site_url('Product/ProductList/3/0'); ?>">Slacks</a></li>
                    <li><a href="#">Tuxedos</a></li>

                </ul>
            </div>

            <!-- Categories -->
            <div class="col-md-3">
                <h4>Customer Services</h4>
                <ul class="links-footer">
                    <li><a href="<?php echo site_url("our-clients"); ?>">Testimonials</a></li>
                    <li><a href="<?php echo site_url("appointment"); ?>">Make An Appointment</a></li>
                    <li><a href="<?php echo site_url("stylingTips"); ?>">Our Blog</a></li>
                    <li><a href="<?php echo site_url("catalog"); ?>">Catalog</a></li>
                    <li><a href="<?php echo site_url("contact-us"); ?>">Contact Us</a></li>
                </ul>
            </div>

            <!-- Categories -->
            <div class="col-md-2">
                <h4>Information</h4>
                <ul class="links-footer">
                    <li><a href="<?php echo site_url("aboutus"); ?>">About Us</a></li>
                    <li><a href="<?php echo site_url("priceGuide"); ?>">Price Guide</a></li>
                    <li><a href="<?php echo site_url("privacyPolicy"); ?>">Privacy Policy</a></li>
                    <li><a href="<?php echo site_url("faqs"); ?>">FAQs</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Rights -->
<div class="rights">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <p>Copyright © <?php echo date('Y') ?> <a href="#." class="ri-li"> www.lordscustomtailors.com </a> All rights reserved</p>
            </div>
            <div class="col-sm-6 text-right"> <img src="<?php echo base_url(); ?>assets/theme/images/card-icon.png" alt=""> </div>
        </div>
    </div>
</div>

<!-- End Footer --> 


<!-- End Footer -->  

<!-- GO TO TOP  --> 
<a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a> 
<!-- GO TO TOP End --> 
</div>
<!-- End Page Wrapper --> 

<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/shopController.js"></script>

<!-- JavaScripts --> 
<script src="<?php echo base_url(); ?>assets/theme/js/vendors/jquery/jquery.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/theme/js/vendors/wow.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/theme/js/vendors/bootstrap.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/theme/js/vendors/jquery.magnific-popup.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/theme/js/vendors/own-menu.js"></script> 
<script src="<?php echo base_url(); ?>assets/theme/js/vendors/jquery.sticky.js"></script> 
<script src="<?php echo base_url(); ?>assets/theme/js/vendors/owl.carousel.min.js"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/rs-plugin/js/jquery.tp.t.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/rs-plugin/js/jquery.tp.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/theme/js/main.js"></script> 

<!-- type ahead-->
<script src="<?php echo base_url(); ?>assets/handlebars.js" type="text/javascript"></script>

<!-- type ahead-->
<script src="<?php echo base_url(); ?>assets/typeahead.bundle.js" type="text/javascript"></script>

</body>

<script>
    $(function () {
        setTimeout(function () {
            $(".eawc-button-button").next().hide();
            $(".eawc-user-image-image").css({"background": "url(https://lct.costcokart.com/assets/images/fav.png)", "background-size": "cover"})
        }, 3000)
    });
</script>

</html>
