<?php
class Crud_akademik extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_akademik');
	}

	public function index(){
		$data['akademik'] = $this->M_akademik->get_akademik()->result_array();
		$this->load->view('tampil', $data);
	}

		public function upload_file(){
			$this->load->view('form_upload');
		}
		public function aksi_upload(){
			$config['upload_path']			= './upload/';
			$config['allowed_types']		= 'gif|jpg|png';
			$config['max_size']				= 100000; //maksimal ukuran
			$config['max_width']			= 10200; //maksimal
			$config['max_height']			= 7680; //tinggi maksimal
	
			$this->load->library('upload', $config);
	
			if (! $this->upload->do_upload('berkas')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('form_upload', $error);
			}else {
				$data = array('upload_data' => $this->upload->data());
				$this->load->view('sukses_upload', $data);
				}
		}
	

}
?>