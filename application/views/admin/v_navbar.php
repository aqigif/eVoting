
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url('admin/dashboard_admin');?>" class="nav-link <?php if($this->uri->segment(1)=='dashboard_admin'){echo 'active';}
              else if($this->uri->segment(1)==''){echo 'active';}?>">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url('admin/suara_admin');?>" class="nav-link <?php if($this->uri->segment(1)=='suara_admin'){echo 'active';}?>">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Suara
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url('admin/kandidat_admin');?>" class="nav-link <?php if($this->uri->segment(1)=='kandidat_admin'){echo 'active';}?>">
              <i class="nav-icon fa fa-user-circle"></i>
              <p>
                Kandidat
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="<?php echo base_url('admin/pemilih_admin');?>" class="nav-link <?php if($this->uri->segment(1)=='pemilih_admin'){echo 'active';}?>">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Pemilih
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="<?php echo base_url('admin/admin_admin');?>" class="nav-link <?php if($this->uri->segment(1)=='admin_admin'){echo 'active';}?>">
              <i class="nav-icon fa fa-laptop"></i>
              <p>
                Admin
              </p>
            </a>
          </li>

          <!-- <li class="nav-item">
            <a href="<?php echo base_url('admin/laporan_admin');?>" class="nav-link <?php if($this->uri->segment(1)=='laporan_admin'){echo 'active';}?>">
              <i class="nav-icon fa fa-file"></i>
              <p>
                Laporan
              </p>
            </a>
          </li> -->

          <li class="nav-item">
            <a href="<?php echo base_url('admin/login_admin/logout');?>" class="nav-link <?php if($this->uri->segment(1)=='login_admin'){echo 'active';}?>">
              <i class="nav-icon fa fa-sign-out"></i>
              <p>
                Log out
              </p>
            </a>
          </li>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
