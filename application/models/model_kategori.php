<?php

class Model_kategori extends CI_Model{

    public function data_elektronik(){

        return $this->db->get_where("tb_barang", array('kategori' => 'elektronik'));
        // kalau mau menampilkan semua data cukup menggunakan get
        // kalau mau dikategorikan menggunakan where

        // tb_barang : nama tablenya sesuai dengan yang di database
        
    }

    public function data_pakaian(){

        return $this->db->get_where("tb_barang", array('kategori' => 'pakaian'));
        // kalau mau menampilkan semua data cukup menggunakan get
        // kalau mau dikategorikan menggunakan where

        // tb_barang : nama tablenya sesuai dengan yang di database
        
    }

    public function data_alat_mandi(){

        return $this->db->get_where("tb_barang", array('kategori' => 'alat mandi'));
        // kalau mau menampilkan semua data cukup menggunakan get
        // kalau mau dikategorikan menggunakan where

        // tb_barang : nama tablenya sesuai dengan yang di database
        
    }

    public function data_pakaian_anak(){

        return $this->db->get_where("tb_barang", array('kategori' => 'pakaian anak'));
        // kalau mau menampilkan semua data cukup menggunakan get
        // kalau mau dikategorikan menggunakan where

        // tb_barang : nama tablenya sesuai dengan yang di database
        
    }

    public function data_peralatan_olahraga(){

        return $this->db->get_where("tb_barang", array('kategori' => 'peralatan olahraga'));
        // kalau mau menampilkan semua data cukup menggunakan get
        // kalau mau dikategorikan menggunakan where

        // tb_barang : nama tablenya sesuai dengan yang di database
        // peralatan olahraga : sesuai dengan uyang di database
        
    }

}