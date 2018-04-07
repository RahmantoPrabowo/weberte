<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator_model extends CI_Model {

	private $primary_key = 'id';
	private $table_name = 'member_reguler';

	public function get_paged_list($limit=10,$offset=0,$order_column='',$order_type='asc'){
		if(empty($order_column)||empty($order_type)){
			$this->db->order_by($this->$primary_key,'asc');
		}
		else{
			$this->db->order_by($order_column,$order_type);
		}
		return $this->db->get($this->$table_name,$limit,$offset);
	}


}
