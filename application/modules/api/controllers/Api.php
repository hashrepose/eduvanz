<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends MY_Controller {
	 
	public function __construct() {
            parent::__construct(); 
			$this->load->helper("common");
			$this->load->model("Api_Model"); 		
    }
 
 public function fetchAllParticipant() {  
		
		  $responseArray = array();
		  $resultet = $this->Api_Model->getlist();
		 
		  
		  if(!empty($resultet) && isset($resultet))
		  {

			$responseArray['participant_list'] = $resultet;
			$responseArray['responsecode'] = 200;
			$responseArray['success_message'] = 'success';
			$responseArray['failure_message'] = '';

		  }	
		  else
		  {
			  $responseArray['participant_list'] = array();
			  $responseArray['responsecode'] = 200;
			  $responseArray['success_message'] = 'No result found';
			  $responseArray['failure_message'] = '';
		  }
		 
		  echo json_encode($responseArray);
		
         
	}
	public function create_participant()
	{
			$responseArray = array();
			$data 		   = array();
			$added_on	   = $modified_on = date('Y-m-d H:i:s');

			$reponseCode = '';
			$successMsg  = '';
			$failMsg	 = '';

			$full_name			=	$data['full_name'] 		= $_REQUEST['full_name'];
			$age				=	$data['age'] 			= $_REQUEST['age'];
			$date_of_birth		=	$data['date_of_birth']  = $_REQUEST['dob'];
			$profession			=	$data['profession'] 	= $_REQUEST['profession'];
			$locality			=	$data['locality'] 		= $_REQUEST['locality'];
			$no_of_guest		=	$data['no_of_guest'] 	= $_REQUEST['no_of_guest'];
			$address			=	$data['address'] 		= $_REQUEST['address'];
			$user_id			=	$data['user_id'] 		= $_REQUEST['user_id'];

			$data['added_on'] 	 = $added_on;
			$data['modified_on'] = $modified_on;

		if($full_name != '' && $age != '' && $date_of_birth != '' && $profession != '' && $locality != '' && $no_of_guest != '' && $address != '' )	
		{
			if($no_of_guest >2 || $no_of_guest < 0) // Check no of guest i in between 0 to 2 
			{
				$reponseCode = 400;
				$failMsg 	 = "No of guest should be in between 0 to 2";
			}
			else // Insert into database
			{
				$last_record_id = $this->Api_Model->save_registration($data);
				if($last_record_id > 0)
				{
					$reponseCode = 200;
					$successMsg  = 'success';
					$failMsg	 = '';
				}
				else
				{
					$reponseCode = 400;
					$successMsg  = '';
					$failMsg	 = 'something Went Wrong';
				}
			}	
		}
		else
		{
			$reponseCode = 400;
			$failMsg 	 = "All fields are required";
			
		}

			$responseArray['responsecode'] = $reponseCode;
			$responseArray['success_message'] = $successMsg;
			$responseArray['failure_message'] = $failMsg;
		echo json_encode($responseArray);
	}
	public function update_participant()
	{
		

			$responseArray = array();
			$data 		   = array();
			$modified_on   = date('Y-m-d H:i:s');

			$reponseCode = '';
			$successMsg  = '';
			$failMsg	 = '';

			$id			 		=   $_REQUEST['pid'];
			$full_name			=	$data['full_name'] 		= $_REQUEST['full_name'];
			$age				=	$data['age'] 			= $_REQUEST['age'];
			$date_of_birth		=	$data['date_of_birth']  = $_REQUEST['date_of_birth'];
			$profession			=	$data['profession'] 	= $_REQUEST['profession'];
			$locality			=	$data['locality'] 		= $_REQUEST['locality'];
			$no_of_guest		=	$data['no_of_guest'] 	= $_REQUEST['no_of_guest'];
			$address			=	$data['address'] 		= $_REQUEST['address'];
			$data['modified_on'] = $modified_on;


			$resultet = $this->Api_Model->update($id,$data);
			if($resultet)
			{
				$reponseCode = 200;
				$successMsg = 'success';
			}
				
			else
			{
				$reponseCode = 400;
				$failMsg 	= 'failure';
			}
				

			$responseArray['responsecode'] = $reponseCode;
			$responseArray['success_message'] = $successMsg;
			$responseArray['failure_message'] = $failMsg;
			
			echo json_encode($responseArray);exit;
	}

}

?>
