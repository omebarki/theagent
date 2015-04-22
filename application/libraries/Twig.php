<?php
if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class Twig
{
	private $CI;
	private $_twig;
	private $_template_dir;
	private $_cache_dir;

	/**
	 * Constructor
	 *
	 */
	function __construct($debug = false)
	{
		$this->CI =& get_instance();
		$this->CI->config->load('twig');
				
		log_message('debug', "Twig Autoloader Loaded");

		Twig_Autoloader::register();

		//HMVC patch by joseayram
		//$template_module_dir = APPPATH.'modules/'.$this->CI->router->fetch_module().'/views/';
		$template_global_dir= $this->CI->config->item('template_dir');
		$this->_template_dir = array($template_global_dir);

		//end HMVC patch 

		
		$this->_cache_dir = $this->CI->config->item('cache_dir');

		$loader = new Twig_Loader_Filesystem($this->_template_dir);

		$this->_twig = new Twig_Environment($loader, array(
                'cache' => $this->_cache_dir,
                'debug' => $debug,
		));
		
	        foreach(get_defined_functions() as $functions) {
            		foreach($functions as $function) {
                		$this->_twig->addFunction($function, new Twig_Function_Function($function));
            		}
        	}
                
            
	}

	public function add_function($name) 
	{
		$this->_twig->addFunction($name, new Twig_Function_Function($name));
	}

	public function render($template, $data = array()) 
	{
		$template = $this->_twig->loadTemplate($template);
		return $template->render($data);
	}

	public function display($template, $data = array()) 
	{
		$template = $this->_twig->loadTemplate($template);
		$template->display($data);
	}
}