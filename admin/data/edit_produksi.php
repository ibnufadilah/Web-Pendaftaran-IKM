<?php 

$id_produksi				= $_POST['id_produksi'];
$jenis_produksi 			= $_POST['jenis_produksi'];



$query = mysqli_query($koneksi,"UPDATE jenis_produksi SET
	jenis_produksi = '$jenis_produksi'
	
	WHERE id_produksi = '$id_produksi'
	");
if($query){
	echo '<script>alert("Berhasil mengubah data!"); document.location="index.php?hal=jenis_produksi";</script>';
}else{
	echo '<script>alert("Gagal mengubah data!"); document.location="index.php?hal=jenis_produksi";</script>';
}



?>


