<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
	 
	public function __construct() {
            parent::__construct(); 
			$this->load->helper("common");	
			$this->load->model("Dashboard_Model");	
			$this->login = $this->session->userdata('logged_in_admin');			
			  if(empty($this->login)){
				redirect('login','refresh');
			  }	
    }
 
    function index() {  
          $content['total_participants'] = $this->Dashboard_Model->fetch_participant_count();     
		  $content['subview']="dashboard";
		  $this->load->view('layout', $content);
	}	
}
?>
