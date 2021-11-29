<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminAuth extends CI_Controller {

	 //this fun show register page
	public function adminsignup()
	{

          // $this->load->library('form_validation');
           $this->form_validation->set_rules('first_name', 'First Name' , 'required');
           $this->form_validation->set_rules('last_name', 'Last Name' , 'required');
           $this->form_validation->set_rules('email', 'Email' , 'required|valid_email');
           $this->form_validation->set_rules('phone', 'Phone' , 'required');
           $this->form_validation->set_rules('password', 'Password' , 'required');

           if ($this->form_validation->run() == false) {
           	
            //here we will load view 
           	$this->load->view('admin/adminsignup');
           }
           else
           {

           	//here we will save user record in database

           	$this->load->model('AdminAuth_model');
           	$formArray = array();
           	$formArray['first_name'] = $this->input->post('first_name');
           	$formArray['last_name'] = $this->input->post('last_name');
           	$formArray['email'] = $this->input->post('email');
           	$formArray['phone'] = $this->input->post('phone');

           	//password hash use to secure easily hacking 
           	$formArray['password'] = ($this->input->post('password'));
           	$formArray['created_at'] = date('y-m-d H:i:s');
           	$this->AdminAuth_model->create($formArray);

           //$this->session->set_flashdata('msg', 'Your account hasbeen created successfully');
           	redirect(base_url().'index.php/AdminCtrl/adminlogin');

            }
	  }


	
	public function adminLogin(){

		 	$this->load->model('AdminAuth_model');

		   $this->form_validation->set_rules('email', 'Email','required|valid_email');
           $this->form_validation->set_rules('password', 'Password' , 'required');

           if ($this->form_validation->run() == true) {

           	$email =  $this->input->post('email');
           	$user = $this->AdminAuth_model->checkUser($email);
           
           if (!empty($user)) {

                 $password = $this->input->post('password');
           	if (password_verify($password, $user['password']) == true) {
                       
                       $sessArray['id'] = $user['id'];
                       $sessArray['first_name'] = $user['first_name'];
                       $sessArray['last_name'] = $user['last_name'];
                       $sessArray['email'] = $user['email'];
                       
                       //show the login user data on dashboard  ..permanant
                       $this->session->set_userdata('admin__users',$sessArray);
                        
           		     redirect(base_url().'index.php/AdminCtrl/dashboard');
           	}else{
           			//$this->session->set_flashdata('msgs','Either email or password is incorrect , please try again.');
                 	redirect(base_url().'index.php/AdminAuth/adminLogin');
           	}
           	
           }else{
                //	$this->session->set_flashdata('msgs','Either email or password is incorrect , please try again.');
                	redirect(base_url().'index.php/AdminAuth/adminLogin');
           }
           	
           }else{

           	        //here we will load view 
                	$this->load->view('admin/adminLogin');
           }
	}
}
