<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Tugas PHP Lanjut</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<legend><h2>Biodata Mahasiswa</h2></legend>
	<form method="POST" action="">
		<label>Nama :</label><br>
		<input type="text" name="nama" size="30"><br>
		<label>Jenis Kelamin :</label><br>
		<select name="JK">
			<option value="">Pilih Jenis Kelamin</option>
			<option value="Laki-laki">Laki-laki</option>
			<option value="Perempuan">Perempuan</option>
		</select><br>
		<label>No. HP :</label><br>
		<input type="text" name="hp" size="30"><br>
		<label>Alamat :</label><br>
		<textarea name="alamat" rows="2" cols="31"></textarea><br>
		<label>Foto :</label><br>
		<input type="file" name="foto" size="30"><br><br>
		<input type="submit" value="Simpan" name="proses"></input><br><br><br><br>
	</form>

	<?php
		if(isset($_POST['proses'])){
			$tmahasiswa=array("nm"=>$_POST['nama'], "jk"=>$_POST['JK'], "no"=>$_POST['hp'], "almt"=>$_POST['alamat'], "ft"=>$_POST['foto']);
		}
	?>
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th class="warning">Nama</th>
				<th class="active">Jenis Kelamin</th>
				<th class="success">No. HP</th>
				<th class="danger">Alamat</th>
				<th class="info">Foto</th>
			</tr>
		</thead>
		<tbody>
			<tr class="info">
				<?php foreach($tmahasiswa as $key => $value): ?>
					<td><?php echo $value; ?></td>
				<?php endforeach; ?>
			</tr>
		</tbody>
	</table>
</div>
</body>
</html>