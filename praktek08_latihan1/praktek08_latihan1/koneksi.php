<?php

//Koneksi Database
$koneksi = mysqli_connect("localhost", "root", "", "dtb_belajar");

//Semua Fungsi
function query($func)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $func);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//Fungsi tambah data
function tambahdat($data)
{
    global $koneksi;
    $nim = $_POST["nim"];
    $nama_mahasiswa = $_POST["nama_mahasiswa"];
    $ttl = $_POST["ttl"];
    $fakultas = $_POST["fakultas"];
    $jurusan = $_POST["jurusan"];
    $ipk = $_POST["ipk"];

    $query = "INSERT INTO tb_mahasiswa(nim,nama_mahasiswa,ttl,fakultas,jurusan,ipk) VALUES ('$nim', '$nama_mahasiswa','$ttl','$fakultas','$jurusan','$ipk')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

// fungsi edit data mahasiswa
function editdat($data)
{
    global $koneksi;
    $id_mahasiswa = $_POST["id_mahasiswa"];
    $nim = $_POST["nim"];
    $nama_mahasiswa = $_POST["nama_mahasiswa"];
    $ttl = $_POST["ttl"];
    $fakultas = $_POST["fakultas"];
    $jurusan = $_POST["jurusan"];
    $ipk = $_POST["ipk"];

    $query = "UPDATE tb_mahasiswa SET nim='$nim', nama_mahasiswa='$nama_mahasiswa', ttl='$ttl', fakultas='$fakultas', jurusan='$jurusan', ipk='$ipk' WHERE id_mahasiswa='$id_mahasiswa'";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

//Fungsi hapus data Mahasiswa
function hapusdat($id_mahasiswa)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM tb_mahasiswa WHERE id_mahasiswa = $id_mahasiswa");

    return mysqli_affected_rows($koneksi);
}

//Fungsi search / mencari data
function carimhs($mencari)
{
    $query = "SELECT * FROM tb_mahasiswa WHERE nim LIKE '%$mencari%' OR nama_mahasiswa LIKE '%$mencari%' OR ttl LIKE '%$mencari%' OR ipk LIKE '%$mencari%'";

    return query($query);
}