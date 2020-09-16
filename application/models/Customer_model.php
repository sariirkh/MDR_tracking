<?php
class Customer_model extends CI_Model{
    function getAll(){
        $this->db->select('*');
        $this->db->from('login_user');
        $query = $this->db->get();
        return $query;
    }
    function input_data($data,$table){
        $this->db->insert($table,$data);
        
    }
    function getUser($username,$table){
        $username = $this->session->userdata('session_customer');
       return $this->db->get_where($table,$username);
                // $this->db->select('*');
                // $this->db->from('paket_tour');
                // $this->db->where('paket_tour.id_paket');
                // return $this->db->get()->result();
           
        // $user = $this->db->get_where('login_user', ['username' => $username])->row_array();

        // return $user;
        
    }
   function getProfil($id = null){
        $this->db->from('login_user');
        if($id != null){
            $this->db->where('username',$id);
        }
        $query = $this->db->get();
        return $query;
   }
    
    function edit_data($id = null){
        $this->db->from('login_user');
        if($id != null){
            $this->db->where('username',$id);
        }
        $query = $this->db->get();
        return $query;
        // return $this->db->get_where($table,$where);
    }
    function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    function login($user,$pass,$table){
        $this->db->select('*');
        $this->db->from('login_user');
        $this->db->where('username',$user);
        $this->db->where('password',$pass);
        $query = $this->db->get();
        return $query;
    }
    function isNotLogin(){
        return $this->session->userdata('session_customer') === null;
    }
}
?>