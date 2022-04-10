<?php 

class Auth extends CI_Controller{

    public function login(){

        // bikin untuk form_validation
        $this->form_validation->set_rules('username', 'Username', 'required',
        ['required' => 'Username Wajib Diisi!']);
        // Ini untuk username 
        // Required : usernamenya wajib diisi

        $this->form_validation->set_rules('password', 'Password', 'required',
        ['required' => 'Password Wajib Diisi!']);
        // Ini untuk password 
        // Required : passsword wajib diisi

        if($this->form_validation->run()  == FALSE)
        // artinya kalau form validation ini tidak berjalan dengan baik, kita akan arahkan ke form_login
        {
            
            $this->load->view('templates/header');
            $this->load->view('form_login');
            $this->load->view('templates/footer');
        }else{

            $auth = $this->model_auth->cek_login();

            if($auth == FALSE)
            // ini kalau authenticationnya(cek login)gagal akan ada alert menggunakan boostrap
            {
                $this->session->set_flashdata('pesan', ' 

                <div class="alert alert-danger" role="alert">
                Username atau Password Anda Salah
                </div>');
                redirect('auth/login');
            }else{
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('role_id', $auth->role_id);

                switch($auth->role_id){

                    // Jadi kalau role_idnya 1 : akan diarahkan ke halaman admin
                    case 1 : redirect('admin/dashboard_admin');
                            break;

                    // Kalau role_idnya 2 : akan diarahkan ke halaman dashboard

                    case 2 : redirect('welcome');
                             break;
                    default: break;
                }
            }
        }
    }

    public function logout(){

        $this->session->sess_destroy();
        // sess_destroy : untuk menghancurkan atau menghilangkan session yang sudah dimulai

        redirect('auth/login');
        // Setelah end session akan diarahkan ke halaman login 

    }
}
?>