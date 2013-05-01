<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teachers extends MY_Base_Controller {
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

		$teacher = $this->teacher_model->load_teacher($_SESSION['userid']);

		print_r($teacher);

		$data['name'] = $teacher->nome;
		$data['surname'] = $teacher->cognome;

		$this->load->view('teachers/home', $data);
	}
}
?>