<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

   public function __construct()
   {
      session_start();
      parent::__construct();

   }

public function index()
   {
      if ( isset($_SESSION['username']) ) {
         redirect('escritorio');
      }

      $this->load->library('form_validation');
      $this->form_validation->set_rules('email_address', 'Email Address or Username', 'required|min_length[4]');
      $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
		
		sleep(5);
		
      if ( $this->form_validation->run() !== false ) {
         // then validation passed. Get from db

         $res = $this
                  ->login_model
                  ->verify_user(
                     $this->input->post('email_address'),
                     $this->input->post('password')
                  );

         if ( $res !== false ) {
            $_SESSION['username'] = $this->input->post('email_address');
            $_SESSION['dominio'] = $this->login_model->get_dominio();
            redirect('escritorio');
         }

      }

      $this->load->view('login_view');
   }

}
