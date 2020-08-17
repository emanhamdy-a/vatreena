<?php include("../inc/header.php"); ?>
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->
    <!-- Product Shop Section Begin -->
        <?php
            function  echo_session($inpt_nm){
                if(isset($_SESSION['cu_cat'][$inpt_nm]) && $_SESSION['cu_cat'][$inpt_nm] != ''){
                    return $_SESSION['cu_cat'][$inpt_nm];unset($_SESSION['cu_cat'][$inpt_nm]);
                }
            }
        ?>
    <section class="product-shop spad">
        <div class="container">
            <div class="row pt-0">
                <div id='cu_filters' class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                   <form action="my store.php" id='cu_form' method='get' class='checkout-form'>
                    <div class="filter-widget mt-2">
                        <h4 class="fw-title">Date</h4>
                        <select class="p-2 mb-0 mt-2 col-8 form-groub"id='cu_sortdt'name='cu_sortdt'>
                            <option value='desc' <?php if(echo_session('cu_sortdt')=='desc'){echo 'selected';} ?> >Newest</option>
                            <option value='asc' <?php if(echo_session('cu_sortdt')=='asc'){echo 'selected';} ?> >Oldest</option>
                        </select>
                    </div> 
                    <div class="filter-widget mt-2">
                        <h4 class="fw-title">View</h4>
                        <select class="p-2 mb-0 mt-2 col-8 form-groub"id='cu_sortvw' name='cu_sortvw'>
                            <option value=9  <?php if(echo_session('cu_sortvw')=='9' ) {echo 'selected';} ?> > 9</option>
                            <option value=3  <?php if(echo_session('cu_sortvw')=='3' ) {echo 'selected';} ?> >3</option>                            
                            <option value=6  <?php if(echo_session('cu_sortvw')=='6' ) {echo 'selected';} ?> > 6</option>
                            <option value=12 <?php if(echo_session('cu_sortvw')=='12' ){echo 'selected';} ?> >12</option>
                            <option value=15 <?php if(echo_session('cu_sortvw')=='15' ){echo 'selected';} ?> >15</option>
                            <option value=18 <?php if(echo_session('cu_sortvw')=='18' ){echo 'selected';} ?> >18</option>
                            <option value=21 <?php if(echo_session('cu_sortvw')=='21' ){echo 'selected';} ?> >21</option>
                            <option value=24 <?php if(echo_session('cu_sortvw')=='24' ){echo 'selected';} ?> >24</option>
                            <option value=30 <?php if(echo_session('cu_sortvw')=='30' ){echo 'selected';} ?> >30</option>
                            <option value=36 <?php if(echo_session('cu_sortvw')=='36' ){echo 'selected';} ?> >36</option>
                        </select>
                    </div>                   
                    <div class="filter-widget">
                        <h4 class="fw-title">Categories</h4>
                        <select class="p-2 mt-1 col-8 form-groub" id='cu_sortct'name='cu_sortct'>
                             <option  class='font cu_prnt' value=''>ALL</option>
                             <?php for($x = 0 ; $x < count($parnt_category) ; $x++){?>
                               <option class='cu_prnt' id='<?php echo $x . "_mct"; ?>' value="<?php echo $parnt_category[$x]->id; ?>" <?php if(echo_session('cu_sortct')==$parnt_category[$x]->id){echo"selected";} ?> ><?php echo $parnt_category[$x]->catnm; ?></option> 
                             <?php }?>
                        </select>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Sub Categories</h4>
                        <select class="p-2 mt-1 col-8 form-groub" id='cu_sortsb'name='cu_sortsb'>
                             <option  class='font' value=''<?php if(echo_session('cu_sortsb')==''){echo 'selected';}?>>All</option>
                             <?php for($x = 0 ; $x < count($allcats) ; $x++){?>
                               <option class='<?php echo $allcats[$x]->parnt_id . "_sct"; ?> sub_ct' value="<?php echo $allcats[$x]->id; ?>" <?php if(echo_session('cu_sortsb')==$allcats[$x]->id){echo 'selected';} ?> style='display:none'><?php echo $allcats[$x]->catnm; ?></option> 
                             <?php }?>
                        </select>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Price</h4>
                        <div class="filter-range-wrap">
                          <div class='row'>
                            <label class='col-5 p-2' name=''>Min Price</label>
                            <input type="number" class='col-5 ml-2' name='cu_mnpric' value='<?php if(echo_session('cu_mnpric')!=''){echo echo_session('cu_mnpric');}else{echo '1';}?>'>
                          </div> 
                          <div class='row'>
                            <label class='col-5 p-2' name=''>Max Price</label>
                            <input type="number" class='col-5 ml-2' name='cu_mxpric' value='<?php if(echo_session('cu_mxpric')!=''){echo echo_session('cu_mxpric');}else{echo '99999999';}?>'>
                          </div>                           
                            <!--<div class="range-slider">
                                <div class="price-input">
                                    <input type="number" id="minamount" name='cu_mnpric' value='<?php //echo echo_session('cu_mnpric');?>'>
                                    <input type="number" id="maxamount" name='cu_mxpric' value='<?php //echo echo_session('cu_mxpric');?>'>
                                </div>
                            </div>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                data-min="1" data-max="5555">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>-->
                        </div>
                        <input id='cu_submit' name='cu_submit' type='submit' class="filter-btn btn col-6"value='Filter'>
                    </div>
                    <input type="hidden" name="cu_color" id="cu_color" value='<?php echo echo_session('cu_color');?>'>
                    <div class="filter-widget">
                        <h4 class="fw-title">
                         <div class='row'>Color<div id='cu_showclr' class='border p-2 pl-3 ml-4' style='background-color:<?php echo echo_session('cu_color');?> ;border-radius:15px;height:26px;'></div>
                          <label class='pl-5 mt-1'style='font-size:16px;color:#636363;cursor:pointer;'id='cu_clearclr'>Clear Filter</label>
                         </div>
                        </h4>
                        <div class="fw-color-choose">
                            <div class="cs-item">
                                <input type="radio" id="1cs-black" value='black' name='1color'>
                                <label class="1color cs-black" value='black' for="cs-black">Black</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="1cs-violet" value='violet' name='1color'>
                                <label class="1color cs-violet" for="cs-violet">Violet</label>
                            </div>
                            <div class="cs-item"style='position:relative;'>
                                <div class='1color' style='padding:9px;position:absolute;left:0px;top:4px;z-index:99999999;border-radius:15px;background-color:white;font-size:0px;'>White</div>
                                <input type="radio" id="" value='White' name='1color'>
                                <label class="1color" for="">White</label>
                            </div>
                            <div class="cs-item"style='position:relative;'>
                                <div class='1color' style='padding:9.6px;position:absolute;left:.6px;top:4px;z-index:76876;border-radius:15px;background-color:orange;font-size:0px;'>Orange</div>
                                <input type="radio" id="" value='Orange' name='1color'>
                                <label class="1color" for="">Orange</label>
                            </div>
                            <div class="cs-item"style='position:relative;'>
                                <div class='1color' style='padding:9px;position:absolute;left:0px;top:4px;z-index:99999999;border-radius:15px;background-color:brown;font-size:0px;'>Brown</div>
                                <input type="radio" id="" value='Brown' name='1color'>
                                <label class="1color" for="">Brown</label>
                            </div>           
                            <div class="cs-item"style='position:relative;'>
                                <div class='1color' style='padding:9px;position:absolute;left:0px;top:4px;z-index:99999999;border-radius:15px;background-color:Fuchsia;font-size:0px;'>Fuchsia</div>
                                <input type="radio" id="" value='Fuchsia' name='1color'>
                                <label class="1color" for="">Fuchsia</label>
                            </div>                 
                            <div class="cs-item">
                                <input type="radio" id="1cs-blue" value='blue' name='1color'>
                                <label class="1color cs-blue" for="cs-blue">Blue</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="1cs-yellow" value='yellow' name='1color'>
                                <label class="1color cs-yellow" for="cs-yellow">Yellow</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="1cs-red" value='red' name='1color'>
                                <label class="1color cs-red" for="cs-red">Red</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="1cs-green" value='green' name='1color'>
                                <label class="1color cs-green" for="cs-green">Green</label>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="cu_size" id="cu_size" value='<?php echo echo_session('cu_size');?>'>
                    <div class="filter-widget">
                        <h4 class="fw-title text-left p-4"></h4>
                        <h4 class="fw-title text-left">Size
                        <label class='pt-4 pl-0' style='margin-left:92px;font-size:16px;color:#636363;cursor:pointer;'id='cu_clearsiz'>Clear Filter</label>
                        </h4>
                        <div class="fw-size-choose">
                            <div class="sc-item">
                                <input type="radio" id="s-size" value='s' name='1size' class='1size'>
                                <label for="s-size" class='<?php if(echo_session('cu_size')=='s'){echo 'active';}?> siz'>s</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="m-size" value='m' name='1size' class='1size'>
                                <label for="m-size" class='<?php if(echo_session('cu_size')=='m'){echo 'active';}?> siz'>m</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="l-size" value='l' name='1size' class='1size'>
                                <label for="l-size" class='<?php if(echo_session('cu_size')=='l'){echo 'active';}?> siz'>l</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="xs-size" value='xl' name='1size' class='1size'>
                                <label for="xs-size" class='<?php if(echo_session('cu_size')=='xl'){echo 'active';}?> siz'>xl</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="xxl-size" value='xxl' name='1size' class='1size'>
                                <label for="xxl-size" class='<?php if(echo_session('cu_size')=='xxl'){echo 'active';}?> siz'>xxl</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="xxxl-size" value='xxxl' name='1size' class='1size'>
                                <label for="xxxl-size" class='<?php if(echo_session('cu_size')=='xxxl'){echo 'active';}?> siz'>3xl</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="xxxxl-size" value='xxxxl' name='1size' class='1size'>
                                <label for="xxxxl-size" class='<?php if(echo_session('cu_size')=='xxxxl'){echo 'active';}?> siz'>4xl</label>
                            </div>                            
                        </div>
                    </div>
                   </form>
                </div><!-- end filters -->
                <div class="col-lg-9 order-1 order-lg-2"style='position:relative;right:0px;'>
                    <ul class='nav col-12 p-0' role='tablist'style='position:absolute;top:-50px;width:100%;'>
                        <li class='p-0 m-0 col-12 text-right'>
                           <!-- <a class="btn p-3 text-cener m-0" data-toggle='modal' data-target='#adp_modal' style='cursor:pointer;width:88px;background-color:orange;color:white;font-size:19px;position:absolute;right:0px;'>+ Add<a>-->
                            <a class="btn p-3 text-cener m-0" href='add product.php'style='cursor:pointer;width:88px;background-color:orange;color:white;font-size:19px;'>+ Add</a>
                       </li>
                    </ul>
                    <!--aaaaaaaa-->
                <div class="product-show-option">
                    <div class="col-lg-12 text-center col-md-5 text-right">
                        <!--<p>Show 01- 09 Of 36 Product</p>-->
                    </div>
                </div>
                <div class="product-list">
                    <div class="row">
                   <?php for($prdct = 0 ; $prdct < count($products) ; $prdct++){?>
                    <div class='col-md-4 col-lg-4 col-sm-6 count'>
                        <div class='product-item' >
                            <div class='pi-pic'style='border:1px lightgray solid;'>
                                <img src='<?php echo $products[$prdct]->img; ?>' alt=''style='height:315px;'>
                                <ul style=''>
                                    
                                    <li style='float:left;'class='w-icon ml-2 p-0'>
                                    <input type='hidden' value='<?php echo $products[$prdct]->userid .'/-/=/+/' . $products[$prdct]->id; ?>' >
                                    <a  class='editlink'style='cursor: pointer;' href='edit product.php?pid=<?php echo $products[$prdct]->id;?>'><i class='fa fa-pencil'></i></a>
                                    </li>
                                    <!--<li class='quick-view'>
                                     <input type='hidden' value='<?php //echo $products[$prdct]->userid .'/-/=/+/' . $products[$prdct]->id; ?>' >
                                     <a class='view_imgs' style='cursor:pointer;' data-toggle='modal' data-target='#add_photo'>+ الصور -</a>
                                    </li>-->
                                    <li style='float:right;'class='w-icon mr-2 p-0'>
                                    <input type='hidden' value='<?php echo $products[$prdct]->userid .'/-/=/+/' . $products[$prdct]->id; ?>' >
                                    <a class='deletlink' style='cursor: pointer;'href='deleteprdct.php?pid=<?php echo $products[$prdct]->id;?>'><i class='fa fa-trash'></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class='pi-text p-0' style='border:1px lightgray solid;border-top:0px;'>
                                <div class='product-price p-1'style='font-size:17px;color:gray;'>
                                    Piece : <?php echo $products[$prdct]->stock; ?>
                                </div>
                                <a style='border-top:2px orange solid;margin:auto;'class='col-2'></a>
                                <a class='p-1'>
                                    <h5 style='font-weight:700;'><?php echo $products[$prdct]->prdctnm; ?></h5>
                                </a>
                                <a style='border-top:2px orange solid;margin:auto;'class='col-2'></a>
                                <div class='product-price p-1'style='font-size:17px;color:gray;'>
                                    £E : <?php echo $products[$prdct]->pric; ?>
                                </div>
                            </div>
                        </div>
                    </div><!---->
                   <?php }?>
                </div><!-- end prdcts -->                
                <!--zzzzzzzzzz-->      
                </div>           
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
        </div>
    </div>
    <!-- Partner Logo Section End -->

<?php include("../inc/footer.php"); ?>
  <script>
        $("document").ready(function(){
           $("#myacont").addClass('active');
            var value = $('#cu_sortct').val();
            value= '.' + value + '_sct';
            $('.sub_ct').css('display','none');
            $(value).css('display','block');
          $("#cu_adprdct").on('click');
          $("#cu_adprdct").on('click',function(){
            $('#cu_filters').css('display','none');
            $("#cu_myprdct").css('background-color','white');
            $("#cu_myprdct").css('color','#212529');
            $(this).css('background-color','#e7ab3c');
            $(this).css('color','white');
          });
          $("#cu_sortct").on('change',function(){
            var value = $('#cu_sortct').val();
            value= '.' + value + '_sct';
            // value=value.split('_');
            // value=value[$prdct];
            $('.sub_ct').css('display','none');
            $(value).css('display','block');
          });
          $(".1color").on('click',function(){
            var color=$(this).html();
            $('#cu_showclr').css('background-color',color);
            $('#fcu_showclr').css('background-color',color);
            $('#cu_color').val(color);
          });
          $("#cu_clearclr").on('click',function(){
            $('#cu_showclr').css('background-color','white');
            $('#cu_color').val('');
          });          
          $(".1size").on('click',function(){
            var size=$(this).val();
            $('#cu_size').val(size);
          }); 
          $("#cu_clearsiz").on('click',function(){
            $('#cu_size').val('');
            $('.siz').removeClass('active');
          });                     
        });
  </script>