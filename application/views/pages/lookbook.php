<?php
$this->load->view('layout/header');
?>

<!-- Slider -->
<section class="sub-bnr" data-stellar-background-ratio="0.5" style="min-height: 50px;    background: #333333;">
    <div class="position-center-center">
        <div class="container">
            <h4>Catalog</h4>

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url("/"); ?>">Home</a></li>
                <li><a href="<?php echo site_url("catalog"); ?>">Catalog</a></li>

            </ol>
        </div>
    </div>
</section>



<div class="section_offset" ng-controller="lookBookController">
    <div class="container">
        <div class="content">
            <!--contact-->
            <!--clients area-->
            <div class="latest-w3">
                <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/GridGallery/css/demo.css" />
                <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/GridGallery/css/component.css" />
                <script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/modernizr.custom.js"></script>


                <div style="    margin-top: 30px;">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <?php
                        foreach ($lookbook_category as $lkey => $lvalue) {
                            ?>
                            <li role="presentation" class="<?php echo $lkey == 0 ? 'active' : '' ?>"><a href="#lookbook<?php echo $lvalue['id']; ?>" aria-controls="lookbook<?php echo $lvalue['id']; ?>" role="tab" data-toggle="tab"><?php echo $lvalue['category_name']; ?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <?php
                        foreach ($lookbook_category as $lkey => $lvalue) {
                            ?>
                            <div role="tabpanel" class="tab-pane <?php echo $lkey == 0 ? 'active' : '' ?>" id="lookbook<?php echo $lvalue['id']; ?>">


                                <div id="grid-gallery<?php echo $lvalue['id']; ?>" class="grid-gallery" style="    margin-top: 2em;">

                                    <section class="grid-wrap">
                                        <ul class="grid">
                                            <li class="grid-sizer"></li><!-- for Masonry column width -->

                                            <?php
                                            foreach ($stylearray[$lvalue['id']]['data'] as $key => $value) {
                                                ?>    

                                                <li style="    padding: 10px;" >

                                                    <div class="panel panel-default" style="border:none;margin: 0px;">
                                                        <div class="panel-body" style="    padding: 5px;">
                                                            <div class="thumbnail lookbook_thumb" >
                                                                <img src="https://admin.lordscustomtailors.com/assets/lookbook_images/<?php echo $value['image']; ?>" alt="img01" style=""/>
                                                                <div class="caption">
                                                                    <p>Style#: <?php echo $value['title']; ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php
                                            }
                                            ?>

                                        </ul>
                                        <div style="clear:both"></div>
                                    </section><!-- // grid-wrap -->
                                    <section class="slideshow" style="z-index: 200000" >
                                        <ul>

                                            <?php
                                            foreach ($stylearray[$lvalue['id']]['data'] as $key => $value) {
                                                ?>    
                                                <li >

                                                    <div class="thumbnail " style="background: none;border:none">
                                                        <center>  <img src="https://admin.lordscustomtailors.com/assets/lookbook_images/<?php echo $value['image']; ?>" alt="img01"  style="    height:550px;"/></center>

                                                    </div>

                                                </li>
                                                <?php
                                            }
                                            ?>

                                        </ul>

                                        <nav>
                                            <span class="icon nav-prev"></span>
                                            <span class="icon nav-next"></span>
                                            <span class="icon nav-close"></span>
                                        </nav>

                                    </section><!-- // slideshow -->
                                </div><!-- // grid-gallery -->
                                <div style="clear: both"></div>


                            </div>
                            <?php
                        }
                        ?>


                    </div>

                </div>











                <!-- // grid-gallery -->
                <script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/imagesloaded.pkgd.min.js"></script>
                <script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/masonry.pkgd.min.js"></script>
                <script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/classie.js"></script>
                <script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/cbpGridGallery.js"></script>
                <script>
                </script>
            </div>
            <!--end of client area-->
            <!--contact-->
        </div>
    </div>


</div>

</div>

<script>

    App.controller('lookBookController', function ($scope, $http, $timeout, $interval) {
        $scope.styleArray = {"title": "", "loading": 1, "style_list": [], "enquery_list": {}};
        $timeout(function () {
<?php
foreach ($lookbook_category as $lkey => $lvalue) {
    ?>
                new CBPGridGallery(document.getElementById('grid-gallery<?php echo $lvalue['id']; ?>'));
    <?php
}
?>
        }, 500)



    })

</script>

<?php
$this->load->view('layout/footer');
?>