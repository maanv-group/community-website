<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
        $this->load->model("maintenance");
	}

    /* Call as a View */
    public function signin()
	{
		$this->load->model("elements");
		$data["meta"]["page"] = array(
			"title" => "Login | Collabora Community",
		);
		$this->maintenance->check_n_show('pages/auth/login', $data);
	}

    public function signup()
    {
        $this->load->model("elements");
        $data["meta"]["page"] = array(
            "title" => "Login | Collabora Community",
        );
        $this->maintenance->check_n_show('pages/auth/register', $data);
    }

    /* Call as URL */
    public function login()
	{
		$this->load->library("form_validation");
        $this->form_validation->set_rules('username', 'Username', 'required|alpha');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[12]');
        $this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");

        if($this->form_validation->run()){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            $this->load->model("mlogin");
            if($this->mlogin->isvalidate($username, $password)){
                $this->load->library("session");
                $this->session->set_userdata("id", $username);
            } else{
                echo "Data Mismatch!";
            }
        }
	}

    public function logout()
	{
		$this->load->model("elements");
		$data["meta"]["page"] = array(
			"title" => "Login | Collabora Community",
		);
		$this->maintenance->check_n_show('pages/auth/login', $data);
	}

    public function register($referal_code)
    {
        $this->load->model("elements");
        $data["meta"]["page"] = array(
            "title" => "Login | Collabora Community",
        );
        $this->maintenance->check_n_show('pages/auth/register', $data);
    }

}