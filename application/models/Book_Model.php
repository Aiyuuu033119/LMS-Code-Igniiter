<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_Model extends CI_Model {
    
    public function __construct(){
		$this->load->database();
	}

    public function get($tableName, $match)
	{
        if($match!=null){
            $this->db->like('book', $match);
            $this->db->or_like('code', $match);
            $this->db->or_like('author', $match);
            $this->db->or_like('class', $match);
        }
        
        $this->db->order_by('id', 'DESC');
        $this->db->group_by('code');

        $query = $this->db->get($tableName);

		return $query->result();
	}

    public function insertbatch($tableName, $dataArray )
	{
        $insert = $this->db->insert_batch($tableName, $dataArray);

        if($insert){
            $data = array('msg' => 'success');
        }else{
            $data = array('msg' => 'error');
        }
        
		return $data;
	}

    public function bookinfo($tableName, $code, $isGroup)
	{
        if($isGroup==true){
            $this->db->group_by('code');
        }

        $query = $this->db->get_where($tableName, $code);

		return $query->result();
	}

    public function update($tableName, $data, $code)
	{
        
        $query = $this->db->update_batch($tableName, $data, $code);

        $arrayName = array('msg' => 'success');

		return $arrayName;
	}

    public function delete($tableName, $code )
	{
        if(strlen($code)==4){
            $this->db->where('code', $code);
        }
        else if(strlen($code)==5){
            $this->db->where('code_id', $code);
        }
        $this->db->delete($tableName);

        if(strlen($code)==4){
            $arrayName = array('msg' => 'success');
    		return $arrayName;

        }
        
	}

    public function count($tableName, $code, $status )
	{
        $this->db->like('code', $code);
        if($status!=''){
            $this->db->like('status', $status);
        }
        $this->db->from($tableName);
        $result = $this->db->count_all_results();

		return $result;
	}


    

}

?>