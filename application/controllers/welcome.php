<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Base_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
    {
    	
    	if(!isset($_SESSION))
		{
			session_start();
		}
        
		parent::__construct();
        $this->load->helper('url');
		if (!isset($_SESSION['username'])) {
			redirect('auth');
		}
    }

	public function index()
	{
		if(isset($_SESSION['usertype']) && $_SESSION['usertype'] == 0)
		{
			// usertype 0 -> teacher
			redirect('teachers');
		}

		$this->load->view('home');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */