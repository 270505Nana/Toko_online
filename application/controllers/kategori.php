<?php
class Kategori extends CI_Controller{

    public function elektronik(){

        $data['elektronik'] = $this->model_kategori->data_elektronik()->result();
        // data_elektronik : function dari file Models/model_kategori

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/elektronik', $data);
        $this->load->view('templates/footer');
    }

    public function pakaian(){

        $data['pakaian'] = $this->model_kategori->data_pakaian()->result();
        
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/pakaian', $data);
        $this->load->view('templates/footer');
    }

    public function alat_mandi(){

        $data['alat_mandi'] = $this->model_kategori->data_alat_mandi()->result();
       
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/alat_mandi', $data);
        $this->load->view('templates/footer');
    }

    public function pakaian_anak(){

        $data['pakaian_anak'] = $this->model_kategori->data_pakaian_anak()->result();
       
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('/kategori/pakaian_anak', $data);
        $this->load->view('templates/footer');
    }

    public function peralatan_olahraga(){

        $data['peralatan_olahraga'] = $this->model_kategori->data_peralatan_olahraga()->result();
       
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/peralatan_olahraga', $data);
        $this->load->view('templates/footer');
    }

}

?>