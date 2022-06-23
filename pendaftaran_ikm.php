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
<img class="card-img-top" src="img/banner.jpg" style="height: 100%; position: center;" alt="Card image cap">

<br><br>
<?php 

   $id_user = $_SESSION['id_user'];
                       if (!isset($id_user)){?>
<div class="container">
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class="alert alert-danger" role="alert">
        <h1 class="display-4"><center>Anda Belum Login ?</center></h1>
      </div>
      <p class="lead"><center><h4>Silahkan login terlebih dahulu atau buat akun kalau anda belum memiliki akun. Anda dapat mengklik button dibawah ini untuk login.</h4></center></p>
      <center><a class="btn btn-primary btn-lg" href="login.php" role="button">Login</a></center>
    </div>
  </div>
</div>
 <?php }else{

                        $customer = mysqli_query($koneksi,"SELECT*FROM user where id_user = '$id_user' ");
                          $cust = mysqli_fetch_array($customer);
                      ?>
<div class="container">
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
     <form action="aksi_daftar_ikm.php" method="POST" enctype="multipart/form-data">
      <h3 class="display-4"><center>Masukkan Data IKM dengan benar</center></h3>
    <br><br>  
    
      <div class="form-group">
        <label for="exampleInputEmail1">Nama IKM</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="nama_ikm" placeholder="Masukkan Nama IKM">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Nama Pemilik IKM</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="penanggung_jawab" placeholder="Masukkan Nama Pemilik IKM">
      </div>
       <div class="form-group">
        <label for="exampleInputPassword1">Nama Alamat IKM</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="alamat" placeholder="Masukkan Alamat IKM">
      </div>
      <div class="form-row align-items-center">
    <div class="col-auto my-1">
       <label for="exampleInputPassword1">Jenis Produksi IKM</label>
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
      <select class="custom-select mr-sm-2" name="jenis_produksi" id="inlineFormCustomSelect">
       <option value="0" selected disabled="true">--Pilih Kategori Product--</option>
                     <?php 
                          $q_kategori = mysqli_query($koneksi,"SELECT*FROM jenis_produksi"); 
                           while ($data_kat = mysqli_fetch_array($q_kategori)) {
                     ?>
                      <option value="<?php echo $data_kat['jenis_produksi']; ?>"><?php echo $data_kat['jenis_produksi']; ?></option>
                       <?php } ?>
                      </select>
    </div></div>
     <div class="form-group">
        <label for="exampleInputPassword1">Bahan Baku Produksi</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="bahan_baku" placeholder="Masukkan Bahan Baku Produksi IKM">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Tahun Berdirinya IKM</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="tahun" placeholder="Masukkan tahun berdirinya IKM">
      </div>
      <div class="form-row">
        <div class="col-4">
        <label for="exampleFormControlFile1">Surat Keterangan Kelurahan</label>
        <input type="file" class="form-control-file" name="surat_keterangan_kelurahan" id="exampleFormControlFile1">
      </div>
      <div class="col-4">
        <label for="exampleFormControlFile1">Surat Nomor Izin Berusaha</label>
        <input type="file" class="form-control-file" name="nib" id="exampleFormControlFile1">
      </div>
      <div class="col-4">
        <label for="exampleFormControlFile1">Surat Izin Usaha Produk Atau Izin Usaha Industri</label>
        <input type="file" class="form-control-file" name="siup_iui" id="exampleFormControlFile1">
      </div>

      <small id="emailHelp" class="form-text text-muted">*File yang dilampirkan berupa scan surat, max image 2mb</small>
    </div>
    <br>
      <button type="submit" class="btn btn-primary btn-lg btn-block">Proses</button>
    </form>
  </div>

  <?php } ?>
</body>
</html>