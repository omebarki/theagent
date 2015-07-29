<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/** load the CI class for Modular Extensions **/
class MX_Model extends CI_Model 
{
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('array');
	}
	
	protected function assoc($fields = NULL, $query){
		$rslts = array();
		if(is_null($fields)){
			return array_map(function(stdClass $o){return (array)$o;}, $query->result());
		}
		foreach($query->result() as $rslt){
			$rslts[] = elements($fields,(array)$rslt);
		}
		return $rslts;
	}

	protected function elements($field, $query){
		return array_map(
			function(stdClass $o) use($field){return $o->{$field};},
			$query->result()
		);
	}

	protected function element($field, $query){
		return $this->elements($field, $query)[0];
	}	
}