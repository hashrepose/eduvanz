<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Participant extends MY_Controller {
	 
	public function __construct() {
            parent::__construct(); 
			$this->load->helper("common");	
			$this->load->model("Participant_Model");	
			// $this->login = $this->session->userdata('logged_in_admin');			
			//   if(empty($this->login)){
			// 	redirect('login','refresh');
			//   }  
           	
    }
	
    public function getAll() {   

		/**
		 * API to fetch all List of Participant
		 * */
		$url = $this->config->item('api_path').'fetchAllParticipant';
		$curl = curl_init();
		$headers = array(
			'Accept: application/json',
			'Content-Type: application/json',
			);
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);	
		curl_setopt($curl, CURLOPT_HEADER, 0);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$resultSet = curl_exec($curl);
		curl_close($curl);
		 
		$result = json_decode($resultSet,true);
		
		if(!empty($result))
		{
			if($result['responsecode'] == 200)
				$content['participant_list'] = $result['participant_list'];	
		 	else
				$content['participant_list'] = array();
			

		}
		$content['subview']="participant_list";
		$this->load->view('layout', $content);
	}	
	/* Function to create Participant */
	public function create()
	{
		/**
		 * API to Add Participant
		 * */

		$requestMethod	=	$this->input->server('REQUEST_METHOD');
		if($requestMethod == 'POST')
		{
			
			$full_name			=	($_REQUEST['full_name'] != NULL) ? $_REQUEST['full_name'] : "";
			$age				=	($_REQUEST['age'] != NULL) ? $_REQUEST['age'] : "";
			$date_of_birth		=	($_REQUEST['date_of_birth'] != NULL) ? $_REQUEST['date_of_birth'] : "";
			$profession			=	($_REQUEST['profession'] != NULL) ? $_REQUEST['profession'] : "";
			$locality			=	($_REQUEST['locality'] != NULL) ? $_REQUEST['locality'] : "";
			$no_of_guest		=	($_REQUEST['no_of_guest'] != NULL) ? $_REQUEST['no_of_guest'] : "";
			$address			=	($_REQUEST['address'] != NULL) ? $_REQUEST['address'] : "";
			$uid				=	($_REQUEST['uid'] != NULL) ? $_REQUEST['uid'] : "";	
			
			$url = $this->config->item('api_path').'create_participant';
			$curl = curl_init();
			// $headers = array(
			// 	'Accept: application/json',
			// 	'Content-Type: application/json',
			
			// 	);
			curl_setopt($curl, CURLOPT_URL, $url);
			// curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);	
			// curl_setopt($curl, CURLOPT_HEADER, 0);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl, CURLOPT_POST, 1);
			curl_setopt($curl, CURLOPT_POSTFIELDS, array(
				'full_name' => $full_name,
				'age' => $age,
				'dob' => $date_of_birth,
				'profession' => $profession,
				'locality' => $locality,
				'no_of_guest' => $no_of_guest,
				'address' => $address,
				'user_id' => $uid
			));
			$resultSet = curl_exec($curl);
			curl_close($curl);		
					
			$result = json_decode($resultSet,true);
			if($result['responsecode'] == 200)
				redirect('event');
			else
				redirect('event/register');
		}	
		else
		{
			redirect('event/register');
		}
	}

	/** Admin Edit Participant */
	public function edit() 
	{
		$this->login = $this->session->userdata('logged_in_admin');			
		if(empty($this->login)){
			redirect('login','refresh');
		}  
		$participantId = "";

		$requestMethod	=	$this->input->server('REQUEST_METHOD');
		if($requestMethod == 'GET')
		{

			$participantId = ($this->uri->segment(3) != null && $this->uri->segment(3) != "") ? base64_decode($this->uri->segment(3)) : '';
		

			/** Fetch indiviual Participant details  */

			$pDetail = $this->Participant_Model->get_participant_detail($participantId);

			if(!empty($pDetail))
				$content['pDetails'] = $pDetail;
			else	
			$content['pDetails'] = array();

			$content['subview']="participant_edit";
			$this->load->view('layout', $content);
		}
		

	}	
	public function update_participant_details()
	{
		
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
						redirect('participant/getAll');	
					}
				}
		}
	}
}
?>
