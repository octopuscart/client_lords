<?php
$this->load->view('layout/header');

$stylearray1 = [
    array(
        "images" => "andrew.jpg",
        "details" => "Presenting my Executive Presence webinar this morning, whilst 'dressed for success' by Jason Mirpuri of Lord's Custom Tailors",
        "tag" => "Andrew Bryant (Singapore)"
    ),
    array(
        "images" => "colonelmichal.jpg",
        "details" => "Colonel Michael Daily from San Diego celebrating his 65th birthday in style dressed up in his classic charcoal grey pinstripe suit by Lord's Custom Tailors. Happy Birthday Colonel, you look sharp!",
        "tag" => "Colonel Michael Daily (San Diego)"
    ),
    array(
        "images" => "avish.jpg",
        "details" => "About to keynote a conference. Wearing my new suit from Lord's Custom Tailors. Thanks Jason Mirpuri!",
        "tag" => "Avish Parashar (Philadelphia)"
    ),
    array(
        "images" => "joeurcillo‎.jpg",
        "details" => "Jason Mirpuri is a Custom Tailor God! Opened the package, put it on and PERFECT. I don’t even care about the shipping wrinkles... I am not taking this off!!",
        "tag" => "‎Joe Curcillo (Harrisburg)"
    ),
	array(
        "images" => "frank.jpg",
        "details" =>'Fredrik Haren of Singapore "Love the suit! Love the service!"',
        "tag" => "‎Fredrik Haren (Singapore)"
    ),
];
$stylearray2 = [
    array(
        "images" => "joshpaulen.jpg",
        "details" => "Josh Paulen from San Francisco has good taste. Not only did he make a wise choice with his new bride, he chose to wear a tailored suit from Lord's Custom Tailors on his wedding day. <br/>
Jason Mirpuri literally travels the world fitting stylish men & women in beautiful suits just like this. ",
        "tag" => "Josh Paulen (San Francisco)"
    ),
    array(
        "images" => "shairly.jpg",
        "details" => "Thank you so much to Jason Mirpuri from Lord's Custom Tailors in Hong Kong. Jason, I love the jacket you made for me. The material and the print is just fabulous, and it fits perfectly. THANK YOU so much!!",
        "tag" => "Shirley Taylor (Singapore)"
    ),
    array(
        "images" => "acouple.jpg",
        "details" => "A couple of snappy dressers at the CAPS (Canadian Association of Professional Speakers) Convention. Brian Walter, Jason Mirpuri & Steve Lowell",
        "tag" => "Canadian Association of Professional Speakers"
    ),
    array(
        "images" => "caroal.jpg",
        "details" => "Carole Spiers from the UK loves her new jacket. Jason Mirpuri you’ve done another great job.
<br/>
Great jacket has just arrived from Lord’s Custom Taylors. Perfect fit and exactly what I wanted. Great service and would highly recommend them to others.",
        "tag" => "Carole Spiers (UK)"
    ),
];
?>

<style>
    .blog-posts article {
    margin-bottom: 70px;
       border: 1px solid #85808061;

}
.news-post p {
    padding: 10px;
        margin: 0;
}
.news-post a {
    padding: 10px;
        margin-top: -11px!important;
}
</style>

<!-- Slider -->
<section class="sub-bnr" data-stellar-background-ratio="0.5" style="min-height: 50px;    background: #333333;">
    <div class="position-center-center">
        <div class="container">
            <h4>Our Clients</h4>

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url("/"); ?>">Home</a></li>
                <li><a href="<?php echo site_url("our-clients"); ?>">Our Clients</a></li>

            </ol>
        </div>
    </div>
</section>



<section class="new-main blog-posts pad-t-b-60">
    <div class="container"> 

        <!-- News Post -->
        <div class="news-post" id="container">
            <div class="row"> 
                <div class="row">
                    <div class="col-md-6">
                        <?php
                        foreach ($stylearray1 as $key => $value) {
                            ?>    

                            <!-- POST -->
                            <div class="col-md-12 ">
                                <article > <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/customers/<?php echo $value['images']; ?>" alt="" >
                                
                                    <p ><?php echo $value['details']; ?></p>
                                   <a href="#." class="red-more"><?php echo $value['tag']; ?></a>
                                </article>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="col-md-6">
                        <?php
                        foreach ($stylearray2 as $key => $value) {
                            ?>    

                            <div class="col-md-12 ">
                                <article > <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/customers/<?php echo $value['images']; ?>" alt="" >
                                
                                    <p ><?php echo $value['details']; ?></p>
                                   <a href="#." class="red-more"><?php echo $value['tag']; ?></a>
                                </article>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>




            </div>
        </div>


    </div>

</section>

<script>

    App.controller('lookBookController', function ($scope, $http, $timeout, $interval) {
        $scope.styleArray = {"title": "", "loading": 1, "style_list": [], "enquery_list": {}};
        $timeout(function () {
            new CBPGridGallery(document.getElementById('grid-gallery'), {itemsCount: 20});
        }, 500)



    })

</script>

<?php
$this->load->view('layout/footer');
?>