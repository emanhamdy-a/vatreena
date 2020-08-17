<?php 

    function check_logn()
        {
            if(isset($_SESSION['logn']['login-result']) AND $_SESSION['logn']['login-result']='yeas')
                {
                    return true;
                }
                 else
                {
                    return false;
                }    
        } 

////////////////////////////////userid////////////////////
 function user_id()
  {
    if(check_logn() == true)
    {
      return  $_SESSION['logn']['user_id'];  
    }   
    else {return false;} 
  } 
//////////////////////////////check--favorit///////////////////
  function check_favorit($prdctid){
    if(check_logn() && usr_typ() == 'byer'){
      $usr_fvrt_id=user_id(); 
      $db=connect_to_database();
      $sqll="SELECT * FROM favorit WHERE prdct_id =$prdctid AND userid = $usr_fvrt_id";
      $favrt=@mysqli_query($db,$sqll); 
      $n_fvrt=@mysqli_num_rows($favrt);
      if($n_fvrt > 0){
          echo"
          <div id='$prdctid'class='ad_fvrt icon'style='cursor:pointer;color:darkorange;font-weight:1000;font-size:28px;'>
          <i class='icon_heart_alt'></i>
          </div>";
      }else{
          echo"
          <div id='$prdctid'class='ad_fvrt icon'style='cursor:pointer;font-weight:1000;font-size:28px;'>
          <i class='icon_heart_alt'></i>
          </div>";
      }     
    }elseif(check_logn() && usr_typ() != 'byer'){
          echo"";
    }else{
          echo"
          <div id='$prdctid' data-toggle='modal' data-target='#login_modal' class='icon fvrt_icon'style='cursor:pointer;font-weight:1000;font-size:28px;'>
          <i class='icon_heart_alt'></i>
          </div>";
      }
   }

   ///////////////////////////////echo_add_rspnd_btn//////////////////////////////
   function echo_add_rspnd_btn(){
    if(check_logn() == true && usr_typ() =='dress_maker'){
      echo"data-toggle='modal' data-target='#ad_rspnds_cntnr'";
    }elseif(check_logn() == true && usr_typ() !='dress_maker'){
      echo"data-toggle='modal' data-target='#warning_modal'";      
    }else{
      echo"data-toggle='modal' data-target='#login_modal'";
    }
   }
  ///////////////////////////////echo_add_rspnd_btn//////////////////////////////
   function echo_add_ordr_btn(){
    if(check_logn() == true && usr_typ() =='byer'){
      echo"data-toggle='modal' data-target='#ad_order_contner'";
    }elseif(check_logn() == true && usr_typ() !='byer'){
      echo"data-toggle='modal' data-target='#warningmodal'";      
    }else{
      echo"data-toggle='modal' data-target='#login_modal'";
    }
   }
   ////////////////////////////////usertype/////////////////////
   function usr_typ()
    {
      if(check_logn() == true)
      {
      return  $_SESSION['logn']['usr_typ'];               
      }   
      else {return false;} 
    }
///////////////////////////////echo--regester////////////////
   function echo_regester()
   {
    if(check_logn())
    {
      echo "";
    }
    else
    {
      echo "<a href='sign up.php'>Sign Up</a>"; //"<a style='cursor:pointer;'data-toggle='modal' data-target='#rgstr_modal'>Register</a> ";
    }
   }
///////////////////////////////echo--regester/end///////////////

///////////////////////////////echo--create acount////////////////
   function echo_creatacount(){
    if(check_logn() == true && usr_typ() =='seler'){
      echo "";
    }
    elseif(check_logn() == true && usr_typ() =='byer'){
      echo "<a href='create account.php'>create account</a>";//"<a style='cursor:pointer;'data-toggle='modal' data-target='#crt_acnt_modal'>Create Account</a>";
    }
    elseif(check_logn() == true && usr_typ() =='admin'){
      echo "";
    }
    elseif(check_logn() == false)
      echo "<a href='create account.php'>create account</a>";//"<a style='cursor:pointer;'data-toggle='modal' data-target='#crt_acnt_modal'>Create Account</a>";
    else{
      echo "";
     }
   }
///////////////////////////////echo--create account/end///////////////   

///////////////////////////////echo--myaccount///////////////
  function echo_myaccount()
   {
      if(check_logn() == true && usr_typ() =='seler'){
        echo "<a href='myaccount.php'>" . user_nm() . " store</a>";
      }elseif(check_logn() == true && usr_typ() =='admin'){
        echo "<a href='admin.php'>Admin</a>"; 
      }elseif(check_logn() == true && usr_typ() =='byer'){
        echo "";
      }elseif(check_logn() == true && usr_typ() =='dress_maker'){
        echo "<a href='dress_maker.php'>" . user_nm() . " Atelier</a>"; 
      }
      else
      {
        echo "";
      }
   }
/////////////////////////////////////////////////////////////
   function echo_favorit()
   {
      if(check_logn() == true && usr_typ() == 'byer' ){
        echo " <a href='favorites.php' class='fav-nav'>Favourites_Orders</a>";
      }
      else{
        echo "";
      }
   }
///////////////////////////////////////////////////////////
   function echo_favorit_icon()
   {
     if(check_logn() == true && usr_typ() == 'byer' ) {
        echo "
            <a href='favorites.php' >
            <i style=''class='icon_heart_alt'></i>
            <span id='fvrt_nm'>0</span>
            </a>
            ";
      }elseif(check_logn() == true && usr_typ() != 'byer' ){
        echo "";
      }else{
        echo "<a href='favorites.php' data-toggle='modal' data-target='#login_modal'>
              <i style=''class='icon_heart_alt'></i>
              <span id='fvrt_nm'>0</span>
              </a>";
      }
   }   
////////////////////////////////usertype////////////////////
   function user_nm()
   {
    if(check_logn() == true)
    {
      return $_SESSION['logn']['user_nm'];               

    }   
    else {return false;} 
   } 
///////////////////////////////user//phone///////////////////
   function user_phon()
   {
    if(check_logn() == true)
    {
      return  $_SESSION['logn']['user_phone'];  
    }   
    else {return false;} 
   }
//////////////////////////////////user//company////////////////////////////
   function user_cmpny()
   {
    if(check_logn() == true)
    {
      return  $_SESSION['logn']['companynm'];  
    }   
    else {return false;} 
   }  
////////////////////////////////user//adress////////////////////////////
   function user_adrs()
   {
      if(check_logn() == true)
      {
        return  $_SESSION['logn']['user_adrs'];  
      }   
      else {return false;} 
    }  
//////
   function outputMessage($msg='',$type='success')
    {
        ECHO "
                <div id='eror_msg' class='col-12 row mt-2 mr-0 ml-0  alert alert-{$type}'>{$msg}</div>
            ";
    }
?>