<?php

class Data_barang extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '1'){
            $this->session->set_flashdata('pesan', ' 

            <div class="alert alert-danger" role="alert">
            Anda Belum Login
            </div>');

            redirect('auth/login');
        }
    }


    public function index(){

        $data['barang'] = $this->model_barang->tampil_data()->result();
        // barang ini seduai dengan yang di foreach di views
        // tampil data kita udah pernah buat functionnya ada di models/model_barang
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi(){

        $nama_brg     = $this->input->post('nama_brg');
        $keterangan   = $this->input->post('keterangan');
        $kategori     = $this->input->post('kategori');
        $harga        = $this->input->post('harga');
        $stok         = $this->input->post('stok');
        $gambar       = $_FILES['gambar'] ['name']   ;
        if ($gambar=''){}else{
            // bikin path untuk menentukan penyimpanan gambarnya
            $config ['upload_path'] = './uploads';
            //untuk menentukan tipe file yang diijinkan
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            //manggil library upload, karena ingin mengupload file
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo"Gambar gagal di upload";
            }else{
                $gambar=$this->upload->data('file_name');
            }
        }

        // Kita masukkan semua data ke dalam arry, buat array
        $data = array(
            'nama_brg'      => $nama_brg,
            'keterangan'    => $keterangan,
            'kategori'      => $kategori,
            'harga'         => $harga,
            'stok'          => $stok,
            'gambar'        => $gambar
        );

        

        // Kan input ke dalam table barang
        $this->model_barang->tambah_barang($data, 'tb_barang');
        // tambah_barang : nama functionnya
        // $data         : masukin variablenya array
        // tb_barang     : nama table yang ada di database

        // kita belum punya function tambah barang kita bikin di models_barang

        redirect('admin/data_barang/index');
    }

    public function edit($id){

        $where = array('id_brg' =>$id);
        $data['barang'] = $this->model_barang->edit_barang($where, 'tb_barang')->result();

        // model_barang : nama modelnya
        // edit_barang : functionnya
        // tb_barang : nama tablenya sesuai dengan yang di database

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update(){
        $id         =$this->input->post('id_brg');
        $nama_brg   =$this->input->post('nama_brg');
        $keterangan =$this->input->post('keterangan');
        $kategori   =$this->input->post('kategori');
        $harga      =$this->input->post('harga');
        $stok       =$this->input->post('stok');

        // Lalu masukkan ke array
        $data = array(

            'nama_brg'      => $nama_brg,
            'keterangan'      => $keterangan,
            'kategori'      => $kategori,
            'harga'      => $harga,
            'stok'      => $stok
        );

        $where = array(

            'id_brg' => $id
        );

        $this->model_barang->update_data($where, $data, 'tb_barang');
        redirect('admin/data_barang/index');
        // tb_barang : nama field sesuai dengan yang di database
    }

    public function hapus ($id){
    // Id : menghapus berdasarkan idnya

        $where = array('id_brg' => $id);
        $this->model_barang->hapus_data($where, 'tb_barang');
        redirect('admin/data_barang/index');

        // hapus_data : function
        // tb_barang  : table sesuai dengan di database
    }
    public function detail($id_barang){

        $data['barang'] = $this->model_barang->detail_brg($id_barang);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/detail_barang', $data);
        $this->load->view('templates/footer');
    }

    
}



?>