<?php 
	
	/**
	 * Student Model
	 */
	class Student_model extends CI_Model
	{
		
		public function get_students($table){

			$query = $this->db->order_by('id','desc')->get($table);

			return $query->result_array();
		}

		public function insert_student($table,$data){
				return $this->db->insert($table,$data);
		}

		public function update_student($table,$data,$where){
			return $this->db->update($table,$data,$where);
		}

		public function delete_student($table,$record_id){

			return $this->db->delete($table,array('id'=>$record_id));
		}

		public function get_record_by_id($table,$record_id){
			$query = $this->db->where('id',$record_id)->get($table);

			return $query->result_array();
		}
	}

 ?>