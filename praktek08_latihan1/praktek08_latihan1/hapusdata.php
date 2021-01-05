
<?php
require "koneksi.php";

$id_mahasiswa= $_GET["id_mahasiswa"];

if (hapusdat($id_mahasiswa) > 0) {
    echo "<script>alert('Data Berhasil Dihapus');document.location.href='index.php';</script>";
} else {
    echo "<script>alert('Penghapusan data gagal !'); document.location.href='index.php';</script>";
}
?>