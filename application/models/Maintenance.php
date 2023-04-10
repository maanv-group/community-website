<?php
class Maintenance extends CI_Model{
    public function check_n_show($view, $data){
        if(in_array($view,$this->config->item("offline_views"))){
            $this->load->view($view, $data);
        } else {
            $this->load->view("status/maintenance");
        }
    }
}