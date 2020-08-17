<?php include("../func/function.php");?>
<?php 
 include_once "../lib/login.php";
 $log_n = new login;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php //echo $allcats; ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    
</head>

<body>

    <!-- Header Section Begin -->
    <header id='header' class="header-section mt-4">
         <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2"style='margin-right: 40px;'>
                        <div class="logo">
                            <a href="index.php">
                            <?php
                                if(isset($message) && $message !=''){
                                    echo $message;
                                }
                                ?>
                                <?php if(isset($result)){
                                    print_r($result);
                                }?>
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- search -->
                    <div class="col-lg-8 col-md-8 p-0"style=''>
                    <?php //include("../inc/search_form.php"); ?>

                    </div>
                    <div class="col-lg-1 text-right col-md-1"style=''>
                        <ul class="nav-right">
                            <li class="heart-icon" style="float:right;">
                              <?php //echo $log_n->echo_favorit_icon();?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
                <nav class="nav-menu mobile-menu"style='margin:auto;border:0px solid white;'>
                    <ul >
                        <li id='hom' style='border-left:1px solid #3b3b3b;'><a href='index.php'>Home</a></li>
                        <li id='cats'><a href='categories.php'>Categories</a></li>
                        <li id='myacont'> <?php echo $log_n->echo_myaccount(); ?></li>
                        <li id='crtacont'><?php echo $log_n->echo_creatacount();//<a href="create account.php">create account</a>?> </li>
                        <li id='snup'> <?php echo $log_n->echo_regester(); ?> </li>
                        <li id='favort'>     <?php echo $log_n->echo_favorit(); ?> </li>     
                        <!-- <li id='search_link'><a href="search.php?pag=nowrd">Search</a></li> -->
                        <li id='log'>     <?php echo $log_n->echo_logout_or_logn(); ?> </li> 
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>

    <?php //include("includes/create_account.php"); ?>
    <?php // include("includes/signup.php"); ?>
    <?php // include("includes/.php"); ?>
    
    <div id='main_cntnr'>
    <!-- Header End -->
   