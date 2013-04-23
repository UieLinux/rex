<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Classes extends MY_Base_Controller{
	/*
		is user logged in ?
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

		$this->load->model('class_model');

		$data['test_text'] = $this->class_model->getClassesForTeacher($_SESSION['userid']);

		print_r($data);

		// TODO: $this->load->view('classes');
	}
}
?>