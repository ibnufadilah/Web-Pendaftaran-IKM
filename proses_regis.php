<?php
include '/koneksi.php';
$sql = "SELECT id_user as maxid FROM user order by id_user desc";
$hasil = mysqli_query($koneksi,$sql);
$data  = mysqli_fetch_array($hasil);
$id_user = $data['maxid'];
$noUrut = (int) substr($id_user, 5);
$noUrut++;

$char = "user_";
$newID = $char . sprintf("%03s",$noUrut);

$nama_lengkap		= $_POST['nama_lengkap'];
$nik	= $_POST['nik'];
$email	= $_POST['email'];
$password	= $_POST['password'];
$npwp	= $_POST['npwp'];
$jenis_kelamin	= $_POST['jenis_kelamin'];
$alamat	= $_POST['alamat'];
$cek = mysqli_query($koneksi, "SELECT * FROM user WHERE nik = '$nik'") or die(mysqli_error($koneksi));

if(mysqli_num_rows($cek) == 0){
    $sql = mysqli_query($koneksi, "INSERT INTO user VALUES('$newID','$nama_lengkap','$nik','$email','$password','$npwp','$jenis_kelamin','$alamat')") or die(mysqli_error($koneksi));
    
    if($sql){
        echo '<script>alert("Berhasil Register!"); document.location="login.php";</script>';
    }else{
        echo '<script>alert("Gagal Register!"); document.location="register.php";</script>';
    }
}else{
    echo '<script>alert("email Telah Terregister!"); document.location="register.php";</script>';
}
?>