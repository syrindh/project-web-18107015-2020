<?php
require 'koneksi.php';

$semua = query("SELECT * FROM tb_mahasiswa");
$so = query("SELECT * FROM tb_jurusan");
$ho = query("SELECT * FROM tb_fakultas");



if (isset($_POST["tambah"])) {
    if (tambahdat($_POST) > 0) {
        echo "<script>alert('Data Berhasil Di ditambahkan!!!!');document.location.href='index.php';</script>";

    } else {

        // echo "<script>alert('Data gagal tambah !!!!'); document.location.href='index.php';</script>";
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <title>Belajar Web</title>
</head>

<body>
    <div class="container mt-4" id="apa">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="card-header bg-warning">Insert Data Mahasiswa</h3>
                    <div class="card-body">
                        <form method="POST" action="" id="form">
                            <div class="form-group">
                                <label for="">NIM</label>
                                <input type="number" class="form-control"name="nim" id="nim">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nama Mahasiswa</label>
                                <input type="text" class="form-control" name="nama_mahasiswa" id="nama_mahasiswa">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">TTL</label>
                                <input type="text" class="form-control" name="ttl" id="ttl">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Fakultas</label>
                                <!-- <input type="numbr" class="form-control" name="fakultas" id="fakultas"> -->
                                <select class="form-control" name="fakultas" id="fakultas" aria-describedby="helpId" required>
                            <option disabled selected>Pilih Fakultas</option>
                            <?php foreach ($ho as $row) : ?>
                                <option value="<?= $row["id_fakultas"] ?>"><?= $row["nama_fakultas"] ?></option>
                            <?php endforeach ?>
                        </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Jurusan</label>
                                <!-- <input type="number" class="form-control" name="jurusan" id="jurusan"> -->
                                <select class="form-control" name="jurusan" id="jurusan" aria-describedby="helpId" required>
                            <option disabled selected>Pilih Jurusan</option>
                            <?php foreach ($so as $row) : ?>
                                <option value="<?= $row["id_jurusan"] ?>"><?= $row["nama_jurusan"] ?></option>
                            <?php endforeach ?>
                        </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">IPK</label>
                                <input type="number" step='any' class="form-control" name="ipk" id="ipk">
                            </div>
                            <button type="submit" name="tambah" class="btn bg-info" id="submit" >Submit</button>
                            <button type="reset" name="hapus" class="btn bg-danger">Reset</button>
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