<?php 



$sql = "SELECT id_ikm as maxid FROM ikm order by id_ikm desc";
$hasil = mysqli_query($koneksi,$sql);
$data  = mysqli_fetch_array($hasil);
$id_ikm = $data['maxid'];
$noUrut = (int) substr($id_ikm, 4);

$noUrut++;

$char = "ikm_";
$newID = $char . $noUrut;

$nama_ikm 			= $_POST['nama_ikm'];
$penanggung_jawab 	= $_POST['penanggung_jawab'];
$alamat				= $_POST['alamat'];
$jenis_produksi		= $_POST['jenis_produksi'];
$bahan_baku			= $_POST['bahan_baku'];


$nama_file=$_FILES['surat_keterangan_kelurahan']['name'];
$lokasi_file=$_FILES['surat_keterangan_kelurahan']['tmp_name'];

move_uploaded_file($lokasi_file,"../img/sk/"."$nama_file");


$file_nib=$_FILES['nib']['name'];
$lokasi_nib=$_FILES['nib']['tmp_name'];

move_uploaded_file($lokasi_nib,"../img/nib/"."$file_nib");


$file_siup_iui=$_FILES['siup_iui']['name'];
$lokasi_siup_iui=$_FILES['siup_iui']['tmp_name'];

move_uploaded_file($lokasi_siup_iui,"../img/siup_iui/"."$file_siup_iui");



$insert = mysqli_query($koneksi,"INSERT into ikm Values('$newID','admin','$nama_ikm','$penanggung_jawab','$alamat','$jenis_produksi','$bahan_baku','$nama_file','$file_nib','$file_siup_iui','Data Menunggu Konfirmasi')");

if($insert){
	echo '<script>alert("Berhasil Register!"); document.location="index.php?hal=data_ikm";</script>';
}else{
	echo '<script>alert("Gagal Upload!"); document.location="data_ikm.php";</script>';
}

 ?>