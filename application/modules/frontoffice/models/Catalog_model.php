<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Catalog_model extends MX_Model {
	
	public function __construct() {
        parent::__construct();
    }

    /**
	 * display catalogs on homepage
	 *
	 * @return      Array
	 */
	public function get_list_catalog($init = NULL, $filters = array()) {
		$this->db
		->select('c.id, DATE(c.dateEnd) as dateEnd, c.idSaleFruitrouge, b.name AS brandName,SUM(s.quantity) as totalStock, COUNT(p.id) as nbSku,MIN(p.price) as minPrice, MAX(p.price) as maxPrice')
		->from('catalog c')
		->join('product_family_has_catalog pfhc','pfhc.idCatalog = c.id')
		->join('brand_has_catalog bhc','bhc.idCatalog = c.id')
		->join('product_family pf','pf.id = pfhc.idProductFamily')
		->join('brand b','b.id = bhc.idBrand')
		->join('product p','p.idProductFamily = pf.id')
		->join('stock s','s.idProduct = p.id')
		->where('NOW() BETWEEN c.dateStart AND c.dateEnd')
		->where('c.enabled', 1)
		->group_by('c.idSaleFruitrouge')
		->order_by('dateStart DESC');

		//init
		if(!is_null($init)){
			$this->db->limit($init);
		}

		//filters
		if(!empty($filters)){
			foreach($filters as $key => $filter){
				$this->db->where_in($key,$filter);
			}
		}

		//var_dump($this->db->get_compiled_select());die();
		$query = $this->db->get();

		return $query->result();
	}

	/**
	 * display one catalog details on catalog page
	 *
	 * @return      Array
	 */
	public function get_catalog_details($idCatalog) {
		$this->db
		->select('c.id, DATE(c.dateEnd) as dateEnd, c.idSaleFruitrouge, c18.name AS saleName, b.name AS brandName,SUM(s.quantity) as totalStock, COUNT(p.id) as nbSku, COUNT(DISTINCT pf.id) as nbPF, MIN(p.price) as minPrice, MAX(p.price) as maxPrice, bd.description AS brandDescription, ct.*')
		->from('catalog c')
		->join('catalog_i18n c18','c18.idCatalog = c.id')
		->join('product_family_has_catalog pfhc','pfhc.idCatalog = c.id')
		->join('brand_has_catalog bhc','bhc.idCatalog = c.id')
		->join('catalog_has_contact chc','chc.idCatalog = c.id')
		->join('contact ct','ct.id = chc.idContact')
		->join('product_family pf','pf.id = pfhc.idProductFamily')
		->join('brand b','b.id = bhc.idBrand')
		->join("brand_description bd","bd.idBrand = b.id AND bd.lang='".$this->locale."'",'left')
		->join('product p','p.idProductFamily = pf.id')
		->join('stock s','s.idProduct = p.id')
		->where('NOW() BETWEEN c.dateStart AND c.dateEnd')
		->where('c.enabled', 1)
		->where('c.id', $idCatalog);
		
		//var_dump($this->db->get_compiled_select());die();
		$query = $this->db->get();

		return $query->result();
	}

	/**
	 * display one catalog products on catalog page
	 *
	 * @return      Array
	 */
	public function get_catalog_products($idCatalog) {
		$this->db
		->select('pf.reference, pf.price, pf.retailPrice, pf.sizeRange, c18.name, t18.name, p18.description, p18.name, SUM(s.quantity) as totalStock')
		->from('catalog c')
		->join('product_family_has_catalog pfhc','pfhc.idCatalog = c.id')
		->join('product_family pf','pf.id = pfhc.idProductFamily')
		->join('product p','p.idProductFamily = pf.id')
		->join('stock s','s.idProduct = p.id')
		->join('color_i18n c18',"c18.idColor = pf.idColor AND c18.lang='".$this->locale."'")
		->join('type_i18n t18',"t18.idtype = pf.idType AND t18.lang='".$this->locale."'")
		->join('product_i18n p18',"p18.idProductFamily = pf.id AND p18.lang='".$this->locale."'")
		->where('NOW() BETWEEN c.dateStart AND c.dateEnd')
		->where('c.enabled', 1)
		->where('c.id', $idCatalog)
		->group_by('pf.id');
		
		//var_dump($this->db->get_compiled_select());die();
		$query = $this->db->get();

		return $query->result();
	}	
}