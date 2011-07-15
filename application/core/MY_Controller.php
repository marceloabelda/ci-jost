<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

   function __construct()
   {
      session_start();
      parent::__construct();
      if ( !isset($_SESSION['username']) ) {
         redirect('admin');
      }
   }
 }
