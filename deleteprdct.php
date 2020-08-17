<?php
    include_once "config/init.php";
    $login  = new login;
    $delete = new delete_data;
    $data   = new get_data;
    if($login->check_login()){
      $get_pid = isset($_GET['pid']) ? $_GET['pid'] : null;
      $usr_id= $data -> get_any_tabel('prdct','id',$get_pid);
      if($login->usr_id() == $usr_id[0]->userid){
        $u= $delete->delete_prdct($get_pid);echo $u;
        header("location:my store.php");
      }else{
        header("location:index.php");
      }
    }else{
      header("location:index.php");
    }
?>