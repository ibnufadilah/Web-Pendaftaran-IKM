<h2>Laporan IKM Yang Telah Terbina Oleh Disperindag</h2>

<a href="" class="btn btn-primary btn-md header_kanan" 
onclick="window.open('data/cetak_laporan.php', 'newwindow','width=800,height=500'); 
              return false;">
<span class="fa fa-print fa-fw"></span>Cetak Kartu</a>

 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Cetak Laporan
                </button>    
<br><br>
<!-- Button trigger modal -->
<br><br>

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
      <th>Surat Keterangan Kelurahan</th>
      <th>NIB</th>
      <th>SIUP atau IUI</th>
      <th>Status</th>
 
 
    </tr>
  </thead>

  <tbody>
    <?php $nomor=1; ?>
    <?php $ambil=$koneksi->query(" SELECT * FROM ikm where status = 'IKM dibina Oleh Disperindag'"); ?>
    <?php while($pecah=$ambil->fetch_assoc()) { ?>
    <tr>
      <td> <?php echo $nomor; ?></td>
      <td> <?php echo $pecah['nama_ikm']; ?></td>
      <td> <?php echo $pecah['penanggung_jawab']; ?></td>
      <td> <?php echo $pecah['alamat']; ?></td>
      <td> <?php echo $pecah['jenis_produksi']; ?></td>
      <td> <?php echo $pecah['bahan_baku']; ?></td> 
           <td>
             <a href="#" data-toggle="modal" data-target="#detail-transaksi">
           <img src="../img/sk/<?php echo $pecah['surat_keterangan_kelurahan']; ?>" width="100px" height="100px">
          </a>
        
      </td>
      <td>
        <img src="../img/nib/<?php echo $pecah['nib']; ?>" width="100px" height="100px">
      </td>
      <td>
        <img src="../img/siup_iui/<?php echo $pecah['siup_iui']; ?>" width="100px" height="100px">
      </td>
        <td>
       

         <?php echo $pecah['status']; ?>

          </td>
       
     
    </tr>
    <?php $nomor++ ?>



<div class="modal fade" id="cetak-<?php echo $pecah['id_ikm']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cetak Laporan IKM dibina oleh Disperindag</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <center>
          Apakah Anda Yakin Ingin Menghapus Data Ini!<br>
        <a href="index.php?hal=cetak_laporan&id=<?php echo $pecah['id_ikm']; ?>" class="btn-success btn">Yes</a>
        <a href="index.php?hal=laporan_kasi" class="btn btn-danger">No</a>
        </center>
        </div>
    </div>
  </div>
</div>

<div id="detail-transaksi" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Bukti Transaksi</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        
        <img src="../img/sk/<?php echo $pecah['surat_keterangan_kelurahan']; ?>" width="500px" height="500px">
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
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="post" action="data/cetak_laporan.php" target="_blank">
                <label>PILIH TAHUN</label>
                <input type="year" name="tahun">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Cetak Laporan</button>
      </div>
      </form>
    </div>
  </div>
</div>         
          

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

