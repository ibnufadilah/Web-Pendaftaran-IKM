<?php
    //account dimasukkan kedalam session
    session_start();
    
    $koneksi = new mysqli("localhost","root","","ikm");

    //harus login
    if (!isset($_SESSION['admin'])) {
        echo "<script> alert('Anda Belum Login, Silahkan Tekan Ok Untuk Login'); </script>";
        echo "<script> location='login.php'; </script>";
        exit();
    }

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Disperindag Admin</title>
 <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->

   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   
   
    <script src="../assets/js/jquery-3.3.1.min.js"></script>

      <script src="../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="../assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="../assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>

   <link rel="stylesheet" type="text/css" href="../assets/js/dataTables/dataTables.bootstrap.css">
   <link rel="stylesheet" type="text/css" href="../assets/js/dataTables/jquery.dataTables.css">
   <script type="text/javascript" src="../assets/js/dataTables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="../assets/js/dataTables/dataTables.bootstrap.js"></script>
   

  
    

</head>
<body>
 <div class="row">
      <div class="col-md-2">
        <img src="../../img/bogor.png" width="50" height="50">
      </div>
      <div class="col-md-6">
        <h3 class="" align="center"> Laporan Data IKM Yang Telah Dibina Oleh Disperindag </h3>
      </div>
      </div>
<div class="table-responsive">
<table id="table_berita" class="table table-striped table-bordered responsive">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama IKM</th>
      <th>Penanggung Jawab IKM</th>
      <th>Alamat</th>
      <th>Jenis Produksi</th>
      <th>Bahan Baku Produksi</th>
      <th>Tahun</th>
     <!--  <th>Surat Keterangan Kelurahan</th>
      <th>NIB</th>
      <th>SIUP atau IUI</th> -->
      <th>Status</th>
 
    </tr>
  </thead>

  <tbody>
    <?php $nomor=1; ?>
    <?php 
    $tahun = $_POST['tahun'];
    $ambil=$koneksi->query(" SELECT * FROM ikm where tahun = '$tahun' && status = 'IKM dibina Oleh Disperindag'"); ?>
    <?php while($pecah=$ambil->fetch_assoc()) { ?>
     
     
    <tr>
      <td> <?php echo $nomor; ?></td>
      <td> <?php echo $pecah['nama_ikm']; ?></td>
      <td> <?php echo $pecah['penanggung_jawab']; ?></td>
      <td> <?php echo $pecah['alamat']; ?></td>
      <td> <?php echo $pecah['jenis_produksi']; ?></td>
      <td> <?php echo $pecah['bahan_baku']; ?></td>
       <td> <?php echo $pecah['tahun']; ?></td>    
      <td> <?php echo $pecah['status']; ?> </td>
          </tr>
          </tbody>
          <?php $nomor++; ?>
<?php } ?>
</table>
</div>
          <script>
        window.print();
    </script>

</body>
</html>
