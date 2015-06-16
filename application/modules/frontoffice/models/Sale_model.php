<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sale_model extends CI_Model {
	
	public function __construct() {
        parent::__construct();
		$this->load->database();
    }

	public function get_list_sales() {
		$this->db->select('catalog.*');
		$this->db->from('catalog');
		$this->db->join('brand_has_catalog br','br.idCatalog = catalog.id');
		//$this->db->join('br','br.idBrand = brand.id');
		$this->db->where('catalog.dateStart','> now()');
		$this->db->where('catalog.dateEnd','> now()');

		$query = $this->db->get();
		return $query->result();
		//echo $this->db->last_query();

	}
	
	public function get_collection() {
		$this->db->select('*');
		$this->db->from('collection');
		
		$query = $this->db->get();
		return $query->result();
	}
}