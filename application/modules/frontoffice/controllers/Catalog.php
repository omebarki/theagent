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
    	$post     = $this->input->post();
    	$filters  = array();
    	if(!empty($post)){
    		
    	}
		$catalogs = $this->catalog->get_list_catalog($this->config_vars['catalog']['init_catalog_nb'],$filters);
		$wishes   = (array)$this->session->userdata('wish');
		$wishList = !empty($wishes) 
			? $this->catalog->get_list_catalog(NULL,array('c.id' => $wishes))
			: array();

		$actives  = array_flip(array_filter(array_unique(array_map(function (stdClass $o) use ($wishes){return in_array($o->id,$wishes) ? $o->id : '';}, $catalogs))));

		$this->data['firstname']    = $this->session->userdata('email');
		$this->data['wishList']     = $wishList;
		$this->data['title']        = $this->lang->line("catalog");
		$this->data['assets']       = array(
			'js'                    => array("catalog"),
		);
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
		$this->checkAccess('acl', 'catalog.read', '/aauth/Aauth/logout');

    	$wishList                   = $this->catalog->get_list_catalog(NULL,array('c.id' => (array)$this->session->userdata('wish')));
    	$catalog_details            = $this->catalog->get_catalog_details($idCatalog);
    	$catalog_products           = $this->catalog->get_catalog_products($idCatalog);

		$this->data['firstname']    = $this->session->userdata('id');
		$this->data['wishList']     = $wishList;
		$this->data['title']        = $this->lang->line("catalog");
		$this->data['assets']       = array(
			'css'                   => array("catalog"),
			'js'                    => array("catalog"),
		);
		$this->data['page_style']   = "show_catalog";
		$this->data['content']      = $this->load->view(
			'show_catalog_tpl', 
			array(
				'catalog_details'   => $catalog_details[0],
				'catalog_products'  => $catalog_products,
			),
			TRUE
		);

		$this->load->view('layout_tpl', $this->data);
    }

	public function addWish($idCatalog){
		if($this->input->is_ajax_request()){
			$item = "";
            if($this->checkAccess('role', 'dealer')){
            	$this->loadModel('frontoffice/wishlist');
            	if(!(bool)$this->wishlist->add_catalog($idCatalog)){
            		$idCatalog = 0;
            	}
            	else{
            		$wishes = (array)$this->session->userdata('wish');
            		$wishes[] = $idCatalog;
            		$this->session->set_userdata('wish',$wishes);
            		$ctlg = $this->catalog->get_list_catalog(1,array('c.id'=>array($idCatalog)))[0];
            		$item = $this->load->view('frontoffice/ctlg_tpl',array('catalog'=>$ctlg), TRUE);
            	}
            }
            $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array(
            	'idCatalog' => $idCatalog,
            	'item'      => $item,
            )));
        }
    }    
}