<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Category extends MX_Controller {

    private $data = array();

    public function __construct() {
        parent::__construct();
		$this->load->helper("url");
		$this->lang->load("common","english");
    }

    public function index() {
		
		//Charge the view inside array
		$data['title'] = "Catalog";
		$data['page_style'] = "catalog";
		$data['content'] = $this->load->view('category_tpl', '', true);
		

		//charge the view "contact" in the other view template
		$this->load->view('layout_tpl', $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */