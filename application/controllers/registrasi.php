<?php

class Registrasi extends CI_Controller{

    public function index(){


        // membuat form_validation untuk nama, username, dan password

        $this->form_validation->set_rules('nama', 'Nama', 'required',['required' => 'Nama Wajib diisi !']);
        // reqiuired : rules form nama harus diisi gaboleh kosong

        $this->form_validation->set_rules('username', 'Username', 'required',['required' => 'Username Wajib diisi  !']);
        $this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]',['required' => 'Password Wajib diisi !','matches' => 'Password Tidak Cocok']);
        $this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]');



        if($this->form_validation->run() == FALSE){

            $this->load->view('templates/header');
            $this->load->view('registrasi');
            $this->load->view('templates/footer');
        }else{

            $data = array(

                'id'        =>   '',
                'nama'      => $this->input->post('nama'),
                'username'  => $this->input->post('username'),
                'password'  => $this->input->post('password_1'),
                'role_id'   => 2,

                // role_id nya dibikin default karena halaman registrasi itu hanya untuk user
                // role_id 2 : untuk user
            );

            // Ini masukin datannya ke dalam database
            $this->db->insert('tb_user', $data);
            redirect('auth/login');

        }
    }
}