<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports_Model extends CI_Model {
    
    public function __construct(){
		$this->load->database();
	}

    public function get($tablename){
        $query = $this->db->get($tablename); 
        return $query->result();

    }
}


?>