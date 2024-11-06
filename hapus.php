<?php
include("koneksi.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Lakukan operasi DELETE pada tabel mahasiswa
    $sql = "DELETE FROM siswa_pkl WHERE id = $id";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        // Jika operasi DELETE berhasil, redirect ke halaman index.php atau halaman lain yang sesuai
        header('Location: index.php');
        exit();
    } else {
        // Jika terjadi kesalahan saat operasi DELETE
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
