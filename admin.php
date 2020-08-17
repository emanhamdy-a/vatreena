<?php
 include_once "config/init.php";
 $validat = new validation;
 $template = new template('template/admin_page.php');
 $template -> pass = $validat -> newfeild('id','26');
 echo $template;


 /*if($category){
    $template -> jobs = $job -> getbycategory($category);
    $template -> title ='Job In ' . $job->getcategory($category)->name;
 }else{
    $template -> title ='Latest Job';
    $template -> jobs = $job -> getalljobs();
 }*/
?>
