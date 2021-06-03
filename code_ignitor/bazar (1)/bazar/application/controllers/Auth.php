<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	 //this fun show register page
	public function register()
	{

          // $this->load->library('form_validation');
           $this->form_validation->set_rules('first_name', 'First Name' , 'required');
           $this->form_validation->set_rules('last_name', 'Last Name' , 'required');
           $this->form_validation->set_rules('phone', 'Phone' , 'required');
            $this->form_validation->set_rules('area', 'Area' , 'required');
            $this->form_validation->set_rules('city', 'City' , 'required');
           $this->form_validation->set_rules('state', 'State' , 'required');
            $this->form_validation->set_rules('pin_code', 'Pin Code' , 'required');  
           $this->form_validation->set_rules('email', 'Email' , 'required|valid_email');
           $this->form_validation->set_rules('username', 'Username' , 'required');
           $this->form_validation->set_rules('password', 'Password' , 'required');

           if ($this->form_validation->run() == false) {
           	 //here we will load view 
           	$this->load->view('customer/register');
           }
           else
           {

           	//here we will save user record in database

           	$this->load->model('Auth_model');
           	$formArray = array();
           	$formArray['first_name'] = $this->input->post('first_name');
           	$formArray['last_name'] = $this->input->post('last_name');
           	$formArray['email'] = $this->input->post('email');
            $formArray['username'] = $this->input->post('username');
           	$formArray['phone'] = $this->input->post('phone');
            $formArray['area'] = $this->input->post('area');
            $formArray['city'] = $this->input->post('city');
            $formArray['state'] = $this->input->post('state');
            $formArray['pin_code'] = $this->input->post('pin_code');

           	//password hash use to secure easily hacking 
           	$formArray['password'] = ($this->input->post('password'));
           	$formArray['created_at'] = date('y-m-d H:i:s');
           	$this->Auth_model->create($formArray);

             $this->session->set_flashdata('msg', 'Your account hasbeen created successfully');
           	redirect(base_url().'index.php/welcome/index');

            }
	  }


	
	public function login(){

		 	$this->load->model('Auth_model');

		   $this->form_validation->set_rules('email', 'Email','required|valid_email');
           $this->form_validation->set_rules('password', 'Password' , 'required');

           if ($this->form_validation->run() == true) {

           	$email =  $this->input->post('email');
           	$cust_users = $this->Auth_model->checkUser($email);
           
           if (!empty($cust_users)) {

                 $password = $this->input->post('password');
           	if (password_verify($password, $cust_users['password']) == true) {
                       
                       $sessArray['id'] = $cust_users['id'];
                       $sessArray['first_name'] = $cust_users['first_name'];
                       $sessArray['last_name'] = $cust_users['last_name'];
                       $sessArray['email'] = $cust_users['email'];
                       
                       //show the login user data on dashboard  ..permanant
                       $this->session->set_userdata('cust_users',$sessArray);
                        
           		     redirect(base_url().'index.php/HomePage/homepage');
           	}else{
           		$this->session->set_flashdata('msgs','Either email or password is incorrect , please try again.');
                 	redirect(base_url().'index.php/welcome/index');
           	}
           	
           }else{
               	$this->session->set_flashdata('msgs','Either email or password is incorrect , please try again.');
                	redirect(base_url().'index.php/welcome/index');
           }
           	
           }else{

                	$this->load->view('customer/loginpage');
           }
	}
}
