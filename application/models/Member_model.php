<?php
class Member_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

    public function get_membership_types(){
        $this->db->select('tbl_membership_types.*, tbl_currency.code, tbl_currency.symbol, tbl_membership_categories.category_name');
        $this->db->from('tbl_membership_types');
        $this->db->join('tbl_currency', 'tbl_membership_types.fk_currency_id = tbl_currency.id', 'left');
        $this->db->join('tbl_membership_categories', 'tbl_membership_types.fk_category_id = tbl_membership_categories.id', 'left');
        $this->db->where('tbl_membership_types.is_delete', '1');
        $query = $this->db->get();
        return $query->result_array();
    }
}