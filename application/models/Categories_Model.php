<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_Model extends CI_Model {
    
    public function __construct(){
		$this->load->database();
	}

    public function get($tableName, $match)
	{

        if($match!=null){
            $this->db->like('class_table.categories', $match);
            $this->db->or_like('class_table.code', $match);
        }
        
        $this->db->order_by('class_table.id', 'DESC');

        $query = $this->db->get($tableName);

		return $query->result();
	}

    public function insert($tableName, $dataArray){
        $insert = $this->db->insert($tableName, $dataArray);

        if($insert){
            $data = array('msg' => 'success');
        }else{
            $data = array('msg' => 'error');
        }
        
		return $data;
    }

    public function update($tableName, $dataArray, $where){
        $this->db->where($where);
        $update = $this->db->update($tableName, $dataArray);

        if($update){
            $data = array('msg' => 'success');
        }else{
            $data = array('msg' => 'error');
        }
        
		return $data;
    }

    public function delete($tableName, $code )
	{
        $this->db->where('id', $code);
        $this->db->delete($tableName);
        
        $arrayName = array('msg' => 'success');
        return $arrayName;
        
	}
    
}


?>