<?php
class M_akademik extends CI_Model
{
	public function insert_mhs($data)
	{
		$this->db->insert('mahasiswa', $data);
	}
	public function update_mhs($data, $id)
	{
		$this->db->where('Nim', $id);
		$this->db->update('mahasiswa', $data);
	}
	public function hapus_mhs($id)
	{
		$this->db->where('Nim', $id);
		$this->db->delete('mahasiswa');
	}
	public function get_all_data($tabel)
	{
		$q = $this->db->get($tabel);
		return $q;
	}
}
