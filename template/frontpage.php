<?php include("../inc/header.php"); ?>

   <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="img/hero-1.jpg">
                <div class="container">
                    <div class="row">
                       <!-- <div class="col-lg-5">
                            <p class='pt-5 pl-5'style='font-family:andalus;color:#2b2b2b;font-weight:500;font-size:35px;'>
                              </p>
                        </div> -->
                    </div>
                    <div class="off-card">
                        <h2>فاترينا <span>كوم . </span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="img/hero-2.jpg">
                <div class="container">
                    <div class="row">
                       <!-- <div class="col-lg-5">
                            <p class='pt-5 pl-5'style='font-family:andalus;color:#2b2b2b;font-weight:500;font-size:35px;'>
                              </p>
                        </div> -->
                    </div>
                    <div class="off-card">
                      <h2>فاترينا <span>كوم . </span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <?php //($parnt_category as $category) ?>
  <?php for($ct = 0 ;$ct < count($parnt_category) ; $ct++){ ?>
    <?php if($ct % 2 == 0){ ?>
        
        <!-- Women Banner Section Begin -->
        <section class="women-banner spad mt-5 pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="product-large set-bg" data-setbg="<?php echo $parnt_category[$ct]->imgct?>">
                            <a href="categories.php?cid=<?php echo $parnt_category[$ct]->id?>"><h2><?php echo $parnt_category[$ct]->catnm?></h2></a>
                        </div>
                    </div>
                    <div class="col-lg-8 offset-lg-1">
                        <div class="filter-control">
                            <?php // print_r($allcats);?>
                        </div>
                        <div class="product-slider owl-carousel">
                            <?php for($sb_ct = 0 ;$sb_ct < count($allcats[$ct]) ; $sb_ct++){ ?>
                               
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="<?php echo $allcats[$ct][$sb_ct]->imgct?>" style='height:300px;' alt="">
                                    </div>
                                    <div class="pi-text">
                                        <a href="categories.php?cid=<?php echo $parnt_category[$ct]->id?>&&pid=<?php echo $allcats[$ct][$sb_ct]->id?>">
                                            <h5><?php echo $allcats[$ct][$sb_ct]->catnm?></h5>
                                        </a>
                                    </div>
                                </div>
                                
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Women Banner Section End -->

    <?php }else{ ?>

        <!-- men Banner Section Begin -->
        <section class="man-banner spad">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="filter-control" id='ajx'>

                        </div>
                        <div class="product-slider owl-carousel">
                           <?php for($sb_ct = 0 ;$sb_ct < count($allcats[$ct]) ; $sb_ct++){ ?>

                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="<?php echo $allcats[$ct][$sb_ct]->imgct?>" style='height:300px;' alt="">
                                    </div>
                                    <div class="pi-text">
                                        <a href="categories.php?cid=<?php echo $parnt_category[$ct]->id?>&&pid=<?php echo $allcats[$ct][$sb_ct]->id;?>">
                                            <h5><?php echo $allcats[$ct][$sb_ct]->catnm?></h5>
                                        </a>
                                    </div>
                                </div>

                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="product-large set-bg m-large" data-setbg="<?php echo $parnt_category[$ct]->imgct?>">
                            <a href="categories.php?cid=<?php echo $parnt_category[$ct]->id?>"><h2><?php echo $parnt_category[$ct]->catnm?></h2></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- men Banner Section End -->

    <?php } ?>
  <?php } ?>

<?php include("../inc/footer.php"); ?>
<script>

$("document").ready(function(){
    $("#hom").addClass('active');
    $('#do').on('click',function(){
        $.get('../index.php?type=rqst',function (data) {
            $('#ajx').html(data);alert(data);
        });    
    });
});

</script>

