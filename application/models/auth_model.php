<?php

class Auth_model extends CI_Model {
	function __construct()
	{
		$this->load->database();
        $this->load->helper('pbkdf2');
   }

   public function verify_user($email, $password)
   {

      $q = $this
            ->db
            ->where('email', $email)
            ->limit(1)
            ->get('utenti');

       // c'è un utente con questa password nel db?
       if ($q->num_rows == 0) {
           return false;
       }

       $user = $q->row();

      /* temporary disabled for testing purposes

       // la password è corretta?
       if (validate_password($password, $user->{'password'})) {
           return $user;
       } else {
           return false;
       }
       */
   }
}