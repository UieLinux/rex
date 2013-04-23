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

    function get_classes_by_teacher($teacherId)
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

    function get_class($class_id)
    {
        $q = $this
            ->db
            ->where('id', $class_id)
            ->limit(1)
            ->get('classi');

        if ( $q->num_rows > 0 ) {
            return $q->row();
        }

        return false;
    }
}