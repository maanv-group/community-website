<?php
class Maintenance extends CI_Model{
    function __construct()
    {
        
    }
    public function check_n_show($view, $data){
        if(in_array($view,$this->config->item("offline_views"))){
            $this->load->view("status/maintenance", $data);
        } else {
            $this->load->view($view, $data);
        }
    }
}