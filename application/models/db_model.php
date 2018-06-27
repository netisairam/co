<?php
	class Db_model extends CI_Model{
		public function insert_into_user($table , $data){
			$this->db->insert($table, $data);	
		}
		public function get_records($que){
			$query=$this->db->query($que);
   			return $query->result();
		} 	
		public function get_edit_records($table, $value){
			$this->db->where('id',$value);
			$this->db->from($table);
			$query= $this->db->get();
   			return $query->result();
		}
		public function update_record($table, $value, $id){
			$this->db->where('id', $id);
			$this->db->update($table, $value);           
		}
		function row_delete($table, $id)
		{
		   $this->db->where('id', $id);
		   $this->db->delete($table); 
		}
	}

?>
