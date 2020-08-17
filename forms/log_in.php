   <!-- Modal add new user <div class="modal fade" id="rgstr_modal" tabindex="-1" role="dialog" aria-labelledby="rgstr_modal" aria-hidden="true">-->
   <?php include("../inc/header.php"); ?>
        <?php
            function  echo_session($inpt_nm){
                if(isset($_SESSION['lg_form'][$inpt_nm]) && $_SESSION['lg_form'][$inpt_nm] != ''){
                    return $_SESSION['lg_form'][$inpt_nm];unset($_SESSION['lg_form'][$inpt_nm]);
                }
            }
            function  echo_session2($inpt_nm){
                if(isset($_SESSION['lg_inpt'][$inpt_nm]) && $_SESSION['lg_inpt'][$inpt_nm] != ''){
                    return $_SESSION['lg_inpt'][$inpt_nm];unset($_SESSION['lg_inpt'][$inpt_nm]);
                }
            }
        ?>
        <div class="modal-dialog" role="document">
            <div class="modal-content"id='ad_user_cntnr'>

            <form action='log in.php' id='form2' method='get' class='checkout-form '>
                <div  class='modal-header mb-3 p-0'>
                    <div id='lg_fld' class='col-11 row m-4  alert alert-danger'style='display:<?php if(isset($msg) && $msg=='faild'){echo 'block';}else{echo 'none';} ?>;'>One Or More Of Your Data Are Faild ....</div>
                    <div id='lg_lgces'class='col-11 row m-4 alert alert-success'style='display:<?php if(isset($msg) && $msg=='success'){echo 'block';}else{echo 'none';} ?>;'>your Are Loged In ...</div>
                </div>
                <div class='modal-body'> 
                    <div  class='form-group m-0 p-0'style=''>
                        <label class='pl-1 col-4'style='' for='phone_number'>Phone<span>*</span></label>
                        <span class='err_msg' id='phon_msg1'><?php echo echo_session2('lg_phone');?> </span>
                        <input class='form-control mb-1 endvldtn' type='text'   name='lg_phone'   id='lg_phone' value="<?php echo echo_session('lg_phone'); ?>"  title='' >
                    </div>
                    <div  class='form-group m-0 p-0'style=''>
                        <label class='pl-1 col-4'style='' for='pasword'>password<span>*</span></label>
                        <span class='err_msg' id='pswrd_msg1'><?php echo echo_session2('lg_password');?> </span>
                        <input class='form-control mb-1 endvldtn' type='text'   name='lg_password'   id='lg_password'  title='' value="<?php echo echo_session('lg_password'); ?>" >
                    </div>
                   <div class="form-group row p-0 m-0">
                        <div class='col-1 ml-3 p-0'><input class='form-control col-6 p-0' type="radio" name="lg_optradio"value='merchant' <?php if(echo_session('lg_optradio')=='merchant'){echo"checked";}?>></div><div class='col-2 p-0 pt-2 '>Merchant</div>
						<div class='col-1 ml-3 p-0'><input class='form-control col-6 p-0' type="radio" name="lg_optradio"value='byer' <?php if(echo_session('lg_optradio')=='byer'){echo"checked";}?>></div><div class='col-1 p-0 pt-2 '>Byer</div>
						<div class='col-5 ml-3 p-0 pl-3 pt-2 '><?php echo echo_session2('lg_optradio');?></div>
					</div> <!---->
                </div>  
                <div  class='modal-footer p-0 m-0 mr-3'style='border-top:0px;'>
                    <input type="submit" class="btn btn-info col-4"  name='lg_submit' id='lg_submit'value='Log In'>
                </div>
            </form>

            </div>
        </div>
        
   <!-- Modal edit user data </div>-->
<?php include("../inc/footer.php"); ?>
<script>

$("document").ready(function(){
    $("#log").addClass('active');   // alert('ytr');
});

</script>
    

