<?php

//Koneksi Database
$koneksi = mysqli_connect("localhost", "root", "", "spkdatabase");

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

//Fungsi tambah data Cafe
function tambahdc($data)
{
    global $koneksi;
    $nama = $_POST["nama_kafe"];
    $telepon = $_POST["no_telepon"];
    $alamat = $_POST["alamat"];

    $query = "INSERT INTO daftarkafe(nama_kafe,no_telepon,alamat) VALUES ('$nama', '$telepon','$alamat')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

//Fungsi edit data Cafe
function editdc($data)
{
    global $koneksi;
    $id_kafe = $_POST["id_kafe"];
    $nama = $_POST["nama_kafe"];
    $telepon = $_POST["no_telepon"];
    $alamat = $_POST["alamat"];

    $query = "UPDATE daftarkafe SET nama_kafe='$nama', no_telepon='$telepon', alamat='$alamat' WHERE id_kafe='$id_kafe'";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

//Fungsi hapus data Cafe
function hapusdc($id_kafe)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM daftarkafe WHERE id_kafe = $id_kafe");

    return mysqli_affected_rows($koneksi);
}
?>