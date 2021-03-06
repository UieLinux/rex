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

		$data['classes_data'] = $this->class_model->get_classes_by_teacher($_SESSION['userid']);

		$this->load->view('classes/classeslist', $data);
	}

	public function details($class_id)
	{
		$this->load->model('class_model');
		$this->load->model('student_model');
		
		$data['class_data'] = $this->class_model->get_class($class_id);
		$data['students_list'] = $this->student_model->get_students_by_class($class_id);

		//TODO: build view
		//$this->load->view('classes/classDetails', $data);
		print_r($data);
	}
}
?>