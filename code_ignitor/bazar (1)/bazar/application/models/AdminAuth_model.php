<?php
 
 /**
  * 
  */
 class AdminAuth_model extends CI_Model {
 
 	
         // this function show Admin registration page
 	public function create ($formArray){
 		$this->db->insert('admin__users',$formArray);
 	}


         // this method will return  a row array based email entered
 	public function checkUser($email){
 		$this->db->where('email',$email);
 		return $row = $this->db->get('admin__users')->row_array();

 		
 		}

 		 function all(){
              	return $admin__users = $this->db->get('admin__users')->result_array();
              } 
 	
 	}
?>
