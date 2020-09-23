<div class="row">
 <div class="col-lg-7">
 <div class="p-5">
 <div class="text-center">
 <h1 class="h4 text-gray-900 mb-4">Tambah Rute</h1>
 </div>
    
 <form class="user" action="<?php echo base_url('rute/input');?>" method="post"> <!--aksi diarahkan ke function update di controller mahasiswa -->
 <div class="form-group">
 <label>Nama Kendaraan</label>
 <select class="form-control" name="kendaraan" id="kendaraan">
											<?php if($id_lokasi == null) :?>
												<option value="0">-- Pilih Kendaraan --</option>
												<?php else : ?>
													<option value="<?php echo $kendaraan ?>"><?php echo $merk_kendaraan.' - '.$pengguna; ?></option>
												<?php endif; ?>
												<?php
												$data = $dao->view('kendaraan');
												foreach ($data as $value) {
													echo '<option value="'.$value['id_kendaraan'].'">'.$value['merk_kendaraan'].' ('.$value['nomor_kendaraan'].') - '.$value['pengguna'].'</option>';
												}
												?>
											</select>

<label>Nama Lokasi</label>
    <input type="text" class="form-control form-control-user" id="lokasi"name="lokasi" placeholder="Masukkan Nama Lokasi " require>
   
    <label>Latitude</label>
    <input type="text" class="form-control form-control-user" id="latitude"name="latitude" placeholder="Latitude " require>
   
    <label>Longitude</label>
    <input type="text" class="form-control form-control-user" id="longitude"name="longitude" placeholder="Longitude " require>
   
    <label>Batas</label>
    <div class="input-group">
	<input type="text" id="radius" value="<?php echo $radius ?>" name="radius" class="form-control" placeholder="Radius" aria-describedby="basic-addon2">
	<span class="input-group-addon" id="basic-addon2">Km</span>
	</div>


    
  </div>
    
    <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Tambah">
    </form><hr>
    <div class="text-center"><a class="small" href="<?php echo base_url('rute')?>">Kembali</a>
  </div>
 </div>
 </div>
</div>