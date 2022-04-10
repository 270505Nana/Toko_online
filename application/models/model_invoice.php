<?php

class Model_invoice extends CI_Model{

    public function index(){

        date_default_timezone_set('Asia/Jakarta');
        // Karena kita menggunakan DATETIME untuk tgl_pesan & batas_bayar
        // jadi harus set time zonenya dahulu

        $nama     = $this->input->post('nama');
        $alamat   = $this->input->post('alamat');
        // nama : kita ambil dari file pembayaran itukan saat user isi nama lengap, alamat dll
        // kita menggunakan method post,  jadi kita pakai method yang sama
        
       
        $invoice = array (
            'nama'        => $nama,
            'alamat'      => $alamat,
            'tgl_pesan'   => date('Y-m-d H:i:s'),
            'batas_bayar' => date('Y-m-d H:i:s', mktime( date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),

            // d + 1 : batas pembayaran 1 hari setelah klik pesan

            
        );

        $this->db->insert('tb_invoice', $invoice);
        $id_invoice = $this->db->insert_id();
        // Ini untuk masukin datanya ke dalam database
        // tb_invoice : nama tablenya sesuai dengan yang ada di database

        foreach($this->cart->contents()as $item){
            $data = array(
                'id_invoice'        => $id_invoice,
                'id_barang'         => $item['id'],
                'nama_brg'          => $item['name'],
                'jumlah'            => $item['qty'],
                'harga'             => $item['price'],

            );

            $this->db->insert('tb_pesanan', $data);
        }
        return TRUE;

    }

    public function tampil_data(){

        $result = $this->db->get('tb_invoice');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }

    public function ambil_id_invoice($id_invoice){

        $result = $this->db->where('id_barang', $id_invoice)-> limit(1)->get('tb_invoice');

        if ($result->num_rows() > 0){
            return $result->row();
        }else{
            return false;
        }
    }


    public function ambil_id_pesanan($id_invoice){

        $result = $this->db->where('id_invoice', $id_invoice)->get('tb_pesanan');

        if ($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }

    
}

?>