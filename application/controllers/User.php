<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
       $this->load->library('form_validation');
    }


	public function index()
	{

		echo "index";
		$this->load->view('login');

	}

	public function login()
	{
		
		// $this->form_validation->set_rules('name', 'name', 'trim|required');
  //       $this->form_validation->set_rules('password', 'password','trim|required');
        
    	$name=$this->input->post('name'); 
		$password=$this->input->post('password'); 

		$result = $this->user_model->checkLogin($name,$password);        
      	
        if($result)
        {
            $data['result']=$result;
            if ($result->m_role == 1)
            {
            	//For User login
            	$this->load->view('user_home',$data);
            }
            else
            {       
            	//For admin Login. 	            	   
            	$result = $this->user_model->getUser();	            	
            	$data['adminResult']=$result;	
            	$this->load->view('admin_home',$data);
            }
    	}
    	else
    	{
    		$this->load->view('login');
    	}
    	
	}

	public function getUserWiseData()
	{
		$userId=$this->input->post('userId'); 

		return $result = $this->user_model->getUser(userId);	    
	}
}
