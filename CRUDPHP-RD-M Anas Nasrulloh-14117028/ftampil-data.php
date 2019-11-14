<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tampil Data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<script src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<div class="col-md-8">
		<h3>Tampil Data</h3>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Email</th>
					<th colspan="3">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include "koneksi.php";
					$sql = "SELECT * FROM mahasiswa ORDER BY nim ASC";
					$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

					$no = 1;
					while($data = mysqli_fetch_array($query)){
						$nim = $data["nim"];
						$nm = $data["nama"];
						$em = $data["email"];

						echo "<tr>
						<td>$no</td>
						<td>$nm</td>
						<td>$em</td>
						<td>
							<a href='fubah-data.php?ubah_nim=$nim'>Ubah</a>
							<a href='delete.php?hapus_nim=$nim'>Hapus</a>
							<a href='detail.php?nim=$nim'>Detail</a>
						</td>
						</tr>";
						$no++;
					}
				?>
			</tbody>
		</table>
	</div>
	<form action="ftambah-data.php" method="POST"><button type="back" class="btn btn-primary">Tambah Data</button></form>
</body>
</html>