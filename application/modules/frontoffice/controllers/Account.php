<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Account extends MX_Controller {

    private $data = array();

    public function __construct() {
        parent::__construct();
    }

    public function index() {
		
		//ACL
        $this->checkAccess('role', 'dealer', '/aauth/Aauth/logout');

        //WISH
        $this->loadModel('frontoffice/catalog');
    	$wishList                   = $this->catalog->get_list_catalog(NULL,array('id' => (array)$this->session->userdata('wish')));

        //MAPPING
		$this->data['firstname']    = $this->session->userdata('email');
		$this->data['wishList']     = $wishList;
		$this->data['active']       = TRUE;
		$this->data['title']        = $this->lang->line("account");
        $this->data['assets']       = array(
			'css'                   => array("account"),
			'js'                    => array(),
		);
		$this->data['content']      = $this->load->view(
			'account_tpl', 
			array(
			),
			TRUE
		);

        //LOAD VIEW
		$this->load->view('layout_tpl', $this->data);
    }
}