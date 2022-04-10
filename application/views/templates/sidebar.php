<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                <i class="fa-solid fa-store"></i>
                </div>
                <div class="sidebar-brand-text mx-3"> TOKO ONLINE</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('dashboard')?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


<!-- ___________________________________________________________________________________________________________________________________________ -->


            <!-- DISINI KALAU MAU GANTI KATEGORI BARANG YANG MAU DIJUAL -->
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
               KATEGORI
            </div>

            <!-- Nav Item - elektronik -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/elektronik')?>">
                    <i class="fas fa-fw fa-tv"></i>
                    <span>Elektronik</span></a>
            </li>

            <!-- Nav Item - Pakaian -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/pakaian')?>">
                    <i class="fas fa-fw fa-tshirt"></i>
                    <span>Pakaian</span></a>
            </li>

            <!-- Nav Item - Alat mandi  -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/alat_mandi')?>">
                    <i class="fas fa-fw fa-soap"></i>
                    <span>Alat mandi </span></a>
            </li>

            <!-- Nav Item - Pakaian Anak -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/pakaian_anak')?>">
                    <i class="fas fa-fw fa-tshirt"></i>
                    <span>Pakaian Anak</span></a>
            </li>

            
            <!-- Nav Item - Peralatan olahraga  -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/peralatan_olahraga')?>">
                    <i class="fas fa-fw fa-futbol"></i>
                    <span>Peralatan Olahraga</span></a>
            </li>


<!-- ___________________________________________________________________________________________________________________________________________ -->


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav chart -->

                        <div class="navbar">

                            <ul class="nav navbar-nav navbar-right mr-2">
                                <li>
                                    <?php echo anchor('dashboard/detail_keranjang',$keranjang = 'Keranjang Belanja: ' .$this->cart->total_items(). 'items') ?>
                                    <!-- detail_keranjang : method -->
                                   
                                </li>
                            </ul> | 
                            <!-- Nav Item - User Information -->
                            <ul class="na navbar-nav navbar-right ml-2">
                            <?php if($this->session->userdata('username')) { ?>
                                <li><div class="mr-2"><h7>Selamat Datang</h4> <?php echo $this->session->userdata('username') ?></div></li> | 
                                <li class="ml-2"><?php echo anchor('auth/logout','logout') ?></li>
                                
                                <!-- Artinya kalau sudah login akan muncul selamat datang, dan ada option logout -->
                                <!-- Nanti mengambil data dari yang didatabase, sesuai dengan yang kita masukin disana -->

                                <?php } else {?>
                                    <li><?php echo anchor('auth/login', 'Login'); ?></li>
                                <?php } ?>    

                            </ul>
                            </div>

                             





                        

                       

                    </ul>

                </nav>
                <!-- End of Topbar -->