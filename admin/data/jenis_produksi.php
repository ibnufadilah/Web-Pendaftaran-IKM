<h2>Data Jenis Produksi</h2>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cetak">
  Add Jenis Produksi
</button><br><br>
<div class="table-responsive">
<table id="table_berita" class="table table-striped table-bordered responsive">
  <thead>
    <tr>
      <th>No</th>
      <th>Jenis Produksi</th>
      <th>Aksi</th>
    </tr>
  </thead>

  <tbody>
    <?php $nomor=1; ?>
    <?php $ambil=$koneksi->query(" SELECT * FROM jenis_produksi order by id_produksi DESC"); ?>
    <?php while($pecah=$ambil->fetch_assoc()) { ?>
    <tr>
      <td> <?php echo $nomor; ?></td>
      <td> <?php echo $pecah['jenis_produksi']; ?></td>
      
     
           
      <td>
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit-<?php echo $pecah['id_produksi']; ?>">
          Edit
        </button> || 
        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-<?php echo $pecah['id_produksi']; ?>">
          Delete
        </button>
      </td>
    </tr>
    <?php $nomor++ ?>


<div class="modal fade" id="delete-<?php echo $pecah['id_produksi']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <a href="index.php?hal=hapus_produksi&id=<?php echo $pecah['id_produksi']; ?>" class="btn-success btn">Yes</a>
        <a href="index.php?hal=jenis_produksi" class="btn btn-danger">No</a>
        </center>
        </div>
    </div>
  </div>
</div>


<div class="modal fade" id="edit-<?php echo $pecah['id_produksi']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Jenis Produksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Modal --> 
        <form action="index.php?hal=edit_produksi" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_produksi" value="<?php echo $pecah['id_produksi'] ?>">
          <div class="form-group">
            <label for="usr">Judul</label>
            <input type="text" class="form-control" id="usr" name="jenis_produksi" value="<?php echo $pecah['jenis_produksi']; ?>">
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

<div class="modal fade" id="cetak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Jenis Produksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Modal --> 
        <form action="index.php?hal=tambah_produksi" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="usr">Jenis Produksi</label>
            <input type="text" class="form-control" id="usr" name="jenis_produksi">
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

