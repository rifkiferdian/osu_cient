<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_page_content extends CI_Controller {

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
		$this->load->model('webpage_model');
		
		$this->load->model('data_client');
		$id = $this->session->userdata('id');
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
			$table = 'client_content';
			$data_content = $this->webpage_model->get_data_by_id($table, $id);
			$data = array(
				'id' => $id,
				'data_content' => $data_content,
			);

			$this->load->view("header",$this->pp);
				$this->load->view("navbar",$this->pp);
			$this->load->view("webpage/content",$data);
			$this->load->view("footer");

	    } else {
	    	redirect("auth");
	    }
	}


	public function add_content()
	{

		$id = $this->input->post('id');
		$config['upload_path'] = 'assets/web_page/images/content';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '5000';
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('upload')) {
            // echo $this->upload->display_errors();
            redirect("web_page_content/index/".$id);
        } else {

            $file_data = $this->upload->data();
            $data = array(
                    'client_id' => $this->input->post('id'),
                    'content' => $this->input->post('content'),
                    'image'      => $file_data['file_name'],
                    'title_caption'      => $this->input->post('title'),
                    'caption'      => $this->input->post('caption'),

            );
            $this->webpage_model->add_data_table('client_content', $data);

            redirect("web_page_content/index/".$id);
        }
	}

	public function delete_content()
	{
		$id = $this->uri->segment(3);
		$image = $this->uri->segment(4);
		$id_client = $this->session->userdata('id');

		$table = 'client_content';
		$this->webpage_model->delete_content($table, $id, $image);

		redirect("web_page_content/index/".$id_client);
	}


}
