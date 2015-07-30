<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Catalog extends MX_Controller {

    private $data = array();

    public function __construct() {
        parent::__construct();
    }

    public function index() {
    	//ACL
        $this->checkAccess('acl', 'catalog.read', '/aauth/Aauth/logout');
        
        //CATALOGS
        $post     = $this->input->post();
		$catalogs = $this->catalog->get_list_catalog($this->config_vars['catalog']['init_catalog_nb'],$post,0);
        $total    = $this->catalog->get_list_catalog(NULL,$post,0,TRUE);
        //WISH
        $wishes   = (array)$this->session->userdata('wish');
		$wishList = !empty($wishes) 
			? $this->catalog->get_list_catalog(NULL,array('id' => $wishes))
			: array();
		$actives  = array_flip(array_filter(array_unique(array_map(function (stdClass $o) use ($wishes){return in_array($o->id,$wishes) ? $o->id : '';}, $catalogs))));

		//MAPPING
        $this->data['firstname']    = $this->session->userdata('email');
		$this->data['wishList']     = $wishList;
		$this->data['filters']      = $post;
        $this->data['title']        = $this->lang->line("catalog");
		$this->data['assets']       = array(
			'js'                    => array("catalog","isInViewport.min"),
		);
		$this->data['is_full_page'] = TRUE;
		$this->data['content']      = $this->load->view(
			'catalog_tpl',
			array(
				'list_catalog'      => $catalogs,
				'actives'           => $actives,
                'total'             => $total
			),
			TRUE
		);
        //LOAD VIEW
		$this->load->view('layout_tpl', $this->data);
    }

    public function show($idCatalog){
		//ACL
        $this->checkAccess('acl', 'catalog.read', '/aauth/Aauth/logout');

        //WISH
    	$wishList                   = $this->catalog->get_list_catalog(NULL,array('id' => (array)$this->session->userdata('wish')));
    	
        //CATALOG
        $catalog_details            = $this->catalog->get_catalog_details($idCatalog);
        $catalog_products           = $this->catalog->get_catalog_products($idCatalog,$this->config_vars['catalog']['init_product_nb']);

        //MAPPING
		$this->data['firstname']    = $this->session->userdata('email');
		$this->data['wishList']     = $wishList;
		$this->data['title']        = $this->lang->line("catalog");
		$this->data['active']       = TRUE;
        $this->data['assets']       = array(
			'css'                   => array("catalog"),
			'js'                    => array("catalog","isInViewport.min"),
		);
		$this->data['page_style']   = "show_catalog";
		$this->data['content']      = $this->load->view(
			'show_catalog_tpl', 
			array(
				'details'   => $catalog_details,
				'products'  => $catalog_products,
			),
			TRUE
		);

        //LOAD VIEW
		$this->load->view('layout_tpl', $this->data);
    }

//---------------------------AJAX CALLS---------------------------------------------------

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
            		$ctlg = $this->catalog->get_list_catalog(1,array('id'=>array($idCatalog)))[0];
					$item = '<div class="owl-item">';
            		$item .= $this->load->view('frontoffice/ctlg_tpl',array('catalog'=>$ctlg,'active'=>TRUE), TRUE);
					$item .= '</div>';
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

    public function remWish($idCatalog){
        if($this->input->is_ajax_request()){
            if($this->checkAccess('role', 'dealer')){
                $this->loadModel('frontoffice/wishlist');
                if(!(bool)$this->wishlist->remove_catalog($idCatalog)){
                    $idCatalog = 0;
                }
                else{
                    $wishes = (array)$this->session->userdata('wish');
                    $wishes = array_diff($wishes, array($idCatalog));
                    $this->session->set_userdata('wish',$wishes);
                }
            }
            $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array(
                'idCatalog' => $idCatalog,
            )));
        }
    }

    public function filterCatalog(){
    	if($this->input->is_ajax_request()){
			$items = array();
            if($this->checkAccess('role', 'dealer')){
        		$ctlgs = $this->catalog->get_list_catalog($this->config_vars['catalog']['catalog_chunks'],$this->input->post(),$this->input->post('offset'));
        		foreach ($ctlgs as $ctlg) {
        			$items[] = '<div class="col-lg-4 col-sm-6 brandColumnBlock">'.$this->load->view('frontoffice/ctlg_tpl',array('catalog'=>$ctlg), TRUE).'</div>';
        		}
            }
            $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array(
            	'items'      => $items,
            )));
        }
    }

    public function filterProduct(){
        if($this->input->is_ajax_request()){
            $items = $filters = array();
            if($this->checkAccess('role', 'dealer')){
                $prods = $this->catalog->get_catalog_products($this->input->post('id'), $this->config_vars['catalog']['product_chunks'], $filters,$this->input->post('offset'));
                foreach ($prods as $prod) {
                    $items[] = $this->load->view('frontoffice/prod_tpl',array('product'=>$prod), TRUE);
                }
            }
            $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array(
                'items'      => $items,
            )));
        }
    }

    public function getInfos($idProduct){
        if($this->input->is_ajax_request()){
            $item = array();
            if($this->checkAccess('role', 'dealer')){
                $item   = $this->load->view('frontoffice/infos_tpl',array(
                    'infos'  => $this->catalog->get_infos($idProduct),
                    'images' => array('1','2','3'),
                ), TRUE);
            }
            $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array(
                'idProduct' => $idProduct,
                'item'      => $item
            )));
        }
    }     
}