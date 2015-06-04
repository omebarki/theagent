<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Category extends MX_Controller {

    private $data = array();

    public function __construct() {
        parent::__construct();
		$this->lang->load("frontoffice",$this->session->userdata('site_lang'));
    }

    public function index() {
		
		$data['title'] = "Catalog";
		$data['page_style'] = "catalog";
		$data['content'] = $this->load->view('category_tpl', '', true);
		
		$this->load->view('layout_tpl', $data);
    }
}