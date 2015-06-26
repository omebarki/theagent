<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Catalog extends MX_Controller {

    private $data = array();

    public function __construct() {
        parent::__construct();
		$this->lang->load("frontoffice",$this->session->userdata('site_lang'));
    }

    public function index() {
		$this->load->model('frontoffice/catalog_model','catalog');
		
		$data['title'] = lang("sale");
		$data['page_style'] = "homepage";
		$data['content'] = $this->load->view(
			'catalog_tpl',
			array(
				'list_catalog' => $this->catalog->get_list_catalog()
			),
			TRUE
		);

		$this->load->view('layout_tpl', $data);
    }

    public function show($idCatalog){
    	$this->load->model('frontoffice/catalog_model','catalog');
		
		$data['title'] = lang("catalog");
		$data['page_style'] = "homepage";
		$data['content'] = $this->load->view(
			'show_catalog_tpl', 
			array(
				'catalog_details'  => $this->catalog->get_catalog_details($idCatalog),
				'catalog_products' => $this->catalog->get_catalog_products($idCatalog, $this->session->userdata('locale')),
			),
			TRUE
		);

		$this->load->view('layout_tpl', $data);
    }

}