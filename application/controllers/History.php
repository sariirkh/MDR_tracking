<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class History extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('History_model');
        //if($this->Admin_model->isNotLogin()) redirect('login');
    }
    
    public function index(){
        // if($this->session->userdata('status') != "login"){
        //     redirect(base_url('admin/login_admin'));
        // }
        $data['riwayat'] = $this->History_model->getAll()->result();
         $this->template->views('crud/v_history', $data);
    }

}
?>