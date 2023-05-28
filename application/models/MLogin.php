<?php
class MLogin extends CI_Model{
    function __construct()
    {
        
    }
    public function isvalidate($username, $password){
        $query = $this->db->query("SELECT * FROM users WHERE `username` = " . $username . " AND `password` = " . $password);
        $result = $query->result();
        if($result)
            return true;
        else
            return false;
    }
}