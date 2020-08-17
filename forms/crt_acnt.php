<?php include("../inc/header.php"); ?>
        <?php
        //echo $result;
            function  echo_session($inpt_nm){
                if(isset($_SESSION['cs_form'][$inpt_nm]) && $_SESSION['cs_form'][$inpt_nm] != ''){
                    return $_SESSION['cs_form'][$inpt_nm];unset($_SESSION['cs_form'][$inpt_nm]);
                }
            }
            function  echo_session2($inpt_nm){
                if(isset($_SESSION['cs_inpt'][$inpt_nm]) && $_SESSION['cs_inpt'][$inpt_nm] != ''){
                    return $_SESSION['cs_inpt'][$inpt_nm];unset($_SESSION['cs_inpt'][$inpt_nm]);
                }
            }
        ?>
        <div class="modal-dialog" role="document">
            <div class="modal-content"id='ad_user_cntnr'>

            <form action='create account.php' id='form' method='get' class='checkout-form '>
                <div  class='modal-header mb-3 p-0'>
                    <div id='cs_fld' class='col-11 row m-4  alert alert-danger'style='display:<?php if(isset($msg) && $msg=='faild'){echo 'block';}else{echo 'none';} ?>;'>One Or More Of Your Data Are Faild ....</div>
                    <div id='cs_suces'class='col-11 row m-4 alert alert-success'style='display:<?php if(isset($msg) && $msg=='success'){echo 'block';}else{echo 'none';} ?>;'>your Store Have Created ...</div>
                </div>
                <div class='modal-body'> 
                    <div  class='form-group m-0 p-0'style=''>
                        <label class='pl-1 col-4'style='' for='first_name'>User Name<span>*</span></label>
                        <span class='err_msg' id='usrnm_msg1'><?php echo echo_session2('cs_firstnm');?> </span>
                        <input class='form-control mb-1 endvldtn' type='text'   name='cs_firstnm'id='cs_firstnm'  value="<?php echo echo_session('cs_firstnm'); ?>"  title="" >
                    </div>
                    <div  class='form-group m-0 p-0'style=''>
                        <label class='pl-1 col-4'style='' for='last_name'>Store Name<span>*</span></label>
                        <span class='err_msg' id='fulnm_msg1'><?php echo echo_session2('cs_storenm');?> </span>
                        <input class='form-control mb-1 endvldtn' type='text'   name='cs_storenm'   id='cs_storenm'  value="<?php echo echo_session('cs_storenm'); ?>"  title="" >
                    </div>
                    <div  class='form-group m-0 p-0'style=''>
                        <label class='pl-1 col-4'style='' for='email'>Email Address<span>*</span></label>
                        <span class='err_msg' id='emil_msg1'><?php echo echo_session2('cs_email');?> </span>
                        <input class='form-control mb-1 endvldtn' type='email'   name='cs_email'   id='cs_email'  value="<?php echo echo_session('cs_email'); ?>"  title='' >
                    </div>
                    <div  class='form-group m-0 p-0'style=''>
                        <label class='pl-1 col-4'style='' for='phone_number'>Phone<span>*</span></label>
                        <span class='err_msg' id='phon_msg1'><?php echo echo_session2('cs_phone');?> </span>
                        <input class='form-control mb-1 endvldtn' type='text'   name='cs_phone'   id='cs_phone' value="<?php echo echo_session('cs_phone'); ?>"  title='' >
                    </div>
                    <div  class='form-group m-0 p-0'style=''>
                        <label class='pl-1 col-4'style='' for='pasword'>password<span>*</span></label>
                        <span class='err_msg' id='pswrd_msg1'><?php echo echo_session2('cs_password');?> </span>
                        <input class='form-control mb-1 endvldtn' type='text'   name='cs_password'   id='cs_password'  title='' value="<?php echo echo_session('cs_password'); ?>" >
                    </div><!---->
                    <div  class='form-group m-0 p-0'style=''>
                        <label class='pl-1 col-4'style='' for='cnfrmpwrd'>Re_password<span>*</span></label>
                        <span class='err_msg' id='rpswrd_msg1'><?php echo echo_session2('cs_password2');?> </span>
                        <input class='form-control mb-1 endvldtn' type='text'   name='cs_password2'  id='cs_password2' title='' value="<?php echo echo_session('cs_password2'); ?>"  >
                    </div><?php //print_r($ctys);echo count($ctys);?>
                    <div id='usr_typ_slct' class='col-12 m-0 p-0 mb-2 mt-2'style='margin:auto;border:0px solid green;'>
                        <div  class='form-group m-0 p-0'style='width:48%;display:inline-block;'>
                            <label for='edt_governate'>Governates<span>*</span></label>
                            <span class='err_msg' id='gvrn_msg2'><?php //echo echo_session('cs_gvrn'); //echo echo_session('cs_governate');?> </span>
                            <select required class="p-2 mt-1 col-12 form-groub" id='cs_gvrn'name='cs_gvrn'>
                                <option  class='font edt_prnt' value=''>All</option>
                                <?php for($x = 0 ; $x < count($gvrnts) ; $x++){?>
                                <option class='edt_prnt' id='<?php echo $x . "_mct"; ?>'  value="<?php echo $gvrnts[$x]->id; ?>" <?php if(echo_session('cs_gvrn')==$gvrnts[$x]->id){echo 'selected';}?>> <?php echo $gvrnts[$x]->cty_nm; ?> </option> 
                                <?php }?>
                            </select>
                        </div>
                        <div id='' class='form-group m-0  p-0'style='width:48%;display:inline-block;float:right;'>
                            <label for='edt_cty'>Sub Category<span>*</span></label>
                            <span class='err_msg' id='cty_msg2'><?php //echo echo_session2('cs_cty');?> </span>
                            <select required class="p-2 mt-1 col-12 form-groub" id='cs_cty'name='cs_cty'>
                                <option  class='font' value=''>All</option>
                                <?php for($x = 0 ; $x < count($ctys) ; $x++){?>
                                <option class='<?php echo $ctys[$x]->parnt_id . "_sct"; ?> sub_ct' value="<?php echo $ctys[$x]->id; ?>" style='display:none'<?php if(echo_session('cs_cty')==$ctys[$x]->id){echo 'selected';}?>><?php echo $ctys[$x]->cty_nm; ?></option> 
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div  class='form-group m-0 p-0'style=''>
                        <label class='pl-1 col-3 m-0 p-0'style='' for='cs_adress'>Street Address<span>*</span></label>
                        <span class='err_msg' id='adres_msg1'><?php echo echo_session2('cs_adress');?> </span>
                        <input class='form-control mb-1 endvldtn street-first' type='text' name='cs_adress' id='cs_adress' value="<?php echo echo_session('cs_adress'); ?>"  title='' >
                    </div>
                </div>  
                <div  class='modal-footer'style='border-top:0px;'>
                    <input type="submit" class="btn btn-info col-4"  name='cs_submit' id='cs_submit'value='Create Store'>
                </div>
            </form>

            </div>
        </div>
        
<?php include("../inc/footer.php"); ?>
<script>

$("document").ready(function(){

    $("#crtacont").addClass('active');
        var value = $('#cs_gvrn').val();//alert(value);
        value= '.' + value + '_sct';
        $('.sub_ct').css('display','none');
        $(value).css('display','block');
    $('#cs_close').on('click',function () {//alert('ooooo') ;
        //window.location.replace('index.php');
        window.history.back();
    }); 
    $("#cs_gvrn").on('change',function(){//alert('');
        var value = $('#cs_gvrn').val();
        value= '.' + value + '_sct';
        // value=value.split('_');
        // value=value[0];
        $('.sub_ct').css('display','none');
        $(value).css('display','block');
        $("#cs_cty").val('all');
    });   
});

</script>