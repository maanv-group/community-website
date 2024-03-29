<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Marketing extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function collabora()
	{
		$this->load->model("maintenance");
		$this->load->model("elements");
		$data["meta"]["page"] = array(
			"title" => "Freelancers, Assemble! Engaging Opportunity incoming for Freelancers!",
		);
		$this->maintenance->check_n_show('pages/landing/initial-01', $data);
	}

	public function end_user()
	{
		$data["meta"]["page"] = array(
			"title" => "Freelancers, Assemble! Engaging Opportunity incoming for Freelancers!",
		);
		$this->load->model("elements");
		$this->load->view('pages/landing/initial-02', $data);
	}

	// public function login()
	// {
	// 	$this->load->view('pages/login');
	// }

	// public function enroll()
	// {
	// 	$this->load->view('pages/enroll');
	// }
}
