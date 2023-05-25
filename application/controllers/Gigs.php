<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gigs extends CI_Controller
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
	public function all()
	{
		$this->load->model("GigsData");
		$data["gigs"]["top"] = $this->GigsData->get_trending_gigs();


		$data["meta"]["page"] = array(
			"title" => "Freelancers, Assemble! Engaging Opportunity incoming for Freelancers!",
		);
		$this->load->view('pages/gigs/all', $data);
	}

	public function detail($gigSlug)
	{
		$data["slug"] = $gigSlug;
		$this->load->model("elements");
		$this->load->view('pages/gigs/detail', $data);
	}
	
	public function new()
	{
		$this->load->model("AppData");
		$data["slug"] = "";
		$data["meta"]["page"] = array(
			"title" => "Freelancers, Assemble! Engaging Opportunity incoming for Freelancers!",
		);
		$this->load->view('pages/gigs/detail', $data);
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
