<?php
$this->load->view('layout/header');
?>
<style>
    .product_image_back {
        background-size: contain!important;
        background-repeat: no-repeat!important;
        height: 300px!important;
        background-position-x: center!important;
        background-position-y: center!important;
    }

    .productblock{
        padding: 10px;
        border: 1px solid rgb(255, 214, 88);
        margin-bottom: 30px;
    }
</style>
<!-- Slider -->
<section class="home-slider">
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>






                <!-- Slider 2 -->
                <li data-transition="random" data-slotamount="7"> 
                    <img src="<?php echo base_url(); ?>assets/theme/images/slides/slider1.jpg" data-bgposition="center center" alt="" />
                    <div class="overlay"></div>

                    <div class="tp-caption font-montserrat customin tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center" 
                         data-voffset="-100"
                         data-speed="700" 
                         data-start="1000" 
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #fff; font-size: 40px; text-transform: uppercase; font-weight: 900; letter-spacing:3px;"> Leading Bespoke Tailor In Hong Kong </div>



                    <!-- Layer -->
                    <div class="tp-caption sft tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" data-hoffset="0" 
                         data-y="center" data-voffset="100" 
                         data-speed="700" 
                         data-start="2400"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"> <a href="<?php echo site_url("Product/ProductList/2/0")?>" class="btn btn-1">SHOP NOW</a> </div>
                </li>




                <!-- Slider 4 -->
                <li data-transition="random" data-slotamount="7"> 
                    <img src="<?php echo base_url(); ?>assets/theme/images/slides/slider2.jpg" >                    <!-- Layer -->
                    <div class="tp-caption font-montserrat customin tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center" 
                         data-voffset="-100"
                         data-speed="700" 
                         data-start="1000" 
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #fff; font-size: 60px; text-transform: uppercase; font-weight: 900; letter-spacing:3px;"> NEW ARRIVAL </div>

                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme  font-playfair text-center rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center" 
                         data-voffset="-20"
                         data-speed="700" 
                         data-start="1700" 
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #fff; font-size: 18px; line-height:36px; font-weight: 500; letter-spacing:0px;">We Have Worlds Best Italian Fabrics.<br></div>

                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center"
                         data-voffset="100"
                         data-speed="700" 
                         data-start="2400"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="z-index: 10;"> <a href="<?php echo site_url("Product/ProductList/2/0")?>" class="btn">Shop Now</a> &nbsp; &nbsp; &nbsp; &nbsp; <a href="<?php echo site_url("appointment")?>" class="btn btn-1">Discover</a> </div>
                </li>


                <!-- Slider 4 -->
                <li data-transition="random" data-slotamount="7"> 
                    <img src="<?php echo base_url(); ?>assets/theme/images/slides/slider3.jpg" >                    <!-- Layer -->
                    <!-- Layer -->
                    <div class="tp-caption sft tp-resizeme font-montserrat rs-parallaxlevel-4" 
                         data-x="center" data-hoffset="0" 
                         data-y="center" data-voffset="0" 
                         data-speed="700" 
                         data-start="1700" 
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #fff; font-size: 25px; text-transform: uppercase; font-weight: bold;  letter-spacing:3px;"> Worlds Best Italian Fabrics </div>

                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme  font-playfair text-center rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center" 
                         data-voffset="-20"
                         data-speed="700" 
                         data-start="1700" 
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #fff; font-size: 18px; line-height:36px; font-weight: 500; letter-spacing:0px;">We Have Worlds Best Italian Fabrics.<br></div>

                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center"
                         data-voffset="100"
                         data-speed="700" 
                         data-start="2400"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="z-index: 10;"> <a href="<?php echo site_url("Product/ProductList/2/0")?>" class="btn">Shop Now</a> &nbsp; &nbsp; &nbsp; &nbsp; <a href="<?php echo site_url("appointment")?>" class="btn btn-1">Discover</a> </div>
                </li>

                <!-- Slider 3 -->
                <li data-transition="random" data-slotamount="7"> 
                    <img src="<?php echo base_url(); ?>assets/theme/images/slides/slider4.jpg" >                       <!-- Layer -->
                    <div class="tp-caption font-montserrat customin tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center" 
                         data-voffset="-100"
                         data-speed="700" 
                         data-start="1000" 
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #fff; font-size: 60px; text-transform: uppercase; font-weight: 900; letter-spacing:3px;"> NEW ARRIVAL </div>

                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme  font-playfair text-center rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center" 
                         data-voffset="-20"
                         data-speed="700" 
                         data-start="1700" 
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #fff; font-size: 18px; line-height:36px; font-weight: 500; letter-spacing:0px;">We Have Worlds Best Italian Fabrics.<br></div>

                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center"
                         data-voffset="100"
                         data-speed="700" 
                         data-start="2400"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="z-index: 10;"> <a href="<?php echo site_url("Product/ProductList/2/0")?>" class="btn">Shop Now</a> &nbsp; &nbsp; &nbsp; &nbsp; <a href="<?php echo site_url("appointment")?>" class="btn btn-1">Discover</a> </div>
                </li>




            </ul>
        </div>
    </div>
</section>

<div style="clear: both"></div>




<div class="main-page-section half_left_layout">
    <div class="main-half-layout half_left_layout studio-bg"></div>

    <!-- Right Content -->
    <div class="main-half-layout-container half_left_layout">
        <div class="about-us-con">
            <div class="heading">
                <h3 class="v-hr">Who We Are</h3>
            </div>
            <p>
                Lord’s Custom Tailors is a Hong Kong founded tailoring company dedicated to the traditional workmanship and tailoring styles based from traditional hand creation of custom tailoring. We are makers of fine personalized luxury custom made formal wear to fit men and women with impeccable looks for all seasons.            
            </p>
            <p>
                We are only as good as the expert tailors who create garments and satisfied customers who continue to support our services. We aim to provide our customers with flexible style choices by customizing complete looks for every occasion in mind so the result of your personal style assessment plays a part in your custom made clothes. Your choice of fabric from our extensive collection combined with your personal measurements and style assessment make up your very own unique garment.            </p>
            <div class="skills padding-top-30"> 

                <!-- Skills Bars -->
                <div class="pricing">
                    <div class="row"> 

                        <!-- Basic -->
                        <div class="col-md-12">
                            <article class="animate fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                                <div class="price-head"> <span class="plan-tittle">Why Choose Us</span></div>
                                <ul>
                                    <li>Shanghainese Production <i class="fa fa-check"></i></li>
                                    <li>Can Produce In 1 Day<i class="fa fa-check"></i></li>
                                    <li>Ready Stock Luxury Fabrics<i class="fa fa-check"></i></li>
                                    <li>Customised Service At Your Doorstep <i class="fa fa-check"></i></li>
                                </ul>
                                <a href="<?php echo site_url("Product/ProductList/2/0")?>" class="btn btn-inverse">Shop Now</a> </article>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

</div>




<div style="clear: both"></div>
<!-- Content -->
<div id="content" class="home-shop"> 






    <!-- Portfolio -->
    <section class="our-main-ser port-wrap pad-t-b-60 padding-bottom-0">
        <div class="container">

            <!-- Heading -->
            <div class="heading-block  margin-bottom-20">
                <div class="heading-block margin-bottom-30">
                    <h3>We Are Tailoring Artists</h3>
                    <hr>
                </div>
                <div class="intro-small col-md-8 center-auto">
                    <p>
                        We are makers of fine personalized luxury custom made formal wear to fit men and women with impeccable looks for all seasons.          </p>
                </div>
            </div>






            <!-- OUR SERVICES LIST -->
            <div class="nolist-style">
                <ul class="row">

                    <!-- OUR SERVICES LIST -->
                    <li class="col-sm-3"> <i class="flaticon-coat animate fadeInUp" data-wow-delay="0.4s"></i>
                        <h6>Create Own Style</h6>
                        <p>Our fabrics are sourced from only a handful of mills across the world. Choose any fabric and create own style.</p>
                    </li>

                    <!-- Unlimited Features -->
                    <li class="col-sm-3"> <i class="fa fa-list-alt animate fadeInUp" data-wow-delay="0.6s"></i>
                        <h6>Get Size</h6>
                        <p>Let us fit and measure you up. We start working on your shirts, suits or jacket once an order is received.</p>
                    </li>

                    <!-- Ultra Responsive -->
                    <li class="col-sm-3"> <i class="fa fa-cut animate fadeInUp" data-wow-delay="0.4s"></i>
                        <h6>Cut to Create</h6>
                        <p>Our experienced shanghainese tailor cut and make your new dress. We use only the finest raw materials when putting together in your suit.</p>
                    </li>

                    <!-- Discuss Idea -->
                    <li class="col-sm-3"> <i class="fa fa-truck animate fadeInUp" data-wow-delay="0.6s"></i>
                        <h6>Delivery</h6>
                        <p>We can ship orders to anywhere in the world. Delivery with guaranteed best fit.</p>
                    </li>


                </ul>
            </div>

    </section>

    <div class="items no-space col-4 popup-gallery"> 

        <?php
        $stylebook = ['1.jpg', '2.jpg', '3.jpg', '4.jpg'];
        foreach ($stylebook as $key => $value) {
            ?>


            <div class="cbp-item portfolio-item web mob-app photo ui">
                <article>
                    <div class="portfolio-image"> <img alt="" src="<?php echo base_url(); ?>assets/images/style/<?php echo $value; ?>">

                    </div>
                </article>
            </div>

            <?php
        }
        ?>

    </div>










    <div style="clear: both"></div>



    <!-- OUR SERVICES -->
    <section class="" style="    padding: 0;margin-top: 30px;
             background: none;">
        <div class="container margin-bottom-00"> 

            <!-- Heading -->
            <div class="heading-block " style="    margin-bottom: 10px;">
                <h3>our Best Brands</h3>
                <hr>
            </div>
            <div class="intro-small col-md-9 center-auto margin-bottom-0">
                <p>
                    We will offer you with world-famous brands and 6000 kinds of different fabrics.                </p>
            </div>
            <?php
            $brandarray = ['loropiana.jpg', 'reda.jpg', 'zegna.jpg', 'hollandsherry.jpg', 'thomasmason.jpg', 'vbc.jpg'];
            ?>
            <div class="slide-5 text-center">
                <?php
                foreach ($brandarray as $key => $value) {
                    ?>
                    <div><img class="brand_image_bottom"  src="<?php echo base_url(); ?>assets/brand/<?php echo $value; ?>" alt="" ></div>

                    <?php
                }
                ?>

            </div>


            <div class="goldline2 " style="margin-bottom: 30px;"></div>
            <div style="clear: both"></div>
        </div>


    </section>


    <!-- Testimonial -->
    <section class="testimonial bg-info" data-stellar-background-ratio="0.5" style="padding: 30px 0px">
        <div class="container"> 

            <!-- Heading -->
            <div class="heading-block white">
                <h3>Testimonial</h3>
                <hr>
            </div>

            <!-- Slider -->
            <div class="slider-sec">
                <div id="testi-slide"> 

                    <?php
                    $client_testimoni = [
                        array(
                            "testimoni" => "I bought several affordable custom-made suits from Jason and have been very happy with the results. I find myself so much more comfortable and confident in a suit that is made just for me and fits me perfectly. Jason offers a very large choice of fabrics, cuts, linings, colors, buttons, and other features that make a suit totally unique",
                            "name" => "Olivier Taupin",
                            "lable" => "Seattle, USA",
                        ),
                        array(
                            "testimoni" => "Jason has overcome my skepticism regarding a remotely-located tailor. His customer service and attention to detail has been impeccable, as has been the quality and fit of the custom clothing crafted for me. I appreciate the personalized, face-to-face service he provides, as well as his family's patience for a demanding global travel schedule that enables such service.",
                            "name" => "Matt Greene",
                            "lable" => "Colorado Springs, USA",
                        ),
                        array(
                            'testimoni' => "I have just received my new suit from Jason at Lord's Custom Tailors in Hong Kong. Here's the best bit, I live in Brisbane, Australia, I met Jason in Singapore where he measured me for my tailored suit, helped me choose the best fabrics and design and also choose a great shirt to be made to go with the suit. Then I sat back and just a few weeks later the suit and shirt arrived by courier and I love it! They fit perfectly, look great and I am very happy with the service. Jason travels to Australia regularly to meet clients and take orders for suits and shirts. If you are looking for a quality tailor that gives great service and delivers a quality product, Jason from Lord's Custom tailors is the guy for you.",
                            "name" => "Lindsay Adams",
                            "lable" => "Brisbane, Australia",
                        )
                    ];
                    foreach ($client_testimoni as $key => $value) {
                        ?>
                        <!-- Slide -->
                        <div class="item">
                            <div class="tesi-text">
                                <div class="avatar">
                                    <img src="<?php echo base_url(); ?>assets/theme/images/comments-avatar-2.jpg" alt="" > 
                                </div>
                                <p><?php echo $value['testimoni']; ?></p>
                                <h6>- <?php echo $value['name']; ?> -</h6>
                                <span><?php echo $value['lable']; ?></span>
                            </div>
                        </div>

                        <?php
                    }
                    ?>
                    <div style="clear: both"></div>


                </div>
            </div>
        </div>
    </section>


    <div style="clear: both"></div>





</div>
<!-- End Content --> 



<style>
    .booking_text{
        float: left;
        font-weight: 500;
        font-size: 23px;
        color: white;
    }



    .appointment_modal_texttwocontry {
        font-size: 35px;
        /* margin-top: -60px; */
        /* margin-bottom: 16px; */
        padding: 85px 20px;
        bottom: 0px;
        color: white;
        width: 100%;
        background: #0000009c;
        /* margin-top: 70px; */
        text-shadow: 3px 2px 2px #000;
    }

    .appointment_modal_text {
        font-size: 35px;
        height: 202px;
        position: absolute;
        /* margin-top: -60px; */
        /* margin-bottom: 16px; */
        padding: 20px;
        top: 0px;
        color: white;
        /* background: #00000087; */
        width: 100%;
        margin-top: -1px;
        box-shadow: inset 0px 114px 66px -57px #000000;
        hadow: inset 0px 21px 62px #000000;
    }

    .twocoutry {
        display: block;

        width: 100%;

        background-position: -266px -119px !important;
    }


@media (max-width: 767px){
    .appointment_modal_text {
        font-size: 23px;
    }
}
</style>


<div class="modal fade" id="appointmentmodel" tabindex="-1" role="dialog" style="z-index: 20000000">
    <div class="modal-dialog" role="document">
        <div class="modal-content" >

            <div class="modal-body" style="padding: 0px;">
                <img src="<?php echo base_url(); ?>assets/images/country/usa.jpg" alt="" style="width: 100%">
                <h2 class="fw_light color_black appointment_modal_text" >United States Tour 2019
                    <br/><p style="    color: white;
                            font-size: 16px;
                            ">(14 June - 22 June 2019)</p>
                </h2>

            </div>
            <div class="modal-footer" style="    position: absolute;
                 bottom: 2px;
                 box-shadow: inset 0px -35px 46px 13px #000000;
                 width: 100%;
                 border: none;">
                <h3 class="fw_light booking_text" style=""> Make An Appointment</h3>
                <a href="<?php echo site_url("booking"); ?>" class="btn btn-danger" style="    margin-top: 11px;">Book Now</a>
                <button type="button" class="btn btn-default" data-dismiss="modal" style="    margin-top: 11px;">Close</button>
            </div>



        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php
$this->load->view('layout/footer');
?>
<script>

    $(function () {
        $('#appointmentmodel').modal('show');
    });
</script>