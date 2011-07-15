<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Public_Controller extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->benchmark->mark('public_controller_start');
		$this->data->theme = $this->template->get_theme_path();
		$this->template
			->set_layout('public.html')
			->set_partial('metadata', 'partials/metadata.html')
			->set_partial('header', 'partials/header.html')
			->set_partial('sidebar', 'partials/sidebar.html')
			->set_partial('footer', 'partials/footer.html');

		$this->benchmark->mark('public_controller_end');
		
	}
	
}
