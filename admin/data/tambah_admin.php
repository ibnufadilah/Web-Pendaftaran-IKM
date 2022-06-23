<?php

$sql = "SELECT id_admin as maxid FROM admin order by id_admin desc";
$hasil = mysqli_query($koneksi,$sql);
$data  = mysqli_fetch_array($hasil);
$id_admin = $data['maxid'];
$noUrut = (int) substr($id_admin, 6);
$noUrut++;

$char = "admin_";
$newID = $char . $noUrut;

$nama		= $_POST['nama'];
$username	= $_POST['username'];
$password	= $_POST['password'];

$cek = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username'") or die(mysqli_error($koneksi));

if(mysqli_num_rows($cek) == 0){
    $sql = mysqli_query($koneksi, "INSERT INTO admin VALUES('$newID','$nama','$username','$password')") or die(mysqli_error($koneksi));
    
    if($sql){
        echo '<script>alert("Berhasil Register!");document.location="index.php?hal=data_admin";</script>';
}else{
   
        echo '<script>alert("Gagal Register!"); ;document.location="index.php?hal=data_admin";</script>';
    }
}
?>