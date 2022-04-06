<div class="container-fluid">
    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm mr-2"></i>Tambah Barang</button>

    <!-- tambah_barang disitu memanggil id yang ada di modal/dibawah -->
    <!-- untuk menampilkan data barangnya dalam bentuk table -->

    <table class="table table-bordered mt-3">
        <tr>
            <th>NO</th>
            <th>NAMA BARANG</th>
            <th>KETERANGAN</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th colspan="3">AKSI</th>
        </tr>

     <!-- untuk mengambil datanya, pake looping -->
        
        <?php
        
        $no=1;
        foreach($barang as $brg) : ?>

        <tr>
            <td><?php echo $no++ ?></td>

            <td><?php echo $brg->nama_brg ?></td>

            <td><?php echo $brg->keterangan ?></td>

            <td><?php echo $brg->kategori ?></td>

            <td><?php echo $brg->harga ?> </td>

            <td><?php echo $brg->stok ?></td>

            <td><div class="btn btn-success btn-sm"><i class=" fas fa-search-plus"></i></div></td>

            <td><?php echo anchor('admin/data_barang/edit/' .$brg->id_brg, '<div class="btn btn-primary btn-sm"><i class=" fa fa-edit"></i></div>')?></td>

            <td><?php echo anchor('admin/data_barang/hapus/' .$brg->id_brg, '<div class="btn btn-danger btn-sm"><i class=" fa fa-trash"></i></div>')?></td>

        </tr>
        <!-- Ini kalau di run akan error, karena sebelumnya kita belum  memanggil data di controller dan model-->
        <?php endforeach; ?>


    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah barang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_barang/tambah_aksi'; 
        ?>" method="post" encytype="multipart/form-data">
<!-- ___________________________________________________________________________________________________________________________________________ -->
 
                                <!-- FORM UNTUK TAMBAH BARANG -->
        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_brg" class="form-control">
        </div>

        <div class="form-group">
            <label> Keterangan </label>
            <input type="text" name="keterangan" class="form-control">
        </div>

        <div class="form-group">
            <label> Kategori </label>
            <input type="text" name="kategori" class="form-control">
        </div>

        <div class="form-group">
            <label> Harga </label>
            <input type="text" name="harga" class="form-control">
        </div>

        <div class="form-group">
            <label> Stok </label>
            <input type="text" name="stok" class="form-control">
        </div>

        <div class="form-group mb-2">
            <label> Gambar Produk </label>
            <input type="file" name="gambar" class="form-control">
        </div>

        
       <!-- nama_brg disesuaikan dengan yang di atas yang dibagian foreach, sesuaikan dgn yang disitu -->
       
        <!-- admin : nama darictory yang ada di controllers-->
        <!-- data_barang : nama controllersnya yang ada di controllers-->
        <!-- tambah_aksi : nama functionnya yang ada di controllers-->
        <!-- Multipart/form-data : karena kan kita juga mau upload gambar jadi pakai itu -->
<!-- ___________________________________________________________________________________________________________________________________________ -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

    </form>
    </div>
  </div>
</div>