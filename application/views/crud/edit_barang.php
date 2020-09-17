<div class="row">
 <div class="col-lg-7">
 <div class="p-5">
 <div class="text-center">
 <h1 class="h4 text-gray-900 mb-4">Edit Barang</h1>
 </div>
     <?php foreach($barang as $baris){ ?>
 <form class="user" action="<?php echo base_url('Data_barang/update');?>" method="post"> <!--aksi diarahkan ke function update di controller mahasiswa -->
 <div class="form-group">
      <input type="hidden" name="id_barang" value="<?php echo $baris->id_barang; ?>">
      <input type="text" class="form-control form-control-user" id="nama_barang"name="nama_barang" placeholder="Nama Barang " value="<?php echo $baris->nama_barang; ?>" require>
    </div>
    <div class="form-group">
      <input type="text" class="form-control form-control-user" id="satuan" name="satuan" placeholder="satuan " value="<?php echo $baris->satuan; ?>" require>
      <input type="text" class="form-control form-control-user" id="harga" name="harga" placeholder="harga " value="<?php echo $baris->harga; ?>" require >
    </div>
    
    
    <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="update">
    </form><?php } ?><hr>
    <div class="text-center"><a class="small" href="<?php echo base_url('admin')?>">Kembali</a>
  </div>
 </div>
 </div>
</div>