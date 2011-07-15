<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* The MX_Controller class is autoloaded as required */
class MY_Controller extends CI_Controller
{
	public $module;
	public $controller;
	public $method;
	function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(true);
		
		//probamos los benchmark
		$this->benchmark->mark('my_controller_start');
		
		
		// Load the user model and get user data
        $this->load->library('users/ion_auth');

		$this->user = $this->ion_auth->get_user();
		
		// Work out module, controller and method and make them accessable throught the CI instance
        $this->module 				= $this->router->fetch_module();
        $this->controller			= $this->router->fetch_class();
        $this->method 				= $this->router->fetch_method();
		$this->benchmark->mark('my_controller_end');
	}

}
