<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class map extends CI_Controller{
    public function index(){
        $this->load->view('map/index');
    }
}

?>