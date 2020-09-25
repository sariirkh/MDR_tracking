<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('dashboard_model');
        //if($this->Admin_model->isNotLogin()) redirect('login');
    }
    public function map(){
        $this->load->view('v_dashboard');
    }
    
    public function index(){
        // if($this->session->userdata('status') != "login"){
        //     redirect(base_url('admin/login_admin'));
        // }
        $data['kendaraan'] = $this->dashboard_model->jum_kendaraan();
        $data['lokasi'] = $this->dashboard_model->jum_request();
        $data['riwayat'] = $this->dashboard_model->jum_update();
        $data['pengguna'] = $this->dashboard_model->jum_pengguna();
        // $data['user'] = $this->dashboard_model->getAll()->result();
         $this->template->views('v_dashboard', $data);
    }

    public function kendaraan(){
        // if($this->session->userdata('status') != "login"){
        //     redirect(base_url('admin/login_admin'));
        // }
        $data['kendaraan'] = $this->dashboard_model->tampil_kendaraan();
        //$data['lokasi'] = $this->dashboard_model->tampil_request();
        //$data['riwayat'] = $this->dashboard_model->tampil_update();
        //$data['kendaraan'] = $this->dashboard_model->tampil_pengguna();
        $this->template->views('v_dashboard', $data);
    }

    public function request_rute(){
        $data['lokasi'] = $this->dashboard_model->tampil_request();
         $this->template->views('v_dashboard', $data);
    }

    public function update_rute(){
        $data['riwayat'] = $this->dashboard_model->tampil_update();
         $this->template->views('v_dashboard', $data);
    }

    public function pengguna(){
        $data['kendaraan'] = $this->dashboard_model->tampil_pengguna();
         $this->template->views('v_dashboard', $data);
    }

    
}
?>