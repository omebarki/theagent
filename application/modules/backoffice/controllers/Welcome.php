<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends MX_Controller {

    private $data = array();

    public function __construct() {
        parent::__construct();
		$this->load->helper('url');
		$this->lang->load("common","english");
		
    }

    public function index() {

        //$this->data['bootstrap'] = base_url("assets/css/bootstrap.css");
		$this->load->view('welcome_message');
    }    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */