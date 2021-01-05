<?php
require 'koneksi.php';

$semua = query("SELECT * FROM tb_mahasiswa INNER JOIN tb_fakultas ON tb_fakultas.id_fakultas = tb_mahasiswa.fakultas INNER JOIN tb_jurusan ON tb_jurusan.id_jurusan = tb_mahasiswa.jurusan");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="asset/datatables.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="asset/jquery-3.5.1.min.js"></script>
    <script src="asset/datatables.min.js"></script>

    <script src="sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="coba.css">


    <title>Belajar Web</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                    <form class="form-inline" action="hasil.php" method="POST">
                        <input class="form-control mr-sm-1" type="search" placeholder="Search" name="id_cari" aria-label="Search" autofocus autocomplete="off">

                        <button class="btn btn-primary my-2 my-sm-0" type="submit" name="cari">Search</button>
                    </form>
                    <a href="tambahdata.php?" title="Tambah Data Mahasiswa" class="btn btn-primary btn-sm text-white mr-2" id="tambahdata"><i class="fa fa-plus" aria-hidden="true"></i>Tambah Data Mahasiswa</a>

                        <table class="table table-bordered">
                            <thead id="tbldaftar"> 
                                <tr class="table-primary">
                                    <th scope="col">No</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Nama Mahasiswa</th>
                                    <th scope="col">TTL</th>
                                    <th scope="col">Fakultas</th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">IPK</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>

                            <tbody id="bodytable">
                            <?php $b=1 ?>
                                <?php foreach($semua AS $row) :  ?>
                                <tr>
                                    <td> <?php echo $b++?> </td>
                                    <td> <?php echo $row["nim"]?> </td>
                                    <td> <?php echo $row["nama_mahasiswa"]?> </td>
                                    <td> <?php echo $row["ttl"]?> </td>
                                    <td> <?php echo $row["nama_fakultas"]?> </td>
                                    <td> <?php echo $row["nama_jurusan"]?> </td>
                                    <td> <?php echo $row["ipk"]?> </td>
                                    <td> 
                                    <div class="text-center">
                                        <a class="btn btn-outline-primary btn-sm" href="editdata.php?id_mahasiswa=<?= $row['id_mahasiswa'];?>"> <i class="fas fa-edit"></i></a>
                                        <a class="btn btn-outline-danger btn-sm" href="hapusdata.php?id_mahasiswa=<?= $row['id_mahasiswa'];?>" onclick="return confirm('Yakin menghapus data ini?');"><i class="fas fa-trash"></i></a>
                                    </div>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>