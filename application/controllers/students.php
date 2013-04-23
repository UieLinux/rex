<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Students extends MY_Base_Controller{
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
		$this->load->model('student_model');
		
		$data['test_text'] = $this->students_model->load_students();
		
		// should use some kind of templating to avoid this shit
		$this->load->view('header_bs', $data);
		$this->load->view('students/list', $data);
		$this->load->view('footer_bs');
	}
	
	public function detail($id)
	{
		$this->load->model('student_model');
		
		$data['test_text'] = $this->students_model->load_student($id);
		
		// should use some kind of templating to avoid this shit
		$this->load->view('header_bs', $data);
		$this->load->view('students/detail', $data);
		$this->load->view('footer_bs');
	}

	//POST
	public function evaluate()
	{
		if($this->input->post())
		{
			$posted_payload = $this->input->post();

			print_r($posted_payload);
		}
		else
		{
			//TODO: redirect to form view
		}
	}

	public function marks($id)
	{
		$this->load->model('marks_model');

		$data['test_text'] = $this->marks_model->load_student_marks($id);

		// TODO: show view
		print_r($data['test_text']);
	}

	/* WTF: overload not permitted in PHP ????   http://stackoverflow.com/questions/4697705/php-function-overloading
	public function marks($id, $subject_id)
	{
		$this->load->model('marks_model');

		$data['test_text'] = $this->marks_model->load_student_marks_by_subject($id, $subject_id);

		// TODO: show view
	}
	*/
}
?>