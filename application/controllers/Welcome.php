<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    private $data = array();

    public function __construct() {
        parent::__construct();
        $this->load->library('twig');
    }

    public function index() {
        $this->data['title'] = "Twig et CodeIgniter";
        $this->data['message'] = "Je viens de Twig";
        $this->twig->display('index.html.twig', $this->data);       
    }    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */