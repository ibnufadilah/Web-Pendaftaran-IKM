<?php 

$id_admin					= $_POST['id_admin'];
$nama 			= $_POST['nama'];
$username 			= $_POST['username'];
$password 			= $_POST['password'];


$query = mysqli_query($koneksi,"UPDATE admin SET
	nama = '$nama',
	username = '$username',
	password = '$password'
	
	WHERE id_admin = '$id_admin'
	");
if($query){
	echo '<script>alert("Berhasil mengubah data!"); document.location="index.php?hal=data_admin";</script>';
}else{
	echo '<script>alert("Gagal mengubah data!"); document.location="index.php?hal=data_admin";</script>';
}



?>


