<?php include('../func/function.php'); ?>
<?php

$lettr_only='/^[A-Za-z ]{3,15}+$/';//&& strlen($_GET['inptvl']) >8  
$letr_only='/^[A-Za-z ]{3,15}+$/';//&& strlen($_GET['inptvl']) >8  
$pswordonly='/^\S*(?=\S{9,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/';
$emailonly='/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,5}$/ix';
$phoneonly='/^[0-9]{11}+$/';
$birthonly='/^[0-3][0-9]\/[0-1][0-9]\/[0-9]{4}$/';

if(isset($_GET['pswrd']) && $_GET['pswrd'] != ""){$pswrd_vl = $_GET['pswrd'];}else{$pswrd_vl=' ';}
if(isset($_GET['formtyp']) && $_GET['formtyp'] != ""){$formtyp = $_GET['formtyp'];}else{$formtyp='aduser';}
if(isset($_GET['inptid']) && $_GET['inptid'] != ""){$inptid = $_GET['inptid'];}else{$inptid=' ';}
if(isset($_GET['inptvl']) && $_GET['inptvl'] != ""){$inptvl = $_GET['inptvl'];}else{$inptvl=' ';}
    ///// /////end main if

if($formtyp == 'aduser'){

    if($inptid === "first_name"){
        ///// ///////start first validation if 
      if(isset($_GET['inptvl'])     && $_GET['inptvl']!=''     && (newfeild('usernm',$_GET['inptvl'])) == 0  && !preg_match($lettr_only, $_GET['inptvl'])==false)
        {  
          $_SESSION['sucsess']['first_name']='first_name';
          echo "<span id='usrnm_msg' class='alert-success col-12 p-1 pl-5 pr-5 m-0'style='border-radius:4px;'>success</span>";
        }
      elseif(isset($_GET['inptvl']) && $_GET['inptvl'] !='' && (newfeild('usernm',$_GET['inptvl'])) > 0)
        {
          unset($_SESSION['sucsess']['first_name']);
          echo"<span class='p-2'></span>this is used user name <span class='p-2 pt-5 pb-5'></span>";
        }      
      elseif (isset($_GET['inptvl']) && $_GET['inptvl'] !='')
        {
          echo"<span class='p-2'></span>enter one word 3 to 15 lettrs only <span class='p-2 pt-5 pb-5'></span>";
        }     
      else
        {
            unset($_SESSION['sucsess']['first_name']);
            echo"<span class='p-2'></span>Please fill this field ... <span class='p-2 pt-5 pb-5'></span>";
        }
        ///// ///////end first validation if
    }elseif($inptid === "last_name"){
        ///// ///////start second validation if 
      if(isset($_GET['inptvl'])     && $_GET['inptvl']!='' && !preg_match($letr_only, $_GET['inptvl'])==false)
        {  
            $_SESSION['sucsess']['last_name']='last_name';
            echo "<span id='usrnm_msg' class='alert-success col-12 p-1 pl-5 pr-5 m-0'style='border-radius:4px;'>success</span>";
        }    
      elseif (isset($_GET['inptvl']) && $_GET['inptvl'] !='')
        {
            unset($_SESSION['sucsess']['last_name']);
            echo "<span class='p-2'></span>enter 3 word like noor hamdy ali < 41 letter <span class='p-2 pt-5 pb-5'></span>";
        }     
      else
        {
            unset($_SESSION['sucsess']['last_name']);
            echo"<span class='p-2'></span>please fill this field ...<span class='p-2 pt-5 pb-5'></span>";
        }
        ///// ///////end second validation if
    }elseif($inptid === "pasword"){
      ///// ///////start third validation if 
     if(isset($_GET['inptvl']) && $_GET["inptvl"]!='' && (newfeild('pasword',$_GET['inptvl'])) == 0 && strlen($_GET['inptvl']) > 8 && !preg_match($pswordonly, $_GET['inptvl'])==false )
      {  
        unset($_SESSION['sucsess']['cnfrmpwrd']);
        $_SESSION['sucsess']['pasword']='pasword';
        echo "<span id='usrnm_msg' class='alert-success col-12 p-1 pl-5 pr-5 m-0'style='border-radius:4px;'>success</span>";
      }
      elseif(isset($_GET['inptvl']) && $_GET['inptvl'] !='' && (newfeild('pasword',$_GET['inptvl'])) > 0)
      {
        unset($_SESSION['sucsess']['cnfrmpwrd']);
        unset($_SESSION['sucsess']['pasword']);
        echo"<span class='p-2'></span>this is used password please renter it <span class='p-2 pt-5 pb-5'></span>";
      }      
      elseif (isset($_GET['inptvl']) && $_GET["inptvl"] !='')
      {
        unset($_SESSION['sucsess']['cnfrmpwrd']);
        unset($_SESSION['sucsess']['pasword']);
        echo"<span class='p-2'></span>must at lest 9 numbers , capital , small letters <span class='p-2 pt-5 pb-5'></span>";
      }
      else
      {
        unset($_SESSION['sucsess']['cnfrmpwrd']);
        unset($_SESSION['sucsess']['pasword']);
        echo"<span class='p-2'></span>Please fill this field ... <span class='p-2 pt-5 pb-5'></span>";
      }
        ///// ///////end third validation if 
    }elseif($inptid === "cnfrmpwrd"){
      ///// ///////start 4th validation if 
     if(isset($_GET['inptvl']) && $_GET["inptvl"]!='' && (newfeild('pasword',$_GET['inptvl'])) == 0 &&  strlen($_GET['inptvl']) > 8 && $_GET["inptvl"] === $pswrd_vl && !preg_match($pswordonly, $pswrd_vl)==false)
      {  
        $_SESSION['sucsess']['cnfrmpwrd']='cnfrmpwrd';
        echo "<span id='usrnm_msg' class='alert-success col-12 p-1 pl-5 pr-5 m-0'style='border-radius:4px;'>success</span>";
        /* $count = count($_SESSION['sucsess']);
          echo $count;
          for($i=0;$i<=$count;$i++)
          {
            print_r("<span>" . $_SESSION['sucsess'] . "</span>");
          }*/
        }
      else if(isset($_GET['inptvl']) && $_GET['inptvl'] !='' && (newfeild('pasword',$_GET['inptvl'])) > 0)
      {
        unset($_SESSION['sucsess']['cnfrmpwrd']);
        echo "<span class='p-2'></span>invaild input confirm password <span class='p-2 pt-5 pb-5'></span>";
      }
      else if (isset($_GET['inptvl']) && $_GET["inptvl"] !='')
      {
        unset($_SESSION['sucsess']['cnfrmpwrd']);
        echo "<span class='p-2'></span>invaild input confirm password <span class='p-2 pt-5 pb-5'></span>";
      }    
      else
      { 
      unset($_SESSION['sucsess']['cnfrmpwrd']);
      echo"<span class='p-2'></span>Please fill this field ... <span class='p-2 pt-5 pb-5'></span>";
      } 
      ///// ///////end 4th validation if     

    }elseif($inptid === "phone_number"){
      ///// ///////start 5th validation if 
     if(isset($_GET['inptvl'])    && $_GET["inptvl"]!=''    && (newfeild('phonnu',$_GET['inptvl'])) == 0      && !preg_match($phoneonly, $_GET['inptvl'])==false )
      {  
        $_SESSION['sucsess']['phone_number']='phone_number';
        echo "<span id='usrnm_msg' class='alert-success col-12 p-1 pl-5 pr-5 m-0'style='border-radius:4px;'>success</span>";
      }
      elseif(isset($_GET['inptvl']) && $_GET['inptvl'] !='' && (newfeild('phonnu',$_GET['inptvl'])) > 0)
      {
        unset($_SESSION['sucsess']['phone_number']); 
        echo "<span class='p-2'></span>this is used phone number renter it <span class='p-2 pt-5 pb-5'></span>";
      }      
      elseif (isset($_GET['inptvl']) && $_GET["inptvl"] !='')
      {
        unset($_SESSION['sucsess']['phone_number']); 
        echo "<span class='p-2'></span>enter 11 number... <span class='p-2 pt-5 pb-5'></span>";
      }
      else
      {
        unset($_SESSION['sucsess']['phone_number']);
        echo"<span class='p-2'></span>Please fill this field ... <span class='p-2 pt-5 pb-5'></span>";
      } 
      ///// ///////end 5th validation if 
    }elseif($inptid === "email"){
      ///// ///////start 5th validation if 
     if(isset($_GET['inptvl'])    && $_GET["inptvl"]!=''    && (newfeild('email',$_GET['inptvl'])) == 0      && filter_var($_GET["inptvl"],FILTER_VALIDATE_EMAIL ) )// && !preg_match($emailonly, $_GET['inptvl'])==false )
      {  
        $_SESSION['sucsess']['email']='email';
        echo "<span id='usrnm_msg' class='alert-success col-12 p-1 pl-5 pr-5 m-0'style='border-radius:4px;'>success</span>";
      }
      else if(isset($_GET['inptvl']) && $_GET['inptvl'] !='' && (newfeild('email',$_GET['inptvl'])) > 0)
      {
        unset($_SESSION['sucsess']['email']);
        echo "<span class='p-2'></span>this is used email renter it <span class='p-2 pt-5 pb-5'></span>";
      }      
      else if (isset($_GET['inptvl']) && $_GET["inptvl"] !='')
      {
        unset($_SESSION['sucsess']['email']);
        echo "<span class='p-2'></span>enter like_edfs455SAA@gh5hg.com <span class='p-2 pt-5 pb-5'></span>";
      }     
      else
      {
        unset($_SESSION['sucsess']['email']);
        echo"<span class='p-2'></span>Please fill this field ... <span class='p-2 pt-5 pb-5'></span>";
      }
      ///// ///////end 5th validation if 

    }elseif($inptid === "submit"){
      ///// ///////start 4th validation if 
      $compelet=0;
      if(isset($_GET['firstnmbx'])     && $_GET['firstnmbx']!=''     && (newfeild('usernm',$_GET['firstnmbx'])) == 0  && !preg_match($lettr_only, $_GET['firstnmbx'])==false)
        {  
          $compelet += 1;
        }
            ///// /////start sub if    
      if(isset($_GET['fullnmbx'])     && $_GET['fullnmbx']!='' && !preg_match($letr_only, $_GET['fullnmbx'])==false)
        {  
          $compelet += 1;
        }    
          ////////new sub if statment /////  ////////
      if(isset($_GET['inptvl'])    && $_GET["inptvl"]!=''    && (newfeild('email',$_GET['emlbx'])) == 0      && filter_var($_GET["emlbx"],FILTER_VALIDATE_EMAIL ) )
        {  
          $compelet += 1;
        }
          ////////new sub if statment /////  ////////
      if(isset($_GET['pswrdbx']) && $_GET["pswrdbx"]!='' && (newfeild('pasword',$_GET['pswrdbx'])) == 0 && strlen($_GET['pswrdbx']) > 8 && !preg_match($pswordonly, $_GET['pswrdbx'])==false )
        {  
          $compelet += 1;
        }
          ////////new sub if statment /////  ////////
      if(isset($_GET['repswrdbx']) && $_GET["repswrdbx"]!='' && (newfeild('pasword',$_GET['repswrdbx'])) == 0 &&  strlen($_GET['repswrdbx']) > 8 && $_GET["repswrdbx"] === $_GET["pswrdbx"] && !preg_match($pswordonly, $_GET['pswrdbx'])==false)
        {  
        $compelet += 1;
        } 
          ////////new sub if statment /////  ////////

      if(isset($_GET['phonebx'])    && $_GET["phonebx"]!=''    && (newfeild('phonnu',$_GET['phonebx'])) == 0      && !preg_match($phoneonly, $_GET['phonebx'])==false )
        {  
          $compelet += 1;
        }

          ////////new sub if statment /////  ////////

          //echo $comp;

    function registeration()
      {
          global $compelet;
          global $inptvl;
        if( isset($compelet) && $compelet > 5  && isset($inptvl) && $inptvl == 'add_user')
        {   
              $db = connect_to_database();
              $username = $_GET['firstnmbx'];
              $fullname = $_GET['fullnmbx'];
              $email    = $_GET['emlbx'];
              $password = $_GET['pswrdbx'];
              $phone    = $_GET['phonebx'];
              $cmpny    = $_GET['cmpnynmbx'];
              $adrs     = $_GET['strtadrsbx'];
              $user_typ = $_GET['user_tybe'];
              //$gvrn = $_GET['gvrn'];
              //$cty = $_GET['cty'];
              $query="SELECT * FROM users WHERE
                usernm  ='$username' AND pasword ='$password'
                AND email ='$email'    AND phonnu   ='$phone'";
              $result = @mysqli_query($db,$query);
              if(@mysqli_num_rows($result) == 0)
              {
                $sql="INSERT INTO users (usernm,storenm,pasword,phonnu,email,companam,adrs,usr_typ) VALUES ('$username','$fullname','$password','$phone','$email','$cmpny','$adrs','$user_typ')";
                $result=@mysqli_query($db,$sql);
                echo "done";unset($_SESSION['sucsess']);
              }    

        } 
      }
        registeration();    ///// ///////end validation function
                  
    }
}else{
    //


    function nwfeild($faild,$getinput)
    {
        global $formtyp;      
        $db= connect_to_database();
        
        $query="SELECT * FROM users WHERE $faild  ='$getinput'";
        $result = @mysqli_query($db,$query);
        $another=@mysqli_num_rows($result);
        
        $sql   ="SELECT $faild FROM users WHERE id = $formtyp";    
        $rslt  = @mysqli_query($db,$sql);
        $row_data = mysqli_fetch_assoc($rslt);
        $in_dta_bas = $row_data[$faild]; 

        if($in_dta_bas == $getinput){
           return 0;
        }else{
           return $another;
        }/**/ 
    }

    if($inptid === "first_name"){
        ///// ///////start first validation if 
      if(isset($_GET['inptvl'])     && $_GET['inptvl']!=''     && (nwfeild('usernm',$_GET['inptvl'])) == 0  && !preg_match($lettr_only, $_GET['inptvl'])==false)
        {  
          echo "<span id='usrnm_msg' class='alert-success col-12 p-1 pl-5 pr-5 m-0'style='border-radius:4px;'>success</span>";
        }
      elseif(isset($_GET['inptvl']) && $_GET['inptvl'] !='' && (nwfeild('usernm',$_GET['inptvl'])) > 0)
        {
          echo"<span class='p-2'></span>this is used user name <span class='p-2 pt-5 pb-5'></span>";
        }      
      elseif (isset($_GET['inptvl']) && $_GET['inptvl'] !='')
        {
          echo"<span class='p-2'></span>enter one word 3 to 15 lettrs only <span class='p-2 pt-5 pb-5'></span>";
        }     
      else
        {
          echo"<span class='p-2'></span>Please fill this field ... <span class='p-2 pt-5 pb-5'></span>";
        }
        ///// ///////end first validation if
    }elseif($inptid === "last_name"){
        ///// ///////start second validation if 
      if(isset($_GET['inptvl'])     && $_GET['inptvl']!='' && !preg_match($letr_only, $_GET['inptvl'])==false)
        {  
            echo "<span id='usrnm_msg' class='alert-success col-12 p-1 pl-5 pr-5 m-0'style='border-radius:4px;'>success</span>";
        }    
      elseif (isset($_GET['inptvl']) && $_GET['inptvl'] !='')
        {
            echo "<span class='p-2'></span>enter 3 word like noor hamdy ali < 41 letter <span class='p-2 pt-5 pb-5'></span>";
        }     
      else
        {
            echo"<span class='p-2'></span>please fill this field ...<span class='p-2 pt-5 pb-5'></span>";
        }
        ///// ///////end second validation if
    }elseif($inptid === "pasword"){
      ///// ///////start third validation if 
     if(isset($_GET['inptvl']) && $_GET["inptvl"]!='' && (nwfeild('pasword',$_GET['inptvl'])) == 0 && strlen($_GET['inptvl']) > 8 && !preg_match($pswordonly, $_GET['inptvl'])==false )
      {  
        echo "<span id='usrnm_msg' class='alert-success col-12 p-1 pl-5 pr-5 m-0'style='border-radius:4px;'>success</span>";
      }
      elseif(isset($_GET['inptvl']) && $_GET['inptvl'] !='' && (nwfeild('pasword',$_GET['inptvl'])) > 0)
      {
        unset($_SESSION['sucsess']['cnfrmpwrd']);
        unset($_SESSION['sucsess']['pasword']);
        echo"<span class='p-2'></span>this is used password please renter it <span class='p-2 pt-5 pb-5'></span>";
      }      
      elseif (isset($_GET['inptvl']) && $_GET["inptvl"] !='')
      {
        unset($_SESSION['sucsess']['cnfrmpwrd']);
        unset($_SESSION['sucsess']['pasword']);
        echo"<span class='p-2'></span>must at lest 9 numbers , capital , small letters <span class='p-2 pt-5 pb-5'></span>";
      }
      else
      {
        unset($_SESSION['sucsess']['cnfrmpwrd']);
        unset($_SESSION['sucsess']['pasword']);
        echo"<span class='p-2'></span>Please fill this field ... <span class='p-2 pt-5 pb-5'></span>";
      }
        ///// ///////end third validation if 
    }elseif($inptid === "cnfrmpwrd"){
      ///// ///////start 4th validation if 
     if(isset($_GET['inptvl']) && $_GET["inptvl"]!='' && (nwfeild('pasword',$_GET['inptvl'])) == 0 &&  strlen($_GET['inptvl']) > 8 && $_GET["inptvl"] === $pswrd_vl && !preg_match($pswordonly, $pswrd_vl)==false)
      {  
        echo "<span id='usrnm_msg' class='alert-success col-12 p-1 pl-5 pr-5 m-0'style='border-radius:4px;'>success</span>";
      }
      else if(isset($_GET['inptvl']) && $_GET['inptvl'] !='' && (nwfeild('pasword',$_GET['inptvl'])) > 0)
      {
        echo "<span class='p-2'></span>invaild input confirm password <span class='p-2 pt-5 pb-5'></span>";
      }
      else if (isset($_GET['inptvl']) && $_GET["inptvl"] !='')
      {
        echo "<span class='p-2'></span>invaild input confirm password <span class='p-2 pt-5 pb-5'></span>";
      }    
      else
      { 
      echo"<span class='p-2'></span>Please fill this field ... <span class='p-2 pt-5 pb-5'></span>";
      } 
      ///// ///////end 4th validation if     

    }elseif($inptid === "phone_number"){
      ///// ///////start 5th validation if 
     if(isset($_GET['inptvl'])    && $_GET["inptvl"]!=''    && (nwfeild('phonnu',$_GET['inptvl'])) == 0      && !preg_match($phoneonly, $_GET['inptvl'])==false )
      {  
        echo "<span id='usrnm_msg' class='alert-success col-12 p-1 pl-5 pr-5 m-0'style='border-radius:4px;'>success</span>";
      }
      elseif(isset($_GET['inptvl']) && $_GET['inptvl'] !='' && (nwfeild('phonnu',$_GET['inptvl'])) > 0)
      {
        echo "<span class='p-2'></span>this is used phone number renter it <span class='p-2 pt-5 pb-5'></span>";
      }      
      elseif (isset($_GET['inptvl']) && $_GET["inptvl"] !='')
      {
        echo "<span class='p-2'></span>enter 11 number... <span class='p-2 pt-5 pb-5'></span>";
      }
      else
      {
        echo"<span class='p-2'></span>Please fill this field ... <span class='p-2 pt-5 pb-5'></span>";
      } 
      ///// ///////end 5th validation if 
    }elseif($inptid === "email"){
      ///// ///////start 5th validation if 
     if(isset($_GET['inptvl'])    && $_GET["inptvl"]!=''    && (nwfeild('email',$_GET['inptvl'])) == 0      && filter_var($_GET["inptvl"],FILTER_VALIDATE_EMAIL ) )// && !preg_match($emailonly, $_GET['inptvl'])==false )
      {  
        echo "<span id='usrnm_msg' class='alert-success col-12 p-1 pl-5 pr-5 m-0'style='border-radius:4px;'>success</span>";
      }
      else if(isset($_GET['inptvl']) && $_GET['inptvl'] !='' && (nwfeild('email',$_GET['inptvl'])) > 0)
      {
        echo "<span class='p-2'></span>this is used email renter it <span class='p-2 pt-5 pb-5'></span>";
      }      
      else if (isset($_GET['inptvl']) && $_GET["inptvl"] !='')
      {
        echo "<span class='p-2'></span>enter like_edfs455SAA@gh5hg.com <span class='p-2 pt-5 pb-5'></span>";
      }     
      else
      {
        echo"<span class='p-2'></span>Please fill this field ... <span class='p-2 pt-5 pb-5'></span>";
      }
      ///// ///////end 5th validation if 

    }elseif($inptid === "submit"){
      ///// ///////start 4th validation if 
      $compelet=0;
      if(isset($_GET['firstnmbx'])     && $_GET['firstnmbx']!=''     && (nwfeild('usernm',$_GET['firstnmbx'])) == 0  && !preg_match($lettr_only, $_GET['firstnmbx'])==false)
        {  
          $compelet += 1;
        }
            ///// /////start sub if    
      if(isset($_GET['fullnmbx'])     && $_GET['fullnmbx']!='' && !preg_match($letr_only, $_GET['fullnmbx'])==false)
        {  
          $compelet += 1;
        }    
          ////////new sub if statment /////  ////////
      if(isset($_GET['emlbx'])   && $_GET["emlbx"]!='' /* */   && (nwfeild('email',$_GET['emlbx'])) == 0      && filter_var($_GET["emlbx"],FILTER_VALIDATE_EMAIL ) )// && !preg_match($emailonly, $_GET['emlbx'])==false )
        {  
          $compelet += 1;
        }
          ////////new sub if statment /////  ////////
      if(isset($_GET['pswrdbx']) && $_GET["pswrdbx"]!='' && (nwfeild('pasword',$_GET['pswrdbx'])) == 0 && strlen($_GET['pswrdbx']) > 8 && !preg_match($pswordonly, $_GET['pswrdbx'])==false )
        {  
          $compelet += 1;
        }
          ////////new sub if statment /////  ////////
      if(isset($_GET['repswrdbx']) && $_GET["repswrdbx"]!='' && (nwfeild('pasword',$_GET['repswrdbx'])) == 0 &&  strlen($_GET['repswrdbx']) > 8 && $_GET["repswrdbx"] === $_GET["pswrdbx"] && !preg_match($pswordonly, $_GET['pswrdbx'])==false)
        {  
        $compelet += 1;
        } 
          ////////new sub if statment /////  ////////

      if(isset($_GET['phonebx'])    && $_GET["phonebx"]!=''    && (nwfeild('phonnu',$_GET['phonebx'])) == 0      && !preg_match($phoneonly, $_GET['phonebx'])==false )
        {  
          $compelet += 1;
        }
          ////////new sub if statment /////  ////////

          function registeration()
          {
            global $compelet;global $inptvl;global $formtyp;
            if(isset($compelet) && $compelet > 5 )
              {  
                $db = connect_to_database();
                $username = $_GET['firstnmbx'];
                $fullname = $_GET['fullnmbx'];
                $email    = $_GET['emlbx'];
                $password = $_GET['pswrdbx'];
                $phone    = $_GET['phonebx'];
                $cmpny    = $_GET['cmpnynmbx'];
                $adrs     = $_GET['strtadrsbx'];
                $usrtyb   = $_GET['user_type'];
                $user_id  = $formtyp;
                 $sql= "UPDATE `users` SET `usernm`='$username',`storenm`='$fullname',`pasword`='$password' ,`phonnu`='$phone',`email`='$email',`companam`='$cmpny',`adrs`='$adrs',`usr_typ`='$usrtyb' WHERE id= $user_id";
                $result= @mysqli_query($db,$sql);           
                 echo "done";
              }
          } 
           registeration();

          ///// ///////end validation function
    }    
    //
  }
?>