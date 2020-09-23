<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Update_rute extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Update_rute_model');
        //if($this->Admin_model->isNotLogin()) redirect('login');
    }
    
    public function index(){
        // if($this->session->userdata('status') != "login"){
        //     redirect(base_url('admin/login_admin'));
        // }
        $data['riwayat'] = $this->Update_rute_model->getAll()->result();
         $this->template->views('crud/v_update_rute', $data);
    }

}
?>