
<div class="fontview_custom customization_block animated zoom "  ng-if="screencustom.view_type == 'front'" >

    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/backbodywaist0001.png" class="fixpos animated" >
    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/back_upper_waist0001.png" class="fixpos animated" >

    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/back_upper0001.png" class="fixpos animated" style="    margin-left: 10px;">


    <!--breast pocket-->
    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Breast Pocket'].elements">


    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in [selecteElements[fab.product_id]['Jacket Style'].left]" >

    <!--buttons-->
    <img src="<?php echo custome_image_server; ?>/jacket/buttons/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Jacket Style'].buttons2" style="{{selecteElements[fab.product_id]['Jacket Style'].style}}" >


    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}//{{img}}" class="fixpos animated" ng-repeat="img in [selecteElements[fab.product_id]['Bottom'].style[selecteElements[fab.product_id]['Jacket Style'].title].right]" >

    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Lower Pocket'].elements">

    <img src="<?php echo custome_image_server; ?>/jacket/overlay/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Jacket Style'].overlay2" >

    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Breast Pocket'].elements" >

    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Jacket Style'].button_hole" >

    <img src="<?php echo custome_image_server; ?>/jacket/overlay/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Lapel Style'].laple_style[selecteElements[fab.product_id]['Jacket Style'].title].overelay">

    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Lapel Style'].laple_style[selecteElements[fab.product_id]['Jacket Style'].title].elements">

    <img src="<?php echo custome_image_server; ?>/jacket/buttons/{{selecteElements[fab.product_id]['Buttons'].folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Jacket Style'].buttons" >

    <img src="<?php echo custome_image_server; ?>/jacket/overlay/{{selecteElements[fab.product_id]['Bottom'].style[selecteElements[fab.product_id]['Jacket Style'].title].overlay}}" class="fixpos animated"  >
    
    <img src="<?php echo custome_image_server; ?>/jacket/overlay/waistupperoverlay1.png" class="fixpos animated"  >

</div>   


<div class="backview_custom customization_block zoom animated " ng-if="screencustom.view_type == 'back'">



    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Back Vent'].elements">
    <img src="<?php echo custome_image_server; ?>/jacket/overlay/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Back Vent'].overlay">
    <img src="<?php echo custome_image_server; ?>/jacket/overlay/overlayback.png" class="fixpos animated" >
    <img src="<?php echo custome_image_server; ?>/jacket/overlay/overlayback1.png" class="fixpos animated" >



</div> 


<div class="backview_custom customization_block zoom animated " ng-if="screencustom.view_type == 'pant'">
    <!--<img src="<?php echo base_url(); ?>assets/images/pant_elements/base.png" class="fixpos animated">-->
    <!--font-->
    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Number of Pleat'].elements">

    <?php
    if ($tuxedotype == '1') {
        ?>


        <img src="<?php echo custome_image_server; ?>/jacket/output/{{selecteElements[fab.product_id]['Ribbon on Side Seam'].folder}}/pant_side_seam0001.png" class="fixpos animated" >

        <?php
    } else {
        ?>
        <?php
    }
    ?>

    <img src="<?php echo custome_image_server; ?>/jacket/overlay/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Front Pocket Style'].elements">  
    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Waistband'].elements">
    <img src="<?php echo custome_image_server; ?>/jacket/overlay/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Cuff'].elements">
    <img src="<?php echo custome_image_server; ?>/jacket/overlay/zipper.png" class="fixpos animated" >

</div> 


<div class="backview_custom customization_block zoom animated " ng-if="screencustom.view_type == 'pantback'">
    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/pant_back_pocket0001.png" class="fixpos animated">
    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/pant_back_waistband0001.png" class="fixpos animated">
    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Number of Back Pocket'].elements">
    <img src="<?php echo custome_image_server; ?>/jacket/overlay/pant_back_pocketoverlay.png" class="fixpos animated">

</div> 
