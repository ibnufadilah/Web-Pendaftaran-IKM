<?php


$id = $_GET['id'];
	$sql = mysqli_query($koneksi, "DELETE FROM jenis_produksi where id_produksi = '$id'") or die(mysqli_error($koneksi));

	if($sql){
		echo '<script>alert("Berhasil menghapus data!"); document.location="index.php?hal=jenis_produksi";</script>';
	}else{
		echo '<script>alert("Gagal menghapus data!"); document.location="index.php?hal=jenis_produksi";</script>';
	}

?>