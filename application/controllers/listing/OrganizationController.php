<?php 


class OrganizationController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();	
		$this->load->model("global/Maintenance");
	}

	public function single($slug){
		switch ($slug) {
			case 'wa43-ea2z4otujicvoak9':
			case 'digital-room':
				$data["meta"]["page"] = array(
					"title" => "Best Affordable Digital Solution in Mumbai - Digital Room",
				);
				$data['data'] = [
					'id' => "wa43-ea2z4otujicvoak9"
				];
				$data["page"] = array(
					"title" => "Best Affordable Digital Solution in Mumbai - Digital Room",
				);
				$this->Maintenance->check_n_show('orgnaizations/dr', $data);
				break;
			
			default:
				# code...
				break;
		}
	}
}
