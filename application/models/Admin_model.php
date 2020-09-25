<?php
class Admin_model extends CI_Model{
    
    function getAll(){
        $this->db->select('*');
        $this->db->from('login_admin');
        $query = $this->db->get();
        return $query;
    }
    function input_data($data,$table){
        $this->db->insert($table,$data);
        
    }
    function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }
    function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    function cek_login($table,$where){
       return $this->db->get_where($table,$where);
    }


    //LOGIN
    function login($user,$pass,$table){
        $this->db->select('*');
        $this->db->from('login_admin');
        $this->db->where('user_admin',$user);
        $this->db->where('password',$pass);
        $query = $this->db->get();
        return $query;
    }
    function isNotLogin(){
        return $this->session->userdata('session_admin') === null;
    }

    // function get_daftar(){
    //     $hsl=$this->db->get('daftar');
    //     return $hsl;
    //   }
    //   function get_all_produk() {
    //         $this->datatables->select('id_admin, nama_admin, user_admin, password, email, level');
    //         $this->datatables->from('login_admin');
    //         $this->datatables->join('kategori', 'barang_kategori_id=kategori_id');
    //         $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-kode="$1" data-nama="$2" data-harga="$3" data-kategori="$4">Edit</a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-kode="$1">Hapus</a>','barang_kode,barang_nama,barang_harga,kategori_id,kategori_nama');
    //         return $this->datatables->generate();
    //   }
   
}
?>