<h2>Data User</h2>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Berita
</button><br><br> -->

<table id="table_berita" class="table table-striped table-bordered responsive">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Lengkap</th>
      <th>NIK</th>
      <th>E-mail</th>
      <th>NPWP</th>
      <th>Jenis Kelamin</th>
      <th>Alamat</th>
      <th>Aksi</th>
    </tr>
  </thead>

  <tbody>
    <?php $nomor=1; ?>
    <?php $ambil=$koneksi->query(" SELECT * FROM user order by id_user DESC"); ?>
    <?php while($pecah=$ambil->fetch_assoc()) { ?>
    <tr>
      <td> <?php echo $nomor; ?></td>
      <td> <?php echo $pecah['nama_lengkap']; ?></td>
      <td> <?php echo $pecah['nik']; ?></td>
      <td> <?php echo $pecah['email']; ?></td>
      <td> <?php echo $pecah['npwp']; ?></td>
      <td> <?php echo $pecah['jenis_kelamin']; ?></td>
      <td> <?php echo $pecah['alamat']; ?></td> 
           
      <td>
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit-<?php echo $pecah['id_user']; ?>">
          Edit
        </button> || 
        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-<?php echo $pecah['id_user']; ?>">
          Delete
        </button>
      </td>
    </tr>
    <?php $nomor++ ?>


<div class="modal fade" id="delete-<?php echo $pecah['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <a href="index.php?hal=hapus_user&id=<?php echo $pecah['id_user']; ?>" class="btn-success btn">Yes</a>
        <a href="index.php?hal=data_user" class="btn btn-danger">No</a>
        </center>
        </div>
    </div>
  </div>
</div>


<div class="modal fade" id="edit-<?php echo $pecah['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Modal --> 
        <form action="index.php?hal=edit_user" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_user" value="<?php echo $pecah['id_user'] ?>">
          <div class="form-group">
            <label for="usr">Nama Lengkap</label>
            <input type="text" class="form-control" id="usr" name="nama_lengkap" value="<?php echo $pecah['nama_lengkap']; ?>">
          </div>
          <div class="form-group">
            <label for="usr">NIK</label>
            <input type="text" class="form-control" id="usr" name="nik" value="<?php echo $pecah['nik']; ?>">
          </div>
          <div class="form-group">
            <label for="usr">E-Mail</label>
            <input type="text" class="form-control" id="usr" name="email" value="<?php echo $pecah['email']; ?>">
          </div>
          <div class="form-group">
            <label for="usr">Password</label>
            <input type="Password" class="form-control" id="usr" name="password" value="<?php echo $pecah['password']; ?>">
          </div>
          <div class="form-group">
            <label for="usr">NPWP</label>
            <input type="text" class="form-control" id="usr" name="npwp" value="<?php echo $pecah['npwp']; ?>">
          </div>
          <div class="form-group">
            <label for="usr">Jenis Kelamin</label>
            <input type="text" class="form-control" id="usr" name="jenis_kelamin" value="<?php echo $pecah['jenis_kelamin']; ?>">
          </div>
          <div class="form-group">
            <label for="usr">Alamat</label>
            <input type="text" class="form-control" id="usr" name="alamat" value="<?php echo $pecah['alamat']; ?>">
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


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Berita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Modal --> 
        <form action="index.php?hal=tambahberita" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="usr">Judul</label>
            <input type="text" class="form-control" id="usr" name="judul">
          </div>
          <div class="form-group">
            <label for="usr">Tanggal</label>
            <input type="date" class="form-control" id="usr" name="tgl">
          </div>
          <div class="form-group">
            <label for="usr">Isi</label>
            <textarea class="form-control" name="isi" ></textarea>
          </div>
          <div class="form-group">
            <label for="usr">Gambar</label>
            <input type="file" class="form-control" id="usr" name="gambar">
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

