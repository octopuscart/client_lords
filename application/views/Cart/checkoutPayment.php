<?php
$this->load->view('layout/header');
?>

<style>
    .cartbutton{
        width: 100%;
        padding: 6px;
        color: #fff!important;
    }


    .noti-check1 span{
        color: red;
        color: red;
        width: 111px;
        float: left;
        text-align: right;
        padding-right: 13px;
    }

    .noti-check1 h6{
        font-size: 15px;
        font-weight: 600;
    }

    .address_block{
        background: #fff;
        border: 3px solid #d30603;
        padding: 5px 10px;
        margin-bottom: 20px;
        height: 150px;


    }
    .checkcart {
        border-radius: 50%;
        position: absolute;
        top: -28px;
        left: -8px;
        padding: 4px;
        background: #fff;
        border: 2px solid green;
    }


    .default{
        border: 2px solid green;
    }

    .default{
        border: 2px solid green;
    }

    .checkcart i{
        color: green;
    }

    .address_button{
        padding: 0px 10px;
        margin-top: 15px;
        font-size: 10px;


    }

    .cartdetail_small {
        float: left;
        width: 203px;
    }

</style>






<!-- Inner Page Banner Area Start Here -->
<section class="sub-bnr" data-stellar-background-ratio="0.5" style="margin-bottom: 10px;">
    <div class="position-center-center">
        <div class="container">
            <h4>Checkout</h4>

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Checkout</li>
            </ol>
        </div>
    </div>
</section>
<!-- Inner Page Banner Area End Here -->

<!-- Content -->


<div class="cart-page-area">
    <div class="container" ng-if="globleCartData.total_quantity">
        <div class="row">
            <?php
            $this->load->view('Cart/itemblock', array('vtype' => 'items'));
            ?>
            <?php
            $this->load->view('Cart/itemblock', array('vtype' => 'size'));
            ?>
            <?php
            $this->load->view('Cart/itemblock', array('vtype' => 'shipping'));
            ?>


                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading active" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span class="fa-stack">
                                    <i class="fa fa-money fa-stack-1x"></i>
                                    <i class="ion-bag fa-stack-1x "></i>
                                </span>   Confirm Order Now
                                <span style="float: right; line-height: 29px;font-size: 12px;" class="ng-binding">
                                    
                                </span> 
                            </a>
                        </h4>
                    </div>
                    <!-- Address Details -->
                    <div class="panel-body">
                        <div class="order-sheet product-details2-area" style="margin-top: 5px;padding:0">
                            <form action="#" method="post">
                                <div class="product-details-tab-area" style="margin: 0;">
                                    <div class="row">
                                     
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                          <table class="table table-hover">
                                                <tbody id="quantity-holder">
                                                    <tr>
                                                        <td colspan="4" class="text_right">
                                                            <div class="proceed-button pull-left " >
                                                                <a href=" <?php echo site_url("Cart/checkoutShipping"); ?>" class="btn-apply-coupon btn btn-info btn-lg checkout_button_pre " ><i class="fa fa-arrow-left"></i> View Shipping Address</a>
                                                            </div>
                                                            <div class="proceed-button pull-right ">
                                                                <button type="submit" name="place_order" class="btn-apply-coupon btn btn-info btn-lg checkout_button_next "  value="Post Payment">
                                                                    Place Order <i class="fa fa-arrow-right"></i>
                                                                </button>                                                                    </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>



        </div>
    </div>
</div>



<?php
$this->load->view('Cart/noproduct');
?>







<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>
<script>
                                                                                var avaiblecredits = 0;
                                                                                function confirmOrder() {
                                                                                    swal({
                                                                                        title: 'Processing Order',
                                                                                        onOpen: function () {
                                                                                            swal.showLoading()
                                                                                        }
                                                                                    });
                                                                                }
</script>

<?php
$this->load->view('layout/footer', array('custom_item' => 0, 'custom_id' => 0));
?>