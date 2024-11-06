<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "siswa_pkl";

$koneksi = mysqli_connect($host,$user,$password,$db);

if(!$koneksi) {
    die("Gagal terhubung dengan database");
} else {
    
}