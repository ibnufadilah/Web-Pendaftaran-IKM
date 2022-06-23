<h2>Data IKM</h2>

<!-- Button trigger modal -->
<!--  --><br><br>

<div class="table-responsive">
<table id="table_berita" class="table table-striped table-bordered responsive">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama IKM</th>
      <th>Penanggung Jawab IKM</th>
      <th>Alamat</th>
      <th>Jenis Produksi</th>
      <th>Bahan Baku Produksi</th>
      <th>Tahun Berdirinya IKM</th>
      <th>Surat Keterangan Kelurahan</th>
      <th>NIB</th>
      <th>SIUP atau IUI</th>
      <th>Status</th>
 
      <th>Aksi</th>
    </tr>
  </thead>

  <tbody>
    <?php $nomor=1; ?>
    <?php $ambil=$koneksi->query(" SELECT * FROM ikm order by id_ikm DESC"); ?>
    <?php while($pecah=$ambil->fetch_assoc()) { ?>
    <tr>
      <td> <?php echo $nomor; ?></td>
      <td> <?php echo $pecah['nama_ikm']; ?></td>
      <td> <?php echo $pecah['penanggung_jawab']; ?></td>
      <td> <?php echo $pecah['alamat']; ?></td>
      <td> <?php echo $pecah['jenis_produksi']; ?></td>
      <td> <?php echo $pecah['bahan_baku']; ?></td>
      <td> <?php echo $pecah['tahun']; ?></td>  
           <td>
             <a href="#" data-toggle="modal" data-target="#detail-transaksi-<?php echo $pecah['id_ikm']; ?>">
           <img src="../img/sk/<?php echo $pecah['surat_keterangan_kelurahan']; ?>" width="100px" height="100px">
          </a>
        
      </td>
      <td>
        <a href="#" data-toggle="modal" data-target="#nib-<?php echo $pecah['id_ikm']; ?>">
           <img src="../img/nib/<?php echo $pecah['nib']; ?>" width="100px" height="100px">
      </td>
      <td>
       <a href="#" data-toggle="modal" data-target="#siup-<?php echo $pecah['id_ikm']; ?>">
           <img src="../img/siup_iui/<?php echo $pecah['siup_iui']; ?>" width="100px" height="100px">
      </td>
        <td>
        <?php if ($pecah['status'] == 'Data Menunggu Konfirmasi') {
          ?>
          
        <form action="index.php?hal=konfirmasi" method="POST">
          <input type="hidden" name="status" value="Konfirmasi">
          
          <input type="hidden" name="id_ikm" value="<?php echo $pecah['id_ikm']; ?>">
          <input type="submit" name="submit" value="Konfirmasi" class="btn btn-success">
        </form> <br>
        <form action="index.php?hal=konfirmasi" method="POST">
          <input type="hidden" name="status" value="Tolak">
          <input type="hidden" name="id_ikm" value="<?php echo $pecah['id_ikm']; ?>">
          
          <input type="submit" name="submit" value="Tolak" class="btn btn-danger">
        </form>
       <?php }else{ ?>   

         <?php echo $pecah['status']; }?>

          </td>
       
      <td>
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit-<?php echo $pecah['id_ikm']; ?>">
          Edit
        </button> || 
        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-<?php echo $pecah['id_ikm']; ?>">
          Delete
        </button>
      </td>
    </tr>
    <?php $nomor++ ?>



<div id="detail-transaksi-<?php echo $pecah['id_ikm']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Surat Keterangan Kelurahan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        
        <img src="../img/sk/<?php echo $pecah['surat_keterangan_kelurahan']; ?>" width="500px" height="500px">
     </div>   
 </div>
</div>
</div>

<div id="nib-<?php echo $pecah['id_ikm']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Nomor Induk Berusaha</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        
        <img src="../img/nib/<?php echo $pecah['nib']; ?>" width="500px" height="500px">
     </div>   
 </div>
</div>
</div>


<div id="siup-<?php echo $pecah['id_ikm']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Surat Izin Produksi atau Izin Usaha Industri</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        
        <img src="../img/siup_iui/<?php echo $pecah['siup_iui']; ?>" width="500px" height="500px">
     </div>   
 </div>
</div>
</div>


<div class="modal fade" id="konfirmasi-<?php echo $pecah['id_ikm']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi IKM Binaan Disperindag</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <center>
          Apakah Anda Yakin Mengkonfirmasi IKM Binaan Ini!<br>
        <a href="index.php?hal=konfirmasi&id=<?php echo $pecah['id_ikm']; ?>" class="btn-success btn">Yes</a>
        <a href="index.php?hal=data_ikm" class="btn btn-danger">No</a>
        </center>
        </div>
    </div>
  </div>
</div>




<div class="modal fade" id="delete-<?php echo $pecah['id_ikm']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Berita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <center>
          Apakah Anda Yakin Ingin Menghapus Data Ini!<br>
        <a href="index.php?hal=hapus_ikm&id=<?php echo $pecah['id_ikm']; ?>" class="btn-success btn">Yes</a>
        <a href="index.php?hal=data_ikm" class="btn btn-danger">No</a>
        </center>
        </div>
    </div>
  </div>
</div>


<div class="modal fade" id="edit-<?php echo $pecah['id_ikm']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit IKM</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Modal --> 
        <form action="index.php?hal=edit_ikm" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_ikm" value="<?php echo $pecah['id_ikm'] ?>">
          <label for="exampleInputEmail1">Nama IKM</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="nama_ikm" placeholder="Masukkan Nama IKM" value="<?php echo $pecah['nama_ikm']; ?>">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Nama Pemilik IKM</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="penanggung_jawab" placeholder="Masukkan Nama Pemilik IKM" value="<?php echo $pecah['penanggung_jawab']; ?>">
      </div>
       <div class="form-group">
        <label for="exampleInputPassword1">Nama Alamat IKM</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="alamat" placeholder="Masukkan Alamat IKM" value="<?php echo $pecah['alamat']; ?>">
      </div>
      <div class="form-row align-items-center">
    <div class="col-auto my-1">
       <label for="exampleInputPassword1">Jenis Produksi IKM</label>
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
      <select class="custom-select mr-sm-2" name="jenis_produksi" id="inlineFormCustomSelect">
       <option value="0" selected disabled="true">--Pilih Kategori Product--</option>
                     <?php 
                          $q_kategori = mysqli_query($koneksi,"SELECT*FROM jenis_produksi"); 
                           while ($data_kat = mysqli_fetch_array($q_kategori)) {
                     ?>
                      <option value="<?php echo $data_kat['jenis_produksi']; ?>"><?php echo $data_kat['jenis_produksi']; ?></option>
                       <?php } ?>
                      </select>
    </div></div>
     <div class="form-group">
        <label for="exampleInputPassword1">Bahan Baku Produksi</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="bahan_baku" placeholder="Masukkan Bahan Baku Produksi IKM" value="<?php echo $pecah['bahan_baku']; ?>">
      </div>
       <div class="form-group">
        <label for="exampleInputPassword1">Tahun Berdirinya IKM</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="tahun" placeholder="Masukkan tahun berdirinya IKM" value="<?php echo $pecah['tahun']; ?>">
      </div>
      <div class="form-row">
        <div class="col-4">
        <label for="exampleFormControlFile1">Surat Keterangan Kelurahan</label>
        <input type="file" class="form-control-file" name="surat_keterangan_kelurahan" id="exampleFormControlFile1" value="<?php echo $pecah['surat_keterangan_kelurahan'] ?>">
      </div>
      <div class="col-4">
        <label for="exampleFormControlFile1">Surat Nomor Izin Berusaha</label>
        <input type="file" class="form-control-file" name="nib" id="exampleFormControlFile1" value="<?php echo $pecah['nib'] ?>">
      </div>
      <div class="col-4">
        <label for="exampleFormControlFile1">Surat Izin Usaha Produk Atau Izin Usaha Industri</label>
        <input type="file" class="form-control-file" name="siup_iui" id="exampleFormControlFile1" value="<?php $pecah['siup_iui'] ?>">
      </div>

      <small id="emailHelp" class="form-text text-muted">*File yang dilampirkan berupa scan surat, max image 2mb</small>
    </div>
          
       <button type="submit" class="btn btn-primary">Submit</button>
        </form>
   

        </div>
        <div class="modal-footer">
      </div>
    </div>
  </div>
</div>


    <?php } ?>
  </tbody>
</table>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Data IKM</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Modal --> 
        <form action="index.php?hal=tambah_ikm" method="post" enctype="multipart/form-data">
          <div class="form-group">
        <label for="exampleInputEmail1">Nama IKM</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="nama_ikm" placeholder="Masukkan Nama IKM">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Nama Pemilik IKM</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="penanggung_jawab" placeholder="Masukkan Nama Pemilik IKM">
      </div>
       <div class="form-group">
        <label for="exampleInputPassword1">Nama Alamat IKM</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="alamat" placeholder="Masukkan Alamat IKM">
      </div>
      <div class="form-row align-items-center">
    <div class="col-auto my-1">
       <label for="exampleInputPassword1">Jenis Produksi IKM</label>
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
      <select class="custom-select mr-sm-2" name="jenis_produksi" id="inlineFormCustomSelect">
       <option value="0" selected disabled="true">--Pilih Kategori Product--</option>
                     <?php 
                          $q_kategori = mysqli_query($koneksi,"SELECT*FROM jenis_produksi"); 
                           while ($data_kat = mysqli_fetch_array($q_kategori)) {
                     ?>
                      <option value="<?php echo $data_kat['jenis_produksi']; ?>"><?php echo $data_kat['jenis_produksi']; ?></option>
                       <?php } ?>
                      </select>
    </div></div>
     <div class="form-group">
        <label for="exampleInputPassword1">Bahan Baku Produksi</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="bahan_baku" placeholder="Masukkan Bahan Baku Produksi IKM">
      </div>
      <div class="form-row">
        <div class="col-4">
        <label for="exampleFormControlFile1">Surat Keterangan Kelurahan</label>
        <input type="file" class="form-control-file" name="surat_keterangan_kelurahan" id="exampleFormControlFile1">
      </div>
      <div class="col-4">
        <label for="exampleFormControlFile1">Surat Nomor Izin Berusaha</label>
        <input type="file" class="form-control-file" name="nib" id="exampleFormControlFile1">
      </div>
      <div class="col-4">
        <label for="exampleFormControlFile1">Surat Izin Usaha Produk Atau Izin Usaha Industri</label>
        <input type="file" class="form-control-file" name="siup_iui" id="exampleFormControlFile1">
      </div>

      <small id="emailHelp" class="form-text text-muted">*File yang dilampirkan berupa scan surat, max image 2mb</small>
    </div>
          </div>
          
       <button type="submit" class="btn btn-primary">Submit</button>
        </form>
   

        </div>
        <div class="modal-footer">
      </div>
    </div>
  </div>
</div>


  <script type="text/javascript">
  $(document).ready(function() {
    $('#table_berita').DataTable();
} );

</script>

