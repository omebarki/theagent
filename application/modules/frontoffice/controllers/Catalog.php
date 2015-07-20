<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Catalog extends MX_Controller {

    private $data = array();

    public function __construct() {
        parent::__construct();
    }

    public function index() {
    	$this->checkAccess('acl', 'catalog.read', '/aauth/Aauth/logout');

		$catalogs = $this->catalog->get_list_catalog($this->config_vars['catalog']['init_catalog_nb']);
		$wishList = $this->catalog->get_list_catalog(NULL,array('c.id' => (array)$this->session->userdata('wish')));
		$actives  = array_filter(array_unique(array_map(function (stdClass $o) use ($wishList){return in_array($o->id,$wishList) ? $o->id : '';}, $catalogs)));

		$this->data['firstname']    = $this->session->userdata('email');
		$this->data['wishList']     = $wishList;
		$this->data['title']        = $this->lang->line("catalog");
		$this->data['page_style']   = "catalog";
		$this->data['is_full_page'] = true;
		$this->data['content']      = $this->load->view(
			'catalog_tpl',
			array(
				'list_catalog'      => $catalogs,
				'actives'           => $actives
			),
			TRUE
		);

		$this->load->view('layout_tpl', $this->data);
    }

    public function show($idCatalog){
		$this->checkAcl('catalog.read','/aauth/Aauth/logout');

    	$catalog_details            = $this->catalog->get_catalog_details($idCatalog);
    	$catalog_products           = $this->catalog->get_catalog_products($idCatalog);

		$this->data['firstname']    = $this->session->userdata('id');
		$this->data['wishList']     = $wishList;
		$data['title']              = $this->lang->line("catalog");
		$data['page_style']         = "show_catalog";
		$data['content']            = $this->load->view(
			'show_catalog_tpl', 
			array(
				'catalog_details'   => $catalog_details[0],
				'catalog_products'  => $catalog_products,
			),
			TRUE
		);

		$this->load->view('layout_tpl', $data);
    }
}