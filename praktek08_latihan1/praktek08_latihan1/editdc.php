<?php
//Pemanggilan fungsi
require 'fungsi.php';


//ambil id dari url
$id_kafe= $_GET["id_kafe"];

//data mahasiswa berdasarkan id
$ubah = query("SELECT * FROM daftarkafe WHERE id_kafe = $id_kafe")[0];



//Pengecekan Apakah data sudah masuk atau belum
if (isset($_POST['ubah'])) {
    if (editdc($_POST) > 0) {
        echo "<script>alert('Data Berhasil Di Ubah!!!!');document.location.href='daftarCafe.php';</script>";
    } else {
        echo "Gagal Coy";
        echo "<br><br>";
        echo mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="asset/fontawesome-free/css/all.min.css">
    <title>Edit Data Cafe</title>
</head>
<body>
<div class="row"></div>
            <div class="col-md-12">
                <div class="card">
                    <h3 class="card-header" id="cardtambah">Ubah data Cafe</h3>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="id_kafe" id="id_kafe" aria-describedby="helpId" value="<?= $ubah["id_kafe"]; ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Cafe</label>
                                <input type="text" class="form-control" name="nama_kafe" id="nama_kafe" value="<?= $ubah['nama_kafe']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nomor Telepon</label>
                                <input type="number" class="form-control" name="no_telepon" id="no_telepon" aria-describedby="helpId" value="<?= $ubah["no_telepon"];?>">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="helpId" value="<?= $ubah["alamat"]; ?>">
                            </div>
                            <button type="submit" name="ubah" class="btn" id="d">Ubah</button>
                            <button type="reset" name="hapus" class="btn " id="c">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</body>
</html>

