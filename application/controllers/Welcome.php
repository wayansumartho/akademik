<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// memanggil helper HTML
		$this->load->helper('html');
		// memanggil library form validation
		$this->load->library('form_validation');
	}
	public function about($nama)
	{
		echo "<h1>Halaman About</h1>";
		echo "<hr>";
		echo "Nama Saya = " . $nama;
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function heading()
	{
		$this->load->view('heading.php');
	}
	public function tgl_indonesia()
	{
		$this->load->helper('tgl_indo');
		$tgl = date("Y-m-d H:i:s");
		echo tgl_ind($tgl);
	}
	public function kalkulator()
	{
		$this->load->view('latihan/form_kalkulator');
	}

	public function aksi_kalkulator()
	{
		$angka1 = $this->input->post('angka1');
		$angka2 = $this->input->post('angka2');
		$operasi = $this->input->post('operasi');
		$this->form_validation->set_rules('angka1', 'Angka 1', 'required|numeric');
		$this->form_validation->set_rules('angka2', 'Angka 2', 'required|numeric');

		if ($this->form_validation->run() != false) {
			switch ($operasi) {
				case "penjumlahan":
					$hasil = $angka1 + $angka2;
					echo "Hasil Penjumlahan Antara " . $angka1 . " + " . $angka2 . " adalah = " . $hasil;
					echo "<hr>";
					echo "<a href=" . site_url('welcome/kalkulator') . ">Kembali ke form perhitungan</a>";
					break;

				case "pengurangan":
					$hasil = $angka1 - $angka2;
					echo "Hasil Pengurangan Antara " . $angka1 . " - " . $angka2 . " adalah = " . $hasil;
					echo "<hr>";
					echo "<a href=" . site_url('welcome/kalkulator') . ">Kembali ke form perhitungan</a>";
					break;

				case "perkalian":
					$hasil = $angka1 * $angka2;
					echo "Hasil Perkalian Antara " . $angka1 . " * " . $angka2 . " adalah = " . $hasil;
					echo "<hr>";
					echo "<a href=" . site_url('welcome/kalkulator') . ">Kembali ke form perhitungan</a>";
					break;

				case "pembagian":
					$hasil = $angka1 / $angka2;
					echo "Hasil Pembagian Antara " . $angka1 . " / " . $angka2 . " adalah = " . $hasil;
					echo "<hr>";
					echo "<a href=" . site_url('welcome/kalkulator') . ">Kembali ke form perhitungan</a>";
					break;
			}
		} else {
			$this->load->view('form_kalkulator');
		}
	}
	public function upload_file()
	{
		$this->load->view('form_upload');
	}
	public function aksi_upload()
	{
		$config['upload_path']			= './upload/';
		$config['allowed_types']		= 'gif|jpg|png';
		$config['max_size']				= 100000; //maksimal ukuran
		$config['max_width']			= 10200; //maksimal
		$config['max_height']			= 7680; //tinggi maksimal

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('berkas')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('form_upload', $error);
		} else {
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('sukses_upload', $data);
		}
	}
}
