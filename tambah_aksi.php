<?php
include("koneksi.php");

//jika tombol submit diklik
if (isset($_POST['submit'])) {
    //ambil data dari form
    $nis = $_POST['nis'];
    $nama_siswa_pkl = $_POST['nama_siswa_pkl'];
    $masa_pkl = $_POST['masa_pkl'];
    $jurusan = $_POST['jurusan'];
    $tempat_lab= implode(",", $_POST['tempat_lab']);

    //membuat query
    $sql = "INSERT into siswa_pkl(nis,nama_siswa_pkl,masa_pkl,jurusan,tempat_lab) VALUES ('$nis','$nama_siswa_pkl','$masa_pkl','$jurusn','$tempat_lab')";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        header('Location: index.php');
    } else {
        echo "Gagal menambahkan data siswa pkl <a href=index.php>Halaman Index</a>";
    }
} else {
    echo "Anda tidak mempunyai akses <a href=index.php>Halaman Index</a>";
}
