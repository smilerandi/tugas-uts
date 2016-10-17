<?php 
	class Pegawai extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('Pegawai_Model');
			$this->load->helper(array('url','form'));
		}
		public function index(){
			$data['hasil'] = $this->Pegawai_Model->getDaftarPegawai();
			
			$this->load->model('pegawai_model');
			
			$pegawai = new Pegawai_Model();
			$data["daftarpegawai"] = $pegawai->getDaftarPegawai();
			
			$this->load->view('daftar_pegawai',$data);
		}
		
		public function tambah(){
			if($this->input->post('mysubmit')){
				$this->Pegawai_Model->tambah();
				redirect('pegawai');
			}
			$this->load->view('input_pegawai');
		}
		
		public function tambah_proses(){
			$no				= $this->input->post('no');
			$id_pegawai		= $this->input->post('id_pegawai');
			$nama			= $this->input->post('nama');
			$alamat			= $this->input->post('alamat');
			$masa_kerja		= $this->input->post('masa_kerja');
			$status			= $this->input->post('status');
			$jml_anak		= $this->input->post('jml_anak');
			
			$this->load->model('pegawai_model');
			
			$pegawai = new Pegawai_Model();
			$status = $pegawai->simpanPegawaiBaru($no,$id_pegawai,$nama,$alamat,$masa_kerja,$status,$jml_anak);
			
			if($status == TRUE)
				redirect(base_url());
			else
				redirect('pegawai/tambah');
		}
		
		function update_pegawai(){
			$id_pegawai = $this->uri->segment(3);
			if($this->input->server('REQUEST_METHOD')=='POST'){
				$this->Pegawai_Model->update_pegawai($id_pegawai);
				redirect('pegawai');
			}
			
			$pegawai['daftarpegawai']=$this->Pegawai_Model->getById($id_pegawai);
			$this->load->view('update_pegawai',$pegawai);
		
		}
		
		function hapus_pegawai(){
			$id_pegawai = $this->uri->segment(3);
			$this->Pegawai_Model->deleteById($id_pegawai);
			redirect('pegawai');
		}
	}
?>