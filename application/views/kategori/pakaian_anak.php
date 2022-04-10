<div class="container-fluid">

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/img/slider2.jpg')?>" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

    <div class="row text-center mt-4">
        <?php foreach($pakaian_anak as $brg) : ?>
            <!-- elektronik : disamakan dengan yang di controller/kategori -->


            <div class="card ml-3 mb-3" style="width: 16rem;">
                 <img src="<?php echo base_url().'/uploads/'.$brg->gambar?>" class="card-img-top" alt="...">

            <div class="card-body">
             <h5 class="card-title mb-1"><?php echo $brg->nama_brg?>  </h5>
            
             <!-- Untuk keterangan -->
             <small><?php echo $brg->keterangan?></small>

             <!-- Untuk harga -->
             <br>
            <span class="badge bg-info text-dark mb-3">Rp.<?php echo number_format($brg->harga,  0,',','.') ?></span>


            <?php echo anchor('dashboard/tambah_ke_keranjang/' .$brg->id_brg,'<div class="btn btn-sm btn-primary"> Tambah ke keranjang</div> ' )?>
            
            <!-- tambah ke keranjang  : function yang berada di dashboard  -->
            
            <?php echo anchor('dashboard/detail/' .$brg->id_brg,'<div class="btn btn-sm btn-primary"> Detail </div> ' )?>
            <!-- detail : function yang berada di dashboard controller -->

            </div>
            </div>
            <?php endforeach?>
    </div>
</div>