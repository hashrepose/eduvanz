<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends My_Controller {
	 
	public function __construct() {
            parent::__construct(); 
            $this->load->library("security");			
            $this->load->helper("common");			
            $this->load->model("Login_Model");	
			
    }
  
    public function index() {	


	    if(($this->session->userdata('logged_in_admin')!==NULL)){
			  redirect('dashboard');
		}else{
			  $this->load->view('login');	

		}
	}
	public function verify()
	{
		$requestMethod	=	$this->input->server('REQUEST_METHOD');
		if($requestMethod == 'POST'){
			
			$useremail			=	($this->input->post('email') != NULL ) ? $this->input->post('email') : "";
			$userpassword		=	md5($this->input->post('password'));
		    $email 				=   $this->security->xss_clean($useremail);	
		    $password 			= 	$this->security->xss_clean($userpassword);	
			
			if(!empty($email) || !empty($password)){
				$result = $this->Login_Model->login($email, $password); 
				
				if($result) {
					
					$this->session->set_userdata('logged_in_admin',$result);
					$this->session->set_flashdata('msg', array('message' => 'you have successfully logged in.','class' => 'success','type'=>'Congratulation !','icon'=>'thumbs-up'));
					
					redirect('dashboard');
					
				}else{
				    $this->session->set_flashdata('msg', array('message' => 'Please Enter Valid Email and Password.','class' => 'danger','type'=>'Oops!','icon'=>'slash')); 
					   redirect('login');
				}			
	
			}else{
                $this->session->set_flashdata('msg',array('message' => 'Please enter Email and Password.','class' => 'danger','type'=>'Oops!','icon'=>'slash'));
				redirect('login');
			} 
		} 
		$this->load->view('login');
	}
	
	
	public function logout()
	{  
		$this->session->unset_userdata('logged_in_admin');
		redirect('login');
	}
}
?>
