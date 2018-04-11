<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

	
	public function getUser($table_name)
	{
		$get_user = $this->db->get($table_name);
		return $get_user->result_array();
	}

	public function createData($table_name,$data){
		$create = $this->db->insert($table_name,$data);
		return $create;
	}

	public function editData($table_name,$data,$id){
		$this->db->where('id_book',$id);
		$edit = $this->db->update($table_name,$data);
		return $edit;
	}

	public function deleteData($table_name,$id){
		$this->db->where('id_book',$id);
		$hapus = $this->db->delete($table_name);
		return $hapus;
	}

	public function dataEdit($table_name,$id){
		$this->db->where('id_book',$id);
		$get_user = $this->db->get($table_name);
		return $get_user->row();
	}
}
