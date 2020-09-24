<?php
class History_model extends CI_Model{
    
    function getAll(){
        $this->db->select('*');
        $this->db->from('riwayat');
        $this->db->join('lokasi', 'riwayat.id_riwayat=lokasi.id_lokasi');
        $this->db->join('kendaraan', 'lokasi.id_lokasi=kendaraan.id_kendaraan');
        $query = $this->db->get();
        return $query;
    }

}
?>