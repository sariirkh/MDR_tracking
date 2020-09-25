<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller{
    function __construct(){
        parent::__construct();
        
   // $this->load->library('datatables');
        $this->load->model('Admin_model');
        if($this->Admin_model->isNotLogin()) redirect('login');
    }
    
    public function index(){
        // if($this->session->userdata('status') != "login"){
        //     redirect(base_url('admin/login_admin'));
        // }
        $data['user'] = $this->Admin_model->getAll()->result();
         $this->template->views('crud/data_admin', $data);
    }
    /*public function data_admin(){
        // if($this->session->userdata('status') != "login"){
        //     redirect(base_url('admin/login_admin'));
        // }
        $data['user'] = $this->Admin_model->getAll()->result();
         $this->template->views('crud/data_admin', $data);
    }*/

    public function edit($id_admin){
        $where = array('id_admin' => $id_admin);
        $data['user'] = $this->Admin_model->edit_data($where, 'login_admin')->result();
        $this->template->views('crud/edit_admin',$data);
    }
    public function hapus($id_admin){
        $where = array('id_admin' => $id_admin);
        $this->Admin_model->hapus_data($where,'login_admin');
        redirect('admin/index');
    }
    
    public function register_admin(){
        $this->load->view('admin/_template/head');
        //$this->load->view('admin/_template/topbar');
        $this->load->view('admin/_template/js');
        $this->load->view('register_admin');
        //$this->load->view('admin/_template/footer');
    }
    public function proses_regis(){
        $nama_admin = $this->input->post('nama_admin');
        $user_admin = $this->input->post('user_admin');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $level = $this->input->post('level');

        $data = array(
            'nama_admin' => $nama_admin,
            'user_admin' => $user_admin,
            'password' => $password,
            'email' => $email,
            'level' => 'admin'
        );


        $this->Admin_model->input_data($data, 'login_admin');
        redirect('login');
    }

    public function update(){
        $id_admin = $this->input->post('id_admin');
        $nama_admin = $this->input->post('nama_admin');
        $user_admin = $this->input->post('user_admin');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $level = $this->input->post('level');

        $data = array(
            'nama_admin' => $nama_admin,
            'user_admin' => $user_admin,
            'password' => $password,
            'email' => $email,
            'level' => $level
        );

        $where = array(
            'id_admin' => $id_admin
        );

        $this->Admin_model->update_data($where,$data,'login_admin');
        redirect('admin');
    }
    public function input(){
        $nama_admin = $this->input->post('nama_admin');
        $user_admin = $this->input->post('user_admin');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $level = $this->input->post('level');

        $data = array(
            'nama_admin' => $nama_admin,
            'user_admin' => $user_admin,
            'password' => $password,
            'email' => $email,
            'level' => $level
        );

        $this->Admin_model->input_data($data, 'login_admin');
        redirect('admin/index');
    }
    public function tambah(){
        //menampilkan tambah_mahasiswa
        $this->template->views('crud/tambah_admin');
    }



    // function daftar(){
    //     $x['daftar']=$this->Admin_model->get_daftar();
    //     $this->load->view('crud/data_admin',$x);
    //   }
    
    //   function get_guest_json() { //data data produk by JSON object
    //     header('Content-Type: application/json');
    //     echo $this->Admin_model->get_all_produk();
    //   }
    
    //   function simpan(){ //function simpan data
    //     $data=array(
    //       'id_admin'     => $this->input->post('id_admin'),
    //       'nama_admin'     => $this->input->post('nama_admin'),
    //       'user_admin'    => $this->input->post('user_admin'),
    //       'password' => $this->input->post('password'),
    //       'email' => $this->input->post('email'),
    //       'level' => $this->input->post('level')
    //     );
    //     $this->db->insert('login_admin', $data);
    //     redirect('Admin');
    //   }
    
    //   function update(){ //function update data
    //     $id=$this->input->post('id_admin');
    //     $data=array(
    //       'nama_admin'     => $this->input->post('nama_admin'),
    //       'user_admin'    => $this->input->post('user_admin'),
    //       'password' => $this->input->post('password'),
    //       'email' => $this->input->post('email'),
    //       'level' => $this->input->post('level')
    //     );
    //     $this->db->where('id_admin',$id);
    //     $this->db->update('login_admin', $data);
    //     redirect('Admin');
    //   }
    
    //   function delete(){ //function hapus data
    //     $kode=$this->input->post('id_admin');
    //     $this->db->where('id_admin',$id);
    //     $this->db->delete('login_admin');
    //     redirect('Admin');
    //   }


}
?>