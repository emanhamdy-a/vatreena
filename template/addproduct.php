<?php include("../inc/header.php"); ?>

        <div class="container p-0">
                <div class="col-lg-9 order-1 order-lg-2"style='margin:auto;padding:60px 40px 60px 40px;'>
                    <!--aaaaaaaa-->
                       <?php
                        function  echo_session($inpt_nm){
                            if(isset($_SESSION['ad_form'][$inpt_nm]) && $_SESSION['ad_form'][$inpt_nm] != ''){
                                return $_SESSION['ad_form'][$inpt_nm];unset($_SESSION['ad_form'][$inpt_nm]);
                            }
                        }
                        function  echo_session2($inpt_nm){
                            if(isset($_SESSION['ad_inpt'][$inpt_nm]) && $_SESSION['ad_inpt'][$inpt_nm] != ''){
                                return $_SESSION['ad_inpt'][$inpt_nm];unset($_SESSION['ad_inpt'][$inpt_nm]);
                            }
                        }
                       ?>
                        <form action='add product.php' id='form' method='post'  enctype='multipart/form-data' class=''>
                            <div  class='modal-header mb-3 p-0'style='border-style:none;'>
                                <div id='ad_fld' class='col-11 row m-4  alert alert-danger'style='display:<?php if(isset($msg) && $msg=='faild'){echo 'block';}else{echo 'none';} ?>;'>One Or More Of Your Data Are Faild ....</div>
                                <div id='ad_suces'class='col-11 row m-4 alert alert-success'style='display:<?php if(isset($msg) && $msg=='success'){echo 'block';}else{echo 'none';} ?>;'>your Product Have Added ...</div>
                            </div>
                            <div class='modal-body row'>
                            <div id='ad_filters'style='' class="col-lg-4 col-sm-12 order-2 order-lg-1 produts-sidebar-filter">
                                <div class="filter-widget">
                                    <h4 class="fw-title"><div class='row p-0 m-0'>Color
                                        <input required type="text" name="ad_color" id="ad_color" style='width:0px;border:1px solid white;font-size:0px;'class='ml-3'>
                                        <div id='ad_showclr' class='p-2 pl-3 ml-1 border' style='border-radius:15px;'></div></div>
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
                                <div class="filter-widget">
                                    <h4 class="fw-title text-left">Size
                                       <input required type="text" name="ad_size"  id="ad_size"  style='width:0px;border:1px solid white;font-size:0px;'class='ml-3' >
                                    </h4>
                                    <div class="fw-size-choose">
                                        <div class="sc-item">
                                            <input type="radio" id="s-size" value='s' class='1size' name='1size'>
                                            <label for="s-size">s</label>
                                        </div>
                                        <div class="sc-item">
                                            <input type="radio" id="m-size" value='m' class='1size' name='1size'>
                                            <label for="m-size">m</label>
                                        </div>
                                        <div class="sc-item">
                                            <input type="radio" id="l-size" value='l' class='1size' name='1size'>
                                            <label for="l-size">l</label>
                                        </div>
                                        <div class="sc-item">
                                            <input type="radio" id="xs-size" value='xl' class='1size' name='1size'>
                                            <label for="xs-size">xl</label>
                                        </div>
                                        <div class="sc-item">
                                            <input type="radio" id="xxl-size" value='xxl' class='1size' name='1size'>
                                            <label for="xxl-size">xxl</label>
                                        </div>
                                        <div class="sc-item">
                                            <input type="radio" id="xxxl-size" value='xxl' class='1size' name='1size'>
                                            <label for="xxxl-size">3xl</label>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-info mt-4 mr-3"  name='ad_submit' id='ad_submit'value='Submit'>
                                    <a class="btn btn-success mt-4" href='my store.php'  name='ad_sohw' id='ad_sohw' style='color:white;'>Show Products</a>
                                </div>
                            </div><!-- end filters -->
                            <div class='col-lg-8'style=''>
                                <div id='ad_cat' class='col-12 m-0 p-0 mb-2 mt-2'style='margin:auto;border:0px solid green;'>
                                    <div  class='form-group m-0 p-0'style='width:48%;display:inline-block;'>
                                        <label for='ad_governate'>Category<span>*</span></label>
                                        <span class='err_msg' id='gvrn_msg2'><?php //echo echo_session2('ad_governate');?> </span>
                                        <select required class="p-2 mt-1 col-12 form-groub" id='ad_sortct'name='ad_sortct'>
                                            <option  class='font ad_prnt' value=''>All</option>
                                            <?php for($x = 0 ; $x < count($parnt_category) ; $x++){?>
                                            <option class='ad_prnt' id='<?php echo $x . "_mct"; ?>' value="<?php echo $parnt_category[$x]->id; ?>"><?php echo $parnt_category[$x]->catnm; ?></option> 
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div id='' class='form-group m-0  p-0'style='width:48%;display:inline-block;float:right;'>
                                        <label for='ad_cty'>Sub Category<span>*</span></label>
                                        <span class='err_msg' id='cty_msg2'><?php //echo echo_session2('ad_cty');?> </span>
                                        <select required class="p-2 mt-1 col-12 form-groub" id='ad_sortsb'name='ad_sortsb'>
                                            <option  class='font' value=''>All</option>
                                            <?php for($x = 0 ; $x < count($allcats) ; $x++){?>
                                            <option class='<?php echo $allcats[$x]->parnt_id . "_sct"; ?> sub_ct' value="<?php echo $allcats[$x]->id; ?>" style='display:none'><?php echo $allcats[$x]->catnm; ?></option> 
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>
                                <div  class='form-group m-0 p-0'style=''>
                                    <label class='pl-1 col-4'style='' for=''>Product Name<span>*</span></label>
                                    <span class='err_msg' id='usrnm_msg2'><?php echo echo_session2('ad_prdctnm');?> </span>
                                    <input   required maxlength='40' minlength='3' type='text'  class='form-control mb-1 endvldtn' type='text'   name='ad_prdctnm'id='ad_prdctnm'  value="<?php echo echo_session('ad_prdctnm'); ?>"  title="" >
                                </div>
                                <div  class='form-group'>
                                    <label for='exampleFormControlTextarea1'>Description<span>*</span></label>
                                    <textarea  required maxlength='800'name='ad_dscrptn'minlength='5'  class='form-control' id='ad_dscrptn' rows='3'></textarea>
                                </div>
                                <div id='' class='col-12 m-0 p-0 row'style='border:0px solid green;'>
                                    <div  class='form-group m-0 p-0 pr-3 col-6'style=''>
                                        <label class='pl-1'style='' for='last_name'>Price<span>*</span></label>
                                        <span class='err_msg' id='fulnm_msg2'><?php echo echo_session2('ad_pric');?> </span>
                                        <input  required  title='enter numbers only between 1 to 8 numbers ...' pattern='^[0-9]{1,8}$'  class='form-control mb-1 endvldtn' name='ad_pric'   id='ad_pric'  value="<?php echo echo_session('ad_pric'); ?>"  title="" >
                                    </div>
                                    <div  class='form-group m-0 p-0 pl-3 col-6'style=''>
                                        <label class='pl-1 'style='' for='email'>Stock<span>*</span></label>
                                        <span class='err_msg' id='emil_msg2'><?php echo echo_session2('ad_stok');?> </span>
                                        <input  required title='enter numbers only between 1 to 6 numbers ...' pattern='^[0-9]{1,6}$' class='form-control mb-1 endvldtn' name='ad_stok'   id='ad_stok'  value="<?php echo echo_session('ad_stok'); ?>"  >
                                    </div>
                                </div>
                                <div  class='form-group' style='position:relative;'>
                                    <label for=''>Image</label>
                                    <input  required maxlength='255' name='ad_image' id='ad_image' type='file'minlength='4'  class='form-control' style='' placeholder='Amount'>
                                </div>                               
                            </div>

                            </div>  
                        </form>
                    <!--zzzzzzzzzz-->      
                </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
        </div>
    </div>

<?php include("../inc/footer.php"); ?>
 <script>
        $("document").ready(function(){
          $("#myacont").addClass('active');
          $("#ad_adprdct").on('click');
          $("#ad_adprdct").on('click',function(){
            $('#ad_filters').css('display','none');
            $("#ad_myprdct").css('background-color','white');
            $("#ad_myprdct").css('color','#212529');
            $(this).css('background-color','#e7ab3c');
            $(this).css('color','white');
          });
          $("#ad_sortct").on('change',function(){
            var value = $('#ad_sortct').val();
            value= '.' + value + '_sct';
            // value=value.split('_');
            // value=value[0];
            $('.sub_ct').css('display','none');
            $(value).css('display','block');
            $("#ad_sortsb").val('all');
          });
          $(".1color").on('click',function(){
            var color=$(this).html();
            $('#ad_showclr').css('background-color',color);
            $('#ad_color').val(color);
          });
          $(".1size").on('click',function(){
            var size=$(this).val();
            $('#ad_size').val(size);
          });/**/            
        });
 </script>