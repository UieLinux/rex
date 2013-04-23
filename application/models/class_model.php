<?php
class Class_model extends CI_Model {

    var $id = 0;
    var $nome = '';
    var $cognome = '';

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        
        $this->load->database();
    }

    function getClassesForTeacher($teacherId)
    {
    	$q = $this
            ->db
            ->select('*')
            ->from('classi')
            ->join('insegnamenti','insegnamenti.classi_id = classi.id')
            ->join('materie','materie.id = insegnamenti.materie_id')
            ->where('insegnamenti.docenti_id', $teacherId)
            ->get();

        if($q->num_rows > 0)
        {
        	$classes = array();

			foreach ($q->result() as $row)
			{
			   array_push($classes, $row);
			}

            return $classes;
        }

        return false;
    }
}