<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Validasi extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Validasi_model');
        $this->load->model('Admin_model');
        if($this->Admin_model->isNotLogin()) redirect('login');
    }

    public function index(){
        $data['booking'] = $this->Validasi_model->getAll();
         $this->template->views('crud/validasi_booking', $data);
    }

    public function hapus($id_pesan){
        $where = array('id_pesan' => $id_pesan);
        $this->Validasi_model->hapus_data($where,'tbl_pesan');
        redirect('validasi/index');
    }

    public function edit($id_pesan){
        $where = array('id_pesan' => $id_pesan);
        $data['booking'] = $this->Validasi_model->edit_data($where, 'tbl_pesan')->result();
        $this->template->views('crud/edit_validasi',$data);
    }
    public function update(){
        $id_pesan = $this->input->post('id_pesan');
        $id_paket = $this->input->post('id_paket');
        $tgl_pesan = $this->input->post('tgl_pesan');
        $tgl_tour = $this->input->post('tgl_tour');
        $status = $this->input->post('status');
       

        $data = array(
            'id_paket' => $id_paket,
            'tgl_pesan' => $tgl_pesan,
            'tgl_tour' => $tgl_tour,
            'status' => $status,
        );

        $where = array(
            'id_pesan' => $id_pesan
        );

        $this->Validasi_model->update_data($where,$data,'tbl_pesan');
        redirect('validasi');
    }
}
?>
