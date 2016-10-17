<html>
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>data pegawai</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	<style>
	#footer{background:#f0f0f0;position:absolute;bottom:0;width:100%;
    text-align:center;color:#808080;}
   </style>
	</head>
	
	<body bgcolor="lightgrey">
		<div class="jumbotron" style="text-align:center;">		
				<div class="container">
				<img src="<?php echo base_url(); ?>raju.png" width=120 height=90>
				<h1>RAJU COMPUTER</h1>
				<h3>Service & Spare Part Laptop/Notebook</h3>
				</div>
			</div>
			<br/>
		<div class="container">
		<h2>DAFTAR PEGAWAI <small>Manajemen Data Pegawai</small></h2>
		<br/>
		<br/>
		<?php echo anchor('pegawai/tambah', '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Pegawai',array('class'=>'btn btn-lg btn-info')); ?>
		<br/>
		<br/>
		<div class="table-responsive">
		<?php 
			//echo heading('Daftar Pegawai',1);
			$template = array('table_open' => '<table class="table table-bordered table-striped">');
			$this->table->set_template($template);
			
			if(isset($daftarpegawai) AND !empty($daftarpegawai)){
			 $aksi = array('data' => 'AKSI', 'colspan' => 2);
			$this->table->set_heading('NO','ID PEGAWAI','NAMA','ALAMAT','MASA KERJA','STATUS','JUMLAH ANAK',$aksi);
			
			$no = 1;
			foreach($daftarpegawai AS $pegawai){
				$this->table->add_row($no++,$pegawai->id_pegawai,$pegawai->nama,$pegawai->alamat,$pegawai->masa_kerja,$pegawai->status,$pegawai->jml_anak,anchor('pegawai/update_pegawai/'.$pegawai->id_pegawai, 'Edit'),anchor('pegawai/hapus_pegawai/'.$pegawai->id_pegawai, 'Hapus', array('onclick'=>'return konfirmasi_hapus()')));
			}
			
			echo $this->table->generate();
		}
		else
			echo "Belum ada data pegawai<br>";
		?>
		</div>
		<footer class="footer" style="border-top:1px solid #ECECEC; padding:15px;" align="center">
        <p>&copy; 2016 Raju Computer - Design by Randi Raju.</p>
		</footer>
		</div>
		<script>
		function konfirmasi_hapus()
		{
			return confirm('Anda yakin menghapus data ini ?');
		}
		</script>
		
	</body>
</html>