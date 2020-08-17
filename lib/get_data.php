<?php
 class get_data{
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
     //get sub categories
      public function sub_categories_array(){
       $this->db->query("SELECT * FROM category3 WHERE parnt_id=0");
       // Assign Result Set/**/
         $results = $this->db->resultSet();//الفنكشن دي جايه من كلاس اسمه database
         for($ct=0 ; $ct < count($results) ; $ct++){
           $this->db->query("SELECT * FROM category3 WHERE parnt_id=$ct + 1");
           $sub_ct = $this->db->resultSet();

           $array_cats[$ct] = $sub_ct;
           
         }
         return $array_cats;    
      }
    //get user product
    public function user_products($userid=null,$filter=null){
      if($filter==null && $userid != null){
        $this->db->query("SELECT * FROM prdct WHERE userid = $userid order by id desc  LIMIT 0, 9");
        //"" ; 
        // Assign Result Set
        $results = $this->db->resultSet();
        return $results;         
      }elseif($filter!=null && $userid != null){
        $sort=$filter['cu_sortdt'];
        $subct=$filter['cu_sortsb'];
        $view=$filter['cu_sortvw']; 
        $pric=$filter['cu_pric'];
        $catid=$filter['cu_sortct'];
        $clr=$filter['cu_color'];
        $siz=$filter['cu_size'];
        $this->db->query("SELECT * FROM prdct WHERE color like '$clr'
                       AND size like '$siz' AND sub_cat like '$subct' 
                       AND userid = $userid AND cat_id like '$catid' AND pric $pric 
                       ORDER BY id $sort LIMIT 0, $view ");
        // Assign Result Set
        $results = $this->db->resultSet();
        return $results;  
      }elseif($filter==null && $userid == null){
        $this->db->query("SELECT * FROM prdct order by id desc");
        // Assign Result Set
        $results = $this->db->resultSet();
        return $results;  
      }
   
    }
    //get categories product
    public function productD($prdctId){
        $this->db->query("SELECT * FROM prdct where id = $prdctId");
        // Assign Result Set
        $results = $this->db->resultSet();
        return $results;  
    }      
    //get categories product
    public function cats_products($filter=null){
      if($filter!=null){
        $sort=$filter['cu_sortdt'];
        $subct=$filter['cu_sortsb'];
        $view=$filter['cu_sortvw']; 
        //$pric=$filter['cu_pric'];
        $mxpric=$filter['cu_mxpric'];
        $mnpric=$filter['cu_mnpric'];
        $catid=$filter['cu_sortct'];
        $clr=$filter['cu_color'];
        $siz=$filter['cu_size'];
        $this->db->query("SELECT * FROM prdct WHERE color like '$clr'
                       AND size like '$siz' AND sub_cat like '$subct' 
                       AND cat_id like '$catid' AND pric BETWEEN $mnpric AND $mxpric 
                       ORDER BY id $sort LIMIT 0, $view");
        // Assign Result Set
        $results = $this->db->resultSet();
        return $results;  
      }elseif($filter==null){
        $this->db->query("SELECT * FROM prdct order by id desc LIMIT 0, 9");
        // Assign Result Set
        $results = $this->db->resultSet();
        return $results;  
      }
   
    }      
     //get any thing
     public function get_any_tabel($tbl_nm,$db_row,$val=null){
      $this->tbl_nm = $tbl_nm;
      $this->db_row = $db_row;
      $this->val    = $val;
      if($this->val===null){
        $sql="SELECT * FROM $tbl_nm";
      }elseif($this->val==='sub'){
        $sql="SELECT * FROM $tbl_nm WHERE $db_row > 0";
      }else{
        $sql="SELECT * FROM $tbl_nm WHERE $db_row=$val";
      }
      $this->db->query($sql);
      // Assign Result Set
      $results = $this->db->resultSet();
      return $results;    
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

    //create user
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
     //get all job
     public function getalljobs(){
        $this -> db -> query("SELECT job.*, categories.name AS cname
                              FROM job
                              INNER JOIN categories
                              ON job.category_id = categories.id
                              ORDER BY post_date desc
                            ");
        // asssighn result set
        $results = $this -> db -> resultset();
        return $results;
     }

     public function get_parnt_categories(){
        $this->db->query("SELECT * FROM category3 WHERE parnt_id=0");
      // Assign Result Set
      $results = $this->db->resultSet();
      return $results;    
     }
     public function allsub_categories(){
      $this->db->query("SELECT * FROM category3 WHERE parnt_id > 0");
      // Assign Result Set
      $results = $this->db->resultSet();
      return $results;    
     }

     public function onesub_category($parntid){
        $this->db->query("SELECT * FROM category3 WHERE parnt_id=$parntid");
      // Assign Result Set
      $results = $this->db->resultSet();
      return $results;    
     }     
     public function getbycategory($category){
        $this -> db -> query("SELECT job.*, categories.name AS cname
                              FROM job
                              INNER JOIN categories
                              ON job.category_id = categories.id
                              WHERE job.category_id = $category
                              ORDER BY post_date desc
                            ");
        // asssighn result set
        $results = $this -> db -> resultset();
        return $results;   
    }
    public function getcategory($category_id){
        $this->db->query("SELECT * FROM categories WHERE id = :category_id");

       $this->db->bind(':category_id', $category_id);

        // Assign Row
        $row = $this->db->single();

        return $row;
    }

}
?>