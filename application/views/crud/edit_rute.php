<div class="row">
 <div class="col-lg-7">
 <div class="p-5">
 <div class="text-center">
 <h1 class="h4 text-gray-900 mb-4">Edit Rute</h1>
 </div>
     <?php foreach($lokasi as $baris){ ?>
 <form class="user" action="<?php echo base_url('rute/update');?>" method="post"> <!--aksi diarahkan ke function update di controller mahasiswa -->
 <div class="form-group">
      <input type="text" class="form-control form-control-user" id="nama_kendaraan"name="nama_kendaraan" placeholder="Masukkan Nama Kendaraan " require>
    </div>
    <div class="form-group">
      <input type="text" class="form-control form-control-user" id="pengguna"name="pengguna" placeholder="Masukkan Nama Pengguna"  require>
      </div>
      <div class="form-group">
      <input type="text" class="form-control form-control-user" id="lokasi" name="lokasi" placeholder="Masukkan Lokasi"  require >
</div>
<div class="form-group">
      <input type="text" class="form-control form-control-user" id="batas_radius" name="batas_radius" placeholder="Masukkan Batas"  require >
     
    </div>
    
    
    <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="update">
    </form><?php } ?><hr>
    <div class="text-center"><a class="small" href="<?php echo base_url('admin')?>">Kembali</a>
  </div>
 </div>
 </div>
</div>