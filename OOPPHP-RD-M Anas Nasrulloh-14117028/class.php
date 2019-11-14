<?php
    $mysqli = new mysqli("localhost", "root", "", "crud");
    $nama = '';
    $alamat = '';
    $foto = '';

    class siswa {
        public $koneksi;

        function __construct($mysqli){
            $this -> koneksi = $mysqli;
        }

        function set_siswa() {
            $ambilData = $this -> koneksi -> query("SELECT * FROM siswa");

            while($pecah = $ambilData -> fetch_assoc()) {
                $data[] = $pecah;
            }
            return $data;
        }

        function get_siswa($nama, $alamat, $foto) {
            $this -> koneksi -> query("INSERT INTO siswa (nama, alamat, foto) VALUES ('$nama', '$alamat', '$foto')");
        }

        function update_siswa($nama, $alamat, $foto, $id) {
            $this -> koneksi -> query("UPDATE siswa SET nama='$nama', alamat='$alamat', foto='$foto' WHERE id_siswa=$id");
        }
    }

    $siswa = new siswa($mysqli);

    if(isset($_GET['ubah'])) {
        $id = $_GET['ubah'];
        $result = $mysqli -> query("SELECT * FROM siswa WHERE id_siswa=$id");

        $row = $result -> fetch_array();

        $id = $row['id_siswa'];
        $nama = $row['nama'];
        $alamat = $row['alamat'];
        $foto = $row['foto'];
    }

    if(isset($_GET['hapus'])) {
        $id = $_GET['hapus'];
        $resultl = $mysqli -> query("DELETE FROM siswa WHERE id_siswa=$id");

        echo "<script> alert('data berhasil dihapus'); </script>";
        echo "<script> location='tampilsiswa.php'; </script>";
    }
?>