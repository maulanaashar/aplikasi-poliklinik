<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p><?php echo $this->session->userdata('nameuser'); ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="<?php echo site_url('dashboard'); ?>">
                    <i class="fa fa-dashboard"></i> <span>Main menu</span>
                </a>
            </li>
            <?php if ($this->session->userdata('aksesstatus') === 1): ?>
            <li class="treeview">
                <a href="<?php echo site_url('info'); ?>">
                    <i class="fa fa-database"></i> <span>Informasi</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-database"></i> <span>Data master</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('datamaster/data_obat'); ?>"><i class="fa fa-circle-o"></i> Data obat</a></li>
                    <li><a href="<?php echo site_url('datamaster/data_pasien'); ?>"><i class="fa fa-circle-o"></i> Data pasien</a></li>
                    <li><a href="<?php echo site_url('datamaster/data_dokter'); ?>"><i class="fa fa-circle-o"></i> Data dokter</a></li>
                    <li><a href="<?php echo site_url('datamaster/data_poliklinik') ?>"><i class="fa fa-circle-o"></i> Data polilinik</a></li>
                    <li><a href="<?php echo site_url('datamaster/data_pendaftar') ?>"><i class="fa fa-circle-o"></i> Data pendaftar</a></li>
                </ul>
            </li>
            
            <?php endif; ?>
            
            <?php  if ($this->session->userdata('aksesstatus') === 1 || $this->session->userdata('aksesstatus') == 3):?>
            <li class="treeview">
                <a href="<?php echo site_url('pembayaran'); ?>">
                    <i class="fa fa-credit-card-alt"></i> <span>Pembayaran</span>
                </a>
            </li>
            <?php endif; ?>
            
            <?php if ($this->session->userdata('aksesstatus') === 1 || $this->session->userdata('aksesstatus') === 3): ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Apotoker</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('apoteker') ?>"><i class="fa fa-circle-o"></i> Kelola resep</a></li>
                </ul>
            </li>
            <?php endif; ?>
            
            <?php if ($this->session->userdata('aksesstatus') === 2): ?>
            <li class="treeview">
                <a href="<?php echo site_url('dokter'); ?>">
                    <i class="fa fa-dashboard"></i> <span>Dokter</span>
                </a>
            </li>
            <?php endif; ?>
            <li class="treeview">
                <a href="<?php echo site_url('auth/logout'); ?>">
                    <i class="fa fa-dashboard"></i> <span>Logout</span>
                </a>
            </li>

    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
