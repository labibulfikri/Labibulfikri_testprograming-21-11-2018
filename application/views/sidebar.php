 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
 <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> Kasir </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
     
        
        <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Admin</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Pasien</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('ct_pasien')?>"><i class="fa fa-circle-o"></i> Lihat Pasien </a></li>
            <li><a href="<?php echo base_url('ct_pasien/tambah')?>"><i class="fa fa-circle-o"></i> Tambah Pasien </a></li>
          </ul>
        </li>
        </ul>

    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Pasien Rawat Jalan</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Data Pasien Rawat Jalan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('ct_pasien_rawat')?>"><i class="fa fa-circle-o"></i> Lihat Pasien Rawat Jalan </a></li>
            <li><a href="<?php echo base_url('ct_pasien_rawat/tambah'); ?>"><i class="fa fa-circle-o"></i> Tambah Pasien </a></li>
          </ul>
        </li>
        </ul>


    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Pembayaran</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Data Pembayaran</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=admin"><i class="fa fa-circle-o"></i> Lihat Pembayaran </a></li>
            <li><a href="<?php echo base_url('v_tambah'); ?>"><i class="fa fa-circle-o"></i> Tambah Data Pembayaran </a></li>
          </ul>
        </li>
        </ul>


</section>
</aside>