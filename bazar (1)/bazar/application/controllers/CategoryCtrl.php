<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryCtrl extends CI_Controller {


	 //this fun show category add  page
	
            public  function CategoryAdd(){

                          //form validation 
                    $this->form_validation->set_rules('cat_name', 'Category Name' , 'required');

                   // $this->form_validation->set_rules('subcat_name', 'Sub Category Name' , 'required');

                   if ($this->form_validation->run() == false) {

                     //here we will load view 
            
                        $this->load->view('admin/addcategory');
                   }else{

                    $this->load->model('Category_model');
                    $catdata = array();
                    $catdata['cat_name'] = $this->input->post('cat_name');
                    //
                   
                    $catdata['created_at'] = date('y-m-d H:i:s');
                   $catdata['updated_at'] = date('y-m-d H:i:s');
                   $this->Product_model->category($catdata);
                   redirect(base_url().'index.php/CategoryCtrl/CategoryAdd');

                        }

                   }
                   public function CatShow(){
                    $this->load->model('Category_model');
                    $category = $this->Category_model->allcat();
                    $catdata = array();
                    $catdata['category'] = $category;
                    $this->load->view('admin/showcatPage',$catdata);

                   }


                  
             
}