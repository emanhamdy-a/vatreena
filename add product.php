<?php

    include_once "config/init.php";
    $validat = new validation;
    $login   = new login;
    $categories = new get_data;
    $add_prdct  = new add_data;
    if($login->check_login()){
      $template = new template('template/addproduct.php');
      $template -> allcats = $categories -> allsub_categories();
      $template -> parnt_category = $categories -> get_parnt_categories();
      $template -> title = SITE_TITLE;
      $ad_submit = isset($_POST['ad_submit']) ? $_POST['ad_submit'] : null;
      if($ad_submit){
        $data=array();
        $ad_imagenm =  $_FILES['ad_image']['name'];
        $ad_imageTmpName =  $_FILES['ad_image']['tmp_name'];
        $ad_color=$_POST['ad_color'];
        $ad_prdctnm=$_POST['ad_prdctnm'];
        $ad_size =$_POST['ad_size'];
        $ad_dscrptn=$_POST['ad_dscrptn'];
        $ad_sortct=$_POST['ad_sortct'];
        $ad_sortsb=$_POST['ad_sortsb'];
        $ad_pric=$_POST['ad_pric'];
        $ad_stok=$_POST['ad_stok'];
        $resualt=$validat->inpt_validate($ad_prdctnm,'awordnm','40','1');
        if($resualt == 'success'){
          $data['ad_prdctnm']=$ad_prdctnm;
        }
        $resualt=$validat->inpt_validate($ad_dscrptn,'apath','400','1');
        if($resualt == 'success'){
          $data['ad_dscrptn']=$ad_dscrptn;
        }
        $resualt=$validat->inpt_validate($ad_imageTmpName,'apath','110','1');
        if($resualt == 'success'){
          $data['ad_imagenm']=$ad_imagenm;
          $data['ad_imageTmpName']=$ad_imageTmpName;
        }//ad_imag
        $resualt=$validat->inpt_validate($ad_color,'word','10','3');
        if($resualt == 'success'){
          $data['ad_color']=$ad_color;
        }
        $resualt=$validat->inpt_validate($ad_size,'word','5','1');
        if($resualt == 'success'){
          $data['ad_size']=$ad_size;
        }
        $resualt=$validat->inpt_validate($ad_sortct,'numbers','1','1');
        if($resualt == 'success'){
          $data['ad_sortct']=$ad_sortct;
        }
        $resualt=$validat->inpt_validate($ad_sortsb,'numbers','2','1');
        if($resualt == 'success'){
          $data['ad_sortsb']=$ad_sortsb;
        }
        $resualt=$validat->inpt_validate($ad_pric,'numbers','8','1');
        if($resualt == 'success'){
          $data['ad_pric']=$ad_pric;
        }
        $resualt=$validat->inpt_validate($ad_stok,'numbers','6','1');
        if($resualt == 'success'){
          $data['ad_stok']=$ad_stok;
        }
        if(count($data)=='10'){
          $ad_result=$add_prdct->add_product($data);
          if($ad_result=='true'){
            $template -> msg='success';
          }else{
            $template -> msg='faild';
          }
        }else{
          $template -> msg='faild';
        }
        //$_POST=array();
      }
     // $template->vldt_rslt= $data['ad_prdctnm'];//count($data);//$add_prdct->move_image($data['ad_imagenm'],$data['ad_imageTmpName']);
      echo $template;      
    }else{
      $template = new template('helper/message.php');
      $template -> title = SITE_TITLE;
      $template->mesage="<div class='col-12 row m-4  alert alert-success'>please log in to edit your store ...</div>";
      echo $template;
    }


?>