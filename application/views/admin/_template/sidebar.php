  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

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
  <a class="nav-link" href="<?php echo base_url('Data_barang');?>">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Daftar Barang</span></a>
</li>
<!-- Nav Item - Charts -->
<?php echo '<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-fw fa-cog"></i>
    <span>Data Pengguna</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Daftar Pengguna:</h6>
      <a class="collapse-item" href="'.base_url('admin/data_admin').'">Data Admin</a>
      <a class="collapse-item" href="'.base_url('customer').'">Data User</a>
   
    </div>
  </div>
</li>';?>


<?php echo'
 <li class="nav-item">
  <a class="nav-link" href="'.base_url('validasi/index').'">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Pengiriman</span></a>
</li>
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-fw fa-cog"></i>
    <span>Data Distribusi</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header"></h6>
      <a class="collapse-item" href="'.base_url('bantuan/profil').'">Data Kurir</a>
      <a class="collapse-item" href="'.base_url('bantuan/syarat').'">Data Kendaraan</a>
      <a class="collapse-item" href="'.base_url('bantuan/pembayaran').'">Data Pelanggan</a>
    </div>
  </div>
</li>
</li>';?>


<!-- Nav Item - Pages Collapse Menu -->
<?php echo '<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-fw fa-cog"></i>
    <span>Tracking</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header"></h6>
      <a class="collapse-item" href="'.base_url('admin').'">Maps</a>
      <a class="collapse-item" href="'.base_url('customer').'">Lacak Lokasi</a>
   
    </div>
  </div>
</li>';?>

<?php echo'
 <li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-fw fa-cog"></i>
    <span>Bantuan</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header"></h6>
      <a class="collapse-item" href="'.base_url('bantuan/profil').'"></a>
      <a class="collapse-item" href="'.base_url('bantuan/syarat').'"></a>
      <a class="collapse-item" href="'.base_url('bantuan/pembayaran').'"></a>
    </div>
  </div>
</li>
</li>';?>

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
  <?php echo '<li class="nav-item">
  <a class="nav-link" href="'.base_url('saran').'">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Data Saran</span></a>
</li>';?>
  


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->