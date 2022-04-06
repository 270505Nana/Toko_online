<div class="container-fluid "></div>
    <h3><i class="fas fa-edit ml-3"></i>EDIT DATA BARANG</h3>
    
    <?php foreach($barang as $brg) : ?>

        <form method="post" action="<?php echo base_url(). 'admin/data_barang/update'?>">

        <div class="for-group ml-3">
            <label>Nama barang</label>

            <!-- <input type="hidden" name="id_brg" class="form-control"
            value="<?php echo $brg-> id_brg?>"> -->

            <input type="text" name="nama_brg" class="form-control"
            value="<?php echo $brg-> nama_brg?>">
        </div>

        <div class="for-group ml-3">
            <label>Keterangan</label>

            <input type="hidden" name="id_brg" class="form-control"
            value="<?php echo $brg-> id_brg?>">

            <input type="text" name="keterangan" class="form-control"
            value="<?php echo $brg-> keterangan?>">
        </div>

        <div class="for-group ml-3">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control"
            value="<?php echo $brg-> kategori?>">
        </div>

        <div class="for-group ml-3">
            <label>Harga </label>
            <input type="text" name="harga" class="form-control"
            value="<?php echo $brg-> harga?>">
        </div>

        <div class="for-group ml-3 mb-2">
            <label>Stok</label>
            <input type="text" name="stok" class="form-control"
            value="<?php echo $brg-> stok?>">
        </div>

        <!-- button untuk submit hasil updatenya -->

        <button type="submit" class="btn btn-primary btn-sm ml-3">Simpan</button>
        
    </form>
    <?php endforeach; ?>
</div>