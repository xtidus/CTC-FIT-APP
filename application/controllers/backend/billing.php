<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Billing extends CI_Controller {

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
	public function __construct()
    {
		parent::__construct();
		$this->load->library('Spreadsheet_Excel_Reader');
		$this->load->model('bank');
    }
    
	public function index()
	{
		$this->load->view('backend/billing_index');
	}
	
	public function history()
	{
		$this->load->view('backend/billing_history');
	}
	
	public function fee_schedule()
	{
		$this->load->view('backend/billing_fee_schedule');
	}
	
	public function fee_schedule_process()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$archivo  = $_FILES['fee_schedule_file']['tmp_name'];
			$data 	  = new Spreadsheet_Excel_Reader($archivo);
			$filename = pathinfo($_FILES['fee_schedule_file']['name'], PATHINFO_FILENAME);
			$total_rows = $data->rowcount($sheet_index=0);
			$details = array();
			//empty data
			$this->all->delete_empty_table("billing_fee_schedule");
			//end of empty data
			for($i = 2; $i<=$total_rows; $i++) {
				if( $data->val($i,'B') != "" && $data->val($i,'C') != "" ) {
					$details['first_million'] 				   = trim(str_replace("%", "", $data->val($i,'A')));
					$details['tier_fees_percent'] 			   = trim(str_replace("%", "", $data->val($i,'B')));
					$details['annual_management_fees_percent'] = trim(str_replace("%", "", $data->val($i,'C')));					
					$details['created'] 				  	   = date("Y-m-d H:i:s");
					$details['modified'] 				  	   = date("Y-m-d H:i:s");
					$this->bank->insert_billing_fee_schedule($details);
				}
			}
			$this->session->set_flashdata(
				'success_update_fee_schedule', 
				'<div style="color:green; font-weight:bold; margin-top:10px">File has been uploaded successfully.</div>'
			);
			redirect("backend/billing/fee_schedule");
		}
		else {
			redirect("backend/billing/fee_schedule");
		}
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */