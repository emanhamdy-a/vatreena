   <!-- Modal add new user <div class="modal fade" id="rgstr_modal" tabindex="-1" role="dialog" aria-labelledby="rgstr_modal" aria-hidden="true">-->
    <?php include("../inc/header.php"); ?>
        <?php
            function  echo_session($inpt_nm){
                if(isset($_SESSION['su_form'][$inpt_nm]) && $_SESSION['su_form'][$inpt_nm] != ''){
                    return $_SESSION['su_form'][$inpt_nm];unset($_SESSION['su_form'][$inpt_nm]);
                }
            }
            function  echo_session2($inpt_nm){
                if(isset($_SESSION['su_inpt'][$inpt_nm]) && $_SESSION['su_inpt'][$inpt_nm] != ''){
                    return $_SESSION['su_inpt'][$inpt_nm];unset($_SESSION['su_inpt'][$inpt_nm]);
                }
            }
        ?>
        <div class="modal-dialog" role="document">
            <div class="modal-content"id='ad_user_cntnr'>

            <form action='sign up.php' id='form2' method='get' class='checkout-form'>
                <div  class='modal-header mb-3 p-0'>
                    <div id='su_fld' class='col-11 row m-4  alert alert-danger'style='display:<?php if(isset($msg) && $msg=='faild'){echo 'block';}else{echo 'none';} ?>;'>One Or More Of Your Data Are Faild ....</div>
                    <div id='su_suces'class='col-11 row m-4 alert alert-success'style='display:<?php if(isset($msg) && $msg=='success'){echo 'block';}else{echo 'none';} ?>;'>your Have Signed In ...</div>
                </div>
                <div class='modal-body'> 
                    <div  class='form-group m-0 p-0'style=''>
                        <label class='pl-1 col-4'style='' for='first_name'>User Name<span>*</span></label>
                        <span class='err_msg' id='usrnm_msg1'><?php echo echo_session2('su_firstnm');?> </span>
                        <input class='form-control mb-1 endvldtn' type='text'   name='su_firstnm'id='su_firstnm'  value="<?php echo echo_session('su_firstnm'); ?>"  title="" >
                    </div>
                    <div  class='form-group m-0 p-0'style=''>
                        <label class='pl-1 col-4'style='' for='email'>Email Address<span>*</span></label>
                        <span class='err_msg' id='emil_msg1'><?php echo echo_session2('su_email');?> </span>
                        <input class='form-control mb-1 endvldtn' type='email'   name='su_email'   id='su_email'  value="<?php echo echo_session('su_email'); ?>"  title='' >
                    </div>
                    <div  class='form-group m-0 p-0'style=''>
                        <label class='pl-1 col-4'style='' for='phone_number'>Phone<span>*</span></label>
                        <span class='err_msg' id='phon_msg1'><?php echo echo_session2('su_phone');?> </span>
                        <input class='form-control mb-1 endvldtn' type='text'   name='su_phone'   id='su_phone' value="<?php echo echo_session('su_phone'); ?>"  title='' >
                    </div>
                    <div  class='form-group m-0 p-0'style=''>
                        <label class='pl-1 col-4'style='' for='pasword'>password<span>*</span></label>
                        <span class='err_msg' id='pswrd_msg1'><?php echo echo_session2('su_password');?> </span>
                        <input class='form-control mb-1 endvldtn' type='text'   name='su_password'   id='su_password'  title='' value="<?php echo echo_session('su_password'); ?>" >
                    </div><!---->
                    <div  class='form-group m-0 p-0'style=''>
                        <label class='pl-1 col-4'style='' for='cnfrmpwrd'>Re_password<span>*</span></label>
                        <span class='err_msg' id='rpswrd_msg1'><?php echo echo_session2('su_password2');?> </span>
                        <input class='form-control mb-1 endvldtn' type='text'   name='su_password2'  id='su_password2' title='' value="<?php echo echo_session('su_password2'); ?>"  >
                    </div>
                    <div class="form-group row p-0 m-0">
                        <div class='col-1 ml-3 p-0'><input class='form-control col-6 p-0' type="radio" name="su_optradio"value='female' <?php if(echo_session('su_optradio')=='female'){echo"checked";}?>></div><div class='col-2 pt-2'>Female</div>
						<div class='col-1 ml-3 p-0'><input class='form-control col-6 p-0' type="radio" name="su_optradio"value='male' <?php if(echo_session('su_optradio')=='male'){echo"checked";}?>></div><div class='col-1 pt-2'>Male</div>
						<div class='col-5 ml-3 p-0 pl-3 pt-2 '><?php echo echo_session2('su_optradio');?></div>
					</div>
                </div>  
                <div  class='modal-footer p-0 m-0 mr-3'style='border-top:0px;'>
                    <input type="submit" class="btn btn-info col-4"  name='su_submit' id='su_submit'value='Sign In'>
                </div>
            </form>

            </div>
        </div>
        
   <!-- Modal edit user data </div>-->
<?php include("../inc/footer.php"); ?>
<script>

$("document").ready(function(){
    $("#snup").addClass('active');    
});

</script>
    

