<div class="row">
 <div class="col-lg-7">
 <div class="p-5">
 <div class="text-center">
 <h1 class="h4 text-gray-900 mb-4">Edit Kendaraan</h1>
 </div>
     <?php foreach($kendaraan as $baris){ ?>
 <form class="user" action="<?php echo base_url('data_kendaraan/update');?>" method="post"> <!--aksi diarahkan ke function update di controller mahasiswa -->
 <div class="form-group">
      <input type="hidden" name="id_kendaraan" value="<?php echo $baris->id_kendaraan; ?>">
 </div>
 <div class="form-group">
      <input type="text" class="form-control form-control-user" id="jenis_kendaraan"name="jenis_kendaraan" placeholder="Jenis Kendaraan" value="<?php echo $baris->jenis_kendaraan; ?>" require>
</div>
<div class="form-group">
      <input type="text" class="form-control form-control-user" id="merk_kendaraan"name="merk_kendaraan" placeholder="Merk Kendaraan" value="<?php echo $baris->merk_kendaraan; ?>" require>
</div>
<div class="form-group">
      <input type="password" class="form-control form-control-user" id="nomor_kendaraan" name="nomor_kendaraan" placeholder="Nomor Kendaraan" value="<?php echo $baris->nomor_kendaraan; ?>" require >
</div>
<div class="form-group">
      <input type="text" class="form-control form-control-user" id="pengguna" name="pengguna" placeholder="Pengguna" value="<?php echo $baris->pengguna; ?>" require >
</div>
    
    <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="update">
    </form><?php } ?><hr>
    <div class="text-center"><a class="small" href="<?php echo base_url('data_kendaraan')?>">Kembali</a>
  </div>
 </div>
 </div>
</div>