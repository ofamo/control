<?php 
class Mymodel extends CI_Model{
	public function get_date(){
			$query = $this->db->query('SELECT start_date,end_date FROM start_end WHERE id=1');
			return $query->result_array();
        
}
	
	public function updateDate($start,$end){
		$data['start_date'] = $start;
		$data['end_date'] = $end;
		$this->db->where('id', 1);
		$this->db->update('start_end', $data);
		
	}
        
}