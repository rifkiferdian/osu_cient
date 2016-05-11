<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mailbox extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('data_client');
		$id = $this->session->userdata('id');

		//for image and any else
		$header_data = $this->data_client->data_id($id);
		$data_user = $this->data_client->data_user($id);
		if (count($header_data) == 0) {
			$img = '';
			$jenis = '';
		}else{
			$img = $header_data[0]['image'];
			$jenis = $header_data[0]['jenis_pt'];
		}
		$this->pp = array(
		    'data' => $img,
		    'id' => $id,
		    'jenis' => $jenis,
		    'nama_uni' => $data_user[0]['nama_uni'],
		);
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == true ) {
			
			$id = $this->session->userdata('id');
			$data = array(
			    'id' => $id,
			    'dt' => '0',
			);

			$this->load->view("header",$this->pp);
			$this->load->view("navbar",$this->pp);
			$this->load->view("mailbox/mailbox",$data);
			$this->load->view("footer",$data);
	    } else {
	    	redirect("auth");
	    }

	}

	public function chatbox()
	{
		if ($this->session->userdata('logged_in') == true ) {
			
			$id = $this->session->userdata('id');
			$data = array(
			    'id' => $id,
			    'dt' => '0',
			);

			$this->load->view("header",$this->pp);
			$this->load->view("navbar",$this->pp);
			$this->load->view("mailbox/chatbox",$data);
			$this->load->view("footer",$data);
	    } else {
	    	redirect("auth");
	    }

	}


}
