<?php 
class Api_Model extends MY_Model{
	
	 
	function getlist()
	{
		$this->db->select('id,full_name,age,date_of_birth,profession,locality,no_of_guest,address,added_on');
		$this->db->from('tbl_participant');
		$this->db->order_by('added_on',"DESC");
		$query=$this->db->get();
		//$this->db->last_query($query);
          if($query->num_rows() ==''){
		     return '';
			}else{		
		     return $query->result();
			}
	 }	 
	
	function save_registration($data = array()){	
	
		 if(!empty($data))
		 {
			$this->db->insert('tbl_participant', $data);
			return $this->db->insert_id();
		 }
	}
	public function update($id="",$data = array()) {
	
		$this->db->where('id', $id);
        $query	=	$this->db->update('tbl_participant', $data);
        if($query){
			return true;
		}else{
			return false;
		}
    }
}