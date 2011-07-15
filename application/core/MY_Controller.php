<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* The MX_Controller class is autoloaded as required */
class Base_Controller extends CI_Controller
{
	public $module;
	public $controller;
	public $method;
	public function __construct()
	{
		parent::__construct();
		
		// Work out module, controller and method and make them accessable throught the CI instance
        $this->module 				= $this->router->fetch_module();
        $this->controller			= $this->router->fetch_class();
        $this->method 				= $this->router->fetch_method();
	}

}

class Front_Controller extends Base_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
		$this->data->theme = $this->template->get_theme_path();

		$this->template
			->set_layout('default.html')
			->set_partial('metadata', 'partials/metadata.html')
			->set_partial('header', 'partials/header.html')
			->set_partial('sidebar', 'partials/sidebar.html')
			->set_partial('footer', 'partials/footer.html');		
	}
}

class Authenticated_Controller extends Base_Controller {
	public function __construct()
	{
		parent::__construct();
		self::_check_access();
		$this->template->set_theme('privado');
				
		$this->data->theme = $this->template->get_theme_path();
		//$this->data->asset_url = $this->config['asset_url'];

		
		$this->template
			->set_layout('default.html')
			->set_partial('metadata', 'partials/metadata.html')
			->set_partial('header', 'partials/header.php')
			->set_partial('tabs', 'partials/tabs.php')
			->set_partial('aside', 'partials/aside.php')
			->set_partial('content-header', 'partials/content-header.html')
			->set_partial('notices', 'partials/notices.php')
			->set_partial('footer', 'partials/footer.html');
	}

	private function _check_access()
	{
	    // These pages get past permission checks
	    //$ignored_pages = array('admin/login', 'admin/logout');
	    $ignored_pages = array('users/admin/login', 'users/admin/logout');

	    // Check if the current page is to be ignored
	    $current_page = $this->uri->segment(1, '') . '/' . $this->uri->segment(2, ''). '/' . $this->uri->segment(3, 'index');

	    // Dont need to log in, this is an open page
		if(in_array($current_page, $ignored_pages))
		{
			return TRUE;
		}

		else if (!$this->user)
		{
			redirect('users/admin/login');
		}

		// Well they at least better have permissions!
		else if ($this->user)
		{
			return TRUE;
		}

		// god knows what this is... erm...
		return FALSE;
	}

}


class Admin_Controller extends Authenticated_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	private function _check_access()
	{
	    // These pages get past permission checks
	    //$ignored_pages = array('admin/login', 'admin/logout');
	    $ignored_pages = array('users/admin/login', 'users/admin/logout');

	    // Check if the current page is to be ignored
	    $current_page = $this->uri->segment(1, '') . '/' . $this->uri->segment(2, ''). '/' . $this->uri->segment(3, 'index');

	    // Dont need to log in, this is an open page
		if(in_array($current_page, $ignored_pages))
		{
			return TRUE;
		}

		else if (!$this->user)
		{
			redirect('users/admin/login');
		}

		// Admins can go straight in
		else if ($this->user->group === 'admin')
		{
			return TRUE;
		}

		// god knows what this is... erm...
		return FALSE;
	}

}
