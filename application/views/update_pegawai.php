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
		<h2>UPDATE PEGAWAI <small>Mengubah Data Pegawai</small></h2>
		<br/>
		<br/>
		<div style="width:50%">
		<?php echo form_open(''); ?>
			<div class="form-group">
				<label>Id Pegawai</label>
				<?php echo form_input('id_pegawai',$daftarpegawai->id_pegawai,array('class' => 'form-control')); ?>
			</div>
			<div class="form-group">
				<label>Nama</label>
				<?php echo form_input('nama',$daftarpegawai->nama,array('class' => 'form-control')); ?>
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<?php echo form_input('alamat',$daftarpegawai->alamat,array('class' => 'form-control')); ?>
			</div>
			<div class="form-group">
				<label>Masa Kerja</label>
				<?php echo form_input('masa_kerja',$daftarpegawai->masa_kerja,array('class' => 'form-control')); ?>
			</div>
			<div class="form-group">
				<label>Status</label>
				<?php echo form_input('status',$daftarpegawai->status,array('class' => 'form-control')); ?>
			</div>
			<div class="form-group">
				<label>Jumlah Anak</label>
				<?php echo form_input('jml_anak',$daftarpegawai->jml_anak,array('class' => 'form-control')); ?>
			</div>
			<input type="hidden" name="submit" />
			<button type="submit" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
		<?php echo form_close(); ?>
		</div>
	</div>
	</body>
</html>
