<?php
class Student_model extends CI_Model {

    var $id = 0;
    var $nome = '';
    var $cognome = '';

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        
        $this->load->database();
    }

    function save()
    {
        $data = array(
            'nome' => $this->nome ,
            'cognome' => $this->cognome
        );

        $this->db->insert('studenti', $data); 
    }
    
    function load_students()
    {
    	return 'student model called: returning all students';
    }
    
    function load_student($id)
    {
    	$q = $this
            ->db
            ->where('id', $id)
            ->limit(1)
            ->get('studenti');

        if ( $q->num_rows > 0 ) {
            return $q->row();  //return "domain object"
        }

        return false; //return null
    }

    function load_student_marks_by_subject($id, $subject_id)
    {
        $q = $this
            ->db
            ->where('materie_id', $subject_id)
            ->where('studenti_id', $id)
            ->get('valutazioni');

        if($q->num_rows > 0)
        {
            return $q->row_array();
        }

        return false;
    }

    public function get_students_by_class($class_id)
    {
        $q = $this
            ->db
            ->select('*')
            ->from('frequentazioni')
            ->join('classi','frequentazioni.classi_id = classi.id')
            ->join('studenti','frequentazioni.studenti_id = studenti.id')
            ->where('frequentazioni.classi_id', $class_id)
            ->get();


        if($q->num_rows > 0)
        {
            $students = array();

            foreach ($q->result() as $row)
            {
               array_push($students, $row);
            }

            return $students;
        }

        return false;
    }
}