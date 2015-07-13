<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Catalog extends MX_Controller {

    private $data = array();

    public function __construct() {
        parent::__construct();
    }

    public function index() {
    	$this->checkAcl('catalog.read','/aauth/Aauth/logout');
		
		$catalogs = $this->catalog->get_list_catalog($this->config_vars['catalog']['init_catalog_nb']);
		
		$data['title'] = $this->lang->line("sale");
		$data['page_style'] = "homepage";
		$data['content'] = $this->load->view(
			'catalog_tpl',
			array(
				'list_catalog' => $catalogs
			),
			TRUE
		);

		$this->load->view('layout_tpl', $data);
    }

    public function show($idCatalog){
		$this->checkAcl('catalog.read','/aauth/Aauth/logout');

    	$catalog_details    = $this->catalog->get_catalog_details($idCatalog);
    	$catalog_products   = $this->catalog->get_catalog_products($idCatalog);

		$data['title']      = $this->lang->line("catalog");
		$data['page_style'] = "homepage";
		$data['content']    = $this->load->view(
			'show_catalog_tpl', 
			array(
				'catalog_details'  => $catalog_details[0],
				'catalog_products' => $catalog_products,
			),
			TRUE
		);

		$this->load->view('layout_tpl', $data);
    }

}