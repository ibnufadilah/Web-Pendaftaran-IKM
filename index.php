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
  <link rel="icon" type="image/png" href="img/bogor.png">
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <title>DISPERINDAG</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img class="img-fluid d-block" src="img/logo1.png" width="200"> &nbsp;&nbsp;
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
  <!-- <div class="py-5 text-center" style="background-image: url('img/foto1.jpg');background-size:cover;">
    <div class="container">
      <div class="row">
        <div class="bg-white p-5 mx-auto col-md-8 col-10">
          <h3 class="display-4">Dinas Perindustrian dan Perdagangan Kota Bogor</h3>
          <p class="mb-4">Jl. Dadali No.4, RT.03/RW.06, Tanah Sereal, Kec. Tanah Sereal, Kota Bogor, Jawa Barat 16161</p> <a class="btn btn-outline-primary" href="#">Read more</a>
        </div>
      </div>
    </div>
  </div> -->


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/disperindag.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/kadis.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/foto.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php 
 $id_user = $_SESSION['id_user'];
                       if (!isset($id_user)){
 ?> 
<?php }else{ ?>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between">
                <h2 class="mb-1">Notifikasi</h2>
              </div>
              <p class="mb-1">
                <?php $ambil=$koneksi->query(" SELECT * FROM ikm where id_user = '$id_user' order by id_ikm DESC"); ?>
               <?php $pecah=$ambil->fetch_assoc(); ?>
        <?php 
            if ($pecah['status'] == 'IKM dibina oleh Disperindag') {
              
           ?>
           <center> <h4 class="text-success">IKM <?php echo $pecah['nama_ikm']; ?> telah dibina oleh Disperindag <br>
            <?php echo $pecah['penanggung_jawab']; ?> dapat datang ke Disperindag untuk mendapatkan <span> Sertifikat Halal dan Haki </span></h4></center>
          <?php }else{ ?>
            <h4 class="text-danger">Belum ada IKM yang didaftarkan</h4>
          <?php } ?>
              </p> </a>
          </div>
        </div>
      <?php } ?>
        <div class="col-md-12">
          <img src="img/disperindag2.jpg" class="mx-auto d-block img-fluid"> <br>
          <h4 class="" align="center">
          Jl. Dadali No.4, RT.03/RW.06, Tanah Sereal, Kec. Tanah Sereal, Kota Bogor, Jawa Barat 16161 </h4>
  </div>
</body>

</html>