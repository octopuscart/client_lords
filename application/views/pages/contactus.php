<?php
$this->load->view('layout/header');
?>
<style>

    .contact-social .social-links a {
        border-radius: 4px;
        border: 1px solid #252839;
        display: inline-block;
        height: 50px;
        width: 50px;
        text-align: center;
        margin-right: 5px;
        line-height: 50px;
        font-size: 30px;
    }
</style>

<!-- MAP -->

<div style="clear: both"></div>
<!-- Content -->
<div id="content"> 

    <div class="main-page-section half_left_layout hideonmobile" style="    background: white;">
        <div class="">
            <div class="main-half-layout3 half_left_layout studio-bg" style="background: url(<?php echo base_url(); ?>assets/images/contact.jpg);background-repeat: no-repeat;background-size: cover;"></div>

            <div class="main-half-layout-container half_left_layout" style="    width: 50%;
                 margin: 0px;    margin-bottom: -5px;
                 padding: 0;">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.5276103373485!2d114.17070935014365!3d22.295877348618493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340400f23d5251c9%3A0x66613282f30db84a!2z5bCW5rKZ5ZKA5Lit6ZaT6YGTNS026Jmf6YGg5p2x5aSn5buI!5e0!3m2!1szh-TW!2shk!4v1472542043770" width="100%" height="360" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div>
            <div style="clear: both"></div>
        </div>
    </div>

    <div style="clear: both"></div>
    <!-- Contact Us -->
    <section class="lets-talk margin-top-20">
        <div class="container"> 
            <!-- Cantact Us -->
            <div class="row">


                <div class="col-md-6 contact-social"> 

                    <!-- Main Heading -->
                    <div class="heading-block margin-bottom-30">
                        <h3 class="text-transform-none letter-space-0">Our Location</h3>
                    </div>
                    <ul class="studio-loc padding-right-100">
                        <li><i class="flaticon-route"></i>  2/FL Unit D, Far East Mansion,<br/> 5-6 Middle Road,<br/>
                            Tsim Sha Tsui, Kowloon,<br/>  Hong Kong</li>
                        <li><i class="flaticon-smartphone"></i> 
                            <a href="tel:85296449965"><span class="fa fa-phone"></span> +(852) 9644 9965</a><br>
                            <a href="tel:+1 (646) 306 5182"><span class="fa fa-phone"></span> +1 (646) 306 5182</a> 

                        </li>

                        <li><i class="fa fa-whatsapp" style="line-height: 28px;"></i> 
                            <a href="https://api.whatsapp.com/send?phone=85296449965"> +(852) 9644 9965</a>
                        </li>

                        <li>
                            <i class="flaticon-mail" style="line-height: 50px;"></i> <a href="mailto:jason@lordscustomtailors.com">jason@lordscustomtailors.com</a> <br>
                             <a href="mailto:nicole@lordscustomtailors.com">nicole@lordscustomtailors.com</a> <br>
                    </ul>

                    <!-- Main Heading -->
                    <div class="heading-block margin-bottom-20 margin-top-30">
                        <h3 class="text-transform-none letter-space-0">Follow Us</h3>
                    </div>
                    <div class="social-links">
                        <ul>
                            <a href="https://www.facebook.com/lordscustomtailors"" target="_blank"><i class="fa fa-facebook"></i></a> 
                            <a href="https://twitter.com/lordscustomtai1" target="_blank"><i class="fa fa-twitter"></i></a> 
                            <a href="https://www.instagram.com/lordscustomtailors/" target="_blank"><i class="fa fa-instagram"></i></a> 
                            <a href="" target="_blank"><i class="fa fa-tripadvisor"></i></a> 
                            <a href="https://www.pinterest.com/lordscustomtailors/" target="_blank"><i class="fa fa-pinterest"></i></a> 

                        </ul>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-sm-6">
                    <!-- Main Heading -->
                    <div class="heading-block left-align margin-bottom-30">
                        <h3 class="text-transform-none letter-space-0">Contact Us</h3>
                    </div>

                    <div class="contact">               
                        <!-- Success Msg -->
                        <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>              
                        <!-- FORM -->
                        <form role="form" id="contact_form" action="#" class="contact-form" method="post" >
                            <ul class="row nolist-style">
                                <li class="col-sm-6">
                                    <label>
                                        <input type="text" class="form-control" name="last_name" id="name" placeholder="Last Name" required="">
                                    </label>
                                </li>
                                <li class="col-sm-6 ">
                                    <label>
                                        <input type="text" class="form-control" name="first_name" id="name" placeholder="First Name" required="">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" required="">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>
                                        <input type="text" class="form-control" name="contact" id="company" placeholder="Contact No.">
                                    </label>
                                </li>

                                <li class="col-sm-12">
                                    <label>
                                        <select name="subject" placeholder="Subject" class="form-control" style="  height: 50px;
                                                background: #fafafa; " required="">
                                            <option>Enquiry</option>
                                            <option>Send Swatches</option>
                                            <option>Feedback</option>
                                            <option>Appointment</option>
                                            <option>Alteration</option> 
                                        </select>
                                    </label>
                                </li>


                                <li class="col-sm-12">
                                    <label>
                                        <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required=""></textarea>
                                    </label>
                                </li>
                                <li class="col-sm-12 text-left">
                                    <button type="submit"  class="btn btn-inverse" name="sendmessage" value="sendmessage" >SUBMIT</button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
            <div class="goldline2 " style="margin-bottom: 30px;"></div>
        </div>

    </section>
</div>

<?php
$this->load->view('layout/footer');
?>