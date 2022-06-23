<?php


$id = $_GET['id'];
	$sql = mysqli_query($koneksi, "DELETE FROM ikm where id_ikm = '$id'") or die(mysqli_error($koneksi));

	if($sql){
		echo '<script>alert("Berhasil menghapus data!"); document.location="index.php?hal=data_ikm";</script>';
	}else{
		echo '<script>alert("Gagal menghapus data!"); document.location="index.php?hal=data_ikm";</script>';
	}

?>