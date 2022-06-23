<?php 

$id_ikm				= $_POST['id_ikm'];
$nama_ikm 			= $_POST['nama_ikm'];
$penanggung_jawab 	= $_POST['penanggung_jawab'];
$alamat				= $_POST['alamat'];
$jenis_produksi		= $_POST['jenis_produksi'];
$bahan_baku			= $_POST['bahan_baku'];
$tahun				= $_POST['tahun'];


$nama_file=$_FILES['surat_keterangan_kelurahan']['name'];
$lokasi_file=$_FILES['surat_keterangan_kelurahan']['tmp_name'];

move_uploaded_file($lokasi_file,"../img/sk/"."$nama_file");


$file_nib=$_FILES['nib']['name'];
$lokasi_nib=$_FILES['nib']['tmp_name'];

move_uploaded_file($lokasi_nib,"../img/nib/"."$file_nib");


$file_siup_iui=$_FILES['siup_iui']['name'];
$lokasi_siup_iui=$_FILES['siup_iui']['tmp_name'];

move_uploaded_file($lokasi_siup_iui,"../img/siup_iui/"."$file_siup_iui");


$query = mysqli_query($koneksi,"UPDATE ikm SET
	nama_ikm = '$nama_ikm',
	penanggung_jawab = '$penanggung_jawab',
	alamat = '$alamat',
	jenis_produksi = '$jenis_produksi',
	bahan_baku = '$bahan_baku',
	tahun = '$tahun',
	surat_keterangan_kelurahan = '$nama_file',
	nib = '$file_nib',
	siup_iui = '$file_siup_iui'
	WHERE id_ikm = '$id_ikm'
	");
if($query){
	echo '<script>alert("Berhasil mengubah data!"); document.location="index.php?hal=data_ikm";</script>';
}else{
	echo '<script>alert("Gagal mengubah data!"); document.location="index.php?hal=data_ikm";</script>';
}



?>


