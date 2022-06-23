<?php 



$sql = "SELECT id_produksi as maxid FROM jenis_produksi order by id_produksi desc";
$hasil = mysqli_query($koneksi,$sql);
$data  = mysqli_fetch_array($hasil);
$id_produksi = $data['maxid'];
$noUrut = (int) substr($id_produksi, 9);

$noUrut++;

$char = "produksi_";
$newID = $char . sprintf("%03s",$noUrut);

$jenis_produksi 		= $_POST['jenis_produksi'];



$insert = mysqli_query($koneksi,"INSERT into jenis_produksi Values('$newID','$jenis_produksi')");

if($insert){
	echo '<script>alert("Berhasil Register!"); document.location="index.php?hal=jenis_produksi";</script>';
}else{
	echo '<script>alert("Gagal Upload!"); document.location="index.php?hal=jenis_produksi";</script>';
}

 ?>