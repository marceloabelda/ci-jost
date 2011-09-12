<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Escritorio extends MY_Controller {
   public function __construct()
   {
      parent::__construct();
      
   }

	public function index()
	{
		
		$this->template
			->set_layout('default-layout.html')
			->set_partial('metadata', 'partials/metadata.html')
			->set_partial('header', 'partials/header.php')
			->set_partial('menu', 'partials/menu.php')
			->set_partial('aside', 'partials/aside.php')
			->set_partial('content-header', 'partials/content-header.html')
			->set_partial('content-notices', 'partials/content-notices.php')
			->set_partial('footer-script', 'partials/footer-script.php')
			->set_partial('footer', 'partials/footer.html');
		
		$this->template
			->set('content_header', 'Escritorio')
			->set('username',$_SESSION['username'])
			->set('dominio',$_SESSION['dominio']);
			
		$this->template
			->build('escritorio');
		
		
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
