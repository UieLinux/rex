<?php

class Auth_model extends CI_Model {
	function __construct()
	{
		$this->load->database();
   }

   public function verify_user($email, $password)
   {

      $q = $this
            ->db
            ->where('email', $email)
            ->where('password', sha1($password))
            ->limit(1)
            ->get('utenti');

      if ( $q->num_rows > 0 ) {
         // person has account with us
         return $q->row();
      }
      return false;  // if($a === NULL)  php treats NULL, false, 0, and the empty string as equal.  (0_0)
   }
}