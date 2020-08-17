<?php

    include_once "config/init.php";
    $login   = new login;
    $validat = new validation;
    $get_data   = new get_data;
    
    if($login->check_login()!= false){
        $template = new template('helper/message.php');
        unset($_SESSION['su_form']);unset($_SESSION['su_inpt']);//interesrt
        $template -> title = SITE_TITLE;
        $template->mesage="<div class='col-12 row m-4  alert alert-success'>you are signed up log out to sign up to another account...</div>";
    }else{
        $template = new template('forms/signup.php');
        $template -> title = SITE_TITLE;
    }
    
    //validate data
    $su_submit=isset($_GET['su_submit']) ? $_GET['su_submit'] : null;
    if($su_submit && $login->check_login()== false){
        $data=array();

        $su_firstnm=isset($_GET['su_firstnm']) ? $_GET['su_firstnm'] : null;
         $_SESSION['su_form']['su_firstnm'] = $su_firstnm ;
        $su_phone  =isset($_GET['su_phone']) ? $_GET['su_phone'] : null;
         $_SESSION['su_form']['su_phone'] = $su_phone ;
        $su_email  =isset($_GET['su_email']) ? $_GET['su_email'] : null;
         $_SESSION['su_form']['su_email'] = $su_email ;
        $su_password=isset($_GET['su_password']) ? $_GET['su_password'] : null;
         $_SESSION['su_form']['su_password'] = $su_password ;
         $su_password2=isset($_GET['su_password2']) ? $_GET['su_password2'] : null;
         $_SESSION['su_form']['su_password2'] = $su_password2 ;
        $su_optradio=isset($_GET['su_optradio']) ? $_GET['su_optradio'] : null;
         $_SESSION['su_form']['su_optradio'] = $su_optradio ;
        $complete=0;
       $result = $validat->user_validate($su_firstnm,'letters','30','4','usernm');
       $result = $validat->user_validate($su_firstnm,'letters','30','4','usernm');
        if($result != 'success'){
            if($result != 'invalid'){
                $_SESSION['su_inpt']['su_firstnm'] = $validat->vld_message($result);
            }else{
                $_SESSION['su_inpt']['su_firstnm'] = $validat->vld_message('danger','letters only between 5 to 30 letter');
            }
        }else{
                $_SESSION['su_inpt']['su_firstnm'] = $validat->vld_message('success');
                $complete+=1;
                $data['usernm']=$su_firstnm;
        } 

        $result = $validat->user_validate($su_email,'email','25','5','email');
        if($result != 'success'){
             if($result != 'invalid'){
                 $_SESSION['su_inpt']['su_email'] = $validat->vld_message($result);
             }else{
                 $_SESSION['su_inpt']['su_email'] = $validat->vld_message('danger','enter valid email like aa@aa.aa');
             }
        }else{
                 $_SESSION['su_inpt']['su_email'] = $validat->vld_message('success');
                 $complete+=1;
                 $data['email']=$su_email;
        }

        $result = $validat->user_validate($su_phone,'phone','11','11','phonnu');
        if($result != 'success'){
             if($result != 'invalid'){
                 $_SESSION['su_inpt']['su_phone'] = $validat->vld_message($result);
             }else{
                 $_SESSION['su_inpt']['su_phone'] = $validat->vld_message('danger','enter 11 number');
             }
        }else{
                 $_SESSION['su_inpt']['su_phone'] = $validat->vld_message('success');
                 $complete+=1;
                 $data['phonnu']=$su_phone;
        }

        $result = $validat->user_validate($su_password,'password','30','8','pasword');
        if($result != 'success'){
             if($result != 'invalid'){
                 $_SESSION['su_inpt']['su_password'] = $validat->vld_message($result);
             }else{
                 $_SESSION['su_inpt']['su_password'] = $validat->vld_message('danger','enter < 8 , > 50 Number ,A-Z ,a-z');
             }
        }else{
                 $_SESSION['su_inpt']['su_password'] = $validat->vld_message('success');
                 $complete+=1;
                 $data['pasword']=$su_password;
       }
       
        $result = $validat->user_validate($su_password2,'password','30','8','pasword');
        if($result != 'success'){
             if($result != 'invalid'){
                 $_SESSION['su_inpt']['su_password2'] = $validat->vld_message($result);
             }else{
                 $_SESSION['su_inpt']['su_password2'] = $validat->vld_message('danger','enter < 8 , > 50 Number ,A-Z ,a-z');
             }
        }elseif($result == 'success' && $su_password == $su_password2){
                 $_SESSION['su_inpt']['su_password2'] = $validat->vld_message('success');
                 $complete+=1;
        }elseif($result == 'success' && $su_password != $su_password2){
            $_SESSION['su_inpt']['su_password2'] = $validat->vld_message('danger','coniferm password ...');
        }
        if($su_optradio == 'female' or $su_optradio =='male'){
            $_SESSION['su_inpt']['su_optradio'] = '';//$validat->vld_message('success');
            $complete+=1;
            $data['su_optradio']=$su_optradio;
        }else{
            $_SESSION['su_inpt']['su_optradio'] = $validat->vld_message('danger','Choose Gender ...');
       }

        if($complete == '6'){
            $insert = $get_data->create_byer($data);
            if($insert != 0){
              $template -> msg= 'success';
              $template -> vldt_rslt= $complete;    
            }else{
              $template -> msg= 'faild';
            }
        }
        
    }
    //usr_nm()$su_optradio;//;isset($_SESSION['logn']['user_tybe']) ? $_SESSION['logn']['user_tybe'] : null ;
    $template -> vldt_rslt=$login->usr_phon();
    echo $template;


?>