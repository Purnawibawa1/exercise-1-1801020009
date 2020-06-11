<body id="page-top">


  <div id="wrapper">

    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

        <!-- navbar-->
        <nav class="navbar navbar-expand navbar-light bg-gradient-success topbar mb-4 static-top shadow ">
          
          <!-- navbar kiri -->
          <nav class="navbar navbar-expand-lg">

          <!-- navbar judul -->
          <a class="navbar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('welcome')?>">
            <div class="navbar-brand-icon">
                <i class="fab fa-strava text-white "></i>
            </div>
            <div class="navbar-brand-text mx-3 text-white font-weight-bolder">Ady's Audio Store</div>
          </a>

          <!-- navbar biasa -->
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link text-light" href="<?php echo base_url('welcome')?>">Beranda </a>
                </li>
                <li class="nav-item dropdown ">
                  <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Kategori
                  </a>
                  <div class="dropdown-menu bg-gradient-success" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item bg-success" href="<?php echo base_url('welcome')?>">
                    <i class="fas fa-home mr-2"></i>
                    <span>Semua Kategori...</span></a>
                    <a class="dropdown-item bg-success" href="<?php echo base_url('kategori/headphone_dan_headset')?>">
                    <i class="fas fa-headphones mr-2"></i>
                    <span>Headphone</span></a>
                    <a class="dropdown-item bg-success" href="<?php echo base_url('kategori/earphone')?>">
                    <i class="fas fa-headset mr-2"></i>
                    <span>Earphone</span> </a>
                    <a class="dropdown-item bg-success" href="<?php echo base_url('kategori/speaker')?>">
                    <i class="fas fa-volume-up mr-2"></i>
                    <span>Speaker</span> </a>
                    <a class="dropdown-item bg-success" href="<?php echo base_url('kategori/kabel_dan_konektor_audio')?>">
                    <i class="fas fa-ethernet mr-2"></i>
                    <span>Kabel Audio</span> </a>
                    <a class="dropdown-item bg-success" href="<?php echo base_url('kategori/mic_audio')?>">
                    <i class="fas fa-microphone mr-2"></i>
                    <span>Mic Audio</span></a>
                </li>
              </ul>
            </div>
          
          </nav>
          <!-- end navbar judul -->
          <!-- navbar biasa -->
          <!-- end navbar kiri -->

          <!-- nav keranjang & login -->
          <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>

              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Navbar keranjang -->
            <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
              <div class="navbar">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                  <i class="fas fa-shopping-cart text-white"></i><?php $keranjang = '<span class=" text-white text-decoration-none">Keranjang Belanja: ' .$this->cart->total_items(). ' items' ?>
                    <?php echo anchor('dashboard/detail_keranjang', $keranjang) ?>                  
                  </li>
                </ul>
              </div>
            </ul>
          <!-- end navbar keranjang -->

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <ul class="nav navbar-nav navbar-right">
                <?php if($this->session->userdata('username')){ ?>
                  <li><div class="text-white mt-2">Selamat Datang <?php echo $this->session->userdata('username')?></div></li>
                  <button class="btn btn-primary ml-3"><?php echo anchor('auth/logout', '<span class="text-white text decoration none">Logout</span>')?></button>

                <?php } else {?>
                  <button class="btn btn-primary ml-3"><?php echo anchor('auth/login', '<span class="text-white text decoration none">Login</span>');?></button>

                <?php }?>    
            </ul>

          </ul>
          <!-- end nav keranjang & login -->


        </nav>
        <!-- End of nav -->
