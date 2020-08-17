<?php

    include_once "config/init.php";
    $login   = new login;
    $validat = new validation;
    $add_data   = new add_data;
    $get_data   = new get_data;
    
    if($login->check_login()!= false){
        $template = new template('helper/message.php');
        $template -> title = SITE_TITLE;
        $template->mesage="<div class='col-12 row m-4  alert alert-success'>your store have created log out to create or log in to another one ...</div>";
        unset($_SESSION['cs_form']);unset($_SESSION['cs_inpt']);
       // echo $template;
    }else{
        $template = new template('forms/crt_acnt.php');
        //$template -> parnt_category = $get_data -> get_parnt_categories();
        $template -> title = SITE_TITLE;
        $template -> gvrnts = $get_data -> get_any_tabel('ctys','parnt_id','0');
        $template -> ctys   = $get_data -> get_any_tabel('ctys','parnt_id','sub');
        //echo governates
       // $govern_id= isset($_SESSION['cs_form']['cs_gvrn']) ? $_SESSION['cs_form']['cs_gvrn'] : null;
        if(isset($govern_id)){
            $template -> gvrnts = $get_data -> get_any_tabel('ctys','parnt_id','0');
        }
    }

    
    //validate data
    $cs_submit=isset($_GET['cs_submit']) ? $_GET['cs_submit'] : null;
    if($cs_submit && ($login->check_login()== false  or $login->usr_typ()!='seler')){
        $data=array();

       // $cs_gvrn=isset($_GET['cs_gvrn']) ? $_GET['cs_gvrn'] : null;
       // $_SESSION['cs_form']['cs_gvrn'] = $cs_gvrn;
        $template -> gvrnts = $get_data -> get_any_tabel('ctys','parnt_id','0');
       // $template -> ctys   = $get_data -> get_any_tabel('ctys','parnt_id','sub');

        $cs_firstnm=isset($_GET['cs_firstnm']) ? $_GET['cs_firstnm'] : null;
         $_SESSION['cs_form']['cs_firstnm'] = $cs_firstnm ;
        $cs_storenm=isset($_GET['cs_storenm']) ? $_GET['cs_storenm'] : null;
         $_SESSION['cs_form']['cs_storenm'] = $cs_storenm ;
        $cs_adress =isset($_GET['cs_adress']) ? $_GET['cs_adress'] : null;
         $_SESSION['cs_form']['cs_adress'] = $cs_adress ;
        $cs_gvrn    =isset($_GET['cs_gvrn']) ? $_GET['cs_gvrn'] : null;
         $_SESSION['cs_form']['cs_gvrn'] = $cs_gvrn ;
        $cs_cty    =isset($_GET['cs_cty']) ? $_GET['cs_cty'] : null;
         $_SESSION['cs_form']['cs_cty'] = $cs_cty ;
        $cs_phone  =isset($_GET['cs_phone']) ? $_GET['cs_phone'] : null;
         $_SESSION['cs_form']['cs_phone'] = $cs_phone ;
        $cs_email  =isset($_GET['cs_email']) ? $_GET['cs_email'] : null;
         $_SESSION['cs_form']['cs_email'] = $cs_email ;
        $cs_password=isset($_GET['cs_password']) ? $_GET['cs_password'] : null;
         $_SESSION['cs_form']['cs_password'] = $cs_password ;
        $cs_password2=isset($_GET['cs_password2']) ? $_GET['cs_password2'] : null;
         $_SESSION['cs_form']['cs_password2'] = $cs_password2 ;
       $complete=0;
       $result = $validat->user_validate($cs_firstnm,'letters','30','4','usernm');
        if($result != 'success'){
            if($result != 'invalid'){
                $_SESSION['cs_inpt']['cs_firstnm'] = $validat->vld_message($result);
            }else{
                $_SESSION['cs_inpt']['cs_firstnm'] = $validat->vld_message('danger','letters only between 5 to 30 letter');
            }
        }else{
                $_SESSION['cs_inpt']['cs_firstnm'] = $validat->vld_message('success');
                $complete+=1;
                $data['usernm']=$cs_firstnm;
        } 

        $result = $validat->inpt_validate($cs_storenm,'string','30','5','no','no');
        if($result != 'success'){
             if($result != 'invalid'){
                 $_SESSION['cs_inpt']['cs_storenm'] = $validat->vld_message($result);
             }else{
                 $_SESSION['cs_inpt']['cs_storenm'] = $validat->vld_message('danger','only like A-Za-z 0-9 between 5 to 30');
             }
        }else{
                 $_SESSION['cs_inpt']['cs_storenm'] = $validat->vld_message('success');
                 $complete+=1;
                 $data['storenm']=$cs_storenm;
        }

        $result = $validat->user_validate($cs_email,'email','25','5','email');
       // $template->result=$result;
        if($result != 'success'){
             if($result != 'invalid'){
                 $_SESSION['cs_inpt']['cs_email'] = $validat->vld_message($result);
             }else{
                 $_SESSION['cs_inpt']['cs_email'] = $validat->vld_message('danger','enter valid email like aa@aa.aa');
             }
        }else{
                 $_SESSION['cs_inpt']['cs_email'] = $validat->vld_message('success');
                 $complete+=1;
                 $data['email']=$cs_email;
        }

        $result = $validat->user_validate($cs_phone,'phone','11','11','phonnu');
        if($result != 'success'){
             if($result != 'invalid'){
                 $_SESSION['cs_inpt']['cs_phone'] = $validat->vld_message($result);
             }else{
                 $_SESSION['cs_inpt']['cs_phone'] = $validat->vld_message('danger','enter 11 number');
             }
        }else{
                 $_SESSION['cs_inpt']['cs_phone'] = $validat->vld_message('success');
                 $complete+=1;
                 $data['phonnu']=$cs_phone;
        }

        $result = $validat->user_validate($cs_password,'password','30','8','pasword');
        if($result != 'success'){
             if($result != 'invalid'){
                 $_SESSION['cs_inpt']['cs_password'] = $validat->vld_message($result);
             }else{
                 $_SESSION['cs_inpt']['cs_password'] = $validat->vld_message('danger','enter < 8 , > 50 Number ,A-Z ,a-z');
             }
        }else{
                 $_SESSION['cs_inpt']['cs_password'] = $validat->vld_message('success');
                 $complete+=1;
                 $data['pasword']=$cs_password;
       }

        $result = $validat->user_validate($cs_password2,'password','30','8','pasword');
        if($result != 'success'){
             if($result != 'invalid'){
                 $_SESSION['cs_inpt']['cs_password2'] = $validat->vld_message($result);
             }else{
                 $_SESSION['cs_inpt']['cs_password2'] = $validat->vld_message('danger','enter < 8 , > 50 Number ,A-Z ,a-z');
             }
        }elseif($result == 'success' && $cs_password == $cs_password2){
                 $_SESSION['cs_inpt']['cs_password2'] = $validat->vld_message('success');
                 $complete+=1;
        }elseif($result == 'success' && $cs_password != $cs_password2){
            $_SESSION['cs_inpt']['cs_password2'] = $validat->vld_message('danger','coniferm password ...');
        }

        $result = $validat->inpt_validate($cs_gvrn,'numbers','4','1');
        if($result == 'success' && $cs_gvrn != '0'){
            $complete+=1;
            $data['gvrn_id']=$cs_gvrn;
        }
        $result = $validat->inpt_validate($cs_cty,'numbers','4','1');
        if($result == 'success' && $cs_cty != '0'){///interest
            $complete+=1;
            $data['cty_id']=$cs_cty;
        }

        $result = $validat->inpt_validate($cs_adress,'string','400','10');
        if($result != 'success'){
             if($result != 'invalid'){
                 $_SESSION['cs_inpt']['cs_adress'] = $validat->vld_message($result);
             }else{
                 $_SESSION['cs_inpt']['cs_adress'] = $validat->vld_message('danger','enter letters, numbers between 20 to 200');
             }
        }else{
                 $_SESSION['cs_inpt']['cs_adress'] = $validat->vld_message('success');
                 $complete+=1;
                 $data['adrs']=$cs_adress;
        }

        if($complete == '9'){
            $insert = $add_data->create_store($data);
            if($insert != 0){
              $template -> msg= 'success';
              //$template -> vldt_rslt= $complete;    
            }else{
              $template -> msg= 'faild';
            }
        }
        $template -> vldt_rslt=isset($_SESSION['logn']['user_tybe']) ? $_SESSION['logn']['user_tybe'] : null ;

    }
    //$template -> vldt_rslt=$login->usr_typ();
    echo $template;


?>