<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Account_model extends MX_Model {

	public $table;
	
	public function __construct() {
        parent::__construct();
		$this->table = 'aauth_users';
		$this->abbr  = 'au';
    }
}