<?php
class Akademik extends CI_Controller
{

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/side_bar');
		$this->load->view('templates/top_bar');
		$this->load->view('akademik/home');
		$this->load->view('templates/footer');
	}

	public function tampil_mhs()
	{
		$data['mahasiswa'] = $this->M_akademik->get_all_data('mahasiswa')->result();
		print_r($data);
		exit();
		// 	$this->load->view('templates2/header');
		// 	$this->load->view('templates2/side_bar');
		// 	$this->load->view('templates2/top_bar');
		// 	$this->load->view('akademik/tampil', $data);
		// 	$this->load->view('templates2/footer');
	}

	public function tambah_mhs()
	{
		$this->load->view('templates2/header');
		$this->load->view('templates2/side_bar');
		$this->load->view('templates2/top_bar');
		$this->load->view('akademik/tambah');
		$this->load->view('templates2/footer');
	}

	public function aksi_simpan()
	{
		$Nim = $this->input->post('Nim');
		$Nama_Mhs = $this->input->post('Nama_Mhs');
		$Jenis_Kelamin = $this->input->post('Jenis_Kelamin');
		$Program_Studi = $this->input->post('Program_Studi');

		$data = array(
			'Nim' => $Nim,
			'Nama_Mhs' => $Nama_Mhs,
			'Jenis_Kelamin' => $Jenis_Kelamin,
			'Program_Studi' => $Program_Studi
		);
		$this->db->insert('mahasiswa', $data);
		redirect('akademik/tampil_mhs');
	}

	public function edit_tampil()
	{
		$this->load->view('templates2/header');
		$this->load->view('templates2/side_bar');
		$this->load->view('templates2/top_bar');
		$this->load->view('akademik/edit');
		$this->load->view('templates2/footer');
	}
	public function edit_mhs()
	{
		$Nim = $this->input->post('Nim');
		$Nama_Mhs = $this->input->post('Nama_Mhs');
		$Jenis_Kelamin = $this->input->post('Jenis_Kelamin');
		$Program_Studi = $this->input->post('Program_Studi');

		$data = array(
			'Nim' => $Nim,
			'Nama_Mhs' => $Nama_Mhs,
			'Jenis_Kelamin' => $Jenis_Kelamin,
			'Program_Studi' => $Program_Studi
		);
		$this->db->where('Nim', $data);
		$this->db->update('mahasiswa', $data);
		redirect('akademik/tampil_mhs');
	}

	public function delete_mhs()
	{
		$this->db->where('Nim', $this->input->get('Nim'));
		if ($this->db->delete('mahasiswa')) {
			echo '<script>alert("Berhasil menghapus data."); document.location="tampil_mhs";</script>';
		} else {
			echo '<script>alert("Gagal menghapus data."); document.location="tampil_mhs";</script>';
		}
	}

	public function tampil_dosen()
	{
		$this->load->view('templates2/header');
		$this->load->view('templates2/side_bar');
		$this->load->view('templates2/top_bar');
		$this->load->view('akademik/tampil_dosen');
		$this->load->view('templates2/footer');
	}

	public function tambah_dosen()
	{
		$this->load->view('templates2/header');
		$this->load->view('templates2/side_bar');
		$this->load->view('templates2/top_bar');
		$this->load->view('akademik/tambah_dosen');
		$this->load->view('templates2/footer');
	}

	public function aksi_simpan_Dosen()
	{
		$NIP = $this->input->post('NIP');
		$Nama_Dos = $this->input->post('Nama_Dos');
		$Kode_MK = $this->input->post('Kode_MK');
		$ALAMAT = $this->input->post('ALAMAT');

		$data = array(
			'NIP' => $NIP,
			'Nama_Dos' => $Nama_Dos,
			'Kode_MK' => $Kode_MK,
			'ALAMAT' => $ALAMAT
		);
		$this->db->insert('dosen', $data);
		redirect('akademik/tampil_dosen');
	}

	public function edit_tampil_dosen()
	{
		$this->load->view('templates2/header');
		$this->load->view('templates2/side_bar');
		$this->load->view('templates2/top_bar');
		$this->load->view('akademik/edit_dosen');
		$this->load->view('templates2/footer');
	}
	public function edit_dosen()
	{
		$NIP = $this->input->post('NIP');
		$Nama_Dos = $this->input->post('Nama_Dos');
		$Kode_MK = $this->input->post('Kode_MK');
		$ALAMAT = $this->input->post('ALAMAT');

		$data = array(
			'NIP' => $NIP,
			'Nama_Dos' => $Nama_Dos,
			'Kode_MK' => $Kode_MK,
			'ALAMAT' => $ALAMAT
		);
		$this->db->where('NIP', $data);
		$this->db->update('dosen', $data);
		redirect('akademik/tampil_dosen');
	}

	public function delete_dosen()
	{
		$this->db->where('NIP', $this->input->get('NIP'));
		if ($this->db->delete('dosen')) {
			echo '<script>alert("Berhasil menghapus data."); document.location="tampil_dosen";</script>';
		} else {
			echo '<script>alert("Gagal menghapus data."); document.location="tampil_dosen";</script>';
		}
	}
	public function upload_file()
	{
		$this->load->view('templates2/header');
		$this->load->view('templates2/side_bar');
		$this->load->view('templates2/top_bar');
		$this->load->view('akademik/form_upload');
		$this->load->view('templates2/footer');
	}
	public function aksi_upload()
	{
		$config['upload_path']			= './upload/';
		$config['allowed_types']		= 'jpg|png|pdf|docx';
		$config['max_size']				= 1000000; //maksimal ukuran
		$config['max_width']			= 10200; //maksimal
		$config['max_height']			= 7680; //tinggi maksimal

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('berkas')) {
			$error = array('error' => $this->upload->display_errors());
			echo '<script>alert("Gagal mengupload berkas."); document.location="upload_file";</script>';
		} else {
			$data = array('upload_data' => $this->upload->data());
			echo '<script>alert("Berhasil mengupload berkas."); document.location="upload_file";</script>';
		}
	}
}
