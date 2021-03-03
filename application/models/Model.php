<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {
    
    public function __construct(){
		$this->load->database();
	}

	public function get($tableName, $whereArray = array(), $limit = array(), $order="")
	{
		if (!empty($limit)) {
			$this->db->limit($limit[0], $limit[1]);
		}
		if(!empty($order))
			$this->db->order_by($order, 'DESC');

		if (empty($whereArray)) {
			$query = $this->db->get($tableName);
		} else {
			$query = $this->db->get_where($tableName, $whereArray);
		}
		
		// die($this->db->last_query());

		return $query->result();
	}

	public function count_rows($tableName)
	{
        
        $this->db->from($tableName);
        $result = $this->db->count_all_results();

		return $result;
	}

	public function display($tableName, $whereArray = array(), $limit = array(), $order="", $group=array())
	{
		if (!empty($limit)) {
			$this->db->limit($limit[0]);
		}
		if(!empty($order)){
			$this->db->order_by($order, 'DESC');
		}
		if(!empty($group)){
			$this->db->group_by($group[0]);
		}
		if (empty($whereArray)) {
			$query = $this->db->get($tableName);
		} else {
			$query = $this->db->get_where($tableName, $whereArray);
		}
		
		// die($this->db->last_query());

		return $query->result();
	}
}

?>