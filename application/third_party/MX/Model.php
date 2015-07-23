<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/** load the CI class for Modular Extensions **/
class MX_Model extends CI_Model 
{
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}
	
	protected function hydrateArray($field, $query){
		return array_map(
			function(stdClass $o) use($field){return $o->{$field};},
			$query->result()
		);
	}

	protected function hydrateOne($field, $query){
		return $this->hydrateArray($field, $query)[0];
	}	
}