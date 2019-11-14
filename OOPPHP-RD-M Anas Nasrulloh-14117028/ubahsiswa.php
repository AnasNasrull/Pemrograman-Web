<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Siswa</title>
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
        include 'class.php';
    ?>

    <h2>Ubah Siswa</h2>

    <form method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label>Nama</label></td>
                <td><input type="text" name="nm" value="<?php echo $nama; ?>"></td>
            </tr>
            <tr>
                <td><label>Alamat</label></td>
                <td><input type="text" name="alamat" value="<?php echo $alamat; ?>"></td>
            </tr>
            <tr>
                <td><label>Foto</label></td>
                <td><input type="file" name="foto" value="<?php echo $foto; ?>"><br></td>
            </tr>
        </table>

        <br><br>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>
    <form action="tampilsiswa.php"><button type="back" class="btn btn-primary">Kembali</button></form>

    <?php
        if(isset($_POST['update'])) {
            $target = "images/".basename($_FILES['foto']['name']);

            move_uploaded_file($_FILES['foto']['tmp_name'], $target);

            $siswa -> update_siswa($_POST['nm'], $_POST['alamat'], $_FILES['foto']['name'], $id);
            echo "<script> alert('data tersimpan'); </script>";
            echo "<script> location='tampilsiswa.php'; </script>";
        }
    ?>
</body>
</html>