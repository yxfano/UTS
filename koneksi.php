<?php
$namaServer = "localhost";
$username = "user";
$password = "123";
$namaDB = "portodata";

//Membuat Koneksi
$conn = mysqli_connect($namaServer, $username, $password, $namaDB);
//cek koneksi
if (!$conn){
    die("Koneksi Gagal");
}
?>