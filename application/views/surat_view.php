<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Surat List</title>
	<!-- load bootstrap css file -->
	<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>
<body>
<div class="container">
	<h1>
		<center>Surat List</center>
	</h1>
	<a class="btn btn-success" href="/ci3/surat/add_new" role="button">Tambah</a>
	<table class="table table-striped">
		<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nomor Surat</th>
			<th scope="col">Perihal</th>
			<th scope="col">Dari</th>
			<th scope="col">Kepada</th>
			<th width="200">Action</th>
		</tr>
		</thead>
		<?php
		$count = 0;
		foreach ($surat->result() as $row) :
			$count++; ?>
			<tr>
				<th scope="row"><?php echo $count; ?></th>
				<td><?php echo $row->nomor; ?></td>
				<td><?php echo $row->hal; ?></td>
				<td><?php echo $row->dari; ?></td>
				<td><?php echo $row->kepada; ?></td>

				<td>
					<a href="<?php echo site_url('surat/get_edit/' .
						$row->id); ?>"
					   class="btn btn-sm btn-info">Update</a>
					<a href="<?php echo site_url('surat/delete/' .
						$row->id); ?>"
					   class="btn btn-sm btn-danger">Delete</a>
				<td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>
<!-- load jquery js file -->
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<!-- load bootstrap js file -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>
