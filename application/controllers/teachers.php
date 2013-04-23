<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teachers extends CI_Controller {
	/*
		is user logged in ?
	*/
	function __construct()
	{
		session_start();
		parent::__construct();
        $this->load->helper('url');
		if (!isset($_SESSION['username'])) {
			redirect('auth');
		}
	}

	public function index()
	{
		$this->load->model('teacher_model');
		
		$data['test_text'] = $this->teacher_model->load_teacher();
		
		// should use some kind of templating to avoid this shit
		$this->load->view('header_bs', $data);
		$this->load->view('students/list', $data);
		$this->load->view('footer_bs');
	}
}
?>