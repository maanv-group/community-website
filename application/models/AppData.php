<?php
class AppData extends CI_Model{
    public function __construct()
    {
        $db_obj = $this->load->database('production',TRUE);
        if($db_obj->conn_id){
            // echo "Connected";
        }else{
            echo "Database has not been initialized!";
            die;
        }   
    }
    public function password_modify($password){

    }
    public function insert_data(){
        $data = array(
            'contact_no' => $this->input->post('contact_no'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'role' => $this->input->post('role'),
            'last_active' => "on " . date("d F Y")." at ".date("h:i:s A")
        );
    }
}
