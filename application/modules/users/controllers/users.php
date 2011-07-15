<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Users extends Authenticated_Controller {

	function __construct()
	{
		parent::__construct();

	}

	//redirect if needed, otherwise display the user list
	function index()
	{
			$this->template->build('users/index', $this->data);
	}

	//log the user in
	function login()
	{		
			
		$this->data->title = "Login";

		//validate form input
		$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run())
		{ //check to see if the user is logging in
			
			
			if (pam_auth($this->input->post('email'), $this->input->post('password')))
			{ //if the login is successful
				redirect('users', 'refresh');
			}
			else
			{ //if the login was un-successful
				//redirect them back to the login page
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('users/admin/login', 'refresh'); //use redirects instead of loading views for compatibility with MY_Controller libraries
			}
		}
		else
		{  //the user is not logging in so display the login page
			//set the flash data error message if there is one
			$this->data->message = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			$this->data->email = array('name' => 'email',
				'id' => 'email',
				'type' => 'text',
				'value' => $this->form_validation->set_value('email'),
			);
			$this->data->password = array('name' => 'password',
				'id' => 'password',
				'type' => 'password',
			);

			$this->load->view('users/users/login', $this->data);
		}
	}

	//log the user out
	function logout()
	{
		$this->data->title = "Logout";

		//log the user out
		//$logout = $this->ion_auth->logout();

		//redirect them back to the page they came from
		redirect(base_url(), 'refresh');
	}
}
