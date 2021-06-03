<?php
 
 /**
  * 
  */
 class Auth_model extends CI_Model {
 
 	
         // this function show register page
 	     public function create ($formArray){
 		$this->db->insert('cust_users',$formArray);
 	}


         // this method will return  a row array based email entered
 	    public function checkUser($email){
 		$this->db->where('email',$email);
 		return $row = $this->db->get('cust_users')->row_array();

 		
 		}
 		 function all(){
              	return $cust_users = $this->db->get('cust_users')->result_array();
              }  
 	
 	}
?>
