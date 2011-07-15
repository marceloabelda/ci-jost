<?php defined('BASEPATH') OR exit('No direct script access allowed');

// Code here is run before admin controllers
class Admin_Controller extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->benchmark->mark('admin_controller_start');
		
		// Show error and exit if the user does not have sufficient permissions
		if( ! self::_check_access() )
	    {
		  	show_error('acceso denegado');//$this->lang->line('cp_access_denied'));
		    exit;
	    }
	    		
	    //$this->template->set_theme('welcome');
		$this->data->theme = $this->template->get_theme_path();
		$this->template
			->set_layout('admin.html')
			->set_partial('metadata', 'partials/admin_metadata.html');
			
	    
	    
		$this->benchmark->mark('admin_controller_end');
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

		// Well they at least better have permissions!
		else if ($this->user)
		{
			// We are looking at the index page. Show it if they have ANY admin access at all
			if($current_page == 'admin/index' && $this->permissions)
			{
				return TRUE;
			}

			else
			{
				// Check if the current user can view that page
				 return in_array($this->module, $this->permissions);
			}
		}

		// god knows what this is... erm...
		return FALSE;
	}
}
