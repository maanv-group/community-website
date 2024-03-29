<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
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

	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->model("maintenance");
		$this->load->model("elements");
		$data["meta"]["page"] = array(
			"title" => "Freelancers, Assemble! Engaging Opportunity incoming for Freelancers!",
		);
		$this->maintenance->check_n_show('pages/index', $data);
	}
	
	
	// public function login()
	// {
	// 	$this->maintenance->check_n_show('pages/login');
	// }

	public function enroll()
	{
		$data["meta"]["page"] = array(
			"title" => "Freelancers, Assemble! Engaging Opportunity incoming for Freelancers!",
		);
		$this->maintenance->check_n_show('pages/enroll', $data);
	}
}
