
<?php
require "fungsi.php";



$id_kafe= $_GET["id_kafe"];

if (hapusdc($id_kafe) > 0) {
    echo "<script>alert('Data Berhasil Dihapus');document.location.href='daftarCafe.php';</script>";
} else {
    echo "<script>alert('Penghapusan data gagal !'); document.location.href='daftarCafe.php';</script>";
}
?>