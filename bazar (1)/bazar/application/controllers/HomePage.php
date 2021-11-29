<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomePage extends CI_Controller {

	 //this fun show register page
	public function Homepage()
	{    
		 

		    // $user = $this->session->userdata('user');
		    // $data['user'] = $user;
              // $cust_users = $this->session->userdata('cust_users');
            	$this->load->view('customer/homepage');

	  }
	  public function about()
	{
		$this->load->view('customer/about');
	}

	public function contact()
	{
		$this->load->view('customer/contactUs');
	}

	


//logout code 
	  function logout(){
	  	$this->session->unset_userdata('admin_users');
	  	redirect(base_url().'index.php/AdminCtrl/adminLogin');
	  }
}
