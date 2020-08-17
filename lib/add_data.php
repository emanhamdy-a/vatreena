<?php
 class add_data{
     private $db;
     private $tbl_nm;
     private $db_row;
     private $val;
     private $dataa=array();
     private $login;
     public  $array_cats = array();

     public function __construct(){
         $this -> db = new Database();
     }
     //upload image
    public function move_image($nam,$path){
        if(isset($nam) && isset($path)){
            $imageName = $nam;
            $imageTmpName = $path;
            $imageName =explode('.',$imageName) ;
            $imageName ='.' . $imageName[1];
            $date = date_create();
            $path= rand(1, date_timestamp_get($date));      
            $path=$path . rand(1, date_timestamp_get($date));      
            $mypath = "img/userimg/$path$imageName";
            $move=move_uploaded_file($imageTmpName,$mypath);
            if($move==1){
                $image = "img/userimg/$path$imageName";
                return $image;
            }else{
                return false;
            }            
        }

    }       
    //add product
    public function add_product($data){
      //get image path
      $image=$this->move_image($data['ad_imagenm'],$data['ad_imageTmpName']);
      //Insert Query
      if($image != false){
        $this->db->query("INSERT INTO prdct (prdctnm, dscrptn, pric, stock, cat_id, sub_cat, `img`, userid,adrs,phonnu,storenm,color,size)
        VALUES (:prdctnm, :dscrptn, :pric, :stock, :cat_id, :sub_cat, :img, :userid,:adrs,:phonnu,:storenm,:color,:size)");  
        //$this->$login->usr_email();
        $this->login=new login;
        // Bind Data
        $this->db->bind(':prdctnm', $data['ad_prdctnm']);
        $this->db->bind(':dscrptn',$data['ad_dscrptn']);
        $this->db->bind(':pric',  $data['ad_pric']);
        $this->db->bind(':stock', $data['ad_stok']);
        $this->db->bind(':cat_id',$data['ad_sortct']);
        $this->db->bind(':sub_cat',$data['ad_sortsb']);
        $this->db->bind(':color', $data['ad_color']);
        $this->db->bind(':size', $data['ad_size']);
        $this->db->bind(':img', $image);
        $this->db->bind(':userid', $this->login->usr_id());
        $this->db->bind(':adrs',   $this->login->usr_adrs());
        $this->db->bind(':phonnu', $this->login->usr_phon());
        $this->db->bind(':storenm',$this->login->stor_nm());
        //Execute
        if($this->db->execute()){
            return 'true';
        }else{
            return 'false';
        }          
      }else{
          return 'image faild';
      }
    }  
      
     //create store 
    public function create_store($data){
      //Insert Query
      $this->db->query("INSERT INTO users (usernm, storenm, pasword, phonnu, `email`, adrs, gvrn_id, cty_id)
      VALUES (:usernm, :storenm, :pasword, :phonnu, :email, :adrs, :gvrn_id, :cty_id)");
      // Bind Data
      $this->db->bind(':usernm', $data['usernm']);
      $this->db->bind(':storenm', $data['storenm']);
      $this->db->bind(':pasword', $data['pasword']);
      $this->db->bind(':phonnu', $data['phonnu']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':adrs', $data['adrs']);
      $this->db->bind(':gvrn_id', $data['gvrn_id']);
      $this->db->bind(':cty_id', $data['cty_id']);
      //Execute
      if($this->db->execute()){
        $dataa['lg_optradio']='merchant';
        $dataa['pasword']=$data['pasword'];
        $dataa['phonnu']=$data['phonnu'];
        $this->login=new login;
        $this->login->login($dataa);
        return true;
      } else {
        return false;
      }
    }

    //create store 
    public function create_byer($data){
        //Insert Query
        $this->db->query("INSERT INTO visitor (usernm,  pasword, phonnu, `email`,`usr_typ`,kind)
        VALUES (:usernm, :pasword, :phonnu, :email ,:usr_typ,:kind)");
        // Bind Data
        $this->db->bind(':usernm', $data['usernm']);
        $this->db->bind(':pasword', $data['pasword']);
        $this->db->bind(':phonnu', $data['phonnu']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':usr_typ', 'byer');
        $this->db->bind(':kind', $data['su_optradio']);
        //Execute
        if($this->db->execute()){
        $dataa['lg_optradio']='byer';
        $dataa['pasword']=$data['pasword'];
        $dataa['phonnu']=$data['phonnu'];
        $this->login=new login;
        $this->login->login($dataa);
        return true;
        } else {
        return false;
        }
    }


}
?>