<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project extends CI_Controller
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
		$this->load->model("elements");
		$this->load->view('pages/gigs/all');
	}

	public function detail($slug)
	{
		$data["slug"] = $slug;

		$curl = curl_init();

		curl_setopt_array($curl, [
			CURLOPT_URL => "https://behanceraygorodskijv1.p.rapidapi.com/getUserWipsByUsername",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => "username=%3Chemantkarekar%3E&clientId=%3CREQUIRED%3E",
			CURLOPT_HTTPHEADER => [
				"X-RapidAPI-Host: BehanceraygorodskijV1.p.rapidapi.com",
				"X-RapidAPI-Key: e77b5b6732msha61c296c5d777afp12e166jsnfc8a32b19fbc",
				"content-type: application/x-www-form-urlencoded"
			],
		]);

		$data["api_response"] = curl_exec($curl);
		$data["api_err"] = curl_error($curl);

		curl_close($curl);
		echo "<pre>";
		print_r($data);
		die;
		// $this->load->model("elements");
		$this->load->view('pages/project/detail', $data);
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
