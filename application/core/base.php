<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        session_start();

        
    }

	function _output($content)
    {
        // Load the base template with output content available as $content
        $data['content'] = &$content;

        $this->load->helper('url');
		if (!isset($_SESSION['username']))
		{
			$data['username'] = $_SESSION['username'];
		}
		else
		{
			$data['username'] = '?';
		}

        
        echo($this->load->view('base', $data, true));
    }
}
?>