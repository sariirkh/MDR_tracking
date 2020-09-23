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
        $batas=$this->input->post('batas');
        

        $data = array(
            'nama_lokasi' => $nama_lokasi,
            'merk_kendaraan' => $merk_kendaraan,
            'nomor_kendaraan' => $nomor_kendaraan,
            'pengguna' => $pengguna,
            'latitude' =>$latitude,
            'longitude' =>$longitude,
            'batas' =>$batas

           
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
        $batas=$this->input->post('batas');
        

        $data = array(
            'nama_lokasi' => $nama_lokasi,
            'merk_kendaraan' => $merk_kendaraan,
            'nomor_kendaraan' => $nomor_kendaraan,
            'pengguna' => $pengguna,
            'latitude' =>$latitude,
            'longitude' =>$longitude,
            'batas' =>$batas
            
            
        );

        $where = array(
            'id_lokasi' => $id_lokasi
        );

        $this->rute_model->update_data($where,$data,'lokasi');
        redirect('rute');
    }

    public function edit($id_lokasi){
        $where = array('id_lokasi' => $id_lokasi);
        $data['lokasi'] = $this->rute_model->edit_data($where, 'lokasi')->result();
        $this->template->views('crud/edit_rute',$data);
    }
    public function hapus($id_lokasi){
        $where = array('id_lokasi' => $id_lokasi);
        $this->rute_model->hapus_data($where,'lokasi');
        redirect('rute/index');
    }
}

    ?>