<?php 
	class Mahasiswa_model extends CI_model{
		public function getAllMahasiswa(){
			// $query = $this->db->get('mahasiswa');
			// return $query->result_array();
			return $this->db->get('mahasiswa')->result_array();
		}

		public function tambahData(){
			$data = [
				'nama' => $this->input->post('nama', true),
				'nrp' => $this->input->post('nrp', true),
				'email' => $this->input->post('email', true),
				'jurusan' => $this->input->post('prodi')
			];

			$this->db->insert('mahasiswa', $data);
		}

		public function hapusData($id){
			// $this->db->where('id', $id);
			// $this->db->delete('mahasiswa');

			$this->db->delete('mahasiswa', ['id' => $id]);
		}

		public function getMahasiswaById($id){
			return $this->db->get_where('mahasiswa', ['id'=>$id])->row_array();
		}

		public function editData(){
			$data = [
				'nama' => $this->input->post('nama', true),
				'nrp' => $this->input->post('nrp', true),
				'email' => $this->input->post('email', true),
				'jurusan' => $this->input->post('prodi')
			];

			$this->db->where('id', $this->input->post('id'));
			$this->db->update('mahasiswa', $data);
		}

		public function cariData()
		{
			$cari = $this->input->post('cari');

			$this->db->like('nama', $cari);
			$this->db->or_like('email', $cari);
			$this->db->or_like('nrp', $cari);
			$this->db->or_like('jurusan', $cari);
			return $this->db->get('mahasiswa')->result_array();
		}
}

 ?>