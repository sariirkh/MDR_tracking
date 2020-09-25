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
        $data['lokasi'] = $this->db->query("SELECT k.id_kendaraan AS id_kendaraan_user, k.merk_kendaraan AS merek_kendaraan, k.nomor_kendaraan AS no_kendaraan, k.pengguna AS nama_pengguna, l.nama_lokasi AS tempat_lokasi,  l.id_lokasi AS lokasi_id FROM kendaraan k, lokasi l WHERE k.id_kendaraan = l.id_kendaraan")->result();
         $this->template->views('crud/Rute_view', $data);
    }

   

   // function get_kendaraan (){
       // $id_kendaraan= this->input->post('id_kendaraan', true);
       // $data=this->rute_model->get_kendaraan($id_kendaraan)->result();
        //echo json_encode($data);

    //}

    public function input(){
        $id_lokasi = $this->input->post('id_lokasi');
        $id_kendaraan = $this->input->post('id_kendaraan');
        $nama_lokasi = $this->input->post('nama_lokasi');
        // $latitude=$this->input->post('latitude');
        // $longitude=$this->input->post('longitude');
        // $batas=$this->input->post('batas');
        

        $data = array(
            'id_lokasi' => $id_lokasi,
            'id_kendaraan' => $id_kendaraan,
            'nama_lokasi' => $nama_lokasi,
            // 'latitude' =>$latitude,
            // 'longitude' =>$longitude,
            // 'batas' =>$batas

           
        );

        $this->rute_model->input_data($data, 'lokasi');
        redirect('rute/index');
    

    }
    public function tambah(){
        
        $this->template->views('crud/tambah_rute');
    }

    public function update(){
        $id_lokasi = $this->input->post('id_lokasi');
        $id_kendaraan = $this->input->post('id_kendaraan');
        $nama_lokasi = $this->input->post('nama_lokasi');
        // $latitude=$this->input->post('latitude');
        // $longitude=$this->input->post('longitude');
        // $batas=$this->input->post('batas');
        

        $data = array(
            'id_kendaraan' => $id_kendaraan,
            'nama_lokasi' => $nama_lokasi,
            // 'latitude' =>$latitude,
            // 'longitude' =>$longitude,
            // 'batas' =>$batas
            
            
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