<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
     }
     public function index()
	{
		
		
		$path= BASEPATH.'/../';
		

		exec('cd $path');
		exec('ls -1 ', $output);
		echo "<pre>";
		print_r( $output);
		echo "</pre>";
		
	}
}
