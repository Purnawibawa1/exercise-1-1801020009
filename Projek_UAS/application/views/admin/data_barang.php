<div class="container-fluid">

    <!-- table data barang -->
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm "></i> Tambah Barang</button>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Keterangan</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th colspan="3">Aksi</th>
        </tr>

        <?php
            $no=1;
            foreach($barang as $brg) : ?>
                <tr>
                    <td><?php echo $no++ ?> </td>
                    <td><?php echo $brg->nama_barang ?></td>
                    <td><?php echo $brg->keterangan ?></td>
                    <td><?php echo $brg->kategori ?></td>
                    <td><?php echo $brg->harga ?></td>
                    <td><?php echo $brg->stok ?></td>
                    <td><?php echo anchor('admin/data_barang/detail_admin/' .$brg->id_barang, '<div class="btn btn-sm btn-info"><i class="fas fa-search-plus"></i></div>') ?></td>
                    <td><?php echo anchor('admin/data_barang/edit/' .$brg->id_barang, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>')?></td>
                    <td><?php echo anchor('admin/data_barang/hapus/' .$brg->id_barang, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?></td>
                </tr>
        

        <?php
            endforeach;  
        ?>
    
    </table>
    <!-- end table data barang -->


</div>

<!-- Modal Form Data Barang -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url(). 'admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control">
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <select  name="kategori" class="form-control">
                    <option>Pilih Kategori...</option>
                    <option>Headphone dan Headset</option>
                    <option>Earphone</option>
                    <option>Speaker</option>
                    <option>Kabel dan Konektor Audio</option>
                    <option>Mic Audio</option>
                </select>
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control">
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control">
            </div>
            <div class="form-group">
                        <label for="gambar">Gambar</label><br>
                        <input type="file" name="gambar" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>

    </div>
  </div>
</div>