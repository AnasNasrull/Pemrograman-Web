<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<?php
		include "koneksi.php";

		$nm = $_POST["nama"];
		$em = $_POST["mail"];
		$nim = $_POST["nim"];
		$ft = $_FILES['foto']['name'];
		$tmp = $_FILES['foto']['tmp_name'];

		$ftbaru = date('dmYHis').$ft;

		$path = "foto/".$ftbaru;

		date_default_timezone_set("Asia/Jakarta");
		$tgl = date("Y:m:d");

		if(move_uploaded_file($tmp, $path)) {
			$sql = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
			$query = mysqli_query($koneksi, $sql);
			$data = mysqli_fetch_array($query);

			if(is_file("foto/".$data['foto']))
				unlink("foto/".$data['foto']);

			$sql = "UPDATE mahasiswa SET nama = '$nm', email = '$em', tanggal ='$tgl', foto='$ftbaru' WHERE nim = '$nim'";
			$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

			if($query){
			echo "Data berhasil diubah";
			} else {
			echo "Error: ".$sql."<br>".mysqli_error($koneksi);
			}
		} else {
			$sql = "UPDATE mahasiswa SET nama = '$nm', email = '$em', tanggal ='$tgl' WHERE nim = '$nim'";
			$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
			
			if($query){
			echo "Data berhasil diubah";
			} else {
			echo "Error: ".$sql."<br>".mysqli_error($koneksi);
			}
		}
		mysqli_close($koneksi);
	?>
	<br>
	<form action="ftampil-data.php" method="POST"><button type="back" class="btn btn-primary">Kembali</button></form>
</body>
</html>