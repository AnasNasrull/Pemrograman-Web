<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hapus</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<?php
		include "koneksi.php";

		$nim = $_GET["hapus_nim"];

		$sql = "DELETE FROM mahasiswa WHERE nim = '$nim'";
		$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

		if($query){
			echo "Data berhasil dihapus";
		} else {
			echo "Error".$sql."<br>".mysqli_error($koneksi);
		}
		mysqli_close($koneksi);
	?>
	<br>
	<form action="ftampil-data.php" method="POST"><button type="back" class="btn btn-primary">Kembali</button></form>
</body>
</html>