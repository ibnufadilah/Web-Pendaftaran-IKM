<?php 

$status = $_POST['status'];
$id_ikm = $_POST['id_ikm'];
$update_status = mysqli_query($koneksi,"UPDATE ikm set status = 'IKM dibina oleh Disperindag' WHERE id_ikm = '$id_ikm'" ) or die(mysqli_error($koneksi));

if($update_status){
    echo '<script>alert("Berhasil menyimpan data"); document.location="index.php?hal=data_ikm";</script>';
}else{
    echo '<script>alert("Gagal menyimpan data."); document.location="index.php?hal=data_ikm";</script>';
}

 ?>