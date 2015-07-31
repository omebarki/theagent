<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends MX_Controller {

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
		$this->data['title']        = $this->lang->line("register");
        $this->data['assets']       = array(
			'css'                   => array('register'),
			'js'                    => array(),
		);
		$this->data['content']      = $this->load->view(
			'register_tpl', 
			array(
			),
			TRUE
		);

        //LOAD VIEW
		$this->load->view('layout_tpl', $this->data);
    }
}