<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Wishlist_model extends MX_Model {

	public $table;
	
	public function __construct() {
        parent::__construct();
		$this->table = 'wishlist';
		$this->abbr  = 'w';
    }

	public function add_catalog($idCatalog) {
		$idDealer = $this->getDealer();

		$this->db->insert($this->table, array(
			'idDealer'  => $idDealer,
			'idCatalog' => $idCatalog 
		));

		return $this->db->affected_rows();
	}

	public function load() {
		$idDealer = $this->getDealer();

		$this->db
		->select('idCatalog')
		->from($this->table)
		->where('idDealer', $idDealer);
		
		$query = $this->db->get();
		return $this->hydrateArray('idCatalog',$query);
	}

	public function getDealer(){
		$this->db
		->select('dhc.idDealer')
		->from('dealer_has_contact dhc')
		->join('aauth_users u','u.idContact = dhc.idContact')
		->where('u.id',$this->session->userdata('id'))
		->limit(1);

		$query = $this->db->get();
		return $this->hydrateOne('idDealer', $query);
	}
}