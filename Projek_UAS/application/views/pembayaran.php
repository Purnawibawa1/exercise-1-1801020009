<div class="containe-fluid">
    <!-- form pembayaran -->
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-warning">
                <?php
                    $grand_total = 0;
                    if($keranjang = $this->cart->contents()){
                        foreach($keranjang as $item){
                            $grand_total = $grand_total + $item['subtotal'];
                        }
                    

                        echo "<h5>Total Belanja Anda: Rp.".number_format($grand_total,0,',','.');
                    ?>
            </div><br><br>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>

            <form method="post" action="<?php echo base_url('dashboard/proses_pesanan') ?>">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control"> 
                </div>

                <div class="form-group">
                    <label>No. Telepon</label>
                    <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
                </div>

                <div class="form-group" >
                    <label>Jasa Pengiriman</label>
                    <select name="jasa_kirim" class="form-control" >
                        <option>Pilih Jasa Pengiriman...</option>
                        <option>JNE</option>
                        <option>TIKI</option>
                        <option>Pos Indonesia</option>
                        <option>Gojek</option>
                        <option>Grab</option>
                    </select> 
                </div>
                    <button type="submit" class="btn btn-sm btn-primary mb-4" >Pesan</button>
            </form>
            <?php
            }else{
                echo "<h5>Keranjang Belanja Anda Masih Kosong";
            }
            ?>
        </div>

        <div class="col-md-2"></div>
    </div>
    <!-- end form pembayaran -->

</div>