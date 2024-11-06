<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>::Tambah Data Siswa PKL::</title>
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
            <h3 style="margin: 20px 0px 20px 0px">Tambah Data Mahasiswa</h3>
            <form method="post" action="tambah_aksi.php" class="form_horizontal">
                <div class="mb-3">
                    <label class="form-label fw-bold">NIS</label>
                    <input type="text" name="nim" class="form-control" placeholder="Masukan NIS">
                </div>                <div class="mb-3">
                    <label class="form-label fw-bold">Nama Siswa PKL</label>
                    <input type="text" name="nama_siswa_pkl" class="form-control" placeholder="Masukan Nama Lengkap">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Masa PKL</label>
                    <div class="form-check">
                    <input class="form-check-input"type="radio" name="masa_pkl" value="3bulan">
                    <label class="form-check-label">
                        3-Bulan
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input"type="radio" name="masa_pkl" value="4bulan">
                    <label class="form-check-label">
                        4-Bulan
                    </label>
                    <div class="form-check">
                    <input class="form-check-input"type="radio" name="masa_pkl" value="6bulan">
                    <label class="form-check-label">
                        6-Bulan
                    </label>
                 </div>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Jurusan</label>
                    <select class="form-select" name="jurusan">
                        <option selected>--Pilih Jurusan Anda</option>
                        <option value="PPLG">PPLG</option>
                        <option value="TKJT">TKJT</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Tempat Bertugas LAB</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="tempat_lab[]" value="Lab 1">
                        <label class="form-check-label">
                            Lab 1
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="tempat_lab[]" value="Lab 2">
                        <label class="form-check-label">
                            Lab 2
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="tempat_lab[]" value="Lab 3">
                        <label class="form-check-label">
                            Lab 3
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="tempat_lab[]" value="Lab Jaringan">
                        <label class="form-check-label">
                           Lab Jaringan
                        </label>
                    </div>
                </div>
                <div class="form-groupmt-4 ">
                    <button type="reset" name="reset" class="btn btn-danger btn-space">Cancel</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
