<?php
class MY_Model extends CI_Model {	

	 
	
	function get_website($fld_id,$tabel){
		
		 $this->db->order_by($fld_id,"desc");
		 $this->db->limit(1);	
		 $query=$this->db->get($tabel);
		 if($query->num_rows()== 1){
			return $query->row();
		 }else{
			 return false;
		 }
		 
	}
	
	
	function get_list($fld_id,$table){	
	
		  $this->db->order_by($fld_id,"desc");
		  $this->db->limit(8);	
		  $query=$this->db->get($table);
		   if($query->num_rows() ==''){
				return false;
				}else{
				return $query->result();
			}
		
	}	
	
	
}	