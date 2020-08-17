<?php

    include_once "config/init.php";
    $login   = new login;
    $cat_prdct = new get_data;

    $template = new template('template/cats.php');
      $template -> allcats = $cat_prdct -> allsub_categories();
      $template -> parnt_category = $cat_prdct -> get_parnt_categories();
      $ct_submit = isset($_GET['ct_submit']) ? $_GET['ct_submit'] : null;
      $cid = isset($_GET['cid']) ? $_GET['cid'] : "%%";
      $pid = isset($_GET['pid']) ? $_GET['pid'] : "%%";
      if($ct_submit){
        $filter=array();
        $_SESSION['ct_cat']['ct_color']=$_GET['ct_color'];
        $_SESSION['ct_cat']['ct_size']=$_GET['ct_size'];
        $_SESSION['ct_cat']['ct_sortct']=$_GET['ct_sortct'];
        $_SESSION['ct_cat']['ct_sortsb']=$_GET['ct_sortsb'];
        $_SESSION['ct_cat']['ct_mxpric']=$_GET['ct_mxpric'];
        $_SESSION['ct_cat']['ct_mnpric']=$_GET['ct_mnpric'];
        $_SESSION['ct_cat']['ct_sortdt']=$_GET['ct_sortdt'];
        $_SESSION['ct_cat']['ct_sortvw']=$_GET['ct_sortvw'];
        $filter['cu_size']   = !empty($_GET['ct_size'])  ?  $_GET['ct_size'] : "%%";
        $filter['cu_color']  = !empty($_GET['ct_color']) ?  $_GET['ct_color'] : "%%";
        $filter['cu_sortct'] = !empty($_GET['ct_sortct']) ? $_GET['ct_sortct'] : "%%";
        $filter['cu_sortsb'] = !empty($_GET['ct_sortsb']) ? $_GET['ct_sortsb'] : "%%";
        $filter['cu_sortdt'] = !empty($_GET['ct_sortdt']) ? $_GET['ct_sortdt'] : 'desc' ;
        $filter['cu_sortvw'] = !empty($_GET['ct_sortvw']) ? $_GET['ct_sortvw'] : '9';
        $filter['cu_mxpric']   = !empty($_GET['ct_mxpric'])?$_GET['ct_mxpric'] : "99999999";
        $filter['cu_mnpric']   = !empty($_GET['ct_mnpric'])?$_GET['ct_mnpric']: "1";
        //$filter['cu_mxpric']   = !empty($_GET['ct_mxpric']) && !empty($_GET['ct_mnpric']) ? 'BETWEEN ' . $_GET['ct_mnpric'] . ' AND ' . $_GET['ct_mxpric'] : "pric != ''";
       $template -> products = $cat_prdct -> cats_products($filter);
       //$template -> vldt_rslt =$_SESSION['ct_cat']['ct_sortvw'];
       $template -> title = SITE_TITLE;
       echo $template;      
      }elseif($cid){
        $filter=array();

        $filter['cu_sortct'] = isset($_GET['cid']) ? $_GET['cid'] : "%%";
        $filter['cu_sortsb'] = isset($_GET['pid']) ? $_GET['pid'] : "%%";
        $filter['cu_color']  = isset($_GET['ct_color']) ?  $_GET['ct_color'] : "%%";
        $filter['cu_size']   = isset($_GET['ct_size'])  ?  $_GET['ct_size'] : "%%";
        $filter['cu_sortdt'] = isset($_GET['ct_sortdt']) ? $_GET['ct_sortdt'] : 'desc' ;
        $filter['cu_sortvw'] = isset($_GET['ct_sortvw']) ? $_GET['ct_sortvw'] : '9';
        $filter['cu_mxpric'] = isset($_GET['ct_mxpric'])?$_GET['ct_mxpric'] : "99999999";
        $filter['cu_mnpric'] = isset($_GET['ct_mnpric'])?$_GET['ct_mnpric']: "1";       $template -> products = $cat_prdct -> cats_products($filter);
        //$template -> vldt_rslt =$cid . '<br>' . $pid;//$_SESSION['ct_cat'];
       $template -> title = SITE_TITLE;
       echo $template; 
      }else{
       unset($_SESSION['ct_cat']);
       $template -> products = $cat_prdct -> cats_products();
       //$template -> vldt_rslt =$_SESSION['ct_cat'];
       $template -> title = SITE_TITLE;
       echo $template;          
      }



?>