<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Publico extends Front_Controller {

	function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		
		$this->template
			->build('home', $this->data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */ 
