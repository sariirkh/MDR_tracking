<?php 
// $getUser = $this->session->userdata('session_user');
// $getGrup = $this->session->userdata('session_grup');
?>
<head>
	<title>History</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-1.7.1.min.js"></script>
</head>
<body>
          <!-- Begin Page Content -->
          <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary datatable">History</h6>

</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Waktu</th>
            <th scope="col">Kendaraan</th>
            <th scope="col">Pengguna</th>
            <th scope="col">Koordinat awal</th>
            <th scope="col">Jarak dari koordinat awal</th>
            <th scope="col">Status</th>
            <th scope="col">
              <center><span>Action</span></center>
            </th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Waktu</th>
            <th scope="col">Kendaraan</th>
            <th scope="col">Pengguna</th>
            <th scope="col">Koordinat awal</th>
            <th scope="col">Jarak dari koordinat awal</th>
            <th scope="col">Status</th>
            <th scope="col">
              <center><span>Action</span></center>
            </th>
          </tr>
        </tfoot>
        <tbody>
        <?php $no =1;
            foreach($riwayat as $baris){
        ?>
        <tr><td><?php echo $no++;?></td>
             <td><?php echo $baris->waktu;?></td>
             <td><?php echo $baris->merk_kendaraan;?> ( <?php echo $baris->nomor_kendaraan;?> )</td>
             <td><?php echo $baris->pengguna;?></td>
             <td><?php echo $baris->nama_lokasi;?></td>
             <td><?php echo $baris->jarak_now;?> km</td>
             
             <td>
             <?php            
							if($baris->status=='di jalan'){
						 ?>
              <a>Sedang di jalan</a>
						 <?php
              } 
              else{
							echo "Sudah sampai";
						 ?>
						 <?php
						 }?>

             </td>
             
            <td>
                   <a class="small" href="<?php echo base_url('detail_history/map')?>">detail</a>
                   
            </td>
        </tr>
            <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->


