<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bye extends MY_Controller {

	public function index()
	{
		session_destroy();
		$this->load->view('bye_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
