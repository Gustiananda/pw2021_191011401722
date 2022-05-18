<?php
include 'koneksi.php';
if(isset($_POST['tambah'])){

  if(tambah($_POST) > 0){
      echo ' 
      <script>
      alert ("Berhasil ditambahkan ke Database");
      </script>
      ';
  }else{
      echo ' 
      <script>
      alert ("Gagal ditambahkan ke Database");
      document.location.href = "form.php";
      </script>';
  }
}

$hasil= mysqli_query($conn, 'SELECT * FROM tbnilai')

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Pertemuan 11</title>
  </head>
  <body>
    <section id="form">
      <div class="container overflow-hidden">
        <div class="row text-center">
          <div class="col">
            <h2>Perhitungan Nilai Akhir Mahasiswa</h2>
          </div>
        </div>
      </div>
      <form method="POST">
        <div class="container overflow-hidden">
          <div class="row gx-5">
            <div class="col">
              <div class="p-4">
                <div class="mb-3">
                  <label for="name" class="form-label-sm">NIM Anda :</label>
                  <input type="text" class="form-control" name="nim" required/>
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label-sm">Nama Lengkap :</label>
                  <input type="text" class="form-control" name="nama" required/>
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label-sm">Mata Kuliah Anda :</label>
                  <input type="text" class="form-control" name="matakuliah" required/>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="p-2">
                <div class="mb-7">
                  <label for="name" class="form-label-sm">Nilai Tugas:</label>
                  <input type="text" class="form-control" name="tugas" required/>
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label-sm">Nilai UTS:</label>
                  <input type="text" class="form-control" name="uts" required/>
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label-sm">Nilai UAS:</label>
                  <input type="text" class="form-control" name="uas" required/>
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label-sm">Nilai Kehadiran:</label>
                  <input type="text" class="form-control" name="jmlhadir" required/>
                </div>
              </div>
            </div>
          </div>
          <button type="submit" name="tambah" value="Tambah" class="btn btn-dark text-end">Tambah</button>
        </div>
      </form>
    </section>
    <section>
    <div class="container overflow-hidden">
        <div class="row text-center">
          <div class="col">
          </div> 
        </div>
    </div>         
    </section>
    <section>
        <div class="container tbl w-100">
          <div class="table-responsive">
            <table class="table align-items-center">
              <thead>
                <tr>
                  <th >NIM</th>
                  <th >Nama</th>
                  <th >Mata Kuliah</th>
                  <th >Tugas</th>
                  <th >UTS</th>
                  <th >UAS</th>
                  <th >Kehadiran</th>
                  <th >Nilai Akhir</th>
                  <th >Grade</th>
                </tr>
              </thead>
              <tbody>
                <?php while($data = mysqli_fetch_array($hasil)) {?>
                <tr>
                  <td><?= $data['nim']; ?></td>
                  <td><?= $data['nama'] ?></td>
                  <td><?= $data['matakuliah'] ?></td>
                  <td><?= $data['tugas'] ?></td>
                  <td><?= $data['uts'] ?></td>
                  <td><?= $data['uas'] ?></td>
                  <td><?= $data['jmlhadir'] ?></td>
                  <td><?= $data['akhir']?></td>
                  <td><?= $data['grade']?></td>
                  <?php } ?>
                </tr>
              </tbody>
            </table>
          </div>
         </div>
      </section>
      <footer class="bg-light text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="bi bi-facebook sm"></i>
      </a>

      <!-- Twitter -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="bi bi-twitter"></i>
      </a>

      <!-- Google -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="bi bi-google"></i>
      </a>

      <!-- Instagram -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="bi bi-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="bi bi-linkedin"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="bi bi-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3 text-dark" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright 
    <a class="text-dark" href="">Hibatulloh31 </a>
  </div>
  <!-- Copyright -->
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
