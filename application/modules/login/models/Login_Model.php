<?php 
class Login_Model extends MY_Model{
	
	
	function login($mail,$password){	 
	
		$this->db->select('username,password');
		$this->db->from('tbl_user');
		$this->db->where('username',$mail);		
		$this->db->where('password',$password);	
		$this->db->where('utype','admin');
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
}

?>