<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
     }
     public function index()
	{
		/*
		if (ENVIRONMENT=='development') {
		$path= '/home/marcelo/Escritorio/*';
		} else {
		$path=  '/home';
		}

		exec('ls -1 '.$path, $output);
		echo "<pre>";
		print_r( $output);
		echo "</pre>";
		*/
		echo "<pre>";
		print_r(BASEPATH);
		echo "</pre>";
		
	}
}
