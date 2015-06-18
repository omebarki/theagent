<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sale extends MX_Controller {

    private $data = array();

    public function __construct() {
        parent::__construct();
		$this->lang->load("frontoffice",$this->session->userdata('site_lang'));
    }

    public function index() {
		$this->load->model('frontoffice/sale_model','sale');
		$list_sale = $this->sale->get_list_sales();
		
		$data['title'] = "Sale";
		$data['page_style'] = "homepage";
		$data['content'] = $this->load->view('sale_tpl', '', TRUE);

		$this->load->view('layout_tpl', $data);
    }

}