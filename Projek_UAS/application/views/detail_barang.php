<div class="conatiner-fluid">

    <!-- detail barang -->
    <div class="card">
        <h5 class="card-header">Detail Barang</h5>
            <div class="card-body">
                <?php foreach($barang as $brg): ?>        
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" height="250">
                        </div>    
                        <div class="col-md-8">
                            <table class="table">
                                <tr>
                                    <td>Nama Barang</td>
                                    <td><strong><?php echo $brg->nama_barang ?></strong></td>
                                </tr>

                                <tr>
                                    <td>Keterangan</td>
                                    <td><strong><?php echo $brg->keterangan ?></strong></td>
                                </tr>
                                
                                <tr>
                                    <td>Kategori</td>
                                    <td><strong><?php echo $brg->kategori ?></strong></td>
                                </tr>

                                <tr>
                                    <td>Stok</td>
                                    <td><strong><?php echo $brg->stok ?></strong></td>
                                </tr>

                                <tr>
                                    <td>Harga</td>
                                    <td><strong><div class="btn btn-sm btn-info">Rp. <?php echo number_format($brg->harga,0,',','.')  ?></div></strong></td>
                                </tr>
                                
                            </table>

                            <!-- aksi -->
                            <?php echo anchor('dashboard/tambah_keranjang/' .$brg->id_barang, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                            <?php echo anchor('welcome', '<div class="btn btn-sm btn-danger">Kembali</div>') ?>
                            <!-- end aksi -->


                        </div>
            </div>
                <?php endforeach;?>
                </div>    
    </div>
    <!-- end detail barang -->

</div>