<?php
class Marks_model extends CI_Model {

    var $id_materia = 0;
    var $id_docente = 0;
    var $id_studente = 0;
	
	var $valutazione = 0;
	var $data = '';    

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        
        $this->load->database();
    }

    function load_student_marks_by_subject($id, $subject_id)
    {
        $q = $this
            ->db
            ->where('materie_id', $subject_id)
            ->where('studenti_id', $id)
            ->get('valutazioni')

        if($q->num_rows > 0)
        {
            $results = $q->row_array();

            $marks = array();

            foreach ($results as $value) {
                array_push($marks, $value)
            }

            return $marks
        }

        return false;
    }