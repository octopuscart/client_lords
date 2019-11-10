<?php
$this->load->view('layout/header');
?>
<?php
$linklist = [];
foreach ($categorie_parent as $key => $value) {
    $cattitle = $value['category_name'];
    $catid = $value['id'];
    $liobj = "<li><a href='" . site_url("Product/ProductList/" . $catid) . "'>$cattitle</a></li>";
    array_push($linklist, $liobj);
}



$image1 = "";
$image2 = "";
?>

<div style="opacity: 0;position: fixed;">
    {{gitem_price = 0}}
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



        <?php
        switch ($custom_id) {
            case "1":
                ?>
                min-height: 260px;
                <?php
                break;
            case "2":
                ?>
                min-height: 390px;
                <?php
                break;
            case "5":
                ?>
                min-height: 390px;
                <?php
                break;
            case "3":
                ?>
                min-height: 262px;
                <?php
                break;
            case "4":
                ?>
                min-height: 390px;
                <?php
                break;
            default:
                ?>
                min-height: 260px;<?php
        }
        ?>
    }



    .product-box1{



        <?php
        switch ($custom_id) {
            case "1":
                ?>
                min-height: 260px;
                <?php
                break;
            case "2":
                ?>
                min-height: 520px;
                <?php
                break;
            case "5":
                ?>
                min-height: 520px;
                <?php
                break;
            case "3":
                ?>
                min-height: 262px;
                <?php
                break;
            case "4":
                ?>
                min-height: 520px;
                <?php
                break;
            default:
                ?>
                min-height: 260px;<?php
        }
        ?>
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
                echo $custom_item;
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
<div id="content" ng-controller="ProductControllerAccessories"> 

    <!-- Shop Content -->
    <div class="shop-content pad-t-b-60" >
        <div class="container" >
            <div class="row"> 

      
                

                <!-- Main Shop Itesm -->          
                <div class="col-md-12"> 
                    


                    <div id="content1"  ng-if="productProcess.showstate == 0" style="padding: 100px 0px;"> 

                        <!-- Tesm Text -->
                        <section class="error-page text-center pad-t-b-130">
                            <div class=""> 

                                <!-- Heading -->
                                <h1 style="font-size: 40px;">Loading...</h1>
                            </div>
                        </section>

                    </div>

                    <div id="content1"  ng-if="productProcess.finalProducts.length == 0" style="padding: 100px 0px;"> 

                        <!-- Tesm Text -->
                        <section class="error-page text-center pad-t-b-130" ng-if="productProcess.showstate == 4">
                            <div class=""> 

                                <!-- Heading -->
                                <h1 style="font-size: 40px;">Coming Soon...</h1>
                            </div>
                        </section>

                    </div>

                    <!-- SHOWING INFO -->




                    <div class="" > 


                        <div class="row products-container content" ng-if="productProcess.showstate == 2">
                            <!-- Item -->
                            <div class="col-sm-3"  ng-repeat="(k, product) in productProcess.finalProducts">
                                <article class="shop-artical1"> 
<!--                                    <div class="item-hover1" style="background: url(<?php echo custome_image_server; ?>/suits/fabrics/{{product.folder}}.jpg);    background-size: 139%;
                                         background-color: white;height: 400px;width: auto;
                                         background-repeat: no-repeat;"> 
                                    </div>-->


                                    <img class="img-responsive mainImage" src="<?php echo custome_image_server; ?>/suits/fabrics/{{product.folder}}.jpg" alt="product" style="">




                                    <div class="info"> 
                                        <a href="#." style="width: 100%;
                                           float: left;">
                                            {{product.title}}
                                            <br>
                                            <span style="    padding: 0px 10px;
                                                  font-size: 11px;" class="textoverflow" title="{{product.short_description}}">{{product.short_description}}</span>
                                        </a> 

                            
                                       

                                        <span class="price">{{product.price|currency:"<?php echo globle_currency; ?> "}}</span> 

                                        <br/>

                                        <button class="btn  btn-default" style="font-size:12px;" title="Customize this fabric" ng-click="addToCart(product.id, 1, 'accessories')">Add To Cart</button> 
                                       
                                    </div>
                                </article>
                            </div>

                        </div>


                    </div>



                    <div id="content"  ng-if="productProcess.state == 0"> 
                        <div ng-if="checkproduct == 0">
                            <!-- Tesm Text -->
                            <section class="error-page text-center pad-t-b-130">
                                <div class="1 "> 

                                    <!-- Heading -->
                                    <h1 style="font-size: 40px">No Product Found</h1>
                                    <p>Products Will Comming Soon</p>
                                    <hr class="dotted">
                                    <a href="<?php echo site_url(); ?>" class="woocommerce-Button button btn-shop-now-fill">BACK TO HOME</a>
                                </div>
                            </section>
                        </div>
                    </div>






                    <div class="col-md-12" id="paging_container1">
                        <div class="showing-info">
                            <p class="text-center"><span class="info_text ">Showing {0}-{1} of {2} results</span></p>
                        </div>
                        <div class="row products-container content" >
                            <!-- Item -->
                            <div class="col-sm-4 animated zoomIn"  ng-repeat="(k, product) in productProcess.products">
                            </div>
                        </div>
                        <center>
                            <div class="page_navigation"></div>
                        </center>
                        <div style="clear: both"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal  fade" id="productcustome" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="    z-index: 20000000;">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel" style="font-size: 15px">
                        <?php
                        echo $custom_item;
                        ?>
                    </h4>
                </div>



                <!-- Cart Details -->
                <div class="modal-body " style="    padding: 0px 15px;">
                    <div class="custom_block_item">


                        <div class="row cart-details" >
                            <div class="">

                                <?php
                                switch ($custom_id) {

                                    case '1':
                                        ?>

                                        <img class="img-responsive " src="<?php echo custome_image_server; ?>/shirt/output/{{selecteProduct.selected.folder}}/fabric20001.png"  alt="product" >

                                    <?php
                                    default:
                                        ?>

                                        <img class="img-responsive " src="<?php echo custome_image_server; ?>/jacket/output/{{selecteProduct.selected.folder}}/fabric20001.png"  alt="product" >

                                    <?php
                                }
                                ?>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="modal-footer" >
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

                <?php
                ?>




            </div>
        </div>
    </div>
</div>
<!-- End Content --> 






<script>
    var category_id = <?php echo $category; ?>;
    var custom_id = <?php echo $custom_id; ?>;
    var brandname = "<?php echo $brand_name; ?>";
    var searchUrlProduct = "<?php echo site_url('Api/searchProductApi'); ?>/" + custom_id + "/" + category_id + "?searchText=%QUERY%";</script>
<?php
$this->load->view('layout/footer');
?>

<script src="<?php echo base_url(); ?>assets/theme/js/jquery.pajinate.min.js"></script>


<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>

<!--angular controllers-->
<script id="result-template" type="text/x-handlebars-template">


    <div class="col-sm-12">

    <div class="col-sm-12">  
    <span class="search_title col-sm-12" style="padding: 0px;margin-top: -5px;">{{title}}</span>
    <small style="font-size: 10px;margin-top: -9px;float: left;">{{sub_title}}</small>

    </div> 

    </div>

</script>

<script type="text/javascript">
    $(document).ready(function () {







    });

</script>