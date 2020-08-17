<?php
class update_data{
    private $db;
    private $tbl_nm;
    private $db_row;
    private $val;
    private $dataa=array();
    private $login;
    private $ad_dta;
    private $gt_dta;
    private $dlt_dta;
    public function __construct(){
        $this -> db = new Database();
    }
    
   //update product
  public function update_product($id,$data){
     //get image path
    $this->ad_dta=new add_data;
    $this->gt_dta=new get_data;
    $this->dlt_dta=new delete_data;
     if($data['edt_imagenm']!='0'){
      $image=$this->ad_dta->move_image($data['edt_imagenm'],$data['edt_imageTmpName']);
     }else{
      $image=false;
     }
     //Insert Query
     if($image != false){
       $unlink=$this->gt_dta->get_any_tabel('prdct','id',$id);
       $unlink=$unlink[0]->img;
       $this->dlt_dta->unlink_img($unlink);
       $this->db->query("UPDATE prdct SET prdctnm = :prdctnm, dscrptn = :dscrptn, pric = :pric, stock = :stock, cat_id = :cat_id, sub_cat = :sub_cat, `img` = :img, color = :color, size = :size WHERE id=$id");
       // Bind Data
       $this->db->bind(':prdctnm', $data['edt_prdctnm']);
       $this->db->bind(':dscrptn',$data['edt_dscrptn']);
       $this->db->bind(':pric',  $data['edt_pric']);
       $this->db->bind(':stock', $data['edt_stok']);
       $this->db->bind(':cat_id',$data['edt_sortct']);
       $this->db->bind(':sub_cat',$data['edt_sortsb']);
       $this->db->bind(':color', $data['edt_color']);
       $this->db->bind(':size', $data['edt_size']);
       $this->db->bind(':img', $image);
       //Execute
       if($this->db->execute()){
           return 'true';
       }else{
           return 'false';
       }          
     }else{
      $this->db->query("UPDATE prdct SET prdctnm = :prdctnm, dscrptn = :dscrptn, pric = :pric, stock = :stock, cat_id = :cat_id, sub_cat = :sub_cat, color = :color, size = :size WHERE id=$id");
      // Bind Data
      $this->db->bind(':prdctnm', $data['edt_prdctnm']);
      $this->db->bind(':dscrptn',$data['edt_dscrptn']);
      $this->db->bind(':pric',  $data['edt_pric']);
      $this->db->bind(':stock', $data['edt_stok']);
      $this->db->bind(':cat_id',$data['edt_sortct']);
      $this->db->bind(':sub_cat',$data['edt_sortsb']);
      $this->db->bind(':color', $data['edt_color']);
      $this->db->bind(':size', $data['edt_size']);
      //Execute
      if($this->db->execute()){
          return 'true';
      }else{
          return 'false';
      }    
    
     }
  }  
}
?>