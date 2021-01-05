<?php
require 'fungsi.php';

$semua = query("SELECT * FROM daftarkafe");


if (isset($_POST["tambah"])) {
    if (tambahdc($_POST) > 0) {
        echo "<script>alert('Data Udah Masuk Coy!!!!')</script>";
    } else {
        echo "Gagal Coy";
        echo "<br><br>";
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <title>SPK</title>
</head>

<body>
    <!-- navigasi Bar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">

        <a class="navbar-brand" href="#">
        <i class="fas fa-2x fas fa-volume-up d-inline-block align-top"></i> </a>
        <div id="spkk"><b>SPK</b></div>
        <div id="wp"><b>Weighted Product</b></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto mr-5">
                <a class="nav-link active" href="index.php"><i class="fas fa-home mr-1"></i><b>Home</b> <span class="sr-only">(current)</span></a>
                <a class="nav-link active" href="daftarKafe.php"><i class="fas fa-clipboard-list mr-1"></i><b>Daftar Cafe</b></a>
                <a class="nav-link active" href="kriteria.php"><i class="fas fa-user-ninja mr-1"></i><b>Kriteria</b></a>
                <a class="nav-link active" href="penilaian.php"><b>Penilaian</b></a>
            </div>
        </div>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="card-header" id="cardkafe">Daftar Cafe</h3>
                    <a class="btn btn-outline-primary btn-sm" href="tambahdc.php?"> <i class="fas fa-edit"></i></a>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead id="tbldaftar"> 
                                <tr class="table-warning">
                                    <th scope="col">No</th>
                                     <th scope="col">Nama Kafe</th>
                                    <th scope="col">Nomor Telepon</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="bodytable">
                                <!-- penomoran -->
                                <?php $b=1 ?>
                                <?php foreach($semua AS $row) :  ?>
                                <tr>
                                    <td> <?php echo $b++?> </td>
                                    <td> <?php echo $row["nama_kafe"]?> </td>
                                    <td> <?php echo $row["no_telepon"]?> </td>
                                    <td> <?php echo $row["alamat"]?> </td>
                                    <td> 
                                    <div class="text-center">
                                        <a class="btn btn-outline-primary btn-sm" href="editdc.php?id_kafe=<?= $row['id_kafe'];?>"> <i class="fas fa-edit"></i></a>
                                        <a class="btn btn-outline-danger btn-sm" href="hapusdc.php?id_kafe=<?= $row['id_kafe'];?>" onclick="return confirm('Yakin menghapus data ini?');"><i class="fas fa-trash"></i></a>
                                    </div>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



            <!-- <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header" id="cardtambah">Tambah Data Cafe</h3>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="">Nama Cafe</label>
                                <input type="text" class="form-control"name="nama_kafe">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nomor Telepon</label>
                                <input type="number" class="form-control" name="no_telepon">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Alamat</label>
                                <input type="text" class="form-control" name="alamat">
                            </div>
                            <button type="submit" name="tambah" class="btn" id="d">Submit</button>
                            <button type="reset" name="hapus" class="btn " id="c">Reset</button>
                        </form>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>