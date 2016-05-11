<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This controller can be accessed 
 * for Admin group only
 */
class Web_page extends MY_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('webpage_model');
		
		$this->load->model('data_client');
		$id = $this->session->userdata('id');
		$id = $this->uri->segment(3);
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

	
	public function home()
	{
		$id = $this->uri->segment(3);
		$data_header = $this->webpage_model->data_header($id);
		$data_sosmed = $this->webpage_model->data_sosmed($id);
		$data_user = $this->webpage_model->data_user($id);

		$table = 'client_content';
		$data_content = $this->webpage_model->get_data_by_id($table, $id);

		$example[] = array(
			'content' => 'Laman web ini memuat informasi penting yang berkaitan dengan Penerimaan Mahasiswa Baru Universitas Islam Indonesia (PMB UII) Tahun Akademik 2016/2017, khususnya untuk Program Strata-1 (S1) dan Diploma-3 (D3). Untuk informasi penerimaan mahasiswa baru program pascasarjana dapat diperoleh melalui masing-masing fakultas pengelola program.' , 
			'image' => 'qweasd123.jpg', 
			'title_caption' => 'COMPUTER BASED TEST', 
			'caption' => 'Pola seleksi dengan menggunakan komputer', 
		);

		if (count($data_content) == 0) {
			$dt = $example;
		}else{ $dt = $data_content; }


		//hapus data array 0 untuk looping -> bingung jelasinnya
		$data_slider = $this->webpage_model->data_slider($id);
		unset($data_slider[0]);
		
		//semua data slider untuk menampilak data array ke 0
		$data_slider2 = $this->webpage_model->data_slider($id);

		$data = array(
			'id' => $id,
			'data_header' => $data_header,
			'data_sosmed' => $data_sosmed,
			'data_slider2' => $data_slider2,
			'data_user' => $data_user,
			'data_content' => $dt,
		);
		$this->load->view("webpage/webpage",$data);
	}


	/**
	 * Header Logo
	 * Table = client_header By client_id
	*/

	public function header_logo()
	{

		if ($this->session->userdata('logged_in') == true ) {

			$id = $this->uri->segment(3);
			$data_header = $this->webpage_model->data_header($id);
			
			$id = $this->session->userdata('id');
			$data = array(
				'id' => $id,
				'data_header' => $data_header,
			);

			$this->load->view("header",$this->pp);
				$this->load->view("navbar",$this->pp);
			$this->load->view("webpage/header_logo",$data);
			$this->load->view("footer");

	    } else {
	    	redirect("auth");
	    }
	}

	public function header_logo_submit()
	{
		$id = $this->input->post('id');
		$config['upload_path'] = 'assets/web_page/images/logo';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '5000';
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('upload')) {
            // echo $this->upload->display_errors();
            redirect("web_page/header_logo/".$id);
        } else {
	   	  //here $file_data receives an array that has all the info
		  //pertaining to the upload, including 'file_name'
            $file_data = $this->upload->data();
            $data = array(
                    'client_id' => $this->input->post('id'),
                    'informasi' => $this->input->post('informasi'),
                    'logo'      => $file_data['file_name']
            );
            $this->webpage_model->add_header($data);

            redirect("web_page/header_logo/".$id);
        }
	}

	
	public function header_edit_inform()
	{
		$id = $this->input->post('id');
		$this->webpage_model->header_inform($id);
		redirect("web_page/header_logo/".$id);
	}

	public function header_edit_image()
	{
		$id = $this->uri->segment(3);
		$config['upload_path'] = 'assets/web_page/images/logo';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '5000';
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('upload')) {
            // echo $this->upload->display_errors();
            redirect("web_page/header_logo/".$id);
        } else {
	   	  //here $file_data receives an array that has all the info
		  //pertaining to the upload, including 'file_name'
            $file_data = $this->upload->data();
            $data = array(
                    'logo'      => $file_data['file_name']
            );
            $this->webpage_model->header_image($id, $data);

            redirect("web_page/header_logo/".$id);
        }
	}


	/**
	 * Header sosmed
	 * Table = client_sosmed By client_id
	*/

	public function header_sosmed()
	{

		if ($this->session->userdata('logged_in') == true ) {

			$id = $this->uri->segment(3);
			$data_sosmed = $this->webpage_model->data_sosmed($id);
			
			$data = array(
				'id' => $id,
				'data_sosmed' => $data_sosmed,
			);

			$this->load->view("header",$this->pp);
				$this->load->view("navbar",$this->pp);
			$this->load->view("webpage/header_sosmed",$data);
			$this->load->view("footer");

	    } else {
	    	redirect("auth");
	    }
	}


	public function header_sosmed_submit()
	{
		$id = $this->input->post('id');
		$this->load->library('form_validation');
		$this->form_validation->set_rules("facebook", "Facebook", "trim|required");
		$this->form_validation->set_rules("twitter", "Twitter", "trim|required");
		$this->form_validation->set_rules("google", "Google", "trim|required");
		$this->form_validation->set_rules("youtube", "Youtube", "trim|required");
		if ($this->form_validation->run() == true) {	
			$id = $this->input->post('id');
			$data = array(
					'client_id' => $this->input->post('id'),
					'facebook' => $this->input->post('facebook'),
					'twitter' => $this->input->post('twitter'),
					'google_plus' => $this->input->post('google'),
					'youtube' => $this->input->post('youtube'),
			);
			$insert = $this->webpage_model->add_sosmed($data);
			redirect("web_page/header_sosmed/".$id);
		}else{
			redirect("web_page/header_sosmed/".$id);
		}
	}


	public function header_sosmed_edit()
	{
		$id = $this->uri->segment(3);
		// echo $id;
		$this->webpage_model->edit_sosmed($id);
		redirect("web_page/header_sosmed/".$id);
	}




	/**
	 * Header slider
	 * Table = client_slider By client_id
	*/

	public function header_slider()
	{
		if ($this->session->userdata('logged_in') == true ) {

			$id = $this->uri->segment(3);
			$data_slider = $this->webpage_model->data_slider($id);
			
			$data = array(
				'id' => $id,
				'data_slider' => $data_slider,
			);

			$this->load->view("header",$this->pp);
				$this->load->view("navbar",$this->pp);
			$this->load->view("webpage/header_slider",$data);
			$this->load->view("footer");

	    } else {
	    	redirect("auth");
	    }
	}

	//delete Slider by id
	public function header_slider_delete()
	{
		$id = $this->uri->segment(3);
		$id_client = $this->session->userdata('id');
		$this->webpage_model->delete_slider($id);
		redirect("web_page/header_slider/".$id_client);
	}

	// slider add ke table client_slider
	public function header_slider_submit()
	{
		$id = $this->input->post('id');
		$config['upload_path'] = 'assets/web_page/images/slider';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '5000';
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('upload')) {
            // echo $this->upload->display_errors();
            redirect("web_page/header_slider/".$id);
        } else {
	   	  //here $file_data receives an array that has all the info
		  //pertaining to the upload, including 'file_name'
            $file_data = $this->upload->data();
            $data = array(
                    'client_id' => $this->input->post('id'),
                    'image'      => $file_data['file_name'],
                    'text_atas' => $this->input->post('atas'),
                    'text_tengah' => $this->input->post('tengah'),
                    'text_bawah' => $this->input->post('bawah'),
            );
            $this->webpage_model->add_slider($data);

            redirect("web_page/header_slider/".$id);
        }
	}

	public function header_edit_slider()
	{
		$id = $this->input->post('id');
		$id_client = $this->session->userdata('id');

		$config['upload_path'] = 'assets/web_page/images/slider';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '5000';
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('upload')) {
        	$data = array(
                    'text_atas' => $this->input->post('atas'),
                    'text_tengah' => $this->input->post('tengah'),
                    'text_bawah' => $this->input->post('bawah'),
            );
            $this->webpage_model->header_edit_text_slider($id, $data);
            // echo $this->upload->display_errors();
            redirect("web_page/header_slider/".$id_client);
        } else {
	   	  //here $file_data receives an array that has all the info
		  //pertaining to the upload, including 'file_name'
            $file_data = $this->upload->data();
            $data = array(
                    'image'      => $file_data['file_name'],
                    'text_atas' => $this->input->post('atas'),
                    'text_tengah' => $this->input->post('tengah'),
                    'text_bawah' => $this->input->post('bawah'),
            );
            $this->webpage_model->header_edit_slider($id, $data);

            redirect("web_page/header_slider/".$id_client);
        }
	}
}