<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Issue_Model extends CI_Model {
    
    public function __construct(){
		$this->load->database();
	}

    public function get($tableName, $match)
	{
        $this->db->select('book_table.book, issue_table.id, issue_table.member, issue_table.code, issue_table.status, issue_table.issued, issue_table.return, member_table.name');
        $this->db->from('book_table');
        $this->db->join('issue_table', 'book_table.code_id = issue_table.code');
        $this->db->join('member_table', 'issue_table.member = member_table.member_id');

        if($match!=null){
            $this->db->like('issue_table.member', $match);
            $this->db->or_like('issue_table.code', $match);
        }
        
        $this->db->order_by('issue_table.id', 'DESC');

        $query = $this->db->get();

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

    public function update($tableName, $dataArray, $colname, $col){
        $this->db->where($colname, $col);
        $update = $this->db->update($tableName, $dataArray);

        if($update){
            $data = array('msg' => 'success');
        }else{
            $data = array('msg' => 'error');
        }
        
		return $data;
    }

    public function updateBatch($tableName, $data, $code)
	{
        
        $query = $this->db->update_batch($tableName, $data, $code);

        $arrayName = array('msg' => 'success');

		return $arrayName;
	}

    public function details($tableName, $id)
	{
        $this->db->select('book_table.book, book_table.author, book_table.price, book_table.rack, book_table.class, book_table.arrival, issue_table.id, issue_table.member, issue_table.code, issue_table.status, issue_table.issued, issue_table.return, member_table.name, member_table.section, member_table.contact, issue_table.issued, issue_table.return, issue_table.status');
        $this->db->from('book_table');
        $this->db->join('issue_table', 'book_table.code_id = issue_table.code');
        $this->db->join('member_table', 'issue_table.member = member_table.member_id');

        $this->db->where('issue_table.id', $id);
        
        $query = $this->db->get();

		return $query->result();
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