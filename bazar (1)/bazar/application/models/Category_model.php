<?php

 class Category_model extends CI_Model {
 
        
 	            //category and sub category table load

 	           public  function category ($catdata)
                 {
 	            	    
                    $this->db->insert('category',$catdata);
 	             }  

 	             function allcat(){
              	return $cat = $this->db->get('category')->result_array();
              }  


               function subcategory ($subcatdata){
 	            	$this->db->insert('sub_category',$subcatdata);
 	            }  

 	             function allsubcat(){
              	return $subcat = $this->db->get('sub_category')->result_array();
              }  
 	}

?>
