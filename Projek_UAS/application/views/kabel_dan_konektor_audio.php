<div class="container-fluid">

<!-- image header -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active mt-1">
                <img src="<?php echo base_url(). '/assets/img/slidebar1.png'?>" class="d-block w-100 height-50" alt="...">
            </div>
        <div class="carousel-item">
            <img src="<?php echo base_url(). '/assets/img/slidebar2.png'?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url(). '/assets/img/slidebar3.png'?>" class="d-block w-100" alt="...">
        </div>
    </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
    </a>
    </div>
    <!-- end image header -->

    <!-- card barang -->
    <div class="row text-center mt-3">
        <?php foreach ($kabel_dan_konektor_audio as $brg) :  ?>
            <div class="card ml-3 mb-3" style="width: 16rem;">
                <img src="<?php echo base_url(). '/uploads/' .$brg->gambar  ?>" class="card-img-top " alt="...">
            <div class="card-body">
                <h5 class="card-title mb-1"><?php echo $brg->nama_barang ?></h5>
                <small><?php echo $brg->keterangan ?></small><br>
                <span class="badge badge-info mb-3">Rp. <?php echo number_format($brg->harga, 0,',','.') ?></span><br>
                <?php echo anchor('dashboard/tambah_keranjang/' .$brg->id_barang, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                <?php echo anchor('dashboard/detail/' .$brg->id_barang, '<div class="btn btn-sm btn-info">Detail</div>') ?>
            </div>        
    </div>
        <?php endforeach; ?>
    </div>
    <!-- end card barang -->


</div>

<!-- top scroll -->
<div class="text-right mr-4 mt-4">
<a id="back-to-top" href="" class="btn btn-right btn-primary btn-lg back-to-top text-white" role="button">Back to Top<i class="fas fa-chevron-up ml-2"></i></a>
</div>
<!-- end top scroll -->