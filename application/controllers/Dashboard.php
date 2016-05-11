<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This controller can be accessed 
 * for all logged in users
 */
class Dashboard extends MY_Controller {	

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
			$dt = $this->data_client->data_id($id);
			
			if (count($dt) == 0) {
				$data = array(
				    'dt' => '0',
				    'id' => '$id',
				);
				$this->load->view("header",$this->pp);
				$this->load->view("navbar",$this->pp);
				$this->load->view("info_dashboard",$data);
				$this->load->view("footer",$data);
			}else{
				$data = array(
				    'dt' => $dt,
				    'nama' => $this->session->userdata('username'),
				    'email' => $this->session->userdata('email'),
				    'nama_uni' => $this->session->userdata('nama_uni'),
				    'kota' => $this->session->userdata('kota'),
				    'provinsi' => $this->session->userdata('provinsi'),
				    'id' => $this->session->userdata('id'),

				    'singkatan' => $dt[0]['singkatan'],
					'alamat' => $dt[0]['alamat'],
					'thn_diri' => $dt[0]['thn_diri'],
					'website' => $dt[0]['website'],
					'jenis_pt' => $dt[0]['jenis_pt'],
					'akreditasi' => $dt[0]['akreditasi'],
					'jml_fakultas' => $dt[0]['jml_fakultas'],
					'jml_prodi' => $dt[0]['jml_prodi'],
					'image' => $dt[0]['image'],
					'bio' => $dt[0]['bio'],
				);

			$this->load->view("header",$this->pp);
			$this->load->view("navbar",$this->pp);
			$this->load->view("dashboard",$data);
			$this->load->view("footer",$data);
			}
	    } else {
	    	redirect("auth");
	    }
	    
	}

	public function add_data_client()
	{
		if ($this->session->userdata('logged_in') == true ) {
			
			$id = $this->session->userdata('id');
			$data = array(
			    'id' => $id,
			    'dt' => '0',
			);

			$this->load->view("header",$this->pp);
			$this->load->view("navbar",$this->pp);
			$this->load->view("add_data_client",$data);
			$this->load->view("footer",$data);
	    } else {
	    	redirect("auth");
	    }

	}

	public function add_data_client_submit() {

		$this->load->library('form_validation');
		$this->form_validation->set_rules("singkatan", "Singkatan", "trim|required");
		$this->form_validation->set_rules("alamat", "Alamat", "trim|required");
		$this->form_validation->set_rules("web", "Web", "trim|required");
		$this->form_validation->set_rules("jenis_pt", "Jennis PT", "trim|required");
		$this->form_validation->set_rules("akreditasi", "Akreditasi", "trim|required");
		$this->form_validation->set_rules("jml_fakultas", "Fakultas", "trim|required");
		$this->form_validation->set_rules("jml_prodi", "Prodi", "trim|required");
		$this->form_validation->set_rules("bio", "Bio", "trim|required");
		$this->form_validation->set_rules("thn_diri", "Tahun Berdiri", "trim|required");

		if ($this->form_validation->run() == true) {			
			$data = array(
					'id_client' => $this->input->post('id'),
					'singkatan' => $this->input->post('singkatan'),
					'alamat' => $this->input->post('alamat'),
					'website' => $this->input->post('web'),
					'jenis_pt' => $this->input->post('jenis_pt'),
					'akreditasi' => $this->input->post('akreditasi'),
					'jml_fakultas' => $this->input->post('jml_fakultas'),
					'jml_prodi' => $this->input->post('jml_prodi'),
					'thn_diri' => $this->input->post('thn_diri'),
					'bio' => $this->input->post('bio'),
			);
			$insert = $this->data_client->add_client_data($data);
			$this->session->set_flashdata("msg", "Data Telah tersimpan..! Anda Bisa mengakses Dahsboard");

			$id = $this->session->userdata('id');
			$data = array(
			    'id' => $id,
			);
			$this->load->view("header",$this->pp);
			$this->load->view("navbar",$this->pp);
			$this->load->view("add_data_client",$data);
			$this->load->view("footer",$data);
		}else{
			$id = $this->session->userdata('id');
			$data = array(
			    'id' => $id,
			);
			$this->load->view("header",$this->pp);
			$this->load->view("navbar",$this->pp);
			$this->load->view("add_data_client",$data);
			$this->load->view("footer",$data);
		}
	}

	public function edit_data_client_submit() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules("singkatan", "Singkatan", "trim|required");
		$this->form_validation->set_rules("alamat", "Alamat", "trim|required");
		$this->form_validation->set_rules("website", "Website", "trim|required");
		$this->form_validation->set_rules("jenis_pt", "Jennis PT", "trim|required");
		$this->form_validation->set_rules("akreditasi", "Akreditasi", "trim|required");
		$this->form_validation->set_rules("jml_fakultas", "Fakultas", "trim|required");
		$this->form_validation->set_rules("jml_prodi", "Prodi", "trim|required");
		$this->form_validation->set_rules("bio", "Bio", "trim|required");

		if ($this->form_validation->run() == true) {	
			$id = $this->input->post('id');
			$data = array(
					'singkatan' => $this->input->post('singkatan'),
					'alamat' => $this->input->post('alamat'),
					'website' => $this->input->post('website'),
					'jenis_pt' => $this->input->post('jenis_pt'),
					'akreditasi' => $this->input->post('akreditasi'),
					'jml_fakultas' => $this->input->post('jml_fakultas'),
					'jml_prodi' => $this->input->post('jml_prodi'),
					'bio' => $this->input->post('bio'),
			);
			$insert = $this->data_client->edit_client_data($data, $id);
			redirect("dashboard");
		}else{
			redirect("dashboard");
		}
	}

	public function upload_profile()
	{
		$id = $this->uri->segment(3);
		$config['upload_path'] = 'assets/img/logo';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '5000';
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('upload')) {
            // echo $this->upload->display_errors();
            redirect("dashboard");
        } else {
	   	  //here $file_data receives an array that has all the info
		  //pertaining to the upload, including 'file_name'
            $file_data = $this->upload->data();
            $data = array(
                    'image'      => $file_data['file_name'],
            );
            $this->data_client->upload_profile($id,$data);

            redirect("dashboard");
        }
	}

}