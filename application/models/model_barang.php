<?php

// Jadi models itu yang menghubungkan ke database, jadi kaya mengelola databasenya disini
// jadi misal tambah barang itu kan ada insert jadi intinya untuk menghubungkan antara value dan database itu di models



class Model_barang extends CI_Model{
    
    public function tampil_data()
    {
         return $this->db->get('tb_barang');
        //  dia akan ambil dari database, dengan nama tablenya tb_barang(disesuain sama yang di databasenya)
        
    }

    public function tambah_barang($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_barang($where, $table){
        // $this : querynya

        return $this->db->get_where($table, $where);
        // Diatas untuk me read data

        // Lalu untuk mengedit data

    }

    public function update_data($where, $data, $table){

        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);

    }

    public function find($id)
    {

        $result = $this->db->where('id_brg', $id)
                           ->limit(1)
                           ->get('tb_barang');
        
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }
}
?>