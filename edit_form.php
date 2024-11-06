<?php
include("koneksi.php");


if (!isset($_GET['id'])) {
    header('Location: index.php');
}

$id = $_GET['id'];

$sql = "select * from siswa_pkl where id = $id";
$query = mysqli_query($koneksi, $sql);
$mhs = mysqli_fetch_assoc($query);

$checked = explode(",", $mhs['tempat_lab'])
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>::Update Data Siswa::</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .btn-space{
            margin-right: 8px 
        }
    </style>
  </head>
  <body>

    <div class="container">
        <div class="col-md-12">
            <h3 style="margin: 20px 0px 20px 0px">Update Data Siswa</h3>
            <form method="post" action="edit_form.php" class="form_horizontal">
                <input type="hidden" name="id" value="<?php echo $mhs['id'] ?>">
                <input type="hidden" name="nis" value="<?php echo $mhs['nis'] ?>">
                <form method="post" action="hapus.php" class="form_horizontal">
            <input type="hidden" name="id" value="<?php echo $mhs['id'] ?>">
             
                <div class="mb-3">
                    <label class="form-label fw-bold">NIS</label>
                    <input type="text" name="nis" class="form-control" value="<?php echo $mhs['nis'] ?>">
                </div>               
                 <div class="mb-3">
                    <label class="form-label fw-bold">Nama Siswa PKL</label>
                    <input type="text" name="nama_siswa_pkl" class="form-control" value="<?php echo $mhs['nama_siswa_pkl'] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Masa PKL</label>
                    <div class="form-check">
                    <input class="form-check-input"type="radio" name="masa_pkl" value="3bulan" <?php if($mhs['masa_pkl'] == '3bulan') echo  'checked' ?>>
                    <label class="form-check-label">
                        3-Bulan
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input"type="radio" name="masa_pkl" value="4bulan" <?php if($mhs['masa_pkl'] == '4bulan') echo  'checked' ?>>
                    <label class="form-check-label">
                        4-Bulan
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input"type="radio" name="masa_pkl" value="6bulan" <?php if($mhs['masa_pkl'] == '6bulan') echo  'checked' ?>>
                    <label class="form-check-label">
                        6-Bulan
                 </div>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Jurusan</label>
                    <select class="form-select" name="jurusan">
                        <option value="PPLG" <?php if($mhs['jurusan']  == 'PPLG') echo 'selected'?>>PPLG</option>
                        <option value="TKJT" <?php if($mhs['jurusan']  == 'TKJT') echo 'selected'?>>TKJT</option>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Tembat Bertugas Lab</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="tempat_lab[]" value="Lab 1" <?php if (in_array("Lab 1", $checked)) echo "checked" ?>>
                        <label class="form-check-label">
                            Lab 1
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="keahlian[]" value="Lab 2" <?php if (in_array("Lab 2", $checked)) echo "checked" ?>>
                        <label class="form-check-label">
                            Lab 2
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="keahlian[]" value="Lab 3" <?php if (in_array("Lab 3", $checked)) echo "checked" ?>>
                        <label class="form-check-label">
                            Lab 3
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="tempat_lab[]" value="Lab Jarigan" <?php if (in_array("Lab Jaringan", $checked)) echo "checked" ?>>
                        <label class="form-check-label">
                            Lab Jarigan
                        </label>
                    </div>
                </div>
                <div class="form-groupmt-4 ">
                    <button type="reset" name="reset" class="btn btn-danger btn-space">Cancel</button>
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </div>
            </form>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
 <?php
  if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama_siswa_pkl = $_POST['nama_siswa_pkl'];
    $masa_pkl = $_POST['masa_pkl'];
    $jurusan = $_POST['jurusan'];
    $tempat_lab = implode(",", $_POST['tempat_lab']);

    $sql = "UPDATE siswa_pkl SET nis='$nis', nama_siswa_pkl='$nama_siswa_pkl', masa_pkl='$masa_pkl',jurusan='$jurusan', tempat_lab='$tempat_lab' WHERE id=$id";

    if (mysqli_query($koneksi, $sql)) {
        // Update berhasil, lakukan redirect ke halaman index.php
        header('Location: index.php');
        exit();
    } else {
        // Error saat menjalankan query
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

</html>