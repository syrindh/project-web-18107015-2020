<?php
require 'fungsi.php';

$semua = query("SELECT * FROM daftarkafe");


if (isset($_POST["tambah"])) {
    if (tambahdc($_POST) > 0) {
        echo "<script>alert('Data Berhasil Di ditambahkan!!!!');document.location.href='daftarCafe.php';</script>";

    } else {
        echo "<script>alert('Data gagal tambah !!!!'); document.location.href='daftarCafe.php';</script>";
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
                <a class="nav-link active" href="#"><i class="fas fa-user-ninja mr-1"></i><b>Kriteria</b></a>
                <a class="nav-link active" href="#"><b>Penilaian</b></a>
            </div>
        </div>
        </div>
    </nav>


    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="card-header" id="cardtambah">Tambah Data Cafe</h3>
                    <div class="card-body">
                        <form method="POST" action="" id="form">
                            <div class="form-group">
                                <label for="">Nama Cafe</label>
                                <input type="text" class="form-control"name="nama_kafe" id="namakafe">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nomor Telepon</label>
                                <input type="number" class="form-control" name="no_telepon" id="telepon">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat">
                            </div>
                            <button type="submit" name="tambah" class="btn" id="submit" >Submit</button>
                            <button type="reset" name="hapus" class="btn ">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <script>
        $('#submit').on('click', function(e){
            e.preventDefault();
            Swal.fire(
                'Success',
                'Data Berhasil diinput!',
                'success'
            );
            document.location.href='daftarCafe.php';

        })
    </script> -->

<!-- <script>
    $(document).ready(function(){
        $('#submit').clik(function(e){
            e.preventDefault();
            var dataform=$('#form')[0];
            var dataform= new FormData(dataform);

            var namakafe=$('#namakafe').val();
            if(namakafe == ""){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    footer: '<a href>Why do I have this issue?</a>'
                })
            }
        })
    })
</script> -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>
</html>