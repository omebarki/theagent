<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/** load the CI class for Modular Extensions **/
require dirname(__FILE__).'/Base.php';

/**
 * Modular Extensions - HMVC
 *
 * Adapted from the CodeIgniter Core Classes
 * @link	http://codeigniter.com
 *
 * Description:
 * This library replaces the CodeIgniter Controller class
 * and adds features allowing use of modules and the HMVC design pattern.
 *
 * Install this file as application/third_party/MX/Controller.php
 *
 * @copyright	Copyright (c) 2015 Wiredesignz
 * @version 	5.5
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 **/
class MX_Controller 
{
	public $autoload    = array();
	public $module_name;
	public $class_name; 
	
	public function __construct() 
	{
		$class = str_replace(CI::$APP->config->item('controller_suffix'), '', get_class($this));
		log_message('debug', $class." MX_Controller Initialized");
		Modules::$registry[strtolower($class)] = $this;	
		
		/* copy a loader instance and initialize */
		$this->load = clone load_class('Loader');
		$this->load->initialize($this);	
		
		/* autoload module items */
		$this->load->_autoloader($this->autoload);
		
		/* set module and class names */
		$this->module_name = $this->router->fetch_module();
		$this->class_name  = $this->router->fetch_class();
		
		/* set locale */
		$this->setSessionLocale();
		if( ! in_array('/'.$this->module_name.'/'.$this->class_name.'/', array(
				$this->config->item('aauth')['login_page'],
				$this->config->item('aauth')['login_page_bck']
				))
			){
			/* load module & controler locales */
			$this->loadLocales();

			/* load module & controler configs */
			$this->loadConfs();

			/* load inner module */
			$this->loadModel();
		}
	}
	
	public function __get($class) 
	{
		return CI::$APP->$class;
	}

	protected function checkAccess($type, $value, $route = NULL){
		$access = isset($this->session->userdata($type)[$value]);
		if(!$access && !is_null($route)){
			redirect($route);
		}
		return $access;
	}

	protected function setSessionLocale(){
		$language = $this->input->cookie('user_lang')
			? $this->config->config["lang_uri_abbr"][$this->input->cookie('user_lang')]
			: $this->session->userdata('site_lang');
		$locale   = '';
		if($language == 'english'){
			$locale = 'en_UK';
		}
		elseif($language == 'french'){
			$locale = 'fr_FR';
		}
		$this->session->set_userdata('site_lang', $language);
		$this->session->set_userdata('locale', $locale);
	}

	private function loadLocales(){
		$this->lang->load(array(
			$this->module_name,
			$this->class_name
		),$this->session->userdata('site_lang'));
	}

	private function loadConfs(){
		$this->config->load($this->module_name);
		$this->config->load($this->class_name);
		$this->config_vars = array();
		$this->config_vars[$this->module_name] = $this->config->item($this->module_name);
		$this->config_vars[$this->class_name] = $this->config->item($this->class_name);
	}

	private function loadModel(){
		$this->load->model($this->module_name.'/'.$this->class_name.'_model',$this->class_name);
		$this->{$this->class_name}->locale = $this->session->userdata('locale');
	}
}