<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sale_model extends CI_Model {
	
	public function __construct() {
        parent::__construct();
		$this->load->database();
    }

	public function get_list_sales() {
		$query = $this->db
		->select('c.*')
		->from('catalog c')
		->join('brand_has_catalog bhc','bhc.idCatalog = c.id')
		->where('NOW() BETWEEN c.dateStart AND c.dateEnd')
		->get();

		return $query->result();
	}
}