<div class="row">
 <div class="col-lg-7">
 <div class="p-5">
 <div class="text-center">
 <h1 class="h4 text-gray-900 mb-4">Tambah Kendaraan</h1>
 </div>
    
 <form class="user" action="<?php echo base_url('Data_kendaraan/input');?>" method="post"> <!--aksi diarahkan ke function update di controller mahasiswa -->
 <div class="form-group">
      <input type="text" class="form-control form-control-user" id="nama_kendaraan"name="nama_kendaraan" placeholder="Masukkan Nama Kendaraan " require>
    </div>
    <div class="form-group">
      <input type="text" class="form-control form-control-user" id="jenis_kendaraan"name="jenis_kendaraan" placeholder="Masukkan Jenis Kendaraan"  require>
      </div>
      <div>
      <input type="text" class="form-control form-control-user" id="merk_kendaraan" name="merk_kendaraan" placeholder="Masukkan Merk Kendaraan "  require >
      <input type="text" class="form-control form-control-user" id="nomor_kendaraan" name="nomor_kendaraan" placeholder="Masukkan Nomor Kendaraan "  require >
      <input type="text" class="form-control form-control-user" id="pengguna" name="pengguna" placeholder="Masukkan Nama Pengguna "  require >
    </div>
    
    
    <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="update">
    </form><hr>
    <div class="text-center"><a class="small" href="<?php echo base_url('admin')?>">Kembali</a>
  </div>
 </div>
 </div>
</div>