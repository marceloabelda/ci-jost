<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Opciones extends Authenticated_Controller {

	function __construct()
	{
		parent::__construct();


	}

	function index()
	{
		$this->template->set('tab', 'opciones');
		
		$this->template
			->build('opciones', $this->data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */ 
