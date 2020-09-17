<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Data_barang extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Data_barang_model');
        
    }
    
    public function index(){
        // if($this->session->userdata('status') != "login"){
        //     redirect(base_url('admin/login_admin'));
        // }
        $data['barang'] = $this->Data_barang_model->getAll()->result();
         $this->template->views('crud/v_data_barang', $data);
    }

    public function input(){
        $nama_barang = $this->input->post('nama_barang');
        $satuan = $this->input->post('satuan');
        $harga= $this->input->post('harga');
        

        $data = array(
            'nama_barang' => $nama_barang,
            'satuan' => $satuan,
            'harga' => $harga
           
        );

        $this->Data_barang_model->input_data($data, 'barang');
        redirect('Data_barang/index');
    

    }
    public function tambah(){
        //menampilkan tambah_mahasiswa
        $this->template->views('crud/tambah_barang');
    }

    public function update(){
        $id_barang=$this->input->post('id_barang');
        $nama_barang = $this->input->post('nama_barang');
        $satuan = $this->input->post('satuan');
        $harga = $this->input->post('harga');
        

        $data = array(
           
            'nama_barang' => $nama_barang,
            'satuan' => $satuan,
            'harga' => $harga
            
            
        );

        $where = array(
            'id_barang' => $id_barang
        );

        $this->Data_barang_model->update_data($where,$data,'barang');
        redirect('Data_barang');
    }

    public function edit($id_barang){
        $where = array('id_barang' => $id_barang);
        $data['barang'] = $this->Data_barang_model->edit_data($where, 'barang')->result();
        $this->template->views('crud/edit_barang',$data);
    }
    public function hapus($id_barang){
        $where = array('id_barang' => $id_barang);
        $this->Data_barang_model->hapus_data($where,'barang');
        redirect('Data_barang/index');
    }
}

    ?>