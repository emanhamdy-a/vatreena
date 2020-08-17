<?php
class login{
    private $db;
    private $logn;
    private $pasw;
    private $phon;
    private $user_id;
    private $user_nm;
    private $usr_typ;
    private $user_kind;
    private $user_pasw;
    private $user_adrs;
    private $storenm;
    
    public function __construct(){
        $this->db= new database();
    }
    public function login($data){
      if($data['lg_optradio'] == 'byer'){
            $this->db->query("SELECT * FROM visitor WHERE `pasword`=:pasw AND `phonnu` = :phon");
            $this->db->bind(':pasw',$data['pasword']);
            $this->db->bind(':phon',$data['phonnu']);
          // Assign Result Set
          $result = $this->db->resultSet();
          if(count($result) > 0){
            $_SESSION['logn']['login-result']='yeas';               
            $_SESSION['logn']['user_id']=$result[0]->id;               
            $_SESSION['logn']['user_nm']=$result[0]->usernm;  
            $_SESSION['logn']['user_phon']=$result[0]->phonnu;               
            $_SESSION['logn']['user_pasw']=$result[0]->pasword;  
            $_SESSION['logn']['user_email']=$result[0]->email;  
            $_SESSION['logn']['usr_typ']=$result[0]->usr_typ;             
            $_SESSION['logn']['kind']=$result[0]->kind; 
            return $result;
          }else{
              return 'logn_faild';
          }
      }elseif($data['lg_optradio'] == 'merchant'){
            $this->db->query("SELECT * FROM users WHERE `pasword`=:pasw AND `phonnu` = :phon");
            $this->db->bind(':pasw',$data['pasword']);
            $this->db->bind(':phon',$data['phonnu']);
            // Assign Result Set
            $result = $this->db->resultSet();
            if(count($result) > 0){
                $_SESSION['logn']['login-result']='yeas';               
                $_SESSION['logn']['user_id']=$result[0]->id;               
                $_SESSION['logn']['user_nm']=$result[0]->usernm;               
                $_SESSION['logn']['user_phon']=$result[0]->phonnu;               
                $_SESSION['logn']['user_pasw']=$result[0]->pasword;  
                $_SESSION['logn']['user_adrs']=$result[0]->adrs;               
                $_SESSION['logn']['user_gvrn']=$result[0]->gvrn_id;               
                $_SESSION['logn']['user_cty']=$result[0]->cty_id;               
                $_SESSION['logn']['stornm']=$result[0]->storenm; 
                $_SESSION['logn']['user_email']=$result[0]->email;  
                $_SESSION['logn']['usr_typ']=$result[0]->usr_typ;             
                return $result;
            }else{
                return 'logn_faild';
            }
        }
   
    } 

    public function check_login(){
        if(isset($_SESSION['logn']['login-result']) && $_SESSION['logn']['login-result'] !=''){
            return true;
        }else{
            return false;
        }
    }

    public function usr_nm(){
        if($this->check_login()!=false){
            $logn=isset($_SESSION['logn']['user_nm']) ? $_SESSION['logn']['user_nm'] : 'empty';
            return $logn;
        }
    }
    public function usr_phon(){
        if($this->check_login()!=false){
            $logn=isset($_SESSION['logn']['user_phon']) ? $_SESSION['logn']['user_phon'] : 'empty';
            return $logn;
        }
    }
    public function usr_typ(){
        if($this->check_login()!=false){
            $logn=isset($_SESSION['logn']['usr_typ']) ? $_SESSION['logn']['usr_typ'] : 'empty';
            return $logn;
        }
    }  

    public function stor_nm(){
        if($this->check_login()!=false && $this->usr_typ()== 'merchant'){
            $logn=isset($_SESSION['logn']['stornm']) ? $_SESSION['logn']['stornm'] : 'empty';
            return $logn;
        }else{
            return 'empty';
        }
    }
    public function usr_kind(){
        if($this->check_login()!=false && $this->usr_typ() =='byer'){
            $logn=isset($_SESSION['logn']['kind']) ? $_SESSION['logn']['kind'] : 'empty';
            return $logn;
        }else{
            return 'empty';
        }
    }
    
    public function usr_id(){
        if($this->check_login()!=false){
            $logn=isset($_SESSION['logn']['user_id']) ? $_SESSION['logn']['user_id'] : 'empty';
            return $logn;
        }else{
            return 'empty';
        }
    }  

    public function usr_email(){
        if($this->check_login()!=false){
            $logn=isset($_SESSION['logn']['user_email']) ? $_SESSION['logn']['user_email'] : 'empty';
            return $logn;
        }else{
            return 'empty';
        }
    }
    public function usr_pasw(){
        if($this->check_login()!=false){
            $logn=isset($_SESSION['logn']['user_pasw']) ? $_SESSION['logn']['user_pasw'] : 'empty';
            return $logn;
        }else{
            return 'empty';
        }
    }

    public function usr_adrs(){
        if($this->check_login()!=false && $this->usr_typ()== 'merchant'){
            $logn=isset($_SESSION['logn']['user_adrs']) ? $_SESSION['logn']['user_adrs'] : 'empty';
            return $logn;
        }else{
            return 'empty';
        }
    }  
    public function usr_gvrn(){
        if($this->check_login()!=false && $this->usr_typ()=='merchant'){
            $logn=isset($_SESSION['logn']['user_gvrn']) ? $_SESSION['logn']['user_gvrn'] : 'empty';
            return $logn;
        }else{
            return 'empty';
        }
    }
    public function usr_cty(){
        if($this->check_login()!=false && $this->usr_typ()=='merchant'){
            $logn=isset($_SESSION['logn']['user_cty']) ? $_SESSION['logn']['user_cty'] : 'empty';
            return $logn;
        }else{
            return 'empty';
        }
    } 
    function echo_regester(){
     if($this->check_login()){
       return "";
     }
     else{
       return "<a href='sign up.php'>Sign Up</a>";//"<a style='cursor:pointer;'data-toggle='modal' data-target='#rgstr_modal'>Register</a> ";
     }
    }
 ///////////////////////////////echo--regester/end///////////////
 
 ///////////////////////////////echo--create acount////////////////
    function echo_creatacount(){
     if($this->check_login() == false){
       return "<a href='create account.php'>create store</a>";//"<a style='cursor:pointer;'data-toggle='modal' data-target='#crt_acnt_modal'>Create Account</a>";
      }else{
       return "";
      }
    }
 ///////////////////////////////echo--create account/end///////////////   
 
 ///////////////////////////////echo--myaccount///////////////
   function echo_myaccount(){
     if($this->check_login() == true && usr_typ() =='merchant'){
         return "<a href='my store.php'>" . $this->stor_nm() . "</a>";
       }elseif($this->check_login() == true && $this->usr_typ() =='admin'){
         return "<a href='admin.php'>Admin</a>"; 
       }elseif($this->check_login() == true && $this->usr_typ() =='byer'){
         return "";
       }elseif($this->check_login() == true && $this->usr_typ() =='dress_maker'){
         return "<a href='dress_maker.php'>" . user_nm() . " Atelier</a>"; 
       }else{
         return "";
       }
   }   
   function echo_favorit() {
      if($this->check_login() == true && $this->usr_typ() == 'byer' ){
        return " <a href='favorites.php' class='fav-nav'>Favourites</a>";
      }
      else{
        return "";
      }
   }
///////////////////////////////////////////////////////////
   function echo_favorit_icon(){
     if($this->check_login() == true && $this->usr_typ() == 'byer' ) {
        return "
            <a href='favorites.php' >
            <i style=''class='icon_heart_alt'></i>
            <span id='fvrt_nm'>0</span>
            </a>
            ";
      }elseif($this->check_login() == true && $this->usr_typ() != 'byer' ){
        return "";
      }elseif($this->check_login() == false){
        return "<a href='favorites.php' data-toggle='modal' data-target='#login_modal'>
              <i style=''class='icon_heart_alt'></i>
              <span id='fvrt_nm'>0</span>
              </a>";
      }
   } 
   function echo_logout_or_logn(){
    if($this->check_login() == true){
      return "<a href='logout/log_out.php'>log out</a>";
    }
    else{
      return "<a href='log in.php'>log In</a>";
      //echo "<a style='cursor:pointer;'data-toggle='modal' data-target='#login_modal'>Log In</a>";
    }
  }
}
?>