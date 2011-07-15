<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('users/ion_auth');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('users/user');
		$this->load->model('groups/group_m');
	}

	//redirect if needed, otherwise display the group list
	function index()
	{
			//set the flash data error message if there is one
			$this->data->message = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			//list the users
			$this->data->groups = $this->ion_auth->get_groups();
			
			$this->template->build('groups/admin/index', $this->data);

	}

	
	//create a new group
	function create_group()
	{
		
		$this->data->title = "Create Group";

		//validate form input
		$this->form_validation->set_rules('name', 'Nombre', 'required|xss_clean');
		$this->form_validation->set_rules('description', 'Descripcion', 'required|xss_clean');

		if ($this->form_validation->run() == true)
		{
			$name = strtolower(	$this->input->post('name')) ;
			$description = $this->input->post('description');
		}
		if ($this->form_validation->run() == true && $this->group_m->insert($_POST))
		{ //check to see if we are creating the user
			//redirect them back to the admin page
			$this->session->set_flashdata('message', "Grupo Creado");
			redirect("groups/admin", 'refresh');
		}
		else
		{ //display the create user form
			//set the flash data error message if there is one
			$this->data->message = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

			$this->data->name = array('name' => 'name',
				'id' => 'name',
				'type' => 'text',
				'value' => $this->form_validation->set_value('name'),
			);
			$this->data->description = array('name' => 'description',
				'id' => 'description',
				'type' => 'text',
				'value' => $this->form_validation->set_value('description'),
			);
		
		$this->template
			->build('groups/admin/create_group', $this->data);

		}
	}

}
