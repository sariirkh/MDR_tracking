<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class dashboard extends CI_Controller{
    public function map(){
        $this->load->view('v_detail_history');
    }
}
?>