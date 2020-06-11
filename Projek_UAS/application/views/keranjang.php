<div class="container-fluid">

    <!-- table detail keranjang -->
    </i><h4>Keranjang Belanja</h4>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Sub Total</th>
        </tr>
    
        <?php
            $no=1;
            foreach($this->cart->contents() as $items) : ?>

                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $items['name'] ?></td>
                    <td><?php echo $items['qty'] ?></td>
                    <td align="right">Rp. <?php echo number_format($items['price'], 0,',','.') ?></td>
                    <td align="right">Rp. <?php echo number_format($items['subtotal'], 0,',','.') ?></td>
                </tr>
        <?php endforeach;?>

                <tr>
                    <td colspan="4"></td>
                    <td align="right">Rp. <?php echo number_format($this->cart->total(), 0,',','.')?></td>
                </tr>    
    </table>

    <!--  aksi -->
    <div align="right">
        <a href="<?php echo base_url('dashboard/hapus_keranjang')?>">
            <div class="btn btn-sm btn-danger">Hapus Keranjang</div>
        </a>
        <a href="<?php echo base_url('welcome')?>">
            <div class="btn btn-sm btn-primary">Lanjut Berbelanja</div>
        </a>
        <a href="<?php echo base_url('dashboard/pembayaran')?>">
            <div class="btn btn-sm btn-warning">Pembayaran</div>
        </a>
    </div>
    <!--  aksi -->
    <!-- end table detail keranjang -->


</div>