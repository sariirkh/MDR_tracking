<?php 
// $getUser = $this->session->userdata('session_user');
// $getGrup = $this->session->userdata('session_grup');
?>
<head>
	<title>Data Kendaraan</title>
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
<h6 class="m-0 font-weight-bold text-primary datatable">Data Kendaraan</h6>
<a href="<?php echo base_url('Data_barang/tambah')?>"><button class="btn btn-primary btn-sm btninsert" >+ Input Data</button></a>
</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Id.Kendaraan</th>
            <th scope="col">Jenis Kendaraan</th>
            <th scope="col">Merk Kendaraan</th>
            <th scope="col">Nomor Kendaraan</th>
            <th scope="col">
              <center><span>Action</span></center>
            </th>
          </tr>
        </thead>
        <tfoot>
          <tr>
          <th scope="col">No.</th>
            <th scope="col">Id.Kendaraan</th>
            <th scope="col">Jenis Kendaraan</th>
            <th scope="col">Merk Kendaraan</th>
            <th scope="col">Nomor Kendaraan</th>
            <th scope="col">
              <center><span>Action</span></center>
            </th>
          </tr>
        </tfoot>
        <tbody>
        <?php $no =1;
            foreach($kendaraan as $baris){
        ?>
        <tr><td><?php echo $no++;?></td>
             <td><?php echo $baris->id_kendaraan;?></td>
             <td><?php echo $baris->jenis_kendaraan;?></td>
             <td><?php echo $baris->merk_kendaraan;?></td>
             <td><?php echo $baris->nomor_kendaraan;?></td>
           
            <td>
            <?php
                   
                   echo '<a href="'.base_url('Data_Kendaraan/edit/'.$baris->id_Kendaraan).'" class="btn btn-success btn-icon-split"><i class="fas fa-edit" style="padding: 5px;"></i></a>';
                   echo "  ";
                echo '<a href="'.base_url('Data_Kendaraan/hapus/'.$baris->id_Kendaraan).'" class="btn btn-danger btn-icon-split"><i class="fas fa-trash" style="padding: 5px;"></i></a>';
             
            ?>
            
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


