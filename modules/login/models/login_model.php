<?php

class Login_model extends CI_Model {
	public $user;
	public $dominio;
	function __construct()
	{

	}

	public function verify_user($email, $password)
	{
		if (ENVIRONMENT=='development') {
			return true;
		}
		
		if (pam_auth($email, $password)) {
			 
			 $mail = explode("@",$email);
			 $this->user = $mail[0];
			 $this->dominio = $mail[1];
			 return true;
		}
	return false;

	}
	public function get_dominio()
	{
		$this->firephp->fb('dom '.$this->dominio);
		return $this->dominio;
	}

}

