<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Security_search extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('backend/security_search');
	}
	
	public function find_search()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$choose_asset_class = $this->input->post("choose_asset_class");
			$choose_value_type  = $this->input->post("choose_value_type");
			$enter_value 		= $this->input->post("enter_value");
			redirect("backend/security_search/index/".$choose_asset_class."/".$choose_value_type."/".$enter_value."");
		}
		else {
			redirect("backend/security_search");
		}
	}
	
	public function print_format_result()
	{
		$this->load->view('backend/print_format/security_search_format');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */