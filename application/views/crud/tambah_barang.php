<div class="row">
 <div class="col-lg-7">
 <div class="p-5">
 <div class="text-center">
 <h1 class="h4 text-gray-900 mb-4">Tambah Barang</h1>
 </div>
    
 <form class="user" action="<?php echo base_url('Data_barang/input');?>" method="post"> <!--aksi diarahkan ke function update di controller mahasiswa -->
 <div class="form-group">
      <input type="text" class="form-control form-control-user" id="nama_barang"name="nama_barang" placeholder="Masukkan Nama Barang " require>
    </div>
    <div class="form-group">
      <input type="text" class="form-control form-control-user" id="satuan"name="satuan" placeholder="Masukkan Satuan"  require>
      </div>
      <div>
      <input type="text" class="form-control form-control-user" id="harga" name="harga" placeholder="Masukkan Harga "  require >
    </div>
    
    
    <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="update">
    </form><hr>
    <div class="text-center"><a class="small" href="<?php echo base_url('admin')?>">Kembali</a>
  </div>
 </div>
 </div>
</div>