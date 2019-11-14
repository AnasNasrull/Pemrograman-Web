<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Detail</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<script src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<div class="col-md-8">
		<h3>Detail Data</h3>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nim</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Tanggal</th>
					<th>Foto</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include "koneksi.php";

					$nim = $_GET["nim"];
					
					$sql = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
					$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

					$no = 1;
					$data = mysqli_fetch_array($query);
					$nim = $data["nim"];
					$nm = $data["nama"];
					$em = $data["email"];
					$tgl = $data["tanggal"];

					echo "<tr>
					<td>$no</td>
					<td>$nim</td>
					<td>$nm</td>
					<td>$em</td>
					<td>$tgl</td>
					<td><img src='foto/".$data['foto']."' width='200' height='250'></td>
					</tr>";
				?>
			</tbody>
		</table>
	</div>
	<form action="ftampil-data.php" method="POST"><button type="submit" class="btn btn-primary">Kembali</button></form>
</body>
</html>