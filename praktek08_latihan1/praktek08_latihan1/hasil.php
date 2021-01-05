<?php
$koneksi = mysqli_connect("localhost", "root", "", "dtb_belajar");
$semua = query("SELECT * FROM tb_mahasiswa INNER JOIN tb_fakultas ON tb_fakultas.id_fakultas = tb_mahasiswa.fakultas INNER JOIN tb_jurusan ON tb_jurusan.id_jurusan = tb_mahasiswa.jurusan");

$mencari=$_POST['id_cari'];
$sql =  "SELECT * FROM tb_mahasiswa WHERE nim LIKE '%$mencari%' OR nama_mahasiswa LIKE '%$mencari%' OR ttl LIKE '%$mencari%' OR ipk LIKE '%$mencari%'";
$result = mysqli_query($koneksi, $sql);
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
                        <a href="index.php"></a>
                        <table class="table table-bordered" id="tab">
                            <thead id="tbldaftar"> 
                                <tr class="table-warning">
                                    <th scope="col">No</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Nama Mahasiswa</th>
                                    <th scope="col">TTL</th>
                                    <th scope="col">Fakultas</th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">IPK</th>
                                </tr>
                            </thead>

                            <tbody id="bodytable">
                            <?php $b=1 ?>
                                <?php while ($ro= mysqli_fetch_row($result)) :  ?>
                                <tr>
                                    <td> <?php echo $b++?> </td>
                                    <td> <?php echo $ro["nim"]?> </td>
                                    <td> <?php echo $ro["nama_mahasiswa"]?> </td>
                                    <td> <?php echo $ro["ttl"]?> </td>
                                    <td> <?php echo $ro["nama_fakultas"]?> </td>
                                    <td> <?php echo $ro["nama_jurusan"]?> </td>
                                    <td> <?php echo $ro["ipk"]?> </td>
                                </tr>
                                <?php endwhile ?>
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