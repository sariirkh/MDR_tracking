<?php
class rute_model extends CI_Model{
    
    function getAll(){
        $this->db->select('*');
        $this->db->from('lokasi');
        $this->db->join('kendaraan','lokasi.id_lokasi=kendaraan.id_kendaraan');
        $query = $this->db->get();
        return $query;
    }
    function input_data($data,$table){
        $this->db->insert($table,$data);
        
    }
  
}