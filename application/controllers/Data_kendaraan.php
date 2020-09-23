<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Data_kendaraan extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Data_kendaraan_model');
        
    }
    
    public function index(){
        // if($this->session->userdata('status') != "login"){
        //     redirect(base_url('admin/login_admin'));
        // }
        $data['kendaraan'] = $this->Data_kendaraan_model->getAll()->result();
         $this->template->views('crud/v_data_kendaraan', $data);
    }

    public function input(){
        $id_kendaraan = $this->input->post('id_kendaraan');
       
        $jenis_kendaraan = $this->input->post('jenis_kendaraan');
        $merk_kendaraan= $this->input->post('merk_kendaraan');
        $nomor_kendaraan= $this->input->post('nomor_kendaraan');
        $pengguna = $this->input->post('pengguna');
        

        $data = array(
            'id_kendaraan' => $id_kendaraan,
      
            'jenis_kendaraan' => $jenis_kendaraan,
            'merk_kendaraan' => $merk_kendaraan,
            'nomor_kendaraan' => $nomor_kendaraan,
            'pengguna' => $pengguna
           
        );

        $this->Data_kendaraan_model->input_data($data, 'kendaraan');
        redirect('Data_kendaraan/index');
    

    }
    public function tambah(){
        
        $this->template->views('crud/tambah_kendaraan');
    }

    public function update(){
        $id_kendaraan = $this->input->post('id_kendaraan');
        
        $jenis_kendaraan = $this->input->post('jenis_kendaraan');
        $merk_kendaraan= $this->input->post('merk_kendaraan');
        $nomor_kendaraan= $this->input->post('nomor_kendaraan');
        $pengguna = $this->input->post('pengguna');
        

        $data = array(
            'id_kendaraan' => $id_kendaraan,
            
            'jenis_kendaraan' => $jenis_kendaraan,
            'merk_kendaraan' => $merk_kendaraan,
            'nomor_kendaraan' => $nomor_kendaraan,
            'pengguna'=> $pengguna
            
            
        );

        $where = array(
            'id_kendaraan' => $id_kendaraan
        );

        $this->Data_kendaraan_model->update_data($where,$data,'kendaraan');
        redirect('Data_kendaraan');
    }

    public function edit($id_kendaraan){
        $where = array('id_kendaraan' => $id_kendaraan);
        $data['kendaraan'] = $this->Data_kendaraan_model->edit_data($where, 'kendaraan')->result();
        $this->template->views('crud/edit_kendaraan',$data);
    }
    public function hapus($id_kendaraan){
        $where = array('id_kendaraan' => $id_kendaraan);
        $this->Data_kendaraan_model->hapus_data($where,'kendaraan');
        redirect('Data_kendaraan/index');
    }
}

    ?>