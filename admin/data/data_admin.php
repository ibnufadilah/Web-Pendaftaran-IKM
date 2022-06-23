<h2>Data Admin</h2>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Admin
</button><br><br>

<table id="table_berita" class="table table-striped table-bordered responsive">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Lengkap</th>
      <th>Username</th>
      
      <th>Aksi</th>
    </tr>
  </thead>

  <tbody>
    <?php $nomor=1; ?>
    <?php $ambil=$koneksi->query(" SELECT * FROM admin order by id_admin DESC"); ?>
    <?php while($pecah=$ambil->fetch_assoc()) { ?>
    <tr>
      <td> <?php echo $nomor; ?></td>
      <td> <?php echo $pecah['nama']; ?></td>
      <td> <?php echo $pecah['username']; ?></td>
     
           
      <td>
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit-<?php echo $pecah['id_admin']; ?>">
          Edit
        </button> || 
        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-<?php echo $pecah['id_admin']; ?>">
          Delete
        </button>
      </td>
    </tr>
    <?php $nomor++ ?>


<div class="modal fade" id="delete-<?php echo $pecah['id_admin']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <center>
          Apakah Anda Yakin Ingin Menghapus Data Ini!<br>
        <a href="index.php?hal=hapus_admin&id=<?php echo $pecah['id_admin']; ?>" class="btn-success btn">Yes</a>
        <a href="index.php?hal=data_admin" class="btn btn-danger">No</a>
        </center>
        </div>
    </div>
  </div>
</div>


<div class="modal fade" id="edit-<?php echo $pecah['id_admin']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Modal --> 
        <form action="index.php?hal=edit_admin" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_admin" value="<?php echo $pecah['id_admin'] ?>">
          <div class="form-group">
            <label for="usr">Nama Lengkap</label>
            <input type="text" class="form-control" id="usr" name="nama" value="<?php echo $pecah['nama']; ?>">
          </div>
          <div class="form-group">
            <label for="usr">Username</label>
            <input type="text" class="form-control" id="usr" name="username" value="<?php echo $pecah['username']; ?>">
          </div>
          <div class="form-group">
            <label for="usr">Password</label>
            <input type="password" class="form-control" id="usr" name="password" >
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Modal --> 
        <form action="index.php?hal=tambah_admin" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="usr">Nama Lengkap</label>
            <input type="text" class="form-control" id="usr" name="nama">
          </div>
          <div class="form-group">
            <label for="usr">Username</label>
            <input type="text" class="form-control" id="usr" name="username">
          </div>
          <div class="form-group">
            <label for="usr">Password</label>
            <input type="Password" class="form-control" name="password">
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

