<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_client extends CI_Model {

	public function add_client_data($data)
	{
		$this->db->insert('client_data', $data);
		return $this->db->insert_id();
	}

	public function edit_client_data($data, $id)
	{
		$this->db->where('id_client', $id);
        $this->db->update('client_data', $data);
	}

	public function data_id($id){
		$this->db->from('client_data');
		$this->db->where('id_client', $id);
		$query = $this->db->get();

		return $query->result_array();
	}

	public function upload_profile($id, $data)
	{
		$this->db->from('client_data');
		$this->db->where('id_client', $id);
		$query = $this->db->get();
		$img = $query->result_array();

		//delete Image
		$file = base_url("assets/img/logo/" . $img[0]['image']);

		if (file_exists($file)) {
			is_readable($file);
			unlink($file);
		}

		//Edit logo by Client_id
		$this->db->where('id_client', $id);
		$this->db->update('client_data', $data);
	}

	public function data_user($id){
		$this->db->from('user');
		$this->db->where('id', $id);
		$query = $this->db->get();

		return $query->result_array();
	}
}