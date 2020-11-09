<?php 
class Event_Model extends MY_Model{
	
	public function save_user_details($data = array()){
		
		if(!empty($data))
		{
		   $this->db->insert('tbl_user', $data);
		   return $this->db->insert_id();
		} 
	 }
	 function login($mail,$password){	 
	
		$this->db->select('id,username,password');
		$this->db->from('tbl_user');
		$this->db->where('username',$mail);		
		$this->db->where('password',$password);	
		$this->db->where('utype','user');
		$query	=  $this->db->get();	 
		if($query->num_rows()== 1)
	    {
		 return $query->row();
	    }
	    else
	    {
		 return false;
	    }
	}
	public function fetch_participant_details($uid)
	{
		$this->db->select('id,full_name,age,date_of_birth,profession,locality,no_of_guest,address,added_on');
		$this->db->from('tbl_participant');
		$this->db->where('user_id',$uid);
		$query=$this->db->get();
		//$this->db->last_query($query);
		  if($query->num_rows() > 0 ){
				return $query->result();
			}else{		
				return '';
			}
	}
	public function get_participant_detail($id)
    {
        
            $this->db->select('id,full_name,age,date_of_birth,profession,locality,no_of_guest,address,added_on');
            $this->db->from('tbl_participant');
            $this->db->where('id',$id);
            $query=$this->db->get();
            //$this->db->last_query($query);
              if($query->num_rows() > 0 ){
                    return $query->result();
                }else{		
                    return '';
                }
         
        
    }
}