<?php

    include_once "config/init.php";
    $login   = new login;
    $cat_prdct = new get_data;
    //$cats = new get_data;
      $template = new template('template/productDetails.php');
      $template -> allcats = $cat_prdct -> allsub_categories();
      $template -> parnt_category = $cat_prdct -> get_parnt_categories();
      $userId = isset($_GET['userId']) ? $_GET['userId'] : null;
      $prdctId = isset($_GET['prdctId']) ? $_GET['prdctId'] : null;
      $template -> userId=$userId;
      $cu_submit = isset($_GET['cu_submit']) ? $_GET['cu_submit'] : null;
      if($cu_submit){
        $filter=array();
        $_SESSION['cu_cat']['cu_color']=$_GET['cu_color'];
        $_SESSION['cu_cat']['cu_size']=$_GET['cu_size'];
        $_SESSION['cu_cat']['cu_sortct']=$_GET['cu_sortct'];
        $_SESSION['cu_cat']['cu_sortsb']=$_GET['cu_sortsb'];
        $_SESSION['cu_cat']['cu_mxpric']=$_GET['cu_mxpric'];
        $_SESSION['cu_cat']['cu_mnpric']=$_GET['cu_mnpric'];
        $_SESSION['cu_cat']['cu_sortdt']=$_GET['cu_sortdt'];
        $_SESSION['cu_cat']['cu_sortvw']=$_GET['cu_sortvw'];
        $filter['cu_size']   = !empty($_GET['cu_size'])  ?  $_GET['cu_size'] : "%%";
        $filter['cu_color']  = !empty($_GET['cu_color']) ?  $_GET['cu_color'] : "%%";
        $filter['cu_sortct'] = !empty($_GET['cu_sortct']) ? $_GET['cu_sortct'] : "%%";
        $filter['cu_sortsb'] = !empty($_GET['cu_sortsb']) ? $_GET['cu_sortsb'] : "%%";
        $filter['cu_sortdt'] = !empty($_GET['cu_sortdt']) ? $_GET['cu_sortdt'] : 'desc' ;
        $filter['cu_sortvw'] = !empty($_GET['cu_sortvw']) ? $_GET['cu_sortvw'] : '9';
        $filter['cu_pric']   = !empty($_GET['cu_mxpric']) && !empty($_GET['cu_mnpric']) ? 'BETWEEN ' . $_GET['cu_mnpric'] . ' AND ' . $_GET['cu_mxpric'] : "pric != ''";
       $template -> products = $cat_prdct -> user_products($userId,$filter);
       //$template -> vldt_rslt      = $_SESSION['cu_cat'];
       $template -> title = SITE_TITLE;
       echo $template;      
      }else{
       unset($_SESSION['cu_cat']);
       $template -> products = $cat_prdct -> user_products($userId);
      $productD= $template -> productD = $cat_prdct  -> productD($prdctId);
    //    $template -> result =$productD[0]->id;
       $template -> title = SITE_TITLE;
       echo $template;          
      }



?>