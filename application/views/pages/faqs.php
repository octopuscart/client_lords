<?php
$this->load->view('layout/header');
?>

<?php
$temp = array(
    "Do you have an online ordering system?" => "The word bespoke means made-to-order or custom-made. It is most known for its centuries-old relationship with tailor-made suits.",
    "What is the best way to provide special instructions?" => "We ask for all our clients to please be as clear, detailed and succinct, as possible when provide additional instructions. You may write to us on the order form copy, or on a separate worksheet, or even email us. In all worksheets or email copies, please be sure to clearly display your dealer code, and the order number or client name the information relates to.",
    "Can you create a garment from a digital picture? " => "Yes, we sure can. Websites, magazine or newspaper cuttings, and even copying sample garments. This is certainly possible for our highly skilled group of tailors. We request dealers NOT to fax in any such materials since several details are not clearly visible on fax copies. We ask all our dealers to email or mail us the picture or sample garment to replicate styling from.",
    "Can you ship my order internationally? " => "Yes, we can ship orders to anywhere in the world. Delivery times vary by region.",
    "How do you handle alterations & repairs?" => "Clients may send back the garment for alteration or repair to our customer service office, along with a copy of the repair form. Once our factory receives the repair, our alterations department will begin working on it and deliver to our clients within 2 weeks. We try our best to ensure repairs are done in a prompt and quick timeframe.",
    "Can I create my own signature look? " => "Yes. Several clients have specific styles, designs, looks that they create to help build the company image or brand. We can help establish and setup a program to create a signature look on all orders for any clients.",
    "What is your turn-around time?" => "All orders are made and delivered within 3 – 4 weeks depending how busy the factory is at any given point.",
    "Do you accept rush orders?" => "Yes. Rush orders are delivered within 2 weeks. For time-specific or time-sensitive orders, we cannot promise on-time delivery, but can guarantee maximum of 2-week turnaround. All such orders need approval from our customer service team so we may check to see if factory has capacity at that point in time, or not.",
    "Do you keep patterns on file for repeat orders?" => "Yes, all patterns are kept on file for repeat orders.",
    "What forms of payment do you accept?" => "Clients can pay their invoices either by Credit Card, PayPal and Cash",
    "Any further questions?" => "Feel free to contact us with any further questions you may have.",
);
?>



<div id="content"> 

    <!-- SERVICES -->
    <section class="what-we pad-t-b-30">
        <div class="">



            <div class="row"> 

                <div class="main-page-section half_left_layout" style="    background: white;">
                    <div class="main-half-layout3 half_left_layout studio-bg" style="background: url(<?php echo base_url(); ?>assets/images/faqback.jpg);background-repeat: no-repeat;background-size: cover;background-position:center"></div>

                    <div class="main-half-layout-container half_left_layout" style="padding: 40px 0px;">
                        <!-- Heading -->
                        <div class="heading-block " style="margin-bottom: 0px;text-align: left;">

                            <h3>FAQ's</h3>

                            <div class="row">
                                <!--accordion-->
                                <div class="margin-top-30">
                                    <div class="accordion" style=''>

                                        <?php
                                        foreach ($temp as $key => $value) {
                                            ?>    

                                            <dl class="accordion_item  r_corners wrapper m_bottom_5 tr_all" style='background: #ffffffcf;
                                                border-radius: 5px;'>
                                                <dt class="accordion_link relative color_dark tr_all"><?php echo $key; ?>

                                                </dt>
                                                <dd class="fw_light color_dark" style='background: #fff'>
                                                    <?php echo $value; ?>
                                                </dd>
                                            </dl>

                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
    </section>

</div>




<?php
$this->load->view('layout/footer');
?>