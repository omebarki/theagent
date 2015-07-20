<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends MX_Controller {

    private $data = array();

    public function __construct() {
        parent::__construct();
    }

    public function index() {
    	$this->checkAccess('role', 'ta_worker', '/aauth/Bauth/logout');
		
		$data['title'] = $this->lang->line("dashboard");
		$data['page_style'] = "dashboard";
		$data['content'] = $this->load->view(
			'dashboard_tpl',
			array(
			),
			TRUE
		);

		$this->load->view('layout_tpl', $data);
    }
}