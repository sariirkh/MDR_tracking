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
    function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }

    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
  //function get_kendaraan($id_kendaraan){
    //  $query=this->db->get_where('kendaraan', array('id_kendaraan'->$id_kendaraan));
     // return $query;
      
 // }
}