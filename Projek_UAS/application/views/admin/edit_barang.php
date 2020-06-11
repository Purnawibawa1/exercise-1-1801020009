<div class="container-fluid">


    <h3><i class="fas fa-edit"></i>Edit Data Barang</h3>
    <?php foreach($barang as $brg) : ?>
        
        <!-- form edit barang -->
        <form method="post" action="<?php echo base_url(). 'admin/data_barang/update'?>" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" value="<?php echo $brg->nama_barang ?>">
            </div>

            <div class="form-group">
                <label>Keterangan</label>
                <input type="hidden" name="id_barang" class="form-control" value="<?php echo $brg->id_barang ?>">
                <input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <select  name="kategori" class="form-control" value="<?php echo $brg->kategori ?>">
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
                <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
            </div>

            <div class="form-group">
                <labe>Stok</label>
                <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
            </div>

            <div class="form-group">
                <label>Gambar</label><br>
                <input type="file" name="gambar" class="form-control" value="<?php echo $brg->gambar?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-1">Simpan</button>
        </form>
            <!-- end form edit barang -->
    
    <?php endforeach; ?>
</div>