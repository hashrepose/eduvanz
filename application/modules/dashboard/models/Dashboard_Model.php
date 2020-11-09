<?php 
class Dashboard_Model extends MY_Model{
	
	  
	 
	public function fetch_participant_count(){
		
	     $this->db->select('count(*) as total_count');
		 $this->db->from('tbl_participant');
		 $query=$this->db->get();

		 if($query->num_rows() > 0){
			return $query->row()->total_count;
		 }else{
			 return false;
		 }
	 }
}
?>