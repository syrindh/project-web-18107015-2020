<?php
//Pemanggilan fungsi
require 'koneksi.php';

//ambil id dari url
$id_mahasiswa=$_GET["id_mahasiswa"];

// $semua = query("SELECT * FROM tb_mahasiswa");
$so = query("SELECT * FROM tb_jurusan");
$ho = query("SELECT * FROM tb_fakultas");

//data mahasiswa berdasarkan id
$ubah = query("SELECT * FROM tb_mahasiswa WHERE id_mahasiswa = $id_mahasiswa")[0];



//Pengecekan Apakah data sudah masuk atau belum
if (isset($_POST['ubah'])) {
    if (editdat($_POST) > 0) {
        echo "<script>alert('Data Berhasil Di Ubah!!!!');document.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Data Gagal Di Ubah!!!!');document.location.href='index.php';</script>";
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
    <link rel="stylesheet" href="coba.css">
    <link rel="stylesheet" href="asset/fontawesome-free/css/all.min.css">
    <title>Edit Data Mahasiswa</title>
</head>
<body>
<div class="container mt-4" id="apa">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="card-header bg-warning" id="cardtambah">Edit Data Mahasiswa</h3>
                    <div class="card-body">
                        <form method="POST" action="" id="form">

                        <div class="form-group">
                                <input type="hidden" class="form-control" name="id_mahasiswa" id="id_Mahasiswa" aria-describedby="helpId" value="<?= $ubah["id_mahasiswa"]; ?>">
                            </div>

                            <div class="form-group">
                                <label for="">NIM</label>
                                <input type="number" class="form-control"name="nim" id="nim" aria-describedby="helpId" value="<?= $ubah["nim"]; ?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Nama Mahasiswa</label>
                                <input type="text" class="form-control" name="nama_mahasiswa" id="nama_mahasiswa" value="<?= $ubah['nama_mahasiswa']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">TTL</label>
                                <input type="text" class="form-control" name="ttl" id="ttl" value="<?= $ubah['ttl']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Fakultas</label>
                                <select class="form-control" name="fakultas" id="fakultas" value="<?= $ubah['fakultas']; ?>" aria-describedby="helpId" required>
                            <option disabled selected>Pilih Fakultas</option>
                            <?php foreach ($ho as $row) : ?>
                                <option value="<?= $row["id_fakultas"] ?>"><?= $row["nama_fakultas"] ?></option>
                            <?php endforeach ?>
                        </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Jurusan</label>
                                <!-- <input type="number" class="form-control" name="jurusan" id="jurusan"> -->
                                <select class="form-control" name="jurusan" id="jurusan" value="<?= $ubah['jurusan']; ?>" aria-describedby="helpId" required>
                            <!-- <option disabled selected>Pilih Jurusan</option> -->
                            <?php foreach ($so as $row) : ?>
                                <option value="<?= $row["id_jurusan"] ?>"><?= $row["nama_jurusan"] ?></option>
                            <?php endforeach ?>
                        </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">IPK</label>
                                <input type="number" step='any' class="form-control" name="ipk" id="ipk" value="<?= $ubah['ipk']; ?>">
                            </div>
                            <button type="submit" name="ubah" class="btn bg-info" id="d">Ubah</button>
                            <button type="reset" name="hapus" class="btn bg-danger" id="c">Reset</button>
                        </form>
                    </div>
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

