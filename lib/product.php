<?php
 class product{
     private $db;
     public function __construct(){
         $this -> db = new Database();
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

     public function getcategories(){
     	$this->db->query("SELECT * FROM categories");
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
		// Get Job
	public function getjob($id){
		$this->db->query("SELECT * FROM job WHERE id = :id");
		$this->db->bind(':id', $id);
			// Assign Row
		$row = $this->db->single();
		return $row;
  }
 		// Create Job
  public function create($data){
    //Insert Query
    $this->db->query("INSERT INTO job (category_id, job_title, company, descrption, `location`, salary, contact_user, contact_email)
    VALUES (:category_id,:job_title, :company, :description, :location, :salary, :contact_user, :contact_email)");
    // Bind Data
    $this->db->bind(':category_id', $data['category_id']);
    $this->db->bind(':job_title', $data['job_title']);
    $this->db->bind(':company', $data['company']);
    $this->db->bind(':description', $data['description']);
    $this->db->bind(':location', $data['location']);
    $this->db->bind(':salary', $data['salary']);
    $this->db->bind(':contact_user', $data['contact_user']);
    $this->db->bind(':contact_email', $data['contact_email']);
    //Execute
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
  }
 //function delete
 public function delete($id){
       //Insert Query
       $this->db->query("DELETE  FROM job WHERE id= $id");
       //Execute
       if($this->db->execute()){
         return true;
       } else {
         return false;
       }
 }
 		// Update Job
     public function update($id, $data){
			//Insert Query
			$this->db->query("UPDATE job
				SET 
				category_id = :category_id,
				job_title = :job_title,
				company = :company,
				descrption = :description,
				`location` = :location,
				salary = :salary,
				contact_user = :contact_user,
				contact_email = :contact_email 
				WHERE id = $id");
			// Bind Data
			$this->db->bind(':category_id', $data['category_id']);
			$this->db->bind(':job_title', $data['job_title']);
			$this->db->bind(':company', $data['company']);
			$this->db->bind(':description', $data['description']);
			$this->db->bind(':location', $data['location']);
			$this->db->bind(':salary', $data['salary']);
			$this->db->bind(':contact_user', $data['contact_user']);
			$this->db->bind(':contact_email', $data['contact_email']);
			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}
}
?>