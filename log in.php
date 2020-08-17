<?php
    include_once "config/init.php";
    $login   = new login;
    $validat = new validation;
    
    if($login->check_login()!= false){
        $template = new template('helper/message.php');
        $template -> title = SITE_TITLE;
        unset($_SESSION['lg_form']);unset($_SESSION['lg_inpt']);//interesrt
        $template->mesage="<div class='col-12 row m-4  alert alert-success'>you are loged in log out if you need to log in to another account...</div>";
    }else{
        $template = new template('forms/log_in.php');
        $template -> title = SITE_TITLE;
    }
        
    //validate data
    $lg_submit=isset($_GET['lg_submit']) ? $_GET['lg_submit'] : null;
    if($lg_submit && $login->check_login()== false){
        $data=array();

        $lg_phone  =isset($_GET['lg_phone']) ? $_GET['lg_phone'] : null;
         $_SESSION['lg_form']['lg_phone'] = $lg_phone ;
        $lg_password=isset($_GET['lg_password']) ? $_GET['lg_password'] : null;
         $_SESSION['lg_form']['lg_password'] = $lg_password ;
        $lg_optradio=isset($_GET['lg_optradio']) ? $_GET['lg_optradio'] : null;
         $_SESSION['lg_form']['lg_optradio'] = $lg_optradio ;         
        $complete=0;

        $result = $validat-> count_exist($lg_phone,'visitor','phonnu') +  $validat-> count_exist($lg_phone,'users','phonnu');
        if($result!= '0' && $lg_phone != ''){
            $complete+=1;
            $data['phonnu']=$lg_phone;
            $_SESSION['lg_inpt']['lg_phone'] = $validat->vld_message('success');
        }elseif($lg_phone == ''){
            $_SESSION['lg_inpt']['lg_phone'] = $validat->vld_message('required');
        }else{
            $_SESSION['lg_inpt']['lg_phone'] = $validat->vld_message('danger','This Phone Number Isnt Exist ...');
       }

        if($lg_optradio == 'merchant' or $lg_optradio == 'byer'){
            $complete+=1;
            $data['lg_optradio']=$lg_optradio;
            $_SESSION['lg_inpt']['lg_optradio'] = '';//$validat->vld_message('success');
        }else{
            $_SESSION['lg_inpt']['lg_optradio'] = $validat->vld_message('danger','select user type ...');
       }
        $result = $validat-> count_exist($lg_password,'visitor','pasword') + $validat-> count_exist($lg_password,'users','pasword');
        if($result!= '0' && $lg_password != ''){
            $complete+=1;
            $data['pasword']=$lg_password;
            $_SESSION['lg_inpt']['lg_password'] = $validat->vld_message('success');
        }elseif($lg_password == ''){
            $_SESSION['lg_inpt']['lg_password'] = $validat->vld_message('required');
        }else{
            $_SESSION['lg_inpt']['lg_password'] = $validat->vld_message('danger','This Password Isnt Exist ...');
       }
       

        if($complete == '3'){
            $insert = $login->login($data);
            if($insert != 0){
              $template -> msg= 'success';
            }else{
              $template -> msg= 'faild';
            }
        }
        
    }
    //$template -> vldt_rslt=$_SESSION['lg_inpt']['lg_phone'];//$_SESSION['lg_form'];//$insert;//->login($data);
    echo $template;


?>