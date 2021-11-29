<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShowCtrl extends CI_Controller {

	 //this fun show register page
	public function showproduct()
	{    
		 
       $this->load->model('product_model');
        $products = $this->product_model->allpro();
        $data = array();
        $data['products'] = $products;
       	$this->load->view('admin/showproducts',$data);

	  }
}
