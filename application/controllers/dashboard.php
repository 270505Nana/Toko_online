<?php

class Dashboard extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '2'){
            $this->session->set_flashdata('pesan', ' 

            <div class="alert alert-danger" role="alert">
            Anda Belum Login
            </div>');

            redirect('auth/login');
        }
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
        redirect('welcome');
        
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
        redirect('welcome');

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

    public function proses(){

        $is_processed = $this->model_invoice->index();
        if($is_processed){
        // jadi kalau di proses kita akan load ke halaman dibawah
        

            $this->cart->destroy();
            // artinya ketika klik pesan, semua data di keranjang akan dihapus,,
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');

            // pembayaran : manggil file view yang akan ditampilkan, yang template juga gitu
            // view : foldernya

        }else{
            echo"Maaf, Pesanan Anda Gagal di Proses";
        }
    }

    public function detail($id_barang){

        $data['barang'] = $this->model_barang->detail_brg($id_barang);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_barang', $data);
        $this->load->view('templates/footer');
    }

    
}

?>