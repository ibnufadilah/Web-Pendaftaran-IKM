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
  <script src="js/bootstrap.min.js"></script>
  <link rel="icon" type="image/png" href="img/bogor.png">
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





  <div class="jumbotron">
    <div class="container">
      <h1 class="display-7" text align="center">
        <br>Apa itu IKM ?</br></h1>
        <br>
        <br>
        <img src="img/bogor.png" class="mx-auto d-block img-fluid" width="200px" height="200px"> 
        <br><br>
        <h5 class="" align="justify">
         IKM adalah sebuah usaha yang memproduksi berbagai macam jenis produk yang di gunakan dalam berbagai keperluan aktivitas makhluk hidup ataupun yang lainnya. Jika seseorang memiliki aktivitas produksi dan pemasaran secara langsung, maka dapat di sebut sebagai UKM dan IKM.<br><br>
       Produk IKM akan tersuplay dengan baik jika para UKM didukung dengan berbagai kemudahan teknik sistem distribusi yang dilakukan oleh para IKM bersama dengan UKM. Tanpa adanya Pelaku usaha UKM, para pelaku usaha IKM akan menjadi kesulitan dalam men-supply hasil produksi dari industri yang dijalaninya. Salah satu riset mahasiswa ditemukan fakta berikut sebagai pembeda antara UKM dengan IKM.</h5>
      </div>
    </div>
  </div>