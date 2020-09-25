<div class="row">
 <div class="col-lg-7">
 <div class="p-5">
 <div class="text-center">
 <h1 class="h4 text-gray-900 mb-4">Edit Rute</h1>
 </div>
 <?php foreach($lokasi as $baris){ ?>
 <form class="user" action="<?php echo base_url('rute/update');?>" method="post"> <!--aksi diarahkan ke function update di controller mahasiswa -->
 
 <div class="form-group">
      <input type="hidden" name="id_lokasi" value="<?php echo $baris->id_lokasi; ?>">
 </div>
     
     
 <div class="form-group">
 <label>Nama Kendaraan</label>
 <select class="form-control " name="id_kendaraan" id="id_kendaraan" placeholder="Pilih Kendaraan" value="<?php echo $baris->id_kendaraan; ?>">
    <?php
        $kon = mysqli_connect("localhost",'root',"","trackingmdr");
        if (!$kon){
        die("Koneksi database gagal:".mysqli_connect_error());
        }
    ?>

    <?php if($id_kendaraan == null) :?>
	      <option value="0"> Pilih Kendaraan </option>
    <?php else : ?>
	      <option value="<?php echo $id_kendaraan ?>"><?php echo $merk_kendaraan.$nomor_kendaraan.' - '.$pengguna; ?></option> 
    <?php endif; ?>


    <?php
    $sql="select * from kendaraan";

    $hasil=mysqli_query($kon,$sql);
    $no=0;
    while ($data = mysqli_fetch_array($hasil)) {
    $no++;

    $ket="";
    if (isset($_GET['kendaraan'])) {
	    $kendaraan = trim($_GET['kendaraan']);

	    if ($kendaraan==$data['id_kendaraan'])
	    {
		    $ket="selected";
	    } 
    }
    ?>
    <option <?php echo $ket; ?> value="<?php echo $data['id_kendaraan'];?>"> <?php echo $data['merk_kendaraan'];?> (<?php echo $data['nomor_kendaraan'];?>) <?php echo $data['pengguna'];?>  </option>
    <?php } ?>	

  </select>

 </div>

 
  
<div class="form-group">
<label>Lokasi</label>
      <input type="text" class="form-control form-control-user" id="nama_lokasi" name="nama_lokasi" placeholder="Nama Lokasi" value="<?php echo $baris->nama_lokasi; ?>" require >
</div>

    <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="update">
    </form><?php } ?><hr>
    <div class="text-center"><a class="small" href="<?php echo base_url('rute')?>">Kembali</a>
  </div>
 </div>
 </div>
</div>