<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends MY_Controller {
	 
	public function __construct() {
            parent::__construct(); 
			$this->load->helper("common");	
			$this->load->model("Event_Model");	
			// $this->login = $this->session->userdata('logged_in_admin');			
			//   if(empty($this->login)){
			// 	redirect('login','refresh');
			//   }  
            		
    }
 
    public function index() { 

		$this->login = $this->session->userdata('logged_in_participant');			
		  if(!empty($this->login))
		  {
			$uid = $this->session->userdata['logged_in_participant']->id;
			$pDetail  = $this->Event_Model->fetch_participant_details($uid);


		  }  
		
          if(!empty($pDetail))
				$content['participant_list'] = $pDetail;
			else	
			$content['participant_list'] = array();

		  $content['subview']="index";
		  $this->load->view('layout_participant', $content);
         
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function register_user()
	{
		$content['subview']="register_user";
		$this->load->view('layout_participant', $content);
	}
	public function save_user_details()
	{
		
		$requestMethod	=	$this->input->server('REQUEST_METHOD');
		if($requestMethod == 'POST')
		{
			$data = array();

			$data['name'] 		= ($_REQUEST['full_name'] != NULL ) ? $_REQUEST['full_name'] : '';
			$data['username'] 	= ($_REQUEST['email'] != NULL ) ? $_REQUEST['email'] : '';
			$data['password'] 	= ($_REQUEST['password'] != NULL ) ? md5($_REQUEST['password']) : '';
			$data['utype']	= 'user';

			$result = $this->Event_Model->save_user_details($data);
			if($result)
				redirect('event/login');
			else
				redirect('event/register_user');
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
				$result = $this->Event_Model->login($email, $password); 
				
				if($result) {
					
					$this->session->set_userdata('logged_in_participant',$result);
					redirect('event');
					
				}else{
				   
					   redirect('event/login');
				}			
	
			}else{
               
				redirect('event/login');
			} 
		} 
		$this->load->view('login');
	}
	public function logout()
	{
		$this->session->unset_userdata('logged_in_participant');
		redirect('event');
	}

	public function register()
	{
		$isLogin = $this->session->userdata('logged_in_participant');	
		if(empty($isLogin)){
			redirect('event/login');
		}

		$content['subview']="register";
		$this->load->view('layout_participant', $content);
	}
	public function update_info()
	{
		$isLogin = $this->session->userdata('logged_in_participant');	
		if(empty($isLogin)){
			redirect('event/login');
		}
			$requestMethod	=	$this->input->server('REQUEST_METHOD');
			if($requestMethod == 'POST')
			{
				
				$pid				=	($_REQUEST['pid'] != NULL) ? base64_decode($_REQUEST['pid']) : "";
				$full_name			=	($_REQUEST['full_name'] != NULL) ? $_REQUEST['full_name'] : "";
				$age				=	($_REQUEST['age'] != NULL) ? $_REQUEST['age'] : "";
				$date_of_birth		=	($_REQUEST['date_of_birth'] != NULL) ? $_REQUEST['date_of_birth'] : "";
				$profession			=	($_REQUEST['profession'] != NULL) ? $_REQUEST['profession'] : "";
				$locality			=	($_REQUEST['locality'] != NULL) ? $_REQUEST['locality'] : "";
				$no_of_guest		=	($_REQUEST['no_of_guest'] != NULL) ? $_REQUEST['no_of_guest'] : "";
				$address			=	($_REQUEST['address'] != NULL) ? $_REQUEST['address'] : "";

				 $url = $this->config->item('api_path').'update_participant';



				$curl = curl_init();
				
				curl_setopt($curl, CURLOPT_URL, $url);
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($curl, CURLOPT_POST, 1);
				curl_setopt($curl, CURLOPT_POSTFIELDS, array(
					'pid' => $pid,
					'full_name' => $full_name,
					'age' => $age,
					'date_of_birth' => $date_of_birth,
					'profession' => $profession,
					'locality' => $locality,
					'no_of_guest' => $no_of_guest,
					'address' => $address
				));

				$resultSet = curl_exec($curl);
				curl_close($curl);	
				$result = json_decode($resultSet,true);
				if(!empty($result))
				{
					$responsecode = $result['responsecode'];
					if($responsecode == 200)
					{
						redirect('event');	
					}
					
				}
			}
	}
	public function edit_details() 
	{

		$this->login = $this->session->userdata('logged_in_participant');			
		if(empty($this->login)){
			redirect('login','refresh');
		}  
		$participantId = "";

		$requestMethod	=	$this->input->server('REQUEST_METHOD');
		if($requestMethod == 'GET')
		{

			$participantId = ($this->uri->segment(3) != null && $this->uri->segment(3) != "") ? base64_decode($this->uri->segment(3)) : '';
		

			/** Fetch indiviual Participant details  */

			$pDetail = $this->Event_Model->get_participant_detail($participantId);

			if(!empty($pDetail))
				$content['pDetails'] = $pDetail;
			else	
			$content['pDetails'] = array();

			$content['subview']="participant_edit";
			$this->load->view('layout_participant', $content);
		}
		

	}

}
