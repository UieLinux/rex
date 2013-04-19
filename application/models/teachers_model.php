<?php
class Teacher_model extends CI_Model {

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

        $this->db->insert('docenti', $data); 
    }

    function load_teachers()
    {
    	return 'teachers model called: returning teachers list';
    }
    
    function load_teacher($id)
    {
    	$q = $this
            ->db
            ->where('id', $id)
            ->limit(1)
            ->get('docenti');

		if ( $q->num_rows > 0 ) {
            //return  row mapped to "domain object"
        	return $q->row();
      	}

    	return false; // return null
    }
}