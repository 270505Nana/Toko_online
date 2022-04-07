<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-primary mb-3">

                <?php 
                $grand_total = 0;
                if ($keranjang = $this-> cart-> contents())
                {
                    foreach ($keranjang as $item){
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                echo " <h4> Total Belanja Anda: Rp. ".number_format($grand_total,0, ',','.');

                }?>
            </div><br>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>

            <form method="post" action="<?php echo base_url()  ?> dashboard/proses_pesanan">
        
            <div class="form-group">
                <label>Nama lengkap</label>
                <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
            </div>

            <div class="form-group">
                <label>Alamat lengkap</label>
                <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
            </div>

            <div class="form-group">
                <label>No telepon</label>
                <input type="text" name="no_telp" placeholder="No Telepon Anda" class="form-control"v>
            </div>

            <div class="form-group">
                <label>Jasa Pengiriman</label>
                <select class="form-control">
                    <option>JNE</option>
                    <option>TIKI</option>
                    <option>Pos Indonesia</option>
                    <option>GOJEK</option>
                    <option>GRAB</option>
                </select>
            </div>

            <div class="form-group">
                <label>Pilih Bank</label>
                <select class="form-control">
                    <option>BCA - XXXXXX</option>
                    <option>MANDIRI - XXXXXXX</option>
                    <option>BNI - XXXXXX</option>
                    <option>BRI - XXXXXX</option>
                   
                </select>
            </div>

            <button type="submit" class="btn btn-sm btn-primary">Pesan</button>
        
        
            </form>

        </div>

        
        <div class="col-md-2"></div>
    </div>
</div>