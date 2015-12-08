<?php

class All extends CI_Model {

    function _construct()
	{
      	parent::_construct();
	}
	
	function admin_login($email, $password)
    {
        $this->db->select('*');
        $this->db->from('administrator');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $this->db->where('status', 1);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
	
	function update_setting($name, $value)
    {
        $data = array(
			'value' => $value
        );
        $this->db->where('name', $name);
        $this->db->update('setting', $data);
    }
	
	function get_all_thumbnails($attachment_id, $product_id)
    {
    	$query = $this->db->query(
        "
        	SELECT * FROM attachment
        	WHERE id != ".$attachment_id." AND foreign_id = ".$product_id." ORDER BY created DESC
        "
        );
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    
    function get_related_products($sub_category_id, $product_id)
    {
    	$query = $this->db->query(
        "
        	SELECT * FROM product
        	WHERE id != ".$product_id." AND sub_category_id = ".$sub_category_id." ORDER BY created DESC LIMIT 0,6
        "
        );
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
	
	function get_sum_amount_cart($customer_id)
    {
    	$query = $this->db->query(
        "
        	SELECT SUM(quantity*price_per_each) AS sum_cart FROM cart
        	WHERE customer_id = ".$customer_id."
        "
        );
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    
    function get_product_cart_filter_main($main_category_id)
    {
    	$query = $this->db->query(
        "
        	SELECT p.id AS product_id, p.name AS product_name, p.slug AS product_slug, p.code AS product_code, 
        	p.price AS product_price
        	FROM product p, main_category mc, sub_category sc 
        	WHERE p.sub_category_id = sc.id AND sc.main_category_id = mc.id AND mc.id = ".$main_category_id."
        "
        );
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
	
	/*--LIST FUNCTIONS--*/
    function select_template_orderby_limit($order_field, $order_value, $limit, $table) {
    	$this->db->select('*');
        $this->db->from($table);
        $this->db->order_by($order_field, $order_value);
        $this->db->limit($limit);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    
    function select_template_basic($table) {
    	$this->db->select('*');
        $this->db->from($table);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    
    function select_template($field, $field_value, $table) {
    	$this->db->select('*');
        $this->db->from($table);
        $this->db->where($field, $field_value);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    
    function select_template_w_2_conditions($field1, $field_value1, $field2, $field_value2, $table) {
    	$this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1, $field_value1);
        $this->db->where($field2, $field_value2);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    
    function select_template_w_3_conditions($field1, $field_value1, $field2, $field_value2, $field3, $field_value3, $table) {
    	$this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1, $field_value1);
        $this->db->where($field2, $field_value2);
        $this->db->where($field3, $field_value3);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    
    function select_template_w_4_conditions($field1, $field_value1, $field2, $field_value2, $field3, $field_value3, $field4, $field_value4, $table) {
    	$this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1, $field_value1);
        $this->db->where($field2, $field_value2);
        $this->db->where($field3, $field_value3);
        $this->db->where($field4, $field_value4);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    
    function select_template_with_order($field, $field_value, $table) {
    	$this->db->select('*');
        $this->db->from($table);
        $this->db->order_by($field, $field_value);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    
    function select_template_with_like_and_order($field, $field_value, $order, $order_value, $table) {
    	$this->db->select('*');
        $this->db->from($table);
        $this->db->like($field, $field_value); 
        $this->db->order_by($order, $order_value);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    
    function select_template_with_where_and_order($field, $field_value, $order, $order_value, $table) {
    	$this->db->select('*');
        $this->db->from($table);
        $this->db->where($field, $field_value);
        $this->db->order_by($order, $order_value);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    
    function select_template_with_where_limit_and_order($field, $field_value, $order, $order_value, $limit, $table) {
    	$this->db->select('*');
        $this->db->from($table);
        $this->db->where($field, $field_value);
        $this->db->order_by($order, $order_value);
        $this->db->limit($limit);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    
    function select_template_with_where_double_limit($field1, $field_value1, $field2, $field_value2, $limit, $table) {
    	$this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1, $field_value1);
        $this->db->where($field2, $field_value2);
        $this->db->limit($limit);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    
    function select_template_with_where_limitoffset_and_order(
    	$field, $field_value, $order, $order_value, $limit, $offset, $table) {
    	$this->db->select('*');
        $this->db->from($table);
        $this->db->where($field, $field_value);
        $this->db->order_by($order, $order_value);
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    /*--END OF LIST FUNCTIONS--*/
    
    /*--INSERT FUNCTIONS--*/
    function insert_template($data_fields, $table)
    {
        $this->db->insert($table, $data_fields);
    }
    /*--END OF INSERT FUNCTIONS--*/
    
    /*--UPDATE FUNCTIONS--*/   
    function update_template($data_fields, $field, $field_id, $table)
    {
        $this->db->where($field, $field_id);
        $this->db->update($table, $data_fields);
    }
    function update_template_two($data_fields, $field, $field_id, $field2, $field_id2, $table)
    {
        $this->db->where($field, $field_id);
        $this->db->where($field2, $field_id2);
        $this->db->update($table, $data_fields);
    }
    /*--END OF UPDATE FUNCTIONS*/
    
    /*--DELETE FUNCTIONS--*/
    function delete_template($field, $field_id, $table) {
        $this->db->where($field, $field_id);
        $this->db->delete($table);
	    }
    
    function delete_template_w_2_conditions($field1, $field_id1, $field2, $field_id2, $table) {
        $this->db->where($field1, $field_id1);
        $this->db->where($field2, $field_id2);
        $this->db->delete($table);
    }
    
    function delete_empty_table($table) {
        $this->db->empty_table($table);
    }
    /*--END OF DELETE FUNCTIONS--*/
    
    /*--CONSTRAINT LIST TEMPLATE--*/
    function template_constraint_details($table, $mandate_name, $category_name, $name) 
    {
        $res = mysql_query(
        	"
        		SELECT value, symbol FROM ".$table." WHERE mandate_name = '".$mandate_name."' AND category_name = '".$category_name."'
        		AND name = '".$name."'
			"
        );
        $row = mysql_fetch_array($res, MYSQL_ASSOC);
        return $row['symbol'].' '.$row['value'];
    }
    
    function echo_constraint_details($table, $mandate_name, $category_name, $name) 
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('mandate_name', $mandate_name);
        $this->db->where('category_name', $category_name);
        $this->db->where('name', $name);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    
    function compare_constraint_details($target, $actual, $symbol) 
    {
        if( $symbol == ">" ) {
	        if( $target > $actual ){
		        return 1;
	        }
	        else {
		        return 0;
	        }
        }
        else if( $symbol == "<" ) {
	    	if( $target > $actual ) {
		        return 0;
	        }
	        else {
		        return 1;
	        }
	    }
	    else if( $symbol == "≤" ) {
			if( $target >= $actual ) {
		        return 0;
	        }
	        else {
		        return 1;
	        }
		}
		else if( $symbol == "≥" ) {
			if( $target >= $actual ){
		        return 1;
	        }
	        else {
		        return 0;
	        }
		}
    }
    /*--END OF CONSTRAINT LIST TEMPLATE--*/
    
    function insert_single_pfm($account_id, $latest_calc)
    {
	    $check_res = mysql_query("SELECT * FROM single_pfm_dashboard WHERE account_id = '".$account_id."'");
	    if( mysql_num_rows($check_res) > 0 ) {
		    //update into DB
		    $data_fields = array(
			    "latest_pfm" => $latest_calc,
			    "modified" 	 => date("Y-m-d H:i:s")
		    );
		    $update_pfm = $this->all->update_template($data_fields, 'account_id', $account_id, 'single_pfm_dashboard');
		    //end of update into DB
	    }
	    else {
		    //insert into DB
		    $data_fields = array(
			    "account_id" => $account_id,
			    "latest_pfm" => $latest_calc,
			    "created" 	 => date("Y-m-d H:i:s"),
			    "modified" 	 => date("Y-m-d H:i:s")
		    );
		    $insert_pfm = $this->all->insert_template($data_fields, 'single_pfm_dashboard');
		    //end of insert into DB
	    }
    }
    
    /*--MODAL POP-UP--*/
    function modal_popup($id_div, $title_header, $query)
    {
	    $content .= '
	    	<div class="modal fade" id="'.$id_div.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  	<div class="modal-dialog" role="document" style="width:900px">
			    	<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<h4 class="modal-title" id="myModalLabel">List of '.$title_header.' details</h4>
			      		</div>
				  		<div class="modal-body">
				  			<table class="tableThirdPartyFund table table-bordered table-condensed">
								<thead>
									<tr>
										<th style="width:85px; text-align:left; color:white" bgcolor="#1e487c">Account ID</th>
										<th style="width:75px; text-align:left; color:white" bgcolor="#1e487c">ISIN</th>
										<th style="width:50px; text-align:left; color:white" bgcolor="#1e487c">Bank</th>
										<th style="width:200px; color:white" bgcolor="#1e487c">Description</th>
										<th style="width:115px; text-align:right; color:white" bgcolor="#1e487c">Market value ($)</th>
									</tr>
								</thead>
								<tbody>
		';
		
		$query_res = mysql_query($query);
		if( mysql_num_rows($query_res) > 0 ) {
			while( $query_row = mysql_fetch_array($query_res, MYSQL_ASSOC) ) {
				$content .= '
					<tr class="gradeX">
						<td><b>'.$query_row["account_id"].'</b></td>
						<td><b>'.$query_row["isin"].'</b></td>
						<td><b>'.$query_row["bank_type"].'</b></td>
						<td style="text-align:left">'.$query_row["description"].'</td>
						<td style="text-align:right">
							<b>'.number_format($query_row["market_value"], 0).'</b>
						</td>
					</tr>
				';
			}
		}
		
		$content .= '
								</tbody>
							</table>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
	    ';
	    return $content;
    }
    /*--END OF MODAL POP-UP--*/
    
    /*--TOTAL FILTERED BY USER GROUP ID--*/
    function aum_total_usegroup($usergroup_id)
    {
		$total_res = mysql_query(
			"
				SELECT SUM(CAST(REPLACE(market_value, ',', '') as DECIMAL(10,2))) AS total_aum_sum 
				FROM individual_portfolio WHERE user_group_id = ".$usergroup_id." AND description NOT LIKE 'Currency Forward%'
			"
		);
		$total_row = mysql_fetch_array($total_res, MYSQL_ASSOC);
		return $total_row["total_aum_sum"];
    }
    
    function sum_percentage_asset_total_usergroup($usergroup_id, $asset_allocation_type, $total_portfolio_value)
    {
	    //total asset
	    $asset_res = mysql_query(
			"
				SELECT SUM(CAST(REPLACE(market_value, ',', '') as DECIMAL(10,2))) AS total_asset_specific
				FROM individual_portfolio 
				WHERE asset_class IN (".$asset_allocation_type.") 
				AND user_group_id = ".$usergroup_id."
			"
		);
		$asset_row = mysql_fetch_array($asset_res, MYSQL_ASSOC);
		if( $asset_row['total_asset_specific'] == NULL ) {
            $total_acr = 0;
        }
        else {
		    $total_acr = number_format(($asset_row['total_asset_specific']/$total_portfolio_value)*100, 1);
        }
	    //end of total asset
	    return $total_acr.'%';
    }
    /*--END OF TOTAL FILTERED BY USER GROUP ID--*/
 	
 	/*--COMMON FORMAT--*/
 	function total_aum_portfolio($accids) 
 	{
	 	$tpv_res = mysql_query(
			"
				SELECT SUM(CAST(REPLACE(market_value, ',', '') as DECIMAL(10,2))) AS total_aum 
				FROM individual_portfolio WHERE account_id IN (".implode(",", $accids).")
				AND description NOT LIKE 'Currency Forward%'
			"
		);
		$tpv_row = mysql_fetch_array($tpv_res, MYSQL_ASSOC);
		$total_portfolio_value = $tpv_row['total_aum'];
		return $total_portfolio_value;
 	}
 	
 	function total_cash_portfolio($accids)
 	{
	 	$asset_cash_res = mysql_query(
			"
				SELECT SUM(CAST(REPLACE(market_value, ',', '') as DECIMAL(10,2))) 
				AS total_asset_cash 
				FROM individual_portfolio 
				WHERE asset_class IN('Cash', 'Cash and Cash Investments', 
				'Cash, Deposits & Money Market Funds')
				AND account_id IN (".implode(",", $accids).") AND category IS NULL
				AND description NOT LIKE 'Currency Forward%'
			"
		);
		$asset_cash_row = mysql_fetch_array($asset_cash_res, MYSQL_ASSOC);
		$total_acc_cash = $asset_cash_row['total_asset_cash'];
		return $total_acc_cash;
 	}
 	
 	function total_fixed_income_portfolio($accids)
 	{
	 	$asset_fi_res = mysql_query(
			"SELECT SUM(CAST(REPLACE(market_value, ',', '') as DECIMAL(10,2))) AS total_asset_fi 
			 FROM individual_portfolio 
			 WHERE asset_class IN ('Fixed Income Investments', 'Fixed Income', 'Fixed income') 
			 AND account_id IN (".implode(",", $accids).")"
		);
		$asset_fi_row = mysql_fetch_array($asset_fi_res, MYSQL_ASSOC);
		$total_acc_fi = $asset_fi_row['total_asset_fi'];
		return $total_acc_fi;
 	}
 	
 	function total_equity_portfolio($accids)
 	{
		$asset_pu_res = mysql_query(
			"SELECT SUM(CAST(REPLACE(market_value, ',', '') as DECIMAL(10,2))) AS total_asset_pu
			 FROM individual_portfolio 
			 WHERE asset_class IN ('Public Equity', 'Equity') 
			 AND account_id IN (".implode(",", $accids).")"
		);
		$asset_pu_row = mysql_fetch_array($asset_pu_res, MYSQL_ASSOC);
		$total_acc_equity = $asset_pu_row['total_asset_pu'];
		return $total_acc_equity;
	}
	
	function total_alternative_portfolio($accids)
 	{
		$asset_other_res = mysql_query(
			"SELECT SUM(CAST(REPLACE(market_value, ',', '') as DECIMAL(10,2))) AS total_asset_other
			 FROM individual_portfolio 
			 WHERE asset_class IN('alternative investment', 'alternative investments', 'Alternative Investment', 'Alternative Investments', 'Other Investments') 
			 AND account_id IN (".implode(",", $accids).") 
			 AND description NOT LIKE '%Currency Forward%'"
		);
		$asset_other_row = mysql_fetch_array($asset_other_res, MYSQL_ASSOC);
		$total_acc_alternative = $asset_other_row['total_asset_other'];
		return $total_acc_alternative;
	}
	
	function total_single_bond_portfolio($accids)
	{
		$sb_res = mysql_query(
			"
				SELECT SUM(CAST(REPLACE(market_value, ',', '') as DECIMAL(10,2))) AS total_single_bond 
				FROM individual_portfolio 
				WHERE category IN('Single Name Bonds', 'Single name bond') 
				AND asset_class IN ('Fixed Income Investments', 'Fixed Income', 'Fixed income')
				AND account_id IN (".implode(",", $accids).")
			"
		);
		$sb_row = mysql_fetch_array($sb_res, MYSQL_ASSOC);
		$total_acc_single_bond = $sb_row['total_single_bond'];
		return $total_acc_single_bond;
	}
	
	function total_bond_etf_portfolio($accids)
	{
		$bef_res = mysql_query(
			"
				SELECT SUM(CAST(REPLACE(market_value, ',', '') as DECIMAL(10,2))) AS total_bond_etf 
				FROM individual_portfolio 
				WHERE category IN('Mutual Fund Bonds', 'Mutual Fund') 
				AND asset_class IN ('Fixed Income Investments', 'Fixed Income', 'Fixed income') 
				AND grade IN('Investment Grade') AND account_id IN (".implode(",", $accids).")
			"
		);
		$bef_row = mysql_fetch_array($bef_res, MYSQL_ASSOC);
		$total_acc_bond_etf = $bef_row['total_bond_etf'];
		return $total_acc_bond_etf;
	}
	
	function total_high_yield_portfolio($accids)
	{
		$yield_res = mysql_query(
			"
				SELECT SUM(CAST(REPLACE(market_value, ',', '') as DECIMAL(10,2))) AS total_yield 
				FROM individual_portfolio 
				WHERE grade IN('High Yield')
				AND asset_class IN ('Fixed Income Investments', 'Fixed Income', 'Fixed income') 
				AND account_id IN (".implode(",", $accids).")
			"
		);
		$yield_row = mysql_fetch_array($yield_res, MYSQL_ASSOC);
		$total_acc_high_yield = $yield_row['total_yield'];
		return $total_acc_high_yield;
	}
	
	function total_alternative_fixed_income($accids)
	{
		$afm_res = mysql_query(
			"
				SELECT SUM(CAST(REPLACE(market_value, ',', '') as DECIMAL(10,2))) AS total_afm 
				FROM individual_portfolio 
				WHERE category IN('Alternatives', 'Alternative') 
				AND asset_class IN ('Fixed Income Investments', 'Fixed Income', 'Fixed income')
				AND account_id IN (".implode(",", $accids).")
			"
		);
		$afm_row = mysql_fetch_array($afm_res, MYSQL_ASSOC);
		$total_acc_afm = $afm_row['total_afm'];
		return $total_acc_afm;
	}
 	/*--END OF COMMON FORMAT--*/
 	
 	/*DUPLICATE RECORD*/
 	function duplicate_into_split_record($table, $id_field, $id, $newtable) {
	    //load the original record into an array
	    $result 		 = mysql_query("SELECT * FROM ".$table." WHERE ".$id_field." = '".$id."'");
	    while( $original_record = mysql_fetch_assoc($result) ) {
		    unset($original_record["id"]);
		    $original_array[] = $original_record;
	    }
	    $count_array = count($original_array);
	    //insert as new record in split_record table
	    for( $x=0; $x<$count_array; $x++ ) {
		    $insert_split_record = $this->all->insert_template($original_array[$x], $newtable);
	    }
	    //end of insert as new record in split_record table
	}
 	/*END OF DUPLICATE RECORD*/
 	
 	/*--ASSET ALLOCATION--*/
 	function aum_asset_allocation($account_id) 
 	{
	 	$aum_res = mysql_query(
			"
				SELECT SUM(CAST(REPLACE(market_value, ',', '') as DECIMAL(10,2))) AS total_aum 
				FROM individual_portfolio WHERE account_id = '".$account_id."'
				AND description NOT LIKE 'Currency Forward%'
			"
		);
		$aum_row = mysql_fetch_array($aum_res, MYSQL_ASSOC);
		$aum_asset_allocation = $aum_row['total_aum'];
		return $aum_asset_allocation;
 	}
 	
 	function cash_asset_allocation($account_id) 
 	{
	 	$cash_res = mysql_query(
			"
				SELECT SUM(CAST(REPLACE(market_value, ',', '') as DECIMAL(10,2))) AS total_cash FROM individual_portfolio 
				WHERE asset_class IN('Cash', 'Cash and Cash Investments', 
				'Cash, Deposits & Money Market Funds')
				AND account_id = '".$account_id."' AND category IS NULL
				AND description NOT LIKE 'Currency Forward%'
			"
		);
		$cash_row = mysql_fetch_array($cash_res, MYSQL_ASSOC);
		$cash_asset_allocation = $cash_row['total_cash'];
		return $cash_asset_allocation;
 	}
 	
 	function fi_asset_allocation($account_id) 
 	{
	 	$fi_res = mysql_query(
			"
				SELECT SUM(CAST(REPLACE(market_value, ',', '') as DECIMAL(10,2))) AS total_fi 
				FROM individual_portfolio 
				WHERE asset_class IN ('Fixed Income Investments', 'Fixed Income', 'Fixed income') 
				AND account_id = '".$account_id."'
			"
		);
		$fi_row = mysql_fetch_array($fi_res, MYSQL_ASSOC);
		$fi_asset_allocation = $fi_row['total_fi'];
		return $fi_asset_allocation;
 	}
 	
 	function equity_asset_allocation($account_id)
 	{
	 	$asset_pe_res = mysql_query(
			"
				SELECT SUM(CAST(REPLACE(market_value, ',', '') as DECIMAL(10,2))) AS total_pe
				FROM individual_portfolio 
				WHERE asset_class IN ('Public Equity', 'Equity') 
				AND account_id = '".$account_id."'
			"
		);
		$asset_pe_row = mysql_fetch_array($asset_pe_res, MYSQL_ASSOC);
		$total_acc_equity = $asset_pe_row['total_pe'];
		return $total_acc_equity;
 	}
 	
 	function alt_asset_allocation($account_id)
 	{
		$asset_alt_res = mysql_query(
			"
				SELECT SUM(CAST(REPLACE(market_value, ',', '') as DECIMAL(10,2))) AS total_alt
				FROM individual_portfolio 
				WHERE asset_class IN('alternative investment', 'alternative investments', 'Alternative Investment', 'Alternative Investments', 'Other Investments') 
				AND account_id = '".$account_id."' AND description NOT LIKE '%Currency Forward%'
			"
		);
		$asset_alt_row = mysql_fetch_array($asset_alt_res, MYSQL_ASSOC);
		$total_acc_alternative = $asset_alt_row['total_alt'];
		return $total_acc_alternative;
	}
 	/*--END OF ASSET ALLOCATION--*/
 	
 	/*--CONSTRAINT SUMMARY--*/
 	function constraint_summary()
 	{
	 	$mysql_res = mysql_query("SELECT * FROM constraint_summary WHERE model_name = 'Conservative' AND ");
 	}
 	/*--END OF CONSTRAINT SUMMARY--*/
 	
 	/*--OTHERS METHOD--*/
 	function get_account_name_portfolio($account_id)
 	{
		$getname_res = mysql_query(
			"SELECT account_name FROM individual_portfolio WHERE account_id = '".$account_id."'"
		);
		$getname_row = mysql_fetch_array($getname_res, MYSQL_ASSOC);
		$account_name = $getname_row['account_name'];
		return $account_name;
	}
	
	function get_bank_type_portfolio($account_id)
 	{
		$banktype_res = mysql_query(
			"SELECT bank_type FROM individual_portfolio WHERE account_id = '".$account_id."'"
		);
		$banktype_row = mysql_fetch_array($banktype_res, MYSQL_ASSOC);
		$bank_type = $banktype_row['bank_type'];
		return $bank_type;
	}
	
	function get_mandate_group_id_portfolio($account_id)
 	{
		$mgid_res = mysql_query(
			"SELECT mandate_group_id FROM individual_portfolio WHERE account_id = '".$account_id."'"
		);
		$mgid_row = mysql_fetch_array($mgid_res, MYSQL_ASSOC);
		$account_mgid = $mgid_row['mandate_group_id'];
		return $account_mgid;
	}
	
	function get_mandate_name_portfolio($account_id)
 	{
		$mandatename_res = mysql_query(
			"
				SELECT mg.mandate_name AS mandate_name FROM individual_portfolio ip, mandate_group mg 
				WHERE mg.id = ip.mandate_group_id AND account_id = '".$account_id."'
			"
		);
		$mandatename_row = mysql_fetch_array($mandatename_res, MYSQL_ASSOC);
		$mandate_name = $mandatename_row['mandate_name'];
		return $mandate_name;
	}
	
	function get_mandate_name_from_investment_by_id($mandate_group_id)
 	{
		$mandatename_res = mysql_query(
			"
				SELECT mg.mandate_name AS mandate_name FROM investment_parameters ip, mandate_group mg 
				WHERE mg.id = ip.mandate_group_id AND ip.mandate_group_id = ".$mandate_group_id."
			"
		);
		$mandatename_row = mysql_fetch_array($mandatename_res, MYSQL_ASSOC);
		$mandate_name = $mandatename_row['mandate_name'];
		return $mandate_name;
	}
 	/*--END OF OTHERS METHOD--*/
 	
 	/*--INVESTMENT PARAMETERS--*/
 	function get_investment_parameter($mandate_group_id, $asset_class, $value_get)
 	{
		$investment_res = mysql_query(
			"
				SELECT ".$value_get." FROM investment_parameters 
				WHERE mandate_group_id = '".$mandate_group_id."' AND asset_class = '".$asset_class."'
			"
		);
		$investment_row = mysql_fetch_array($investment_res, MYSQL_ASSOC);
		$print_value = $investment_row[$value_get];
		return $print_value;
	}
 	/*--END OF INVESTMENT PARAMETERS--*/
 	
 	/*--FORMAT STRING DATA--*/
 	function format_string_empty($string)
 	{
	 	if( $string == NULL || $string == "" || $string == "0.00" || $string == "0" ) {
			return "-";
		}
		else {
			return number_format($string, 2);	
		}
 	}
 	/*--END OF FORMAT STRING DATA--*/
 	
 	/*--LIVE DATA--*/
 	function total_portfolio_value_live($accids)
 	{
	 	//cash value
	 	$cash_res = mysql_query(
			"
				SELECT SUM( CAST(REPLACE(qty, ',', '') as DECIMAL(10,2)) * fx_rate )
				AS total_cash 
				FROM individual_portfolio 
				WHERE asset_class IN('Cash', 'Cash and Cash Investments', 'Cash, Deposits & Money Market Funds')
				AND account_id IN (".implode(",", $accids).") AND category IS NULL
				AND description NOT LIKE 'Currency Forward%'
			"
		);
		$cash_row   = mysql_fetch_array($cash_res, MYSQL_ASSOC);
		$total_cash = $cash_row['total_cash'];
		//equity value
		$equity_res = mysql_query(
			"
				SELECT SUM( closing_price_live * CAST(REPLACE(qty, ',', '') as DECIMAL(10,2)) * fx_rate ) AS total_equity 
				FROM individual_portfolio 
				WHERE asset_class IN ('Public Equity', 'Equity') AND closing_price_live != '' 
				AND account_id IN (".implode(",", $accids).")"
		);
		$equity_row   = mysql_fetch_array($equity_res, MYSQL_ASSOC);
		$total_equity = $equity_row['total_equity'];
		//fixed income value
		$fixed_income_res = mysql_query(
			"
				SELECT SUM( (CASE WHEN (category IN('Single Name Bonds', 'Single name bond')) THEN (closing_price_live * CAST(REPLACE(qty, ',', '') as DECIMAL(10,2)) * fx_rate)/100 ELSE closing_price_live * CAST(REPLACE(qty, ',', '') as DECIMAL(10,2)) * fx_rate END) ) AS total_fixed_income 
				FROM individual_portfolio 
				WHERE asset_class IN ('Fixed Income Investments', 'Fixed Income', 'Fixed income') 
				AND closing_price_live != '' AND account_id IN (".implode(",", $accids).")
			"
		);
		$fixed_income_row   = mysql_fetch_array($fixed_income_res, MYSQL_ASSOC);
		$total_fixed_income = $fixed_income_row['total_fixed_income'];
		//alternative value
		$alternative_res = mysql_query(
			"
				SELECT SUM(CAST(REPLACE(market_value, ',', '') as DECIMAL(10,2))) AS total_alternative
				FROM individual_portfolio 
				WHERE asset_class IN('alternative investment', 'alternative investments', 'Alternative Investment', 'Alternative Investments', 'Other Investments')
				AND account_id IN (".implode(",", $accids).") 
				AND description NOT LIKE '%Currency Forward%'"
		);
		$alternative_row   = mysql_fetch_array($alternative_res, MYSQL_ASSOC);
		$total_alternative = $alternative_row['total_alternative'];
		//grand total
		$total_all = $total_cash+$total_equity+$total_fixed_income+$total_alternative;
		return $total_all;
 	}
 	
 	function calculate_mktval_live($qty, $closing_price, $fx_rate)
 	{
	 	if( $fx_rate == NULL || $fx_rate == "" ) {
		 	$fxrate_used = 1;
	 	}
	 	else {
		 	$fxrate_used = $fx_rate;
	 	}
	 	$market_value = ($qty*$closing_price)*$fxrate_used;
	 	if( $market_value == NULL || $market_value == "" || $market_value == "0.00" || $market_value == "0" ) {
			return "-";
		}
		else {
			return number_format($market_value, 0);	
		}
 	}
 	
 	function calculate_mktval_single_bond_live($qty, $closing_price, $fx_rate)
 	{
	 	if( $fx_rate == NULL || $fx_rate == "" ) {
		 	$fxrate_used = 1;
	 	}
	 	else {
		 	$fxrate_used = $fx_rate;
	 	}
	 	$market_value = (($qty*$closing_price)*$fxrate_used)/100;
	 	if( $market_value == NULL || $market_value == "" || $market_value == "0.00" || $market_value == "0" ) {
			return "-";
		}
		else {
			return number_format($market_value, 0);	
		}
 	}
 	
 	function calculate_mktval_cash_live($qty, $fx_rate)
 	{
	 	if( $fx_rate == NULL || $fx_rate == "" ) {
		 	$fxrate_used = 1;
	 	}
	 	else {
		 	$fxrate_used = $fx_rate;
	 	}
	 	$market_value = $qty*$fxrate_used;
	 	if( $market_value == NULL || $market_value == "" || $market_value == "0.00" || $market_value == "0" ) {
			return "-";
		}
		else {
			return number_format($market_value, 0);	
		}
 	}
 	
 	function calculate_mktval_from_loop($qty, $closing_price, $fx_rate)
 	{
	 	$real_qty 			= str_replace(',', '.', str_replace(',', '', $qty));
	 	$real_closing_price = str_replace(',', '.', str_replace(',', '', $closing_price));
	 	if( $fx_rate == NULL || $fx_rate == "" ) {
		 	$fxrate_used = 1;
	 	}
	 	else {
		 	$fxrate_used = $fx_rate;
	 	}
	 	$market_value = ($real_qty*$real_closing_price)*$fxrate_used;
	 	if( $market_value == NULL || $market_value == "" || $market_value == "0.00" || $market_value == "0" ) {
			return "0";
		}
		else {
			return $market_value;	
		}
 	}
 	/*--END OF LIVE DATA--*/
 	
 	/*--CONSTRAINT OVERVIEW--*/
 	function get_constraint_value_by_mandate_name($mandate_name, $column_field) 
    {
        $res = mysql_query(
        	"SELECT * FROM constraint_summary WHERE model_name = '".$mandate_name."'"
        );
        $row = mysql_fetch_array($res, MYSQL_ASSOC);
        if( $row[$column_field] == 0 ) {
	        $summary = "";
        }
        else {
	        $summary = $row[$column_field];
        }
        return $summary;
    }
    
    function get_constraint_value_fixed_income($category_name, $market_value)
    {
	    if( $market_value < 5000000 ) {
		    $res = mysql_query(
		    	"SELECT below_five_million AS value_percent FROM constraint_fixed_income WHERE category_name = '".$category_name."'"
		    );
			$row = mysql_fetch_array($res, MYSQL_ASSOC);
	    }
	    else if( $market_value > 5000000 && $market_value < 8000000 ) {
		    $res = mysql_query(
		    	"SELECT five_eight_million AS value_percent FROM constraint_fixed_income WHERE category_name = '".$category_name."'"
		    );
			$row = mysql_fetch_array($res, MYSQL_ASSOC);
	    }
	    else if( $market_value > 8000000 ) {
		 	$res = mysql_query(
		 		"SELECT above_eight_million AS value_percent FROM constraint_fixed_income WHERE category_name = '".$category_name."'"
		 	);
		 	$row = mysql_fetch_array($res, MYSQL_ASSOC);   
	    }
	    return $row["value_percent"];
    }
    
    function get_constraint_value_equity($category_name, $market_value)
    {
	    if( $market_value < 5000000 ) {
		    $res = mysql_query(
		    	"SELECT below_five_million AS value_percent FROM constraint_equity WHERE category_name = '".$category_name."'"
		    );
			$row = mysql_fetch_array($res, MYSQL_ASSOC);
	    }
	    else if( $market_value > 5000000 && $market_value < 8000000 ) {
		    $res = mysql_query(
		    	"SELECT five_eight_million AS value_percent FROM constraint_equity WHERE category_name = '".$category_name."'"
		    );
			$row = mysql_fetch_array($res, MYSQL_ASSOC);
	    }
	    else if( $market_value > 8000000 ) {
		 	$res = mysql_query(
		 		"SELECT above_eight_million AS value_percent FROM constraint_equity WHERE category_name = '".$category_name."'"
		 	);
		 	$row = mysql_fetch_array($res, MYSQL_ASSOC);   
	    }
	    return $row["value_percent"];
    }
    
    function get_constraint_number_of_stock($accids, $market_value)
    {
	    //constraint number of stock
	    $mysql_res = mysql_query(
	    	"
	    		SELECT ug.group_name AS group_name FROM individual_portfolio ip, user_group ug WHERE ip.user_group_id = ug.id 
	    		AND ip.account_id IN (".implode(",", $accids).")
	    	"
	    );
	    if( mysql_num_rows($mysql_res) > 0 ) {
		    $mysql_row = mysql_fetch_array($mysql_res, MYSQL_ASSOC);
		    $group_name = $mysql_row["group_name"];
	    }
	    else {
		    $group_name = "";
	    }
	    //end of constraint number of stock
	    if( $group_name == "H Group" ) {
		    $res1 = mysql_query(
		    	"SELECT * FROM constraint_equity WHERE category_name = 'max_no_of_single_stocks' AND group_state = 'H Family'"
		    );
		    $row1 = mysql_fetch_array($res1, MYSQL_ASSOC);
		    $value_row = $row1["number_stock"];
	    }
	    else {
		    if( $market_value >= 20000000 ) {
			    $res1 = mysql_query(
		    		"SELECT * FROM constraint_equity WHERE category_name = 'max_no_of_single_stocks' AND symbol = 'bigger_than_equal'"
				);
				$row1 = mysql_fetch_array($res1, MYSQL_ASSOC);
				$value_row = $row1["number_stock"];
		    }
		    else if( $market_value < 20000000 && $market_value > 5000000 ) {
			    $res1 = mysql_query(
		    		"
		    			SELECT * FROM constraint_equity WHERE category_name = 'max_no_of_single_stocks' 
		    			AND status_between1 = '5000000' AND status_between2 = '20000000'"
				);
				$row1 = mysql_fetch_array($res1, MYSQL_ASSOC);
				$value_row = $row1["number_stock"];
		    }
		    else if( $market_value <= 5000000 ) {
			    $res1 = mysql_query(
		    		"SELECT * FROM constraint_equity WHERE category_name = 'max_no_of_single_stocks' AND symbol = 'less_than_equal'"
				);
				$row1 = mysql_fetch_array($res1, MYSQL_ASSOC);
				$value_row = $row1["number_stock"];
		    }
	    }
	    return $value_row;
    }
 	/*--END OF CONSTRAINT OVERVIEW--*/
 	
 	/*--CONSTRAINT STRATEGY INTERNAL BENCHMARK--*/
 	function get_value_internal_benchmark($mandate_name, $value_get)
 	{
		$res = mysql_query("SELECT $value_get FROM constraint_strategic_internal_benchmark WHERE model = '$mandate_name'"); 
		$row = mysql_fetch_array($res, MYSQL_ASSOC);
		return $row[$value_get];
 	}
 	
 	function get_minmax_equity($mandate_id, $value_get)
 	{
		$res = mysql_query(
			"SELECT $value_get FROM investment_parameters WHERE mandate_group_id = '$mandate_id' AND asset_class = 'Equities'"
		);
		$row = mysql_fetch_array($res, MYSQL_ASSOC);
		return $row[$value_get];
 	}
 	
 	function get_value_constraint_summary($model_name, $value_get)
 	{
		$res = mysql_query("SELECT $value_get FROM constraint_summary WHERE model_name = '$model_name'"); 
		$row = mysql_fetch_array($res, MYSQL_ASSOC);
		return $row[$value_get];
 	}
 	/*--END OF CONSTRAINT STRATEGY INTERNAL BENCHMARK--*/
 	
 	/*--ONE-PAGER--*/
 	function get_gainloss_percent_base($ugl, $current_cost, $mode)
 	{
		$calculate = ($ugl/$current_cost)*100;
		if( $mode == "TEXT" ) {
			if( $calculate == "" || $calculate == NULL || $calculate == 0 || $calculate == "0.00" ) {
				$value .= '<span style="color:black">';
				$value .= '-';
				$value .= '</span>';
			}
			else {
			 	if( $calculate < 0 ) {
					$value .= '<span style="color:red">';
					$value .= number_format($calculate, 1).' %';
					$value .= '</span>';
				}
				else {
					$value .= '<span style="color:black">';
					$value .= number_format($calculate, 1).' %';
					$value .= '</span>';
				}
			}
		}
		else if( $mode == "VALUE" ) {
			$value = $calculate;
		}
		return $value;
 	}
 	
 	function get_gainloss_percent_issue($closing_price, $unit_cost, $mode)
 	{
	 	if( $closing_price == 0.00 || $closing_price == "" ) {
		 	$calculate = 0.0;
	 	}
	 	else {
		 	$calculate = (($closing_price-$unit_cost)/$unit_cost)*100;	
	 	}
	 	if( $mode == "TEXT" ) {
		 	if( $calculate == "" || $calculate == NULL || $calculate == 0 || $calculate == "0.00" ) {
				$value .= '<span style="color:black">';
				$value .= '-';
				$value .= '</span>';
			}
			else {
				if( $calculate < 0 ) {
					$value .= '<span style="color:red">';
					$value .= number_format($calculate, 1).' %';
					$value .= '</span>';
				}
				else {
					$value .= '<span style="color:black">';
					$value .= number_format($calculate, 1).' %';
					$value .= '</span>';
				}
			}
		}
		else if( $mode == "VALUE" ) {
			$value = $calculate;
		}
		return $value;
 	}
 	/*--END OF ONE-PAGER--*/
 	
}
?>