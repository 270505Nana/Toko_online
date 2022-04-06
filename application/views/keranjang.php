<div class="container-fluid">
    <h4>Keranjang Belanja</h4>

    <table class="table table-bordered table-stripped table-hover">

            <tr>
                <th>NO</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Sub-Total</th>

            </tr>

            <?php 
            $no=1;
            foreach ($this->cart->contents() as $items) : ?>

            <tr>
                <td><?php echo $no++ ?></td>

                <td><?php echo $items['name'] ?></td>

                <td><?php echo $items['qty']  ?></td>

                <td align="right">Rp. <?php echo number_format($items['price'], 0,',','.' ) ?></td>
                <!-- Ini biar tampilan harganya jadi 12.000 -->

                <td align="right">Rp. <?php echo number_format($items['subtotal'], 0,',','.' )  ?></td>


                <!-- urutan harus sesuai dengan yang diatas -->
            </tr>

           

            <?php endforeach;?>
            
            <tr>
                <td colspan="4"></td>
                <td align="right">Rp. <?php echo number_format($this->cart->total(), 0,',','.' ) ?></td>
            </tr>
    </table>
</div>