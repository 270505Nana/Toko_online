<?php

class Dashboard extends CI_Controller{
    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        // tampi_data : nama function yang kita buat
        // Diatas untuk proses pengambilan datanya
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
        
    }

    public function tambah_ke_keranjang($id)
    {

        // Panggil function di dalam model_barang untuk mencari/menentukan id barang sesuai dengan yang kita klik
        $barang = $this->model_barang->find($id);

        $data = array(

            'id'    => $barang->id_brg,
            'qty'    => 1,
            'price'    => $barang->harga,
            'name'    => $barang->nama_brg
            
        );
        $this->cart->insert($data);
        redirect('dashboard');
        
        // id_brg : sesuai dengan nama field yang di database
        // find : untuk mencari id yang diketik user

    }

    public function detail_keranjang(){

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
        
    }

    public function hapus_keranjang(){

        $this->cart->destroy();
        redirect('dashboard/index');

        // setelah menghapus user akan diarahkan ke dashboard/index
    }

    public function pembayaran(){

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');

        // pembayaran : manggil file view yang akan ditampilkan, yang template juga gitu
        // view : foldernya
    }

    public function proses_pesanan(){

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('proses_pesanan');
        $this->load->view('templates/footer');

    }
}

?>