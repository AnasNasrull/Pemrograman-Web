<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<style type="text/css">
		form{
			display:inline;
		}
	</style>
</head>
<body>
	<script src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<div class="col-md-8">
		<h3>Tambah Data</h3>
		<form action="insert.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="mail" class="form-control">
			</div>
			<div class="form-group">
				<label>Foto</label>
				<input type="file" name="foto" class="form-control">
			</div>
			<button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
		</form>
		<form action="ftampil-data.php" method="POST"><button type="back" class="btn btn-primary">Kembali</button></form>
	</div>
</body>
</html>