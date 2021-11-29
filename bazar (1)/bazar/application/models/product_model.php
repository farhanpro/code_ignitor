<?php
 
 /**
  * 
  */
 class Product_model extends CI_Model {
 
 	
         // this function show register page
 	public function product ($data){
 		$this->db->insert('products',$data);
 	}
              
               function allpro(){
              	return $prdct = $this->db->get('products')->result_array();
              }   

    
         // this method will return  a row array based Add product for edit
 	 
 	            
 	           function getProd($prodId){
 	           	$this->db->where('prod_id',$prodId);
 	           	return $product = $this->db->get('products')->row_array();
 	           }

                // this function use for update after edit 
 	           function updateProd($prodId,$formArray){
 	           	$this->db->where('prod_id',$prodId);
 	           	$this->db->update('products',$formArray);
 	           }

 	           function deleteProd($prodId)
 	           {

 	           	$this->db->where('prod_id',$prodId);
 	           	$this->db->delete('products');   
 	           }
 	}

?>
