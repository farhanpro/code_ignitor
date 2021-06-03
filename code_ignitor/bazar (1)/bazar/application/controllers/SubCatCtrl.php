<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubCatCtrl extends CI_Controller {

                       //this fun show sub category add  page
	
                    function SubCategoryAdd(){

                          

                       $subcatdata['cat']=$this->db->get('category')->result_array();
                       $this->load->view('subcatPage',$subcatdata);

                       $this->form_validation->set_rules('subcat_name', 'SubCategory Name' , 'required');

                       if ($this->form_validation->run() == false) {

                             //here we will load view 
                             $subcatdata['cat']=$this->db->get('category')->result_array();
                        $this->load->view('admin/addsubcatPage',$subcatdata);
                   }else{ 

                    $this->load->model('Category_model');
                    $subcatdata = array();
                    $subcatdata['subcat_name'] = $this->input->post('subcat_name');
                     
                      $catdata = array();
                     $catdata['cat_id'] = $this->input->post('cat_id');
                      $catdata['cat_name'] = $this->input->post('cat_name');

                    $subcatdata['created_at'] = date('y-m-d H:i:s');
                   $subcatdata['updated_at'] = date('y-m-d H:i:s');
                   $this->Category_model->subcategory($subcatdata);
                   redirect(base_url().'index.php/SubCatCtrl/addsubcatPage');

                  }
             }
             
              public function SubCatShow(){
                    $this->load->model('Category_model');
                    $sub_category = $this->Category_model->allsubcat();
                    $subcatdata = array();
                    $subcatdata['sub_category'] = $sub_category;
                    $this->load->view('admin/subcat',$subcatdata);

                   }

              

}