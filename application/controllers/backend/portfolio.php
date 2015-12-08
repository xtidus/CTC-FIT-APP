<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends CI_Controller {

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
		$this->load->view('backend/portfolio_summary');
	}
	
	public function details()
	{
		$this->load->view('backend/portfolio_details');
	}
	
	public function delete_fund_flow()
	{
		$fund_flow_id = $this->uri->segment(4);
		$array 		  = $this->uri->segment(5);
		$delete_fund_flow = $this->all->delete_template('id', $fund_flow_id, 'fund_flow');
		$arrcc = explode(",", $array);
		$data['array_individual_id'] = $arrcc;
		$data['success_add_fund_flow'] = '<div style="color:green; font-weight:bold; margin-top:10px">New fund flow has been added.</div>';
		$this->load->view('backend/one_pager', $data);
	}
	
	public function add_fund_flow()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$fund_date  = $this->input->post('flow_date');
			$fund_day   = date("d", strtotime($fund_date));
			$fund_month = date("m", strtotime($fund_date));
			if( $this->input->post('choose_fund_type') == "deposit" ) {
				$amount_put = str_replace(",", "", $this->input->post('flow_amount'));
			}
			else {
				$amount_put = str_replace(",", "", $this->input->post('flow_amount'));
			}
			$check_res = mysql_query(
				"
					SELECT * FROM fund_flow WHERE account_id = '".$this->input->post('choose_account')."'
					AND fund_flow_date = '".$fund_date."'
				"
			);
			if( mysql_num_rows($check_res) > 0 ) {
				$check_row = mysql_fetch_array($check_res, MYSQL_ASSOC);
				$data_fields = array(
					'fund_flow_desc'    => $this->input->post('flow_description'),
					'fund_flow_amount'  => $amount_put,
					'type_fund' 	    => $this->input->post('choose_fund_type'),
					'modified' 		    => date("Y-m-d H:i:s")
				);
				$update_fund = $this->all->update_template_two(
					$data_fields, 'account_id', $this->input->post('choose_account'), 'fund_flow_date', $fund_date, 'fund_flow'
				);
				$arrcc = explode(",", $this->input->post('hidden_arr_id'));
				$data['array_individual_id'] = $arrcc;
				$data['success_add_fund_flow'] = '<div style="color:green; font-weight:bold; margin-top:10px">New fund flow has been added.</div>';
				$this->load->view('backend/one_pager', $data);
			}
			else {
				$data_fields = array(
					'account_id' 	    => $this->input->post('choose_account'),
					'fund_flow_date'    => $this->input->post('flow_date'),
					'fund_flow_desc'    => $this->input->post('flow_description'),
					'fund_flow_amount'  => $amount_put,
					'type_fund' 	    => $this->input->post('choose_fund_type'),
					'created' 		    => date("Y-m-d H:i:s"),
					'modified' 		    => date("Y-m-d H:i:s")
				);
				$insert_fund = $this->all->insert_template($data_fields, 'fund_flow');
				$arrcc = explode(",", $this->input->post('hidden_arr_id'));
				$data['array_individual_id'] = $arrcc;
				$data['success_add_fund_flow'] = '<div style="color:green; font-weight:bold; margin-top:10px">New fund flow has been added.</div>';
				$this->load->view('backend/one_pager', $data);
			}
		}
		else {
			$this->load->view('backend/portfolio_summary');
		}
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */