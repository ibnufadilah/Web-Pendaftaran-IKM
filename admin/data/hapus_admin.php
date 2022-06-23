<?php


$id = $_GET['id'];
	$sql = mysqli_query($koneksi, "DELETE FROM admin where id_admin = '$id'") or die(mysqli_error($koneksi));

	if($sql){
		echo '<script>alert("Berhasil menghapus data!"); document.location="index.php?hal=data_admin";</script>';
	}else{
		echo '<script>alert("Gagal menghapus data!"); document.location="index.php?hal=data_admin";</script>';
	}

?>