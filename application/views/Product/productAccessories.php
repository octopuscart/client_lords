<?php
$this->load->view('layout/header');
?>
<?php
$linklist = [];




$image1 = "";
$image2 = "";
?>

<div style="opacity: 0;position: fixed;">
    {{gitem_price = "0"}}
    {{showmodel = 1}}
</div>

<style type="text/css">


    .textoverflow {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        float: left;
        width: 97%;
    }

    .tt-dropdown-menu,
    .gist {
        text-align: left;
    }




    /*
     site theme 
     ---------- 
    */

    .typeahead,
    .tt-query,
    .tt-hint {
        width: 100%; 
        height: 100% !important;
        padding: 8px 12px;

        line-height: 26px;
        border: 2px solid #ccc;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        border-radius: 8px;
        outline: none;
    }

    .typeahead {
        background-color: #fff;
    }

    .typeahead:focus {
        border: 2px solid #0097cf;
    }

    .tt-query {
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    }

    .tt-hint {
        color: #999
    }
    .twitter-typeahead{
        width:100% !important;
    }


    .tt-dropdown-menu {
        width: 98%; 
        margin-left: 6px;
        padding: 8px 0;
        background-color: #fff  !important;
        border: 1px solid #ccc  !important;
        border: 1px solid rgba(0, 0, 0, 0.2)  !important;

        -webkit-border-bottom-left-radius: 8px;
        -moz-border-bottom-left-radius: 8px;
        border-bottom-left-radius: 8px;

        -webkit-border-bottom-right-radius: 8px;
        -moz-border-bottom-right-radius: 8px;
        border-bottom-right-radius: 8px;



        -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
        -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
        box-shadow: 0 5px 10px rgba(0,0,0,.2);
    }

    .tt-dropdown-menu img{
        height: 33px;
        width: 33px;
        border-radius: 50%;
        border: 2px solid #D8D8D8;
    }

    .tt-suggestion {
        padding: 3px 20px;


        line-height: 24px;
    }

    .tt-suggestion.tt-cursor {
        color: #fff;
        background-color: #0097cf;

    }

    .tt-suggestion p {
        margin: 0;
    }


    .typeaheadgroup{

        margin: 0px;
        padding: 3px 5px;
        float: left;
        width: 100%;
        background: #E0E0E0;
        color: #000000;
        border-bottom: 1px solid #ccc;

    }

    .typeahead,
    .tt-query,
    .tt-hint {
        width: 396px;
        height: 30px;
        padding: 8px 12px;
        font-size: 15px;
        line-height: 30px;
        border: 2px solid #ccc;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        border-radius: 8px;
        outline: none;
    }

    .typeahead {
        background-color: #fff;
    }

    .typeahead:focus {
        border: 2px solid #000000;
    }

    .tt-query {
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    }

    .tt-hint {
        color: #999
    }

    .tt-menu {

        text-align: left;
        padding: 8px 0;
        background-color: #fff;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, 0.2);
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
        -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
        box-shadow: 0 5px 10px rgba(0,0,0,.2);
    }

    .tt-suggestion {
        padding: 3px 20px;
        font-size: 15px;
        line-height: 24px;
    }

    .tt-suggestion:hover {
        cursor: pointer;
        color: #000;
        background-color: #EAEAEA;
    }

    .tt-suggestion.tt-cursor {
        cursor: pointer;
        color: #000;
        background-color: #EAEAEA;

    }
    .tt-suggestion.tt-cursor:hover {
        color: #fff !important;
    }

    .tt_select_link:hover{
        color: #fff !important;
    }

    .tt-suggestion p {
        margin: 0;
    }

    .gist {
        font-size: 14px;
    }
</style>
<style>
    .page_navigation a {
        padding: 5px 10px;
        border: 1px solid #000;
        margin: 5px;
        background: #000;
        color: white;
    }
    .page_navigation a.active_page {
        padding: 5px 10px;
        border: 1px solid #000;
        margin: 5px;
        background: #fff;
        color: black;
    }

    .colorblock{

    }


    .product-box1 .product-img-holder {




    }



    .product-box1{




    }
    article.shop-artical1 {
        margin-bottom: 30px;

        padding-bottom: 10px;

    }

    .shop-content .btn {
        background: #f2b632;
        display: inline-block;
        font-size: 12px;
        text-transform: uppercase;
        padding: 10px 10px;
        font-weight: bold;
        border-radius: 0px;
        letter-spacing: 0px;
        line-height: 14px;
        color: #010101;
        position: relative;
        overflow: hidden;
        -webkit-transition: all 0.4s ease-in-out;
        -moz-transition: all 0.4s ease-in-out;
        -o-transition: all 0.4s ease-in-out;
        -ms-transition: all 0.4s ease-in-out;
        transition: all 0.4s ease-in-out;
        font-family: 'Raleway', sans-serif;
    }


    .producthoverImage{
        background-size: 80%!important;
        background-position: center!important;
        background-repeat: no-repeat!important;
        opacity: 0;
        position: absolute;
        top: 0;
        left:0;
        background-color: #fff!important;
    }



    .producthoverImage:hover{
        opacity: 1;

    }
    .mainProductImage:hover{
        opacity: 0!important;
    }

</style>



<!-- Slider -->
<section class="sub-bnr" data-stellar-background-ratio="0.5" style="    min-height: 50px;">
    <div class="position-center-center">
        <div class="container">
            <h4 style="    text-transform: inherit;"><?php
                echo "";
                ?> Accessories</h4>

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url("/"); ?>">Home</a></li>
                <?php echo count($linklist) ? "<b class='barcomb-list'>/</b>" : ''; ?>
                <?php
                echo implode("<b class='barcomb-list'>/</b>", $linklist)
                ?>
            </ol>
        </div>
    </div>
</section>

<!-- Content -->
<div id="content" > 
    <!-- Shop Content -->
    <div class="shop-content pad-t-b-60" >
        <div class="container" >
            <div class="row"> 
                <!-- Main Shop Itesm -->          
                <div class="col-md-12"> 
                    <div class="" > 
                        <div class="row products-container content" >
                            <!-- Item -->
                            <?php
                            foreach ($products as $key => $value) {
                                ?>
                                <div class="col-sm-3">
                                    <article class="shop-artical1 accessoriesprodut"> 
                                        <img class="img-responsive " src="<?php echo base_url() . 'assets/images/accessories/' . $value['image']; ?>" alt="product" >
                                        <div class="info"> 
                                            <a href="#." style="width: 100%; float: left;">
                                                <?php echo $value['title']; ?>
                                                <br>
                                                <span style="    padding: 0px 10px;font-size: 11px;" class="textoverflow" title="">

                                                </span>
                                            </a> 
                                            <span class="price">{{ <?php echo $value['price']; ?>|currency:"<?php echo globle_currency; ?> "}}</span> 

                                            <br/>
                                            <a href="" class="btn  btn-default" style="font-size:12px;" title="Customize this fabric">Add To Cart
                                            </a> 
                                            <a href="#" class="btn  btn-default" style="font-size: 12px;" title="Look More" ng-click="fabricsZoomModel(product)"><i class="fa fa-eye"></i>
                                            </a> 
                                        </div>
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
    </div>
</div>
<!-- End Content --> 


<?php
$this->load->view('layout/footer');
?>

<script src="<?php echo base_url(); ?>assets/theme/js/jquery.pajinate.min.js"></script>


