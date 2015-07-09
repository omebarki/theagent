<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends MX_Controller {

    private $data = array();

    public function __construct() {
        parent::__construct();
		$this->lang->load("frontoffice",$this->session->userdata('site_lang'));
    }

    public function index() {
		$this->load->view('login_tpl',array(), TRUE);
    }

	public function login() {

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */