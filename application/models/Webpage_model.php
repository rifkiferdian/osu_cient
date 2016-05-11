<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Webpage_model extends CI_Model {


	public function data_user($id)
	{
		$this->db->from('client_data');
		$this->db->where('id_client', $id);
		$query = $this->db->get();

		return $query->result_array();
	}

/**
 * This moduls can be accessed 
 * Header atas
*/
	//add data inputan di menu header logo
	public function add_header($data)
	{
		$this->db->insert('client_header', $data);
		return $this->db->insert_id();
	}

	//menampilkan data si header logo
	public function data_header($id){
		$this->db->from('client_header');
		$this->db->where('client_id', $id);
		$query = $this->db->get();

		return $query->result_array();
	}

	//edit informasi di menu header logo
	public function header_inform($id)
	{
		$data = array(
					'informasi' => $this->input->post('informasi'),
				);

		$this->db->where('client_id', $id);
		$this->db->update('client_header', $data);
	}

	//edit image di menu header logo
	public function header_image($id, $data)
	{
		$this->db->from('client_header');
		$this->db->where('client_id', $id);
		$query = $this->db->get();
		$img = $query->result_array();

		//delete Image
		$file = $_SERVER['DOCUMENT_ROOT']."/client/assets/web_page/images/logo/" . $img[0]['logo'];
		is_readable($file);
		unlink($file);

		//Edit logo by Client_id
		$this->db->where('client_id', $id);
		$this->db->update('client_header', $data);

	}

/**
 * This moduls can be accessed 
 * Header sosmed
*/
	//tambah data si header sosmed
	public function add_sosmed($data)
	{
		$this->db->insert('client_sosial', $data);
		return $this->db->insert_id();
	}

	//menampilkan data si header sosmed
	public function data_sosmed($id){
		$this->db->from('client_sosial');
		$this->db->where('client_id', $id);
		$query = $this->db->get();

		return $query->result_array();
	}

	//Edit si header sosmed
	public function edit_sosmed($id)
	{
		$data = array(
					'facebook' => $this->input->post('facebook'),
					'twitter' => $this->input->post('twitter'),
					'google_plus' => $this->input->post('google'),
					'youtube' => $this->input->post('youtube'),
				);

		$this->db->where('client_id', $id);
		$this->db->update('client_sosial', $data);
	}



/**
 * This moduls can be accessed 
 * Header sosmed
*/

	//menampilkan data si header slider
	public function data_slider($id){
		$this->db->from('client_slider');
		$this->db->where('client_id', $id);
		$query = $this->db->get();

		return $query->result_array();
	}

	//tambah data si header slider
	public function add_slider($data)
	{
		$this->db->insert('client_slider', $data);
		return $this->db->insert_id();
	}

	//hapus data si header slider
	public function delete_slider($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('client_slider');
	}

	//edit slider di menu header logo
	public function header_edit_slider($id, $data)
	{
		$this->db->from('client_slider');
		$this->db->where('id', $id);
		$query = $this->db->get();
		$img = $query->result_array();

		//delete Image
		$file = $_SERVER['DOCUMENT_ROOT']."/client/assets/web_page/images/slider/" . $img[0]['image'];
		is_readable($file);
		unlink($file);

		//Edit logo by Client_id
		$this->db->where('id', $id);
		$this->db->update('client_slider', $data);
	}

	public function header_edit_text_slider($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('client_slider', $data);
	}


	//
	public function get_data_by_id($table, $id)
	{
		$this->db->from($table);
		$this->db->where('client_id', $id);
		$query = $this->db->get();

		return $query->result_array();
	}

	public function add_data_table($table, $data)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}

	public function delete_content($table, $id, $image)
	{
		//delete Image

		$file = $_SERVER['DOCUMENT_ROOT']."/client/assets/web_page/images/content/".$image;
		is_readable($file);
		unlink($file);
		// echo $file; die(); 

		$this->db->where('id', $id);
		$this->db->delete($table);
	}
}