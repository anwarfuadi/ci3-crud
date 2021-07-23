<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Surat Baru</title>
	<!-- load bootstrap css file -->
	<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>
<body>
<div class="container">
	<h1>
		<center>Tambah Surat Baru</center>
	</h1>
	<div class="col-md-6 offset-md-3">
		<form action="<?php echo site_url('surat/save'); ?>" method="post">
			<div class="form-group">
				<label>Nomor Surat</label>
				<input type="text" class="form-control" name="nomor">
			</div>
			<div class="form-group">
				<label>Perihal</label>
				<input type="text" class="form-control" name="hal">
			</div>
			<div class="form-group">
				<label>Dari</label>
				<input type="text" class="form-control" name="dari">
			</div>
			<div class="form-group">
				<label>Kepada</label>
				<input type="text" class="form-control" name="kepada">
			</div>

			<button type="submit" class="btn btn-primary">Simpan</button>
			<a class="btn btn-danger" href="/ci3/surat" role="button">Batal</a>
		</form>
	</div>
</div>
<!-- load jquery js file -->
<script src="<?php echo
base_url('assets/js/jquery.min.js'); ?>"></script> <!-- load bootstrap js file -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>

