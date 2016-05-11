<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model {

	private $table = "user";
	private $_data = array();

	public function validate()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->db->where("username", $username);
		$query = $this->db->get($this->table);

		if ($query->num_rows())
		{
			// found row by username
			$row = $query->row_array();

			// now check for the password
			if ($row['password'] == sha1($password))
			{
				// we not need password to store in session
				unset($row['password']);
				$this->_data = $row;
				return ERR_NONE;
			}

			// password not match
			return ERR_INVALID_PASSWORD;
		}
		else {
			// not found
			return ERR_INVALID_USERNAME;
		}
	}

	public function get_data()
	{
		return $this->_data;
	}

	public function add_client($data)
	{
		$this->db->insert('user', $data);
		return $this->db->insert_id();
	}

	public function data_provinsi(){
		$this->db->from('provinsi');
		$query = $this->db->get();

		return $query->result_array();
	}


	public function chec_active($username){
		$this->db->from('user');
		$this->db->where('username', $username);
		// $this->db->query("SELECT * FROM user WHERE username = ");
		$query = $this->db->get();
		$active = $query->result_array();

		return $active[0]['active'];
	}


	public function chec_user_exsis($username){
		$this->db->from('user');
		$this->db->where('username', $username);
		// $this->db->query("SELECT * FROM user WHERE username = ");
		$query = $this->db->get();
		$active = $query->result_array();

		//jika ada return true
		if (count($active) > 0) {
			return true;
		}else {
			return false;
		}

	}


}
