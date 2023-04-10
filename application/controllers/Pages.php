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
		$this->load->model("Maintenance");
	}
	public function index()
	{
		$data["meta"] = array(
			"title" => "Freelancers, Assemble! Engaging Opportunity incoming for Freelancers!",
		);
		$this->load->model("elements");
		$this->maintenance->check_n_show('pages/index', $data);
	}
	
	
	// public function login()
	// {
	// 	$this->page_status->check_n_show('pages/login');
	// }

	public function enroll()
	{
		$data["meta"] = array(
			"title" => "Freelancers, Assemble! Engaging Opportunity incoming for Freelancers!",
		);
		$this->page_status->check_n_show('pages/enroll', $data);
	}
}
