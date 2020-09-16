<?php 
// $getUser = $this->session->userdata('session_user');
// $getGrup = $this->session->userdata('session_grup');
?>
<head>
	<title>Data Customer</title>
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
    <h6 class="m-0 font-weight-bold text-primary datatable">Data Customer</h6>
   
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Id.Cust</th>
            <th scope="col">Nama Depan</th>
            <th scope="col">Nama Belakang</th>
            <th scope="col">Email</th>
            <th scope="col">Tipe Identitas</th>
            <th scope="col">No_Identitas</th>
            <th scope="col">Telepon</th>
            <th scope="col">No.Rek</th>
            <th scope="col">Nama Rek</th>
            <th scope="col">Alamat</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Level</th>
            <th scope="col">
              <center><span>Action</span></center>
            </th>
          </tr>
        </thead>
        <tfoot>
          <tr>
          <th scope="col">No.</th>
            <th scope="col">Id.Cust</th>
            <th scope="col">Nama Depan</th>
            <th scope="col">Nama Belakang</th>
            <th scope="col">Email</th>
            <th scope="col">Tipe Identitas</th>
            <th scope="col">No_Identitas</th>
            <th scope="col">Telepon</th>
            <th scope="col">No.Rek</th>
            <th scope="col">Nama Rek</th>
            <th scope="col">Alamat</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Level</th>
            <th scope="col">
              <center><span>Action</span></center>
            </th>
          </tr>
        </tfoot>
        <tbody>
        <?php $no =1;
            foreach($user as $baris){
        ?>
        <tr><td><?php echo $no++;?></td>
             <td><?php echo $baris->id;?></td>
             <td><?php echo $baris->nama_depan;?></td>
             <td><?php echo $baris->nama_belakang;?></td>
             <td><?php echo $baris->email;?></td>
             <td><?php echo $baris->tipe_identitas;?></td>
             <td><?php echo $baris->no_identitas;?></td>
             <td><?php echo $baris->no_telepon;?></td>
             <td><?php echo $baris->no_rek;?></td>
             <td><?php echo $baris->nama_rek;?></td>
             <td><?php echo $baris->alamat;?></td>
            <td><?php echo $baris->username;?></td>
            <td><?php echo $baris->password;?></td>
            <td><?php echo $baris->level;?></td>
            <td>
            <?php
                   
             
                echo '<a href="'.base_url('customer/hapus/'.$baris->id).'" class="btn btn-danger btn-icon-split"><i class="fas fa-trash" style="padding: 5px;"></i></a>';
                    
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


