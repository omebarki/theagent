<?php
class LanguageLoader
{
    function initialize() {
        $ci =& get_instance();
		
		if ($ci->session->userdata('site_lang') == null)
			$lang = array('site_lang'=>'english');
		else
			$lang = array('site_lang'=>$ci->session->userdata('site_lang'));
		

		//$ci->input->set_cookie($lang);
		$ci->session->set_userdata($lang);
    }
}