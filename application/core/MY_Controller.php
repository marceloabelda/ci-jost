<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* The MX_Controller class is autoloaded as required */
class My_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		pam_auth('a','a');
	}

}
