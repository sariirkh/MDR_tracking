<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class rute extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('rute_model');
        
    }
    
    public function index(){
        // if($this->session->userdata('status') != "login"){
        //     redirect(base_url('admin/login_admin'));
        // }
        $data['lokasi'] = $this->rute_model->getAll()->result();
         $this->template->views('crud/Rute_view', $data);
    }

    public function input(){
        $nama_lokasi = $this->input->post('nama_lokasi');
        $merk_kendaraan= $this->input->post('merk_kendaraan');
        $nomor_kendaraan= $this->input->post('nomor_kendaraan');
        $pengguna = $this->input->post('pengguna');
        $latitude=$this->input->post('latitude');
        $longitude=$this->input->post('longitude');
        $radius=$this->input->post('radius');
        

        $data = array(
            'id_kendaraan' => $id_kendaraan,
            'merk_kendaraan' => $merk_kendaraan,
            'nomor_kendaraan' => $nomor_kendaraan,
            'pengguna' => $pengguna,
            'latitude' =>$latitude,
            'longitude' =>$longitude,
            'radius' =>$radius

           
        );

        $this->rute_model->input_data($data, 'lokasi');
        redirect('Rute/index');
    

    }
    public function tambah(){
        
        $this->template->views('crud/tambah_rute');
    }

    public function update(){
        $nama_lokasi = $this->input->post('nama_lokasi');
        $merk_kendaraan= $this->input->post('merk_kendaraan');
        $nomor_kendaraan= $this->input->post('nomor_kendaraan');
        $pengguna = $this->input->post('pengguna');
        $latitude=$this->input->post('latitude');
        $longitude=$this->input->post('longitude');
        $radius=$this->input->post('radius');
        

        $data = array(
            'id_kendaraan' => $id_kendaraan,
            'merk_kendaraan' => $merk_kendaraan,
            'nomor_kendaraan' => $nomor_kendaraan,
            'pengguna' => $pengguna,
            'latitude' =>$latitude,
            'longitude' =>$longitude,
            'radius' =>$radius
            
            
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