<?php 

$id_user			= $_POST['id_user'];
$nama_lengkap 				= $_POST['nama_lengkap'];
$nik 			= $_POST['nik'];
$email 			= $_POST['email'];
$password 			= $_POST['password'];
$npwp 			= $_POST['npwp'];
$jenis_kelamin 			= $_POST['jenis_kelamin'];
$alamat 			= $_POST['alamat'];

$query = mysqli_query($koneksi,"UPDATE user SET
	nama_lengkap = '$nama_lengkap',
	nik = '$nik',
	email = '$email',
	password = '$password',
	npwp = '$npwp',
	jenis_kelamin = '$jenis_kelamin',
	alamat = '$alamat'
	
	WHERE id_user = '$id_user'
	");
if($query){
	echo '<script>alert("Berhasil mengubah data!"); document.location="index.php?hal=data_user";</script>';
}else{
	echo '<script>alert("Gagal mengubah data!"); document.location="index.php?hal=data_user";</script>';
}



?>


