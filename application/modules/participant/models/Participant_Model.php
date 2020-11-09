<?php 
class Participant_Model extends MY_Model{

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

?>