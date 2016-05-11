<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->model('send_email');
	}

	public function index() {
		$dt = $this->auth_model->data_provinsi();
		$data = array(
			'data_provinsi' => $dt,
		);
		$this->load->view('register/register2',$data);
	}

	public function add_client(){
		//for inique key registrasi
		$key = md5(microtime().rand());

		$data = array(
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'nama_uni' => $this->input->post('uni'),
				'kota' => $this->input->post('kota'),
				'provinsi' => $this->input->post('provinsi'),
				'password' => sha1($this->input->post('password')),
				'role' => "admin",
				'key_register' => $key,
		);

		$send_to = $this->input->post('email');
		$nama = $this->input->post('username');
		$pass = $this->input->post('password');
		$username = $this->input->post('username');

		//cek jika exixs return true
		$cek = $this->auth_model->chec_user_exsis($username);

		if ($cek == true) {
			echo json_encode(array("status" => true));
		}else {
			//insert data
			$insert = $this->auth_model->add_client($data);
			// kirim email
			$this->send_email->send($send_to,$nama,$pass, $key);
			echo json_encode(array("status" => false));
		}

	}

	public function konfirmasi()
	{
		$key = $this->uri->segment(3);
		$data = array(
				'key' => $key,
		);
		$this->load->view('register/konfirm_email',$data);
		// $this->send_email->edit_actve_register($key);

	}


	public function konfirm_email()
	{
		$key = $this->uri->segment(3);
		$this->send_email->edit_actve_register($key);
		redirect("auth");

	}

	//info page informasi untuk konfirmasi email
	public function info_konfirmasi()
	{
		$this->load->view('register/info_konfirmasi');
	}

}
