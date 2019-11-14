<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ubah Data</title>
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
	<?php
		include "koneksi.php";

		$nim = $_GET["ubah_nim"];

		$sql = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
		$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

		if(mysqli_num_rows($query) > 0){
			$data = mysqli_fetch_array($query);
		}
	?>

	<div class="col-md-8">
		<h3>Ubah Data</h3>
		<form action="update.php" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="nim" value="<?php echo $data["nim"];?>" >
			<div class="form-group">
				<label>Nama	</label>
				<input type="text" name="nama" class="form-control" value="<?php echo $data["nama"]; ?>">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="mail" class="form-control" value="<?php echo $data['email']; ?>">
			</div>
			<div class="form-group">
				<label>Foto</label>
				<input type="file" name="foto" class="form-control" value="<?php echo $data['foto']; ?>">
			</div>
			<button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
		</form>
		<form action="ftampil-data.php" method="POST"><button type="back" class="btn btn-primary">Kembali</button></form>
	</div>
</body>
</html>