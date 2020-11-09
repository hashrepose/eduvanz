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
             // $this->vendor=vendor_profile($this->login->vnd_email);	    		
            // $this->load->model("Dashboard_Model",'dashboard');	
         
            // $this->fld_email="vnd_email";	
            // $this->fld_password="vnd_password";	
            // $this->table_vendor="tbl_vendor";	 
          
			// $this->fld_op_id="op_id";	 			
			// $this->table_order_product="tbl_orders_product";
		
			// $this->fld_wlt_id="wlt_id";	 			
			// $this->table_wallet="tbl_wallet";
	
			// $this->fld_rfd_id="rfd_id";	 			
			// $this->table_refund_amount="tbl_refund_amount";
		
			// $this->table_product="tbl_product";		
    }
 
    function index() {  

			// die("ssdsdsd");
          $content['total_participants'] = $this->Dashboard_Model->fetch_participant_count();     
		  $content['subview']="dashboard";
		  $this->load->view('layout', $content);
         
	}	
	
	
	public function badrequest() { 	
		$content['subview']="dashboard/badrequest";
		$this->load->view('layout', $content);

	}
			
	
}
