<?php

if(session_status() == PHP_SESSION_NONE){
    session_start();
}

$server = "localhost";
$username = "root";
$password = "";
$nama_database = "perpustakaan-pwpb";

$connect = mysqli_connect($server, $username, $password, $nama_database);

// if(!$connect){
//     echo "koneksi gagal";
// }else{
//     echo "koneksi berhasil";
// }

?>