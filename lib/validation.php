<?php
 class validation{
     private $db;
     private $patern;
     private $mxlnth;
     private $mnlnth;
     private $tbl_nm;
     private $db_row;
     private $inpt_vl;
     private $clmn_nm;

     public $message= [
      'success'=>"<span id='' class='alert-success col-12 p-1 pl-5 pr-5 m-0'style='border-radius:4px;'>success</span>",
      'empty'  =>"<span id='' class='alert-danger col-12 p-1 pl-5 pr-5 m-0'style='border-radius:4px;'>please fill this faild ...</span>",
      'used'   =>"<span id='' class='alert-danger col-12 p-1 pl-5 pr-5 m-0'style='border-radius:4px;'>this is used user name ...</span>",
      'invalid'=>['usernm'  =>"<span id='' class='alert-danger col-12 p-2 pl-2 pr-2 m-0'style='border-radius:4px;'>enter one word 4 to 30 lettrs only</span>",
                  'storenm' =>"<span id='' class='alert-danger col-12 p-2 pl-2 pr-2 m-0'style='border-radius:4px;'>enter between 4 to 30 letters , spaces</span>",
                  'user_nam'=>"<span id='' class='alert-danger col-12 p-2 pl-2 pr-2 m-0'style='border-radius:4px;'>please fill this faild ...</span>",
                  'email'   =>"<span id='' class='alert-danger col-12 p-2 pl-2 pr-2 m-0'style='border-radius:4px;'>please fill this faild ...</span>",
                  'phonnu'  =>"<span id='' class='alert-danger col-12 p-2 pl-2 pr-2 m-0'style='border-radius:4px;'>please fill this faild ...</span>",
                  'pasword' =>"<span id='' class='alert-danger col-12 p-2 pl-2 pr-2 m-0'style='border-radius:4px;'>please fill this faild ...</span>",
                  'pasword2'=>"<span id='' class='alert-danger col-12 p-2 pl-2 pr-2 m-0'style='border-radius:4px;'>please fill this faild ...</span>",
                  'companam'=>"<span id='' class='alert-danger col-12 p-2 pl-2 pr-2 m-0'style='border-radius:4px;'>please fill this faild ...</span>",  
                  'adrs'    =>"<span id='' class='alert-danger col-12 p-2 pl-2 pr-2 m-0'style='border-radius:4px;'>please fill this faild ...</span>", 
                  'gvtn_id' =>"<span id='' class='alert-danger col-12 p-2 pl-2 pr-2 m-0'style='border-radius:4px;'>please fill this faild ...</span>" , 
                  'cty_id'  =>"<span id='' class='alert-danger col-12 p-2 pl-2 pr-2 m-0'style='border-radius:4px;'>please fill this faild ...</span>"  
               ],
      ];

      public $ptrn= [
         'aword'    =>'/^[A-Za-z\p{Arabic}]+$/u',
         'word'    =>'/^[A-Za-z]+$/',
         'awordnm'  =>'/^[A-Za-z0-9\p{Arabic} ]+$/u',
         'wordnm'  =>'/^[A-Za-z0-9\ ]+$/u',
         'aletters' =>'/^[A-Za-z\p{Arabic} ]+$/u',
         'letters' =>'/^[A-Za-z ]+$/',
         'numbers' =>'/^[0-9]+$/',
         'astring'  =>'/^[A-Za-z\p{Arabic}0-9.\/@!:\'()"?<>{}|+-_*&^%$#\/\`~=.,;\[\] ]+$/u',
         'string'  =>'/^[A-Za-z0-9.\/@!:\'()"?<>{}|+-_*&^%$#\/\`~=.,;\[\] ]+$/',
         'asql'     =>'/^[A-Za-z\p{Arabic}0-9.\/@!:\'()"?<>{}|+-_*&^%$#\/\`~=.,;\[\] ]+$u/',
         'sql'     =>'/^[A-Za-z0-9.\/@!:\'()"?<>{}|+-_*&^%$#\/\`~=.,;\[\] ]+$/',
         'afil_nm'=>'/^[A-Za-z\p{Arabic}0-9.@!\'(){}+-_*&^%$#`~=.,[]; ]+$/u',
         'fil_nm'=>'/^[A-Za-z0-9.@!\'(){}+-_*&^%$#`~=.,[]; ]+$/',
         'apath'   =>'/^[A-Za-z\p{Arabic}0-9.\/@!:\'(){}+-_*&^%$#\/\`~=.,;\[\] ]+$/u',
         'path'    =>'/^[A-Za-z0-9.\/@!:\'(){}+-_*&^%$#\/\`~=.,;\[\] ]+$/',
         'imgpath' =>'/^[A-Za-z0-9.]+$/',
         'phone'   =>'/^[0-9]{11}+$/',
         'date'    =>'/^[0-3][0-9]\/[0-1][0-9]\/[0-9]{4}$/',
         'email'   =>'/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,5}$/ix',
         'password'=>'/^\S*(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/',
      ];
      public function __construct(){
         $this->db      = new Database();
      }
      public function vld_message($type,$txt=null) {
         $this->tybe = $type; 
         $this->txt  = $txt; 
         if($this->txt == null && $this->tybe=='success'){
            return "<span id='' class='alert-success col-12 p-1 pl-5 pr-5 m-0'style='border-radius:4px;'>Success</span>";
         }elseif($this->txt == null && $this->tybe=='required') {
            return "<span id='' class='alert-danger col-12 p-1 pl-5 pr-5 m-0'style='border-radius:4px;'>Please Fill This Faild ...</span>";
         }elseif($this->txt == null && $this->tybe=='used') {
            return "<span id='' class='alert-danger col-12 p-1 pl-4 pr-4 m-0'style='border-radius:4px;'>Another User Has This Data ...</span>";
         }elseif($this->txt == null && $this->tybe=='invalid'){
            return "<span id='' class='alert-danger col-12 p-1 pl-2 pr-2 m-0'style='border-radius:4px;'>Invalid Input Renter It ...</span>";
         }elseif($this->txt != null && ($this->tybe =='success' or $this->tybe =='danger')){
            return "<span id='' class='alert-{$this->tybe} col-12 p-1 pl-2 pr-2 m-0'style='border-radius:4px;'>{$this->txt}</span>";
         }else{

         }  
      }
         public function count_exist($inpt_vl,$tbl_nm,$db_row) {
          $this->inpt_vl = $inpt_vl; 
          $this->tbl_nm = $tbl_nm; 
          $this->db_row = $db_row; 
          $this->db->query("SELECT * FROM $this->tbl_nm WHERE $this->db_row = :val");
          $this->db->bind(":val", $this->inpt_vl);
          $row = $this->db->resultset();
          return count($row);
           /*if($this->db->execute()){
               return 1;
            } else {
               return 0;
            }*/
      }
   public function user_validate($inpt_vl,$patern,$mxlnth,$mnlnth,$db_row='usernm'){
      $this->patern  = $this ->ptrn[$patern];
      $this->mxlnth  = $mxlnth;
      $this->mnlnth  = $mnlnth;
      $this->db_row  = $db_row;
      $this->inpt_vl = $inpt_vl;

            $this->db->query("SELECT * FROM users WHERE $this->db_row = :val");
            $this->db->bind(":val", $this->inpt_vl);
            $row1  = $this->db->resultset();
            $count1= count($row1);

            $this->db->query("SELECT * FROM visitor WHERE $this->db_row = :val");
            $this->db->bind(":val", $this->inpt_vl);
            $row2  = $this->db->resultset();
            $count2= count($row2);

            $count = $count1 + $count2;
         if($this->inpt_vl !='' && $count == 0  && preg_match($this->patern, $this->inpt_vl)==1 && strlen($this->inpt_vl) <= $this->mxlnth && strlen($this->inpt_vl) >= $this->mnlnth ){  
            return 'success';
         }elseif($this->inpt_vl ==''){
            return 'required';
         }elseif($count != 0){
            return 'used';
         }else{
            return 'invalid';
         }
   } 
   public function inpt_validate($inpt_vl,$patern,$mxlnth,$mnlnth,$tbl_nm='no',$db_row='no'){
      $this->patern  = $this ->ptrn[$patern];
      $this->mxlnth  = $mxlnth;
      $this->mnlnth  = $mnlnth;
      $this->tbl_nm  = $tbl_nm;
      $this->db_row  = $db_row;
      $this->inpt_vl = $inpt_vl;

      if($this->tbl_nm != 'no'){

            $this->db->query("SELECT * FROM $this->tbl_nm WHERE $this->db_row = :val");
            $this->db->bind(":val", $this->inpt_vl);
            $row  = $this->db->resultset();
            $count= count($row);

         if($this->inpt_vl !='' && $count == 0  && preg_match($this->patern, $this->inpt_vl)==1 && strlen($this->inpt_vl) <= $this->mxlnth && strlen($this->inpt_vl) >= $this->mnlnth ){  
            return 'success';
         }elseif($this->inpt_vl ==''){
            return 'required';
         }elseif($count != 0){
            return 'used';
         }else{
            return 'invalid';
         }

      }else{

         if($this->inpt_vl !='' && preg_match($this->patern, $this->inpt_vl)==1 && strlen($this->inpt_vl) <= $this->mxlnth && strlen($this->inpt_vl) >= $this->mnlnth ){  
            return 'success';
         }elseif($this->inpt_vl ==''){
            return 'required';
         }else{
            return 'invalid';
         }
      }
   }

 }
