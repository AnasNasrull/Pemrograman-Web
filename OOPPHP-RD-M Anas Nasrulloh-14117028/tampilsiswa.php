<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampil Siswa</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <?php
        include 'class.php';

        $dataSiswa = $siswa -> set_siswa();
    ?>

    <h2>Daftar Siswa</h2>

    <div class="col-md-8">
    <table border=2 class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Foto</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($dataSiswa as $key => $value){
                    $key=$key+1;
                    $id=$value["id_siswa"];
                    $nm=$value["nama"];
                    $almt=$value["alamat"];
                    $ft=$value["foto"];
                    echo "<tr>
                        <td>$key</td>
                        <td>$nm</td>
                        <td>$almt</td>
                        <td><img src='images/".$value['foto']."' width='100' height='100'></td>
                        <td>
                            <a href='ubahsiswa.php?ubah=$id'>Ubah</a>
                            <a href='class.php?hapus=$id'>Hapus</a>
                        </td>
                    </tr>";
            } ?>
        </tbody>
    </table>
    </div><br>
    <form action="tambahsiswa.php"><button type="back" class="btn btn-primary">Tambah Siswa Baru</button></form>
</body>
</html>