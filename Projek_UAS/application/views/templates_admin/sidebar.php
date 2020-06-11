<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar Judul -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('admin/data_barang') ?>">
        <div class="sidebar-brand-icon">
            <i class="fab fa-strava"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Ady's Store Audio Admin</div>
      </a>

      <!-- garis -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item Data Barang -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/data_barang') ?>">
            <i class="fas fa-database"></i>
            <span>Data Barang</span></a>
      </li>

      <!-- Nav Item Invoice  -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/invoice') ?>">
            <i class="fas fa-file-invoice"></i>
            <span>Invoice</span></a>
      </li>
    
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Navbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          
            <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Login -->
            <ul class="nav navbar-nav navbar-right">
                <?php if($this->session->userdata('username')){ ?>
                  <li><div class="mt-2">Selamat Datang <?php echo $this->session->userdata('username')?></div></li>
                  <button class="btn btn-primary ml-3"><?php echo anchor('auth/logout', '<span class="text-white text decoration none">Logout</span>')?></button>

                <?php } else {?>
                  <button class="btn btn-primary ml-3"><?php echo anchor('auth/login', '<span class="text-white text decoration none">Login</span>');?></button>

                <?php }?>    
            </ul>

          </ul>

        </nav>
        <!-- Navbar -->
