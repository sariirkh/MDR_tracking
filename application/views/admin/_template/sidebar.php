  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">MDR-Tracking</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">


<!-- Divider -->
<hr class="sidebar-divider">



<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Data Perusahaan
</div>
<!-- Nav Item - Pages Collapse Menu -->
<!-- Nav Item - Charts -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url('dashboard');?>">
    <i class="fas fa-fw fa fa-home"></i>
    <span>Dashboard</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url('rute');?>">
    <i class="fas fa-fw fa fa-map-marker"></i>
    <span>Request Rute</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url('Data_kendaraan');?>">
    <i class="fas fa-fw fa fa-truck"></i>
    <span>Kendaraan</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url('History');?>">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>History</span></a>
</li>


<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url('admin');?>">
    <i class="fas fa-fw fa fa-users"></i>
    <span>Data Admin</span></a>
</li>


<!-- Nav Item - Charts -->
<?php //echo '<li class="nav-item">
  //<a class="nav-link" href="'.base_url('admin/getPaket').'">
    //<i class="fas fa-fw fa-chart-area"></i>
    //<span>Data Paket Tour</span></a>
//</li>';?>

<!-- Nav Item - Charts -->
<?php //echo '<li class="nav-item">
  //<a class="nav-link" href="'.base_url('request/dtrequest').'">
    //<i class="fas fa-fw fa-chart-area"></i>
    //<span>Data Request Paket Tour</span></a>
//</li>';?> 

  <!-- Nav Item - Charts -->



<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->