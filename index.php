<?php

    include_once "config/init.php";
    $validat = new validation;
    $login   = new login;
    $categories = new get_data;
    $template = new template('template/frontpage.php');
    $template -> allcats = $categories -> sub_categories_array();
    $template -> parnt_category = $categories -> get_parnt_categories();
    //$template -> vldt_rslt      =$login->usr_cty(); $validat->inpt_validate('01090925920','phone','11','11','no','phonnu');//$validat -> count_exist('eman','users','usernm');
    $template -> title = SITE_TITLE;
    /*$template -> sub_category   = $categories -> get_sub_categories(1);*/
    echo $template;

?>