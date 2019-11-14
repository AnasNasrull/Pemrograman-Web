<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<?php
		include "koneksi.php";

		$nm = $_POST['nama'];
		$em = $_POST['mail'];
		$ft = $_FILES['foto']['name'];
		$tmp = $_FILES['foto']['tmp_name'];

		$ftbaru = date('dmYHis').$ft;

		$path = "foto/".$ftbaru;

		date_default_timezone_set("Asia/Jakarta");
		$tgl = date("Y:m:d");

		if(move_uploaded_file($tmp, $path)) {
			$sql = "INSERT INTO mahasiswa(nama,email,tanggal,foto) VALUES('$nm','$em','$tgl','$ftbaru')";
			$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

			if($query){
			echo "Data berhasil ditambahkan";
			} else {
			echo "Error: ".$sql."<br>".mysqli_error($koneksi);
			}
		} else {
			echo "Maaf, Gambar gagal untuk diupload.";
		}
		mysqli_close($koneksi);
	?>
	<br>
	<form action="ftampil-data.php" method="POST"><button type="back" class="btn btn-primary">Kembali</button></form>
</body>
</html>