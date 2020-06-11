<div class="container-fluid">
    <h4>Detail Pesanan <div class="btn btn-sm btn-warning">No. Invoice: <?php echo $invoice->id?> </div></h4>
    
    <!-- table detail invoice -->
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Barang</th>
            <th>Nama Barang</th>
            <th>Jumlah Pesanan</th>
            <th>Harga Satuan</th>
            <th>Sub-Total</th>

        </tr>

        <?php 
            $total = 0;

            if(is_array($pesanan) || is_object($pesanan)){

            foreach($pesanan as $psn){ 
                $subtotal = $psn->jumlah * $psn->harga; 
                $total += $subtotal; ?>
            <tr>
                <td><?php echo $psn->id_barang?></td>
                <td><?php echo $psn->nama_barang?></td>
                <td><?php echo $psn->jumlah?></td>
                <td align="right"><?php echo number_format($psn->harga,0,',','.') ?></td>
                <td align="right"><?php echo number_format($subtotal,0,',','.') ?></td>
            </tr>

            <?php }}?>

            <tr>
                <td colspan="4" align="right">Grand Total</td>
                <td align="right">Rp. <?php echo number_format($total,0,',','.')?></td>
            </tr>

    </table>
    <!-- table detail invoice -->

    <a href="<?php echo base_url('admin/invoice/index') ?>"><div class="btn btn-sm btn-danger">Kembali</div></a>
</div>