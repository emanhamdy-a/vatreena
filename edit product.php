<?php

    include_once "config/init.php";
    $validat = new validation;
    $login   = new login;
    $cats_prdcts = new get_data;
    $update_prdct  = new update_data;
    if($login->check_login()){
      $template = new template('template/editproduct.php');
    /*
      $_SESSION['edt_form']['edt_color']  =$_POST['edt_color'];
      $_SESSION['edt_form']['edt_prdctnm']=$_POST['edt_prdctnm'];
      $_SESSION['edt_form']['edt_size']   =$_POST['edt_size'];
      $_SESSION['edt_form']['edt_dscrptn']=$_POST['edt_dscrptn'];
      $_SESSION['edt_form']['edt_sortct'] =$_POST['edt_sortct'];
      $_SESSION['edt_form']['edt_sortsb'] =$_POST['edt_sortsb'];
      $_SESSION['edt_form']['edt_pric']   =$_POST['edt_pric'];
      $_SESSION['edt_form']['edt_stok']   =$_POST['edt_stok'];
    */
      $template -> allcats    = $cats_prdcts -> allsub_categories();
      $template -> parnt_category = $cats_prdcts -> get_parnt_categories();
      $template -> title = SITE_TITLE;
      $edt_submit = isset($_POST['edt_submit']) ? $_POST['edt_submit'] : null;
      if($edt_submit){
        $data=array();
        $get_pid = isset($_POST['pid']) ? $_POST['pid'] : null;
        $prdct_data= $cats_prdcts -> get_any_tabel('prdct','id',$get_pid);
        $edt_imagenm =  $_FILES['edt_image']['name'];
        $edt_imageTmpName =  $_FILES['edt_image']['tmp_name'];
        $edt_color=$_POST['edt_color'];
        $edt_prdctnm=$_POST['edt_prdctnm'];
        $edt_size =$_POST['edt_size'];
        $edt_dscrptn=$_POST['edt_dscrptn'];
        $edt_sortct=$_POST['edt_sortct'];
        $edt_sortsb=$_POST['edt_sortsb'];
        $edt_pric=$_POST['edt_pric'];
        $edt_stok=$_POST['edt_stok'];
        $resualt=$validat->inpt_validate($edt_prdctnm,'awordnm','40','1');
        if($resualt == 'success'){
          $data['edt_prdctnm']=$edt_prdctnm;
        }
        $resualt=$validat->inpt_validate($edt_dscrptn,'apath','400','1');
        if($resualt == 'success'){
          $data['edt_dscrptn']=$edt_dscrptn;
        }
        if($edt_imagenm != ''){
          $resualt=$validat->inpt_validate($edt_imageTmpName,'apath','110','1');
          if($resualt == 'success'){
            $data['edt_imagenm']=$edt_imagenm;
            $data['edt_imageTmpName']=$edt_imageTmpName;
          }
        }else{
            $data['edt_imagenm']='0';
            $data['edt_imageTmpName']='0';          
        }

        $resualt=$validat->inpt_validate($edt_color,'word','10','3');
        if($resualt == 'success'){
          $data['edt_color']=$edt_color;
        }
        $resualt=$validat->inpt_validate($edt_size,'word','5','1');
        if($resualt == 'success'){
          $data['edt_size']=$edt_size;
        }
        $resualt=$validat->inpt_validate($edt_sortct,'numbers','1','1');
        if($resualt == 'success'){
          $data['edt_sortct']=$edt_sortct;
        }
        $resualt=$validat->inpt_validate($edt_sortsb,'numbers','2','1');
        if($resualt == 'success'){
          $data['edt_sortsb']=$edt_sortsb;
        }
        $resualt=$validat->inpt_validate($edt_pric,'numbers','8','1');
        if($resualt == 'success'){
          $data['edt_pric']=$edt_pric;
        }
        $resualt=$validat->inpt_validate($edt_stok,'numbers','6','1');
        if($resualt == 'success'){
          $data['edt_stok']=$edt_stok;
        }
        if(count($data)=='10'){
          $edt_result=$update_prdct->update_product($get_pid,$data);
          //$template->vldt_rslt= $edt_result;
          if($edt_result=='true'){
            $template -> msg='success';
            $get_pid = isset($_POST['pid']) ? $_POST['pid'] : null;
            $template -> getpid = isset($_POST['pid']) ? $_POST['pid'] : null;
            $prdct_data= $cats_prdcts -> get_any_tabel('prdct','id',$get_pid);
            $_SESSION['edt_form']['pid']  =$get_pid;
            $_SESSION['edt_form']['edt_color']  =$prdct_data[0]->color;
            $_SESSION['edt_form']['edt_prdctnm']=$prdct_data[0]->prdctnm;
            $_SESSION['edt_form']['edt_size']   =$prdct_data[0]->size;
            $_SESSION['edt_form']['edt_dscrptn']=$prdct_data[0]->dscrptn;
            $_SESSION['edt_form']['edt_sortct'] =$prdct_data[0]->cat_id;
            $_SESSION['edt_form']['edt_sortsb'] =$prdct_data[0]->sub_cat;
            $_SESSION['edt_form']['edt_pric']   =$prdct_data[0]->pric;
            $_SESSION['edt_form']['edt_stok']   =$prdct_data[0]->stock;
          }else{
            $template -> msg='faild';
          }
        }else{
          $template -> msg='faild';
        }
        //$_POST=array();
      }else{
        $get_pid = isset($_GET['pid']) ? $_GET['pid'] : null;
        $template -> getpid = isset($_GET['pid']) ? $_GET['pid'] : null;
        $prdct_data= $cats_prdcts -> get_any_tabel('prdct','id',$get_pid);
        $_SESSION['edt_form']['pid']  =$get_pid;
        $_SESSION['edt_form']['edt_color']  =$prdct_data[0]->color;
        $_SESSION['edt_form']['edt_prdctnm']=$prdct_data[0]->prdctnm;
        $_SESSION['edt_form']['edt_size']   =$prdct_data[0]->size;
        $_SESSION['edt_form']['edt_dscrptn']=$prdct_data[0]->dscrptn;
        $_SESSION['edt_form']['edt_sortct'] =$prdct_data[0]->cat_id;
        $_SESSION['edt_form']['edt_sortsb'] =$prdct_data[0]->sub_cat;
        $_SESSION['edt_form']['edt_pric']   =$prdct_data[0]->pric;
        $_SESSION['edt_form']['edt_stok']   =$prdct_data[0]->stock;
      }
      //$vdt_rslt=$cats_prdcts -> allsub_categories();//$_SESSION['edt_form']['edt_dscrptn'];//$update_prdct->move_image($data['edt_imagenm'],$data['edt_imageTmpName']);
     // $template->vldt_rslt=$vdt_rslt[33];//$_SESSION['edt_form']['edt_dscrptn'];//$update_prdct->move_image($data['edt_imagenm'],$data['edt_imageTmpName']);
      //$template->vldt_rslt= $cats_prdcts -> get_any_tabel('prdct','id',$get_pid);
      echo $template;      
    }else{
      $template = new template('helper/message.php');
      $template -> title = SITE_TITLE;
      $template->mesage="<div class='col-12 row m-4  alert alert-success'>please log in to edit your store ...</div>";
      echo $template;
    }


?>