<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddPrdctCtrl extends CI_Controller {


	 //this fun show register page
	public function Addproduct()
	{

          // $this->load->library('form_validation');
        
         $this->form_validation->set_rules('product_name', 'Product Name' , 'required');
         $this->form_validation->set_rules('cat_name', 'Category Name ' , 'required');
         $this->form_validation->set_rules('product_quantity', 'Product Quantity' , 'required');
         $this->form_validation->set_rules('product_unit_price', 'Product Unit Price' , 'required');
        // $this->form_validation->set_rules('product_image', 'Product Image' ,'required' );
          
            if ($this->form_validation->run() == false) {
          
                //here we will load view 
            
             	$this->load->view('AddProduct');
            }else{

               	//here we will save user record in database

                	$this->load->model('Product_model');
                    $data = array();
                    $data['product_name'] = $this->input->post('product_name');
                 	$data['cat_name'] = $this->input->post('cat_name');
                	$data['product_quantity'] = $this->input->post('product_quantity');
					$data['product_unit_price'] = $this->input->post('product_unit_price');
                    //$formArray['product_image'] = $this->input->post('product_image');
                 	

           
                	$data['created_at'] = date('y-m-d H:i:s');
                    $data['updated_at'] = date('y-m-d H:i:s');
                 	$this->Product_model->product($data);

                 $this->session->set_flashdata('msg', 'Your Product has been Added Successfully');
             	redirect(base_url().'index.php/ShowPrdctCtrl/showproduct');

            }       
            
	}


    function EditProd($prodId){  

		  $this->load->model('Product_model');

         $prod = $this->Product_model->getProd($prodId);
         $prdct = array();
         $prdct ['prod'] = $prod;


		 $this->form_validation->set_rules('product_name', 'Product Name' , 'required');
         $this->form_validation->set_rules('cat_name', 'Category Name ' , 'required');
         $this->form_validation->set_rules('product_quantity', 'Product Quantity' , 'required');
         $this->form_validation->set_rules('product_unit_price', 'Product Unit Price' , 'required');
        // $this->form_validation->set_rules('product_image', 'Product Image' ,'required' );

           if ($this->form_validation->run() == false) {
               $this->load->view('EditProduct',$prdct);
           }else{
            //update product details
              $this->load->model('Product_model');
            $formArray = array();
            $formArray['product_name'] = $this->input->post('product_name');
            $formArray['cat_name'] = $this->input->post('cat_name');
            $formArray['product_quantity'] = $this->input->post('product_quantity');
            $formArray['product_unit_price'] = $this->input->post('product_unit_price');
            //$formArray['product_image'] = $this->input->post('product_image');
            $this->Product_model->updateProd($prodId,$formArray);

            $this->session->set_flashdata('success',"record Updated Successfully");
            redirect(base_url().'index.php/ShowPrdctCtrl/showproduct');
          
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
                redirect(base_url().'index.php/ShowPrdctCtrl/showproduct');
          }
             
             
}