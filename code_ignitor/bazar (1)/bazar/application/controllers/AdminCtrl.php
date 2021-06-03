<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCtrl extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	

	public function dashboard()
	{
		$this->load->view('admin/dashboard');
 	}
     

     //Load the user details table in admin panel from database 
 	public function userList()
	{   
		$this->load->model('Auth_model');
		$cust_users = $this->Auth_model->all();
        $data = array();
        $data['cust_users'] = $cust_users;
       	$this->load->view('admin/userList',$data);
 	}

 	public function adminList()
	{   
		$this->load->model('AdminAuth_model');
		$Admin_users = $this->AdminAuth_model->all();
        $data = array();
        $data['admin__users'] = $Admin_users;
       	$this->load->view('admin/adminList',$data);

 	}

 	
       // Admin logout code 
	  function logout(){
	  	$this->session->unset_userdata('admin_users');
	  	redirect(base_url().'index.php/welcome/index');
	  }
	
}
