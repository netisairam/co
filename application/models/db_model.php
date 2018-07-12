<?php
	class Db_model extends CI_Model{
		public function insert_into_user($table , $data){
			$this->db->insert($table, $data);	
		}
		public function get_records($que){
			$query=$this->db->query($que);
   			return $query->result_array();
		} 	
		public function get_edit_records($table, $value){
			$this->db->where('id',$value);
			$this->db->from($table);
			$query= $this->db->get();
   			return $query->result();
		}
		public function update_record($table, $data, $where){
			$this->db->update($table, $data, $where);         
		}
		function row_delete($table, $data)
		{
		   // $this->db->where('id', $id);
		   $this->db->delete($table, $data); 
		}
	}

?>
