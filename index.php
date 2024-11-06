<?php
include("koneksi.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>::Data Siswa::</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="col-md-12">
             <h3 style="margin:20px 0px 5px 0px">Data siswa</h3>
             <hr>
             <a href="tambah_form.php" class="btn btn-success mt-2">Tambah Data</a>
             <table class="table table-striped mt-4">
                <thead>
                    <tr class="info">
                        <th>Nis</th>
                        <th>Nama Siswa PKL</th>
                        <th>Masa PKL</th>
                        <th>Jurusan</th>
                        <th>Tempat Lab</th>
                        <th>Aksi</th>
                    </tr>
                </thead> 

                <!-- Menampilkan data siswa dari databse -->
                <?php 
                $sql = "select * from siswa_pkl";
                $query = mysqli_query($koneksi, $sql);
                
                while($mhs =mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>" .$mhs['nis'] . "</td>";
                    echo "<td>" .$mhs['nama_siswa_pkl'] . "</td>";
                    echo "<td>" .$mhs['masa_pkl'] . "</td>";
                    echo "<td>" .$mhs['jurusan'] . "</td>";
                    echo "<td>" .$mhs['tempat_lab'] . "</td>";
                    echo "<td>";
                    echo "<a href='edit_form.php?id=" . $mhs['id'] . "' class='btn btn-primary'>Edit</a> &nbsp";
                    echo "<a href='hapus.php?id=" . $mhs['id'] . "' class='btn btn-danger'>Hapus</a>";
                    echo"</td>";
                    echo"</tr>";
                }
                ?>
            </table>
        </div>
      </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>