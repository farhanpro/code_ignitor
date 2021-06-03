<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductCtrl extends CI_Controller {


	 //this fun show register page
	public function Addproduct()
	{

          // $this->load->library('form_validation');
        
         $this->form_validation->set_rules('prod_name', 'Product Name' , 'required');
         $this->form_validation->set_rules('subcat_id', 'Sub Category Id ' , 'required');
         $this->form_validation->set_rules('prod_quantity', 'Product Quantity' , 'required');
         $this->form_validation->set_rules('prod_unitPrice', 'Product Unit Price' , 'required');
        // $this->form_validation->set_rules('product_image', 'Product Image' ,'required' );
          
           if ($this->form_validation->run() == false) {
           	 
             //image

          
             //here we will load view 
            
           	$this->load->view('admin/addProduct');
           }
           else
           {

           	//here we will save user record in database

           	$this->load->model('Product_model');
           	$data = array();
            $data['prod_name'] = $this->input->post('prod_name');
           	$data['subcat_id'] = $this->input->post('subcat_id');
           	$data['prod_quantity'] = $this->input->post('prod_quantity');
           //$formArray['product_image'] = $this->input->post('product_image');
           	$data['prod_unitPrice'] = $this->input->post('prod_unitPrice');

           
           	$data['created_at'] = date('y-m-d H:i:s');
            $data['updated_at'] = date('y-m-d H:i:s');
           	$this->Product_model->product($data);

           $this->session->set_flashdata('msg', 'Your Product has been Added Successfully');
           	redirect(base_url().'index.php/ShowCtrl/showproduct');

            }       
            
	  }


       function EditProd($prodId)
      {  
      $this->load->model('Product_model');

      $prod = $this->Product_model->getProd($prodId);
      $prdct = array();
      $prdct ['prod'] = $prod;


           $this->form_validation->set_rules('prod_name', 'Product Name' , 'required');
           $this->form_validation->set_rules('subcat_id', 'Sub Category Id ' , 'required');
           $this->form_validation->set_rules('prod_quantity', 'Product Quantity' , 'required');
           $this->form_validation->set_rules('prod_unitPrice', 'Product Unit Price' , 'required');
          // $this->form_validation->set_rules('product_image', 'Product Image' ,'required' );

           if ($this->form_validation->run() == false) {
               $this->load->view('admin/editpage',$prdct);
           }else{
            //update product details
              $this->load->model('Product_model');
            $formArray = array();
            $formArray['prod_name'] = $this->input->post('prod_name');
            $formArray['subcat_id'] = $this->input->post('subcat_id');
            $formArray['prod_quantity'] = $this->input->post('prod_quantity');
            $formArray['prod_unitPrice'] = $this->input->post('prod_unitPrice');
            //$formArray['product_image'] = $this->input->post('product_image');
            $this->Product_model->updateProd($prodId,$formArray);

            $this->session->set_flashdata('success',"record Updated Successfully");
            redirect(base_url().'index.php/ShowCtrl/showproduct');
          
           }
      
   }     

          function DeleteProd($prodId)
          {
                $this->load->model('Product_model');
                $prod = $this->Product_model->getProd($prodId);
                if (empty($prod)) {
                $this->session->set_flashdata('failuar',"record not found ");
                 redirect(base_url().'index.php/ShowCtrl/showproduct');
                }

                $this->Product_model->deleteProd($prodId);
                $this->session->set_flashdata('success',"record deleted Successfully");
                redirect(base_url().'index.php/ShowCtrl/showproduct');
          }
             
             
}