<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TUGAS WEB</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<header>
	<h1>M. ANAS NASRULLOH</h1>
</header>

<div class="menu">
	<li>
		<ul><a href ="Home.php">Home</a></ul>
		<ul><a href ="Data-Kontrakan.php">Data Kontrakan</a></ul>
		<ul><a href ="">Pendidikan</a></ul>
		<ul><a href ="">Lainnya</a></ul>
	</li>
</div>

<div class="transbox2">
	<li>
		<ul><a href ="">SubMenu1</a></ul>
		<ul><a href ="">SubMenu2</a></ul>
		<ul><a href ="">SubMenu3</a></ul>
		<ul><a href ="">SubMenu4</a></ul>
	</li>
</div>
<div class="transbox3">
<p>
	<?php
	$datakost = array(
		"0"=>array("nama"=>"M. Anas Nasrulloh","alamat asal"=>"Lampung Timur","prodi"=>"Teknik Informatika"),
		"1"=>array("nama"=>"Muhammad Affandi","alamat asal"=>"Lampung Tengah","prodi"=>"Teknik Informatika"),
		"2"=>array("nama"=>"Amal Nur Ikhsan","alamat asal"=>"Lampung Tengah","prodi"=>"Teknik Geofisika"),
		"3"=>array("nama"=>"Baharudin Cahya Alam","alamat asal"=>"Lampung Timur","prodi"=>"Teknik Elektro"),
		"4"=>array("nama"=>"Kevin Juone","alamat asal"=>"Bekasi","prodi"=>"Teknik Kimia"),
		"5"=>array("nama"=>"Adhi Chandra Dwiansyah Renaldi","alamat asal"=>"Lampung Tengah","prodi"=>"Teknik Informatika")
	);
	echo "<pre>";
	print_r ($datakost);
	echo "</pre>";
	
	echo "<br>";
	echo "<br>";
	echo "<br>";
	?>
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat Asal</th>
				<th>Prodi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($datakost as $key => $value): ?>
			<tr>
				<td><?php echo $key+=1;?></td>
				<td><?php echo $value['nama']; ?></td>
				<td><?php echo $value['alamat asal'];?></td>
				<td><?php echo $value['prodi']; ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</p>
</div>

<div class="footer">Copyright &copy; ITERA</footer>
</div>

</body>
</html>