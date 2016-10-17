<?php
	class Pegawai_Model extends CI_Model{
		public function simpanPegawaiBaru($no,$id_pegawai,$nama,$alamat,$masa_kerja,$status,$jml_anak){
			$query = "INSERT INTO tbkaryawan VALUES ('$no','$id_pegawai','$nama','$alamat','$masa_kerja','$status','$jml_anak')";
			
			$result = $this->db->query($query);
			
			return $result;
		}
		
		public function getDaftarPegawai(){
			$query = "SELECT * FROM tbkaryawan";
			$result = $this->db->query($query);
			return $result->result();
		}
		
		function update_pegawai($id_pegawai){
			$id_pegawai=$this->input->post('id_pegawai');
			$nama=$this->input->post('nama');
			$alamat=$this->input->post('alamat');
			$masa_kerja=$this->input->post('masa_kerja');
			$status=$this->input->post('status');
			$jml_anak=$this->input->post('jml_anak');
			$data=array(
				'id_pegawai'=>$id_pegawai,
				'nama'=>$nama,
				'alamat'=>$alamat,
				'masa_kerja'=>$masa_kerja,
				'status'=>$status,
				'jml_anak'=>$jml_anak
			);
			$this->db->where('id_pegawai',$id_pegawai);
			$this->db->update('tbkaryawan',$data);
		}
		function getById($id_pegawai){
			return $this->db->get_where('tbkaryawan',array('id_pegawai'=>$id_pegawai))->row();
		}	
		function deleteById($id_pegawai){
			$this->db->where('id_pegawai',$id_pegawai);
			return $this->db->delete('tbkaryawan');
		}
	}
?>