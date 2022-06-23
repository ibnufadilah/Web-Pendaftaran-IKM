<?php include'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.js">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <link rel="icon" type="image/png" href="img/bogor.png">
  <script src="js/bootstrap.min.js"></script>
  <title>DISPERINDAG</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img class="img-fluid d-block" src="img/disperindag3.png" width="200"> &nbsp;&nbsp;
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Industri </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="ikm.php">Pengenalan IKM</a>
            <a class="dropdown-item" href="prosedur.php">Prosedur/Diagram Alir</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tentang.php">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pendaftaran_ikm.php">Pendaftaran</a>
        </li>
        <?php
                       
                       session_start();
                       error_reporting(0);
                       $id_user = $_SESSION['id_user'];
                       if (!isset($id_user)){

                       ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Masuk </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="login.php">Masuk</a>
            <a class="dropdown-item" href="register.php">Daftar</a>
           
          </div>
        </li>
         <?php }else{

                        $customer = mysqli_query($koneksi,"SELECT*FROM user where id_user = '$id_user' ");
                          $cust = mysqli_fetch_array($customer);
                      ?>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          <?php 
                           echo $cust['nama_lengkap'];
                           ?>

                        </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <!--  <a class="dropdown-item" href="data_peminjaman.php">Profile</a> -->
                           
                          <a class="dropdown-item" href="logout.php">Logout</a>
                      </div>
                      </li>
                      <?php } ?>
      </ul>
    </div>
  </nav>
  <div class="py-5 text-center" style="background-color:#eaf2cd; background-size:cover;">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-6 col-10 bg-white p-5">
          <h1 class="mb-4">Daftar Akun</h1>
          <form method="POST" action="proses_regis.php">
            <div class="form-group"> <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap" id="form9" required="Masukkan"> </div>
            <div class="form-group"> <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK" id="form9" required="Masukkan"> </div>
            <div class="form-group"> <input type="email" name="email" class="form-control" placeholder="Masukkan Email" id="form9" required="Masukkan"> </div>
            <div class="form-group mb-3"> <input type="password" name="password" class="form-control" placeholder="Masukkan Password" id="form10" required="Masukkan"> <small class="form-text text-muted text-right">
            <div class="form-group"> <input type="text" name="npwp" class="form-control" placeholder="Masukkan NPWP" id="form9" required="Masukkan"> </div> 
            <div class="form-group"> <input type="text" name="jenis_kelamin" class="form-control" placeholder="Masukkan jenis_kelamin" id="form9" required="Masukkan"> </div>
            <div class="form-group"> <input type="text" name="alamat" class="form-control" placeholder="Masukkan alamat" id="form9" required="Masukkan"> </div>  
              </small> </div> 
            <button type="submit" class="btn btn-success">Daftar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
 
</body>

</html>