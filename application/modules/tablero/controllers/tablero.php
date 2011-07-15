<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tablero extends Authenticated_Controller {

	function __construct()
	{
		parent::__construct();


	}

	function index()
	{
		$this->template->set('tab', 'tablero');
		
		$this->template
			->build('tablero', $this->data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */ 
